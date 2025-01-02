<?php

namespace App\Http\Controllers;

use App\Models\WatchHistory;
use Illuminate\Http\Request;

class WatchHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all watch history records
        $watchHistories = WatchHistory::all();
        return response()->json($watchHistories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Typically for web apps, not needed in APIs
        return view('watch_history.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'movie_id' => 'nullable|exists:movies,id',
            'series_id' => 'nullable|exists:series,id',
            'watched_at' => 'required|date',
        ]);

        // Create a new watch history record
        $watchHistory = WatchHistory::create($validated);

        return response()->json(['message' => 'Watch history added successfully!', 'data' => $watchHistory], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve a specific watch history record
        $watchHistory = WatchHistory::findOrFail($id);
        return response()->json($watchHistory);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Typically for web apps, not needed in APIs
        $watchHistory = WatchHistory::findOrFail($id);
        return view('watch_history.edit', compact('watchHistory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request
        $validated = $request->validate([
            'user_id' => 'sometimes|required|exists:users,id',
            'movie_id' => 'sometimes|nullable|exists:movies,id',
            'series_id' => 'sometimes|nullable|exists:series,id',
            'watched_at' => 'sometimes|required|date',
        ]);

        // Find the watch history record
        $watchHistory = WatchHistory::findOrFail($id);

        // Update the record
        $watchHistory->update($validated);

        return response()->json(['message' => 'Watch history updated successfully!', 'data' => $watchHistory]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the watch history record
        $watchHistory = WatchHistory::findOrFail($id);

        // Delete the record
        $watchHistory->delete();

        return response()->json(['message' => 'Watch history deleted successfully!']);
    }
}
