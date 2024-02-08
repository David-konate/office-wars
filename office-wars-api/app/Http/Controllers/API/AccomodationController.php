<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Accomodation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccomodationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $accomodations = Accomodation::all();

            return response()->json($accomodations);
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
            $validationAccomodation = Validator::make(request()->all(), [
                'accommodationName' => 'required|min:1|string',
                'accommodationType' => 'required|min:1|string',
                'numberOfRoom' => 'required|integer',
                'rates' => 'required|numeric',
                'slug' => 'required|min:1|string|unique:accomodations',
                'site_id' => 'required|exists:sites,id',
            ]);

            if ($validationAccomodation->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Erreur de validation',
                    'errors' => $validationAccomodation->errors(),
                ], 401);
            }

            $accommodation = Accomodation::create([
                'accommodationName' => request('accommodationName'),
                'accommodationType' => request('accommodationType'),
                'numberOfRoom' => request('numberOfRoom'),
                'rates' => request('rates'),
                'slug' => request('slug'),
                'site_id' => request('site_id'),
            ]);

            return response()->json([
                'data' => $accommodation,
                'status' => true,
                'message' => 'Hébergement créé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la création de l\'hébergement : ' . $e->getMessage(),
            ], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($accommodation)
    {
        try {

            return  Accomodation::findOrFail($accommodation);

            return response()->json([
                'status' => true,
                'data' => $accommodation
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Hébergement non trouvée : ' . $e->getMessage()
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $accommodation)
    {
        try {
            // Validation des données
            $validator = Validator::make($request->all(), [
                'accommodationName' => 'required|min:1|string',
                'accommodationType' => 'required|min:1|string',
                'numberOfRoom' => 'required|integer',
                'rates' => 'required|numeric',
                'slug' => 'required|min:1|string|unique:accomodations,slug,' . $accommodation,
                'site_id' => 'required|exists:sites,id',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 400);
            }

            // Récupération de l'hébergement
            $accommodation_single = Accomodation::findOrFail($accommodation);

            // Mise à jour des données
            $accommodation_single->update([
                'accommodationName' => request('accommodationName'),
                'accommodationType' => request('accommodationType'),
                'numberOfRoom' => request('numberOfRoom'),
                'rates' => request('rates'),
                'slug' => request('slug'),
                'site_id' => request('site_id'),
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Hébergement mis à jour avec succès',
                'data' => $accommodation_single
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la mise à jour de l\'hébergement : ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($accommodation)
    {

        try {

            $accommodation_find = Accomodation::findOrFail($accommodation);

            $accommodation_find->delete();

            return response()->json([
                'status' => true,
                'message' => 'Hébergement supprimé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la suppression de l\'hébergement : ' . $e->getMessage(),
            ], 403);
        }
    }
}
