<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $review = Review::all();

            return response()->json($review);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' =>  $e->getMessage(),
            ], 403);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        try {
            // Validation des données
            $validator = Validator::make(request()->all(), [
                'title' => 'required|min:1|string',
                'rating' => 'required|integer|min:1|max:5',
                'visitorComment' => 'nullable|string',
                'slug' => 'required|min:1|string|unique:reviews',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Erreur de validation',
                    'errors' => $validator->errors(),
                ], 401);
            }

            // Création de la revue
            $review = Review::create([
                'title' => request('title'),
                'rating' => request('rating'),
                'visitorComment' => request('visitorComment'),
                'slug' => request('slug'),
            ]);

            return response()->json([
                'data' => $review,
                'status' => true,
                'message' => 'Commentaire créée avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la création du commentaire : ' . $e->getMessage(),
            ], 403);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($review)
    {
        try {

            return  Review::findOrFail($review);

            return response()->json([
                'status' => true,
                'data' => $review
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Commentaire non trouvée : ' . $e->getMessage()
            ], 404);
        }
    }


    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $review)
    {
        try {
            // Validation des données
            $validator = Validator::make($request->all(), [
                'title' => 'required|min:1|string',
                'rating' => 'required|integer|min:1|max:5',
                'visitorComment' => 'nullable|string',
                'slug' => 'required|min:1|string|unique:reviews,slug,' . $review,
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 400);
            }

            // Récupération de la revue
            $review = Review::findOrFail($review);

            // Mise à jour des données
            $review->update([
                'title' => $request->title,
                'rating' => $request->rating,
                'visitorComment' => $request->visitorComment,
                'slug' => $request->slug,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Commentaire mise à jour avec succès',
                'data' => $review
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la mise à jour du commentaire : ' . $e->getMessage(),
            ], 500);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($review)
    {
        try {

            $review_find = Review::findOrFail($review);

            $review_find->delete();

            return response()->json([
                'status' => true,
                'message' => 'Commentaire supprimé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la suppression du commentaire : ' . $e->getMessage(),
            ], 403);
        }
    }
}
