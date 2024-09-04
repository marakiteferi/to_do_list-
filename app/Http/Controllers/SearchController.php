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

        // Search in tasks and categories
        $tasks = Task::where('title', 'like', "%$query%")->get(); // Changed 'name' to 'title'
        $categories = Category::where('name', 'like', "%$query%")->get();

        return view('search.results', compact('tasks', 'categories', 'query'));
    }
}
