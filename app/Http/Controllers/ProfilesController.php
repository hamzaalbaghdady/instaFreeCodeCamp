<?php

namespace App\Http\Controllers;

use App\Models\User;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function index($user)
    {
        $user = User::findOrFail($user); // better than find(), it will show 404 error if fail.
        return view('profiles.index', [
            'user' => $user,
        ]);
    }
    public function edit(User $user)
    {
        $this->authorize('update', $user->profile); // for profilePolicy
        return view('profiles.edit', compact('user'));
    }
    // the above function is better isn't it :)
    // public function edit($user)
    // {
    //     $user = User::findOrFail($user);
    //     return view('profiles.edit', [
    //         'user' => $user
    //     ]);
    // }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile); // for profilePolicy

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);


        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit('1000', '1000');
            $image->save();
            $imageArray = ['image' => $imagePath]; // A cool way to add the image correctly
        }
        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        return redirect("/profile/{$user->id}");
    }
}
