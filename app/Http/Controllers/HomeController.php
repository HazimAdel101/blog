<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke(Request $request)
    {
        return view('home', [
            'featuredPosts' =>Post::published()->featured()->latest('published_at')->take(7)->get(),
            'latestPosts' => Post::published()->latest('published_at')->get(),
        ]);
    }
}
