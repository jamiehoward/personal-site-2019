<?php

namespace App\Http\Controllers;

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
        $data = ['posts' => [
            ["date" => "2019 Apr 15", "title" => "Jesus Wept"],
            ["date" => "2018 Sep 01", "title" => "Macro-focus"],
            ["date" => "2018 Feb 28", "title" => "Life as a Serial Generalist"],
            ["date" => "2018 Feb 27", "title" => "Why a new blog?"],
            ["date" => "2015 Dec 10", "title" => "Sometimes I Doubt"],
        ]];

        return view('posts.index', $data);
    }
}
