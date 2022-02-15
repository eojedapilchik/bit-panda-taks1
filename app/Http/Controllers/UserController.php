<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;

class UserController extends Controller
{

    public function showActiveByCountry($country_name="Austria")
    {
        $country_id = Country::where('name', $country_name)->first()->id;
        return User::with('UserDetail')->where('active', 1)->whereHas('UserDetail',     function($user)  use ($country_id){
            $user->where('citizenship_country_id', $country_id);
        })->get();
    }
    
}