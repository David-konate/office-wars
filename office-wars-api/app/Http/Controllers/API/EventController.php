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
            $event = Event::all();

            return response()->json($event);
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
                'eventName' => 'required|min:1|string',
                'eventDescription' => 'nullable|string',
                'dateTime' => 'required|date',
                'slug' => 'required|min:1|string|unique:events',
                'site_id' => 'required|exists:sites,id',
                'photoEvent.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajout de règles pour les images
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
                'eventName' => request('eventName'),
                'eventDescription' => request('eventDescription'),
                'dateTime' => request('dateTime'),
                'slug' => request('slug'),
                'site_id' => request('site_id'),
            ]);

            // Logique de chargement des images
            if ($request->hasFile('photoEvent')) {
                foreach ($request->file('photoEvent') as $file) {
                    $filenameWithExt = $file->getClientOriginalName();
                    $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                    $file->storeAs('public/uploads', $filename);

                    // Création de l'image liée à l'événement
                    Image::create([
                        'imageName' => $filename,
                        'event_id' => $event->id,
                    ]);
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

            return  Event::findOrFail($event);

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
                'site_id' => 'required|exists:sites,id',
                'photoEvent' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajout de règles pour l'image
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 400);
            }

            // Récupération de l'événement
            $event_single = Event::findOrFail($event);

            // Logique de chargement d'image
            if ($request->hasFile('photoEvent')) {
                $filenameWithExt = $request->file('photoEvent')->getClientOriginalName();
                $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('photoEvent')->getClientOriginalExtension();
                $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                $request->file('photoEvent')->storeAs('public/uploads', $filename);

                // Création de l'image liée à l'événement
                $image = Image::create([
                    'filename' => $filename,
                    'event_id' => $event_single->id,
                ]);

                // Attribuez l'ID de l'image à l'événement
                $event_single->image_id = $image->id;
            }

            // Mise à jour des données
            $event_single->update([
                'eventName' => $request->eventName,
                'eventDescription' => $request->eventDescription,
                'dateTime' => $request->dateTime,
                'slug' => $request->slug,
                'site_id' => $request->site_id,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Événement mis à jour avec succès',
                'data' => $event_single
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