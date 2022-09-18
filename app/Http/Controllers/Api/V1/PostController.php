<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Resources\V1\PostResource;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{

    public function index()
    {
        return PostResource::collection(Post::latest()->paginate());
    }

    public function show(post $post)
    {
        return new PostResource($post);
    }

    public function destroy(post $post)
    {
        $post->delete();
        return response()->json(['message' => 'Success'], 204);
    }
}
