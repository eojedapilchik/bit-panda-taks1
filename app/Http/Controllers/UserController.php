<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{

    public function showActive()
    {
        return User::where('active', 1)->get();
    }
    
}