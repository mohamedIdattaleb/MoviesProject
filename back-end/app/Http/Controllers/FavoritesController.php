<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all Favoritess
        $Favoritess = Favorites::all();
        return response()->json($Favoritess);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Not typically used in API-based applications
        return view('Favoritess.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id', // Ensure user exists
            'movie_id' => 'required|exists:movies,id', // Ensure movie exists
            'series_id' => 'nullable|exists:series,id', // Series is optional
        ]);

        // Create a new Favorites record
        $Favorites = Favorites::create($validated);

        return response()->json(['message' => 'Favorites added successfully!', 'Favorites' => $Favorites], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve a specific Favorites by ID
        $Favorites = Favorites::findOrFail($id);
        return response()->json($Favorites);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Not typically used in API-based applications
        $Favorites = Favorites::findOrFail($id);
        return view('Favoritess.edit', compact('Favorites'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id', // Ensure user exists
            'movie_id' => 'required|exists:movies,id', // Ensure movie exists
            'series_id' => 'nullable|exists:series,id', // Series is optional
        ]);

        // Find the Favorites
        $Favorites = Favorites::findOrFail($id);

        // Update the Favorites
        $Favorites->update($validated);

        return response()->json(['message' => 'Favorites updated successfully!', 'Favorites' => $Favorites]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the Favorites
        $Favorites = Favorites::findOrFail($id);

        // Delete the Favorites
        $Favorites->delete();

        return response()->json(['message' => 'Favorite deleted successfully!']);
    }
}
