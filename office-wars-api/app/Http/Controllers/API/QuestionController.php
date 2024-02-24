<?php


namespace App\Http\Controllers\Api;

use App\Models\Question;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Fonction qui récupère les questions en fonction du niveau actuel.
     *
     * @param int $currentLevel Niveau actuel (1, 2 ou 3)
     * @return \Illuminate\Http\JsonResponse Réponse JSON contenant les questions
     */
    public function index($currentLevel)
    {
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
            $levelsToRetrieve = ($currentLevel == 2) ? [1, 2] : [$currentLevel];

            // Récupérer les questions pour chaque niveau spécifié
            foreach ($levelsToRetrieve as $lvl) {
                $levelQuestions = Question::with(['answers'])
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
