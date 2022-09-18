<?php

namespace App\Http\Controllers;

use App\Http\Resources\V1\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => Post::latest()->paginate()
        ]);
    }
}
