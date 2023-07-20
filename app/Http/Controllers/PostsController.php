<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // I think its like session
    }
    public function create()
    {
        return view('posts.create'); // the same as posts/create
    }
    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);
        // if you have a field that dosn't need validation you can add it to array as 'field_name' => '',

        auth()->User()->posts()->create($data); // to get the current user

        dd(request()->all());
    }
}
