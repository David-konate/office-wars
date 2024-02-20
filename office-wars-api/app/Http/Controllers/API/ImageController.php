<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{

    /**
     * Show images for handle
     */
    public function headband()
    {
        try {
            $images = Image::all();

            // Sélectionner 4 images au hasard
            $imagesHandle = $images->random(4);

            return response()->json($imagesHandle);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' =>  $e->getMessage(),
            ], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Recherchez l'enregistrement d'image par ID
            $image = Image::findOrFail($id);

            // Supprimez le fichier associé à l'image s'il existe
            if ($image->imagePath) {
                $imagePath = public_path("storage/uploads/{$image->imagePath}");
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Supprimez l'enregistrement de la base de données
            $image->delete();

            return response()->json(['message' => 'Image supprimée avec succès']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression de l\'image'], 500);
        }
    }
}
