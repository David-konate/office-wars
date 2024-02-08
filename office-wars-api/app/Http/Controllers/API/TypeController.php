<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $type = Type::all();

            return response()->json($type);
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
                'nameType' => 'required|min:1|string|unique:types',
                'slug' => 'required|min:1|string|unique:types',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Erreur de validation',
                    'errors' => $validator->errors(),
                ], 401);
            }

            // Création du type
            $type = Type::create([
                'nameType' => $request->nameType,
                'slug' => $request->slug,
            ]);

            return response()->json([
                'data' => $type,
                'status' => true,
                'message' => 'Type créé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la création du type : ' . $e->getMessage(),
            ], 403);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($type)
    {
        try {

            return  Type::findOrFail($type);

            return response()->json([
                'status' => true,
                'data' => $type
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Type non trouvée : ' . $e->getMessage()
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            // Validation des données
            $validator = Validator::make($request->all(), [
                'nameType' => 'required|min:1|string|unique:types,nameType,' . $id,
                'slug' => 'required|min:1|string|unique:types,slug,' . $id,
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 400);
            }

            // Récupération du type
            $type = Type::findOrFail($id);

            // Mise à jour des données du type
            $type->update([
                'nameType' => $request->nameType,
                'slug' => $request->slug,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Type mis à jour avec succès',
                'data' => $type
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la mise à jour du type : ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($type)
    {
        try {

            $planet_find = Type::findOrFail($type);

            $planet_find->delete();

            return response()->json([
                'status' => true,
                'message' => 'Type supprimé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la suppression du type : ' . $e->getMessage(),
            ], 403);
        }
    }
}
