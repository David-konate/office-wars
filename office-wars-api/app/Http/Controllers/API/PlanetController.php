<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $planet = Planet::all();

            return response()->json($planet);
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
            // Validation des données
            $validator = Validator::make(request()->all(), [
                'planetName' => 'required|min:1|string',
                'planetDescription' => 'nullable|string',
                'galacticCoordinates' => 'nullable|string',
                'population' => 'nullable|integer',
                'slug' => 'required|min:1|string|unique:planets',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajout de règles pour l'image de la planète
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Erreur de validation',
                    'errors' => $validator->errors(),
                ], 401);
            }

            // Logique de chargement de l'image de la planète
            $filename = null;
            if ($request->hasFile('image')) {
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                $request->file('image')->storeAs('public/uploads', $filename);
            }

            // Création de la planète
            $planet = Planet::create([
                'planetName' => request('planetName'),
                'planetDescription' => request('planetDescription'),
                'galacticCoordinates' => request('galacticCoordinates'),
                'population' => request('population'),
                'slug' => request('slug'),
                'image' => $filename, // Ajout du champ de l'image de la planète
            ]);

            return response()->json([
                'data' => $planet,
                'status' => true,
                'message' => 'Planète créée avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la création de la planète : ' . $e->getMessage(),
            ], 403);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($planet)
    {
        try {

            return  Planet::findOrFail($planet);

            return response()->json([
                'status' => true,
                'data' => $planet
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Planet non trouvée : ' . $e->getMessage()
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $planet)
    {
        try {
            // Validation des données
            $validator = Validator::make($request->all(), [
                'planetName' => 'required|min:1|string',
                'planetDescription' => 'nullable|string',
                'galacticCoordinates' => 'nullable|string',
                'population' => 'nullable|integer',
                'slug' => 'required|min:1|string|unique:planets,slug,' . $planet,
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajout de règles pour l'image de la planète
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 400);
            }

            // Récupération de la planète
            $planet_single = Planet::findOrFail($planet);

            // Logique de chargement d'image
            if ($request->hasFile('image')) {
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                $request->file('image')->storeAs('public/uploads', $filename);

                // Mise à jour de l'image liée à la planète
                $planet_single->image = $filename;
            }

            // Mise à jour des données
            $planet_single->update([
                'planetName' => $request->planetName,
                'planetDescription' => $request->planetDescription,
                'galacticCoordinates' => $request->galacticCoordinates,
                'population' => $request->population,
                'slug' => $request->slug,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Planète mise à jour avec succès',
                'data' => $planet_single
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la mise à jour de la planète : ' . $e->getMessage(),
            ], 500);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($planet)
    {
        try {

            $planet_find = Planet::findOrFail($planet);

            $planet_find->delete();

            return response()->json([
                'status' => true,
                'message' => 'Planete supprimé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la suppression de la planète : ' . $e->getMessage(),
            ], 403);
        }
    }
}
