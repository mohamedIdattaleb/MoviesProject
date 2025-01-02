<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all Moviess with pagination
        $Moviess = Movies::paginate(10);
        return response()->json($Moviess);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Not typically used in API-based applications
        return view('Moviess.create');
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
            'duration' => 'nullable|integer|min:1',
            'rating' => 'nullable|numeric|between:0,10',
            'genre_id' => 'nullable|exists:genres,id',
            'image_path' => 'nullable|image|max:2048', // Ensure image file is valid
        ]);

        // Handle file upload if image is provided
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('Moviess', 'public');
        }

        // Create a new Movies record
        $Movies = Movies::create($validated);

        return response()->json(['message' => 'Movies created successfully!', 'Moviess' => $Movies], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve a specific Movies by ID
        $Movies = Movies::findOrFail($id);
        return response()->json($Movies);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Not typically used in API-based applications
        $Movies = Movies::findOrFail($id);
        return view('Moviess.edit', compact('Movies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'release_date' => 'nullable|date',
            'duration' => 'nullable|integer|min:1',
            'rating' => 'nullable|numeric|between:0,10',
            'genre_id' => 'nullable|exists:genres,id',
            'image_path' => 'nullable|image|max:2048', // Ensure image file is valid
        ]);

        // Find the Movies
        $Movies = Movies::findOrFail($id);

        // Handle file upload if image is provided
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('Moviess', 'public');
        }

        // Update the Movies record
        $Movies->update($validated);

        return response()->json(['message' => 'Movies updated successfully!', 'Movies' => $Movies]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the Movies
        $Movies = Movies::findOrFail($id);

        // Delete the Movies
        $Movies->delete();

        return response()->json(['message' => 'Movies deleted successfully!']);
    }
}
