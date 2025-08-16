<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Tournament;

class ResultController extends Controller
{
    public function index() {
        return Result::all();
    }

    public function store(Request $request) {
        $data = $request->validate([
            'tournament_id' => 'required|exists:tournaments,id',
            'opponent' => 'required|string',
            'rating' => 'nullable|integer',
            'result' => 'required|in:win,draw,loss',
            'description' => 'nullable|string',
        ]);
        return Result::create($data);
    }

    public function show(Result $result) {
        return $result;
    }

    public function update(Request $request, Result $result) {
        $data = $request->validate([
            'opponent' => 'required|string',
            'rating' => 'nullable|integer',
            'result' => 'required|in:win,draw,loss',
            'description' => 'nullable|string',
        ]);
        $result->update($data);
        return $result;
    }

    public function destroy(Result $result) {
        $result->delete();
        return response()->noContent();
    }
}
