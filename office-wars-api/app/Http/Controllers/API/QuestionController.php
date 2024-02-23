<?php


namespace App\Http\Controllers\Api;

use App\Models\Question;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            // Récupérer 7 questions pour le niveau 1 avec les informations de la catégorie, du niveau et les réponses
            $questions1 = Question::with(['answers'])
                ->select('questions.*', 'categories.categoryName', 'levels.level', 'answers.answerText')
                ->join('categories', 'questions.category_id', '=', 'categories.id')
                ->join('levels', 'questions.level_id', '=', 'levels.id')
                ->leftJoin('answers', 'questions.id', '=', 'answers.question_id')
                ->where('questions.level_id', 1)
                ->inRandomOrder()
                ->limit(1)
                ->get();

            // Récupérer 7 questions pour le niveau 2 avec les informations de la catégorie, du niveau et les réponses
            $questions2 = Question::with(['answers'])
                ->select('questions.*', 'categories.categoryName', 'levels.level', 'answers.answerText')
                ->join('categories', 'questions.category_id', '=', 'categories.id')
                ->join('levels', 'questions.level_id', '=', 'levels.id')
                ->leftJoin('answers', 'questions.id', '=', 'answers.question_id')
                ->where('questions.level_id', 2)
                ->inRandomOrder()
                ->limit(1)
                ->get();

            // Récupérer 6 questions pour le niveau 3 avec les informations de la catégorie, du niveau et les réponses
            $questions3 = Question::with(['answers'])
                ->select('questions.*', 'categories.categoryName', 'levels.level', 'answers.answerText')
                ->join('categories', 'questions.category_id', '=', 'categories.id')
                ->join('levels', 'questions.level_id', '=', 'levels.id')
                ->leftJoin('answers', 'questions.id', '=', 'answers.question_id')
                ->where('questions.level_id', 3)
                ->inRandomOrder()
                ->limit(1)
                ->get();

            // Fusionner les résultats dans un seul tableau
            $questions = $questions1->merge($questions2)->merge($questions3);

            // Mélanger aléatoirement le contenu du jeu
            $questions = $questions->shuffle();

            return response()->json(
                $questions,
            );
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
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
