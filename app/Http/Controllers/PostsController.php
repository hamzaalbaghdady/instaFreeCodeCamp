<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Post;

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

    public function show(\App\Models\Post $post)
    {
        // $post = Post::findorfail($post);
        return view('posts.show', compact('post'));
        // compact('post') is the same as ['post' => $post,]
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);
        // if you have a field that dosn't need validation you can add it to array as 'field_name' => '',

        // store image in storeg/app/public/uploads
        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit('1200', '1200');
        $image->save();

        auth()->User()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]); // to get the current user

        return redirect('/profile/' . auth()->user()->id); // go back to user profile
    }
}
