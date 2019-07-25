<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['posts' => Post::get()];

        return view('posts.index', $data);
    }

    public function show(Request $request, string $permalink)
    {
        $post = Post::where('permalink', $permalink)->firstOrFail();

        $data = ['post' => $post];

        return view('posts.show', $data);
    }
}
