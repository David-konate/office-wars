<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Univer;
use Illuminate\Support\Facades\Validator;

class UniverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $univers = Univer::with('theme')->get();

            return response()->json($univers);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
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
