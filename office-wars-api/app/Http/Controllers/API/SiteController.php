<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Site;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $site = Site::all();

            return response()->json($site);
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
                'siteName' => 'required|min:1|string',
                'siteDescription' => 'nullable|string',
                'touristActivities' => 'nullable|string',
                'attractionType' => 'nullable|string',
                'shops' => 'nullable|string',
                'slug' => 'required|min:1|string|unique:sites',
                'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajout de règles pour les images
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Erreur de validation',
                    'errors' => $validator->errors(),
                ], 401);
            }

            // Création du site
            $site = Site::create([
                'siteName' => request('siteName'),
                'siteDescription' => request('siteDescription'),
                'touristActivities' => request('touristActivities'),
                'attractionType' => request('attractionType'),
                'shops' => request('shops'),
                'slug' => request('slug'),
            ]);

            // Logique de chargement des images
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $file) {
                    $filenameWithExt = $file->getClientOriginalName();
                    $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                    $file->storeAs('public/uploads', $filename);

                    // Création de l'image liée au site
                    Image::create([
                        'imageName' => $filename,
                        'site_id' => $site->id,
                    ]);
                }
            }

            return response()->json([
                'data' => $site,
                'status' => true,
                'message' => 'Site créé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la création du site : ' . $e->getMessage(),
            ], 403);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($site)
    {
        try {

            return  Site::findOrFail($site);

            return response()->json([
                'status' => true,
                'data' => $site
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Site non trouvée : ' . $e->getMessage()
            ], 404);
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
    public function update(Request $request, $site)
    {
        try {
            // Validation des données
            $validator = Validator::make($request->all(), [
                'siteName' => 'required|min:1|string',
                'siteDescription' => 'nullable|string',
                'touristActivities' => 'nullable|string',
                'attractionType' => 'nullable|string',
                'shops' => 'nullable|string',
                'slug' => 'required|min:1|string|unique:sites,slug,' . $site,
                'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajout de règles pour les images
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 400);
            }

            // Récupération du site
            $site_single = Site::findOrFail($site);

            // Logique de chargement d'image
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $file) {
                    $filenameWithExt = $file->getClientOriginalName();
                    $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                    $file->storeAs('public/uploads', $filename);

                    // Création de l'image liée au site
                    Image::create([
                        'imageName' => $filename,
                        'site_id' => $site_single->id,
                    ]);
                }
            }

            // Mise à jour des données du site
            $site_single->update([
                'siteName' => $request->siteName,
                'siteDescription' => $request->siteDescription,
                'touristActivities' => $request->touristActivities,
                'attractionType' => $request->attractionType,
                'shops' => $request->shops,
                'slug' => $request->slug,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Site mis à jour avec succès',
                'data' => $site_single
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la mise à jour du site : ' . $e->getMessage(),
            ], 500);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($site)
    {
        try {

            $planet_find = Site::findOrFail($site);

            $planet_find->delete();

            return response()->json([
                'status' => true,
                'message' => 'Site supprimé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la suppression de la site : ' . $e->getMessage(),
            ], 403);
        }
    }
}
