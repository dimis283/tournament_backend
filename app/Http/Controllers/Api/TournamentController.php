<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tournament;

class TournamentController extends Controller
{
    public function index(Request $request) {
         $perPage = $request->get('per_page', 10); // Default 10 ανά σελίδα
        
        return Tournament::with('results')
            ->paginate($perPage);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
        ]);
        return Tournament::create($data);
    }

    public function show(Tournament $tournament) {
        return $tournament->load('results');
    }

    public function update(Request $request, Tournament $tournament) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
        ]);
        $tournament->update($data);
        return $tournament;
    }

    public function destroy(Tournament $tournament) {
        $tournament->delete();
        return response()->noContent();
    }
}
