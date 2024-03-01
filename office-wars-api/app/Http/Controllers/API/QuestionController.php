<?php


namespace App\Http\Controllers\Api;

use App\Models\Answer;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class QuestionController extends Controller
{
    /**
     * Fonction qui récupère les questions en fonction du niveau actuel.
     *
     * @param int $currentLevel Niveau actuel (1, 2 ou 3)
     * @return \Illuminate\Http\JsonResponse Réponse JSON contenant les questions
     */
    public function newGame($currentLevel, Request $request)
    {
        $currentUniver = $request->query('currentUniver');
        try {
            // Initialiser une collection vide pour stocker les questions
            $questions = collect();

            // Nombre de questions à récupérer par défaut
            $count = 20;

            // Ajuster le nombre de questions en fonction du niveau actuel
            switch ($currentLevel) {
                case 1:
                    break; // Pas de changement, le nombre de questions reste à 20
                case 2:
                    $count = 10; // 10 questions de niveau 1 et 10 questions de niveau 2
                    break;
                case 3:
                    $count = 7; // 7 questions de niveau 1, 7 questions de niveau 2 et 6 questions de niveau 3
                    break;
                default:
                    break; // Pas de changement, le nombre de questions reste à 20
            }

            // Niveaux à récupérer
            $levelsToRetrieve = ($currentLevel == 2) ? [1, 3] : [$currentLevel];



            if ($currentUniver) {
                // Récupérer les questions pour chaque niveau spécifié
                foreach ($levelsToRetrieve as $lvl) {
                    $levelQuestions = Question::with(['answers', 'univer'])
                        ->select('questions.*', 'categories.categoryName', 'levels.level', 'answers.answerText')
                        ->join('categories', 'questions.category_id', '=', 'categories.id')
                        ->join('levels', 'questions.level_id', '=', 'levels.id')
                        ->join('univers', 'questions.univer_id', '=', 'univers.id')
                        ->leftJoin('answers', 'questions.id', '=', 'answers.question_id')
                        ->where('questions.level_id', $lvl)
                        ->where('univerTitle', '=', $currentUniver)
                        ->inRandomOrder()
                        ->limit($count)
                        ->get();

                    $questions = $questions->merge($levelQuestions);
                }
            } else {
                // Récupérer les questions pour chaque niveau spécifié
                foreach ($levelsToRetrieve as $lvl) {
                    $levelQuestions = Question::with(['answers', 'univer'])
                        ->select('questions.*', 'categories.categoryName', 'levels.level', 'answers.answerText')
                        ->join('categories', 'questions.category_id', '=', 'categories.id')
                        ->join('levels', 'questions.level_id', '=', 'levels.id')

                        ->leftJoin('answers', 'questions.id', '=', 'answers.question_id')

                        ->where('questions.level_id', $lvl)

                        ->inRandomOrder()
                        ->limit($count)
                        ->get();

                    $questions = $questions->merge($levelQuestions);
                }
            }




            // Mélanger aléatoirement les réponses de chaque question
            $questions->each(function ($question) {
                $question->answers = $question->answers->shuffle();
            });

            // Mélanger aléatoirement le contenu du jeu
            $questions = $questions->shuffle();

            // Retourner les questions sous forme de réponse JSON
            return response()->json($questions);
        } catch (\Throwable $e) {
            // En cas d'erreur, retourner une réponse JSON d'erreur
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 500); // Utiliser le code 500 pour les erreurs internes du serveur
        }
    }




    public function index()
    {
        try {
            $questions = Question::with('category', 'answers')->get();

            return response()->json($questions);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' =>  $e->getMessage(),
            ], 403);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validation des données
            $validator = Validator::make($request->all(), [
                'questionTitle' => 'required',
                'level_id' => 'required',
                'category_id' => 'required',
                'imageQuestion' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'answers' => 'required|array|min:1', // Assurez-vous qu'il y a au moins une réponse
                // 'answers.*.answerText' => 'required|string',
                // 'answers.*.isCorrect' => 'required|boolean',
            ]);


            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Erreur de validation',
                    'errors' => $validator->errors(),
                ], 401);
            }

            // Logique de chargement de l'image de la question
            $filename = null;
            if ($request->hasFile('imageQuestion')) {
                $filenameWithExt = $request->file('imageQuestion')->getClientOriginalName();
                $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('imageQuestion')->getClientOriginalExtension();
                $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                $request->file('imageQuestion')->storeAs('public/uploads', $filename);
            }

            // Création de la question
            $question = Question::create([
                'questionTitle' => request('questionTitle'),
                'level_id' => request('level_id'),
                'category_id' => request('category_id'),
                'imageQuestion' => $filename,
            ]);

            // Ajout des réponses à la question nouvellement créée
            $answers = [];
            foreach (request('answers') as $answerData) {
                $answers[] = new Answer([
                    'answerText' => $answerData['answerText'],
                    'isCorrect' => $answerData['isCorrect'] ? 1 : 0, // Convertir en entier
                ]);
            }
            $question->answers()->saveMany($answers);


            return response()->json([
                'data' => $question,
                'status' => true,
                'message' => 'Question créée avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la création de la question : ' . $e->getMessage(),
            ], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $question = Question::with('category', 'answers')->findOrFail($id);

            return response()->json($question);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' =>  $e->getMessage(),
            ], 403);
        }
    }
    public function random()
    {
        try {
            // Obtenir une question aléatoire avec les réponses et la catégorie
            $randomQuestion = Question::with(['category', 'answers'])
                ->inRandomOrder()
                ->first();

            if (!$randomQuestion) {
                return response()->json([
                    'status' => false,
                    'message' => 'Aucune question disponible.',
                ], 404);
            }

            // Mélanger aléatoirement les réponses de la question
            $randomQuestion->answers = $randomQuestion->answers->shuffle();

            // Retourner la question aléatoire avec les réponses et la catégorie en tant que réponse JSON
            return response()->json($randomQuestion);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $questionId)
    {
        try {
            // Validation des données
            $validator = Validator::make($request->all(), [
                'questionTitle' => 'required|min:1|string',
                'level_id' => 'required|integer',
                'category_id' => 'required|integer',
                // 'imageQuestion' => 'nullable|image|mimes:jpeg,png,jpg,gif,wep|max:2048', // Image de la question
                'answers' => 'required|array|min:1', // Assurez-vous qu'il y a au moins une réponse

            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 400);
            }

            // Récupération de la question
            $question = Question::findOrFail($questionId);

            // Logique de chargement d'image
            if ($request->hasFile('imageQuestion')) {
                $filenameWithExt = $request->file('imageQuestion')->getClientOriginalName();
                $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('imageQuestion')->getClientOriginalExtension();
                $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                $request->file('imageQuestion')->storeAs('public/uploads', $filename);

                // Mise à jour de l'image liée à la question
                $question->imageQuestion = $filename;
            }

            // Mise à jour des données de la question
            $question->update([
                'questionTitle' => $request->questionTitle,
                'level_id' => $request->level_id,
                'category_id' => $request->category_id,
            ]);

            // Mise à jour des réponses de la question
            $answers = [];
            foreach ($request->answers as $answerData) {
                $answers[] = [
                    'answerText' => $answerData['answerText'],
                    'isCorrect' => $answerData['isCorrect'] ? 1 : 0, // Convertir en entier
                ];
            }
            $question->answers()->delete(); // Supprimer les réponses existantes
            $question->answers()->createMany($answers);

            return response()->json([
                'status' => true,
                'message' => 'Question et réponses mises à jour avec succès',
                'data' => $question
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la mise à jour de la question et des réponses : ' . $e->getMessage(),
            ], 500);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
