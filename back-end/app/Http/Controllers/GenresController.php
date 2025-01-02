<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all genres
        $genres = Genres::all();
        return response()->json($genres);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Not typically used in API-based applications
        return view('genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:genres,name', // Genre name should be unique
            'description' => 'nullable|string',
        ]);

        // Create a new genre
        $genre = Genres::create($validated);

        return response()->json(['message' => 'Genre created successfully!', 'genre' => $genre], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve a specific genre by ID
        $genre = Genres::findOrFail($id);
        return response()->json($genre);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Not typically used in API-based applications
        $genre = Genres::findOrFail($id);
        return view('genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:genres,name,' . $id, // Ensure unique, except for the current genre
            'description' => 'nullable|string',
        ]);

        // Find the genre
        $genre = Genres::findOrFail($id);

        // Update the genre
        $genre->update($validated);

        return response()->json(['message' => 'Genre updated successfully!', 'genre' => $genre]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the genre
        $genre = Genres::findOrFail($id);

        // Delete the genre
        $genre->delete();

        return response()->json(['message' => 'Genre deleted successfully!']);
    }
}
