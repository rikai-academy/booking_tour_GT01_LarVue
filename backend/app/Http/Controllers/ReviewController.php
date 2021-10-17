<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewCreateRequest;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(ReviewCreateRequest $request)
    {
        $userId = auth()->user()->id;
        Review::create($request->all() + ['user_id' => $userId]);

        return response()->json(['message' => 'Reivew success'], 201);
    }
}
