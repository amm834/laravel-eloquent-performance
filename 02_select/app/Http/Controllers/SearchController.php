<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = Post::with('user')->get();
        if ($request->has('search')) {
            $searchTerm = trim($request->get('search'));
            $query->where('title', 'like', "%$searchTerm%", function (Builder $query) use ($searchTerm) {
                return $query->orWhere('body', 'like', "$searchTerm%");
            });
            return  $query;
        }

        return view('search');
    }

}
