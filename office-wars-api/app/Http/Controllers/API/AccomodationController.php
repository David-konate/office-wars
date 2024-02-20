<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Accomodation;
use App\Models\Image;
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
            $accomodations = Accomodation::with(['planet', 'images'])->get();

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
    public function store(Request $request)
    {
        try {
            $validationAccomodation = Validator::make($request->all(), [
                'accomodationName' => 'required|min:1|string',
                'accomodationType' => 'required|min:1|string',
                'numberOfRoom' => 'required|integer',
                'rates' => 'required|numeric',
                'planet_id' => 'required|exists:planets,id',
            ]);

            if ($validationAccomodation->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Erreur de validation',
                    'errors' => $validationAccomodation->errors(),
                ], 401);
            }

            $accomodation = Accomodation::create([
                'accomodationName' => request('accomodationName'),
                'accomodationType' => request('accomodationType'),
                'numberOfRoom' => request('numberOfRoom'),
                'rates' => request('rates'),
                'planet_id' => request('planet_id'),
            ]);

            // Logique de chargement des images
            if ($request->hasFile('photoAccomodation')) {
                $images = $request->file('photoAccomodation');
                foreach ($images as $file) {
                    $filenameWithExt = $file->getClientOriginalName();
                    $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;

                    $file->storeAs('public/uploads', $filename);

                    // Création de l'image liée à l'événement
                    $accomodationtImage = new Image();
                    $accomodationtImage->imageName = $accomodation->accomodationName;
                    $accomodationtImage->imagePath = $filename;
                    $accomodation->images()->save($accomodationtImage);
                }
            }


            return response()->json([
                'data' => $accomodation,
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
    public function show($accomodation)
    {
        try {

            return  Accomodation::findOrFail($accomodation);

            return response()->json([
                'status' => true,
                'data' => $accomodation
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

    public function update(Request $request, $accomodation)
    {
        try {
            // Validation des données
            $validator = Validator::make($request->all(), [
                'accomodationName' => 'required|min:1|string',
                'accomodationType' => 'required|min:1|string',
                'numberOfRoom' => 'required|integer',
                'rates' => 'required|numeric',
                'slug' => 'required|min:1|string|unique:accomodations,slug,' . $accomodation,
                'planet_id' => 'required|exists:planets,id',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 400);
            }

            // Récupération de l'hébergement
            $accomodation_single = Accomodation::findOrFail($accomodation);

            // Mise à jour des données
            $accomodation_single->update([
                'accomodationName' => request('accomodationName'),
                'accomodationType' => request('accomodationType'),
                'numberOfRoom' => request('numberOfRoom'),
                'rates' => request('rates'),
                'slug' => request('slug'),
                'planet-id' => request('planet_id'),
            ]);


            // Logique de chargement des images
            if ($request->hasFile('photoAccomodation')) {
                $images = $request->file('photoAccomodation');
                foreach ($images as $file) {
                    $filenameWithExt = $file->getClientOriginalName();
                    $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;

                    $file->storeAs('public/uploads', $filename);

                    // Création de l'image liée à l'événement
                    $accomodationtImage = new Image();
                    $accomodationtImage->imageName = $accomodation->accomodationName;
                    $accomodationtImage->imagePath = $filename;
                    $accomodation->images()->save($accomodationtImage);
                }
            }



            return response()->json([
                'status' => true,
                'message' => 'Hébergement mis à jour avec succès',
                'data' => $accomodation_single
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
    public function destroy($accomodation)
    {

        try {

            $accomodation_find = Accomodation::findOrFail($accomodation);

            $accomodation_find->delete();

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
