<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all series
        $series = Series::all();
        return response()->json($series);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Not typically used in API-based applications
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'release_date' => 'nullable|date',
            'episodes' => 'nullable|integer|min:1',
            'rating' => 'nullable|numeric|between:0,10',
            'genre_id' => 'nullable|exists:genres,id',
            'image_path' => 'nullable|image|max:2048', // Ensure image file is valid
        ]);

        // Handle file upload if image is provided
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('series', 'public');
        }

        // Create a new series record
        $series = Series::create($validated);

        return response()->json(['message' => 'Series created successfully!', 'series' => $series], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve a specific series by ID
        $series = Series::findOrFail($id);
        return response()->json($series);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Not typically used in API-based applications
        $series = Series::findOrFail($id);
        return view('series.edit', compact('series'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'release_date' => 'nullable|date',
            'episodes' => 'nullable|integer|min:1',
            'rating' => 'nullable|numeric|between:0,10',
            'genre_id' => 'nullable|exists:genres,id',
            'image_path' => 'nullable|image|max:2048', // Ensure image file is valid
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the series
        $series = Series::findOrFail($id);

        // Delete the series
        $series->delete();

        return response()->json(['message' => 'Series deleted successfully!']);
    }
}
