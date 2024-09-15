<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Get the current user's ID
        $userId = auth()->id();

        // Search in tasks that belong to the authenticated user
        $tasks = Task::where('user_id', $userId)
            ->where('title', 'like', "%$query%")
            ->get();

        // Search in categories that belong to the authenticated user
        $categories = Category::where('user_id', $userId)
            ->where('name', 'like', "%$query%")
            ->get();

        return view('search.results', compact('tasks', 'categories', 'query'));
    }
}
