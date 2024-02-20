<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Event;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $events = Event::with(['planet', 'images'])->get();

            // Sélectionner aléatoirement la première image associée à chaque événement
            $events->transform(function ($event) {
                $shuffledImages = $event->images->shuffle();
                $event->image = $shuffledImages->first();
                unset($event->images); // Supprimer la liste complète des images si nécessaire
                return $event;
            });

            return response()->json($events);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
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
            $validator = Validator::make($request->all(), [
                'eventName' => 'required|min:1|string',
                'eventDescription' => 'nullable|string',
                'dateTime' => 'required|date',
                'planet_id' => 'required|exists:planets,id',
                'photoEvent.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|', // Ajout de règles pour les images
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Erreur de validation',
                    'errors' => $validator->errors(),
                ], 401);
            }

            // Création de l'événement
            $event = Event::create([
                'eventName' => $request->input('eventName'),
                'eventDescription' => $request->input('eventDescription'),
                'dateTime' => $request->input('dateTime'),
                'planet_id' => $request->input('planet_id'),
            ]);

            // Logique de chargement des images
            if ($request->hasFile('photoEvent')) {
                $images = $request->file('photoEvent');
                foreach ($images as $file) {
                    $filenameWithExt = $file->getClientOriginalName();
                    $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;

                    $file->storeAs('public/uploads', $filename);

                    // Création de l'image liée à l'événement
                    $eventImage = new Image();
                    $eventImage->imageName = $event->eventName;
                    $eventImage->imagePath = $filename;
                    $event->images()->save($eventImage);
                }
            }

            return response()->json([
                'data' => $event,
                'status' => true,
                'message' => 'Événement créé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la création de l\'événement : ' . $e->getMessage(),
            ], 403);
        }
    }





    /**
     * Display the specified resource.
     */
    public function show($event)
    {
        try {

            return  Event::with(['planet', 'images'])->findOrFail($event);

            return response()->json([
                'status' => true,
                'data' => $event
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Event non trouvée : ' . $e->getMessage()
            ], 404);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $event)
    {
        try {
            // Validation des données
            $validator = Validator::make($request->all(), [
                'eventName' => 'required|min:1|string',
                'eventDescription' => 'nullable|string',
                'dateTime' => 'required|date',
                'slug' => 'required|min:1|string|unique:events,slug,' . $event,
                'planet_id' => 'required|exists:planets,id',
                'photoEvent.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp', // Ajout de règles pour les nouvelles images
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 400);
            }

            // Récupération de l'événement
            $event = Event::findOrFail($event);

            // // Logique de chargement des nouvelles images uniquement si de nouvelles images sont fournies
            if ($request->hasFile('photoEvent')) {
                $images = $request->file('photoEvent');
                foreach ($images as $file) {
                    // Logique de création des nouvelles images
                    $filenameWithExt = $file->getClientOriginalName();
                    $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;

                    $file->storeAs('public/uploads', $filename);

                    // Création de l'image liée à l'événement
                    $eventImage = new Image();
                    $eventImage->imageName = $event->eventName;
                    $eventImage->imagePath = $filename;
                    $event->images()->save($eventImage);
                }
            }

            // Mise à jour des données de l'événement
            $event->update([
                'eventName' => $request->eventName,
                'eventDescription' => $request->eventDescription,
                'dateTime' => $request->dateTime,
                'slug' => $request->slug,
                'site_id' => $request->site_id,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Événement mis à jour avec succès',
                'data' => $event
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la mise à jour de l\'événement : ' . $e->getMessage(),
            ], 500);
        }
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($event)
    {

        try {

            $event_find = Event::findOrFail($event);

            $event_find->delete();

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
