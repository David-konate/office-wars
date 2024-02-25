<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Level;

class LevelController extends Controller
{
    // Afficher tous les niveaux
    public function index()
    {
        $levels = Level::all();
        return response()->json($levels);
    }

    // Afficher un niveau spécifique
    public function show($id)
    {
        $level = Level::findOrFail($id);
        return response()->json($level);
    }

    // Créer un nouveau niveau
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $level = Level::create([
            'name' => $request->name,
        ]);

        return response()->json($level, 201);
    }

    // Mettre à jour un niveau existant
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $level = Level::findOrFail($id);
        $level->update([
            'name' => $request->name,
        ]);

        return response()->json($level, 200);
    }

    // Supprimer un niveau
    public function destroy($id)
    {
        $level = Level::findOrFail($id);
        $level->delete();

        return response()->json(null, 204);
    }
}
