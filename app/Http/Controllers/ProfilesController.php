<?php

namespace App\Http\Controllers;

use App\Models\User;

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

        auth()->user()->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}
