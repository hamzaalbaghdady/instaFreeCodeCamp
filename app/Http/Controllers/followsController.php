<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class followsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(User $user)
    {
        // this will take auth user id and passed user id profile to insert in profile_user
        // => profile_id = $user->profile & user_id = auth()->useer()
        return auth()->user()->following()->toggle($user->profile);
    }
}
