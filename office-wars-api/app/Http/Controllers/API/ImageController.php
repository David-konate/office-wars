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
    public function eventsList()
    {
        try {
            $uniqueImages = Image::whereNotNull('event_id')
                ->groupBy('event_id')
                ->select('event_id', DB::raw('MIN(id) as min_id'))
                ->get();

            $result = [];
            foreach ($uniqueImages as $uniqueImage) {
                $image = Image::find($uniqueImage->min_id);
                if ($image) {
                    $result[] = $image;
                }
            }

            return response()->json([
                'status' => true,
                'data' => $result,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 403);
        }
    }
    public function sitesList()
    {
        try {
            $uniqueImages = Image::whereNotNull('site_id')
                ->groupBy('site_id')
                ->select('site_id', DB::raw('MIN(id) as min_id'))
                ->get();

            $result = [];
            foreach ($uniqueImages as $uniqueImage) {
                $image = Image::find($uniqueImage->min_id);
                if ($image) {
                    $result[] = $image;
                }
            }

            return response()->json([
                'status' => true,
                'data' => $result,
            ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
