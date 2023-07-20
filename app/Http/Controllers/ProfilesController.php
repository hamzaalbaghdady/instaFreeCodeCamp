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
        return view('home', [
            'user' => $user,
        ]);
    }
}
