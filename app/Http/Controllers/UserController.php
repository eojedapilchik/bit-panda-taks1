<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UserController extends Controller
{

    public function showActiveByCountry($country_name="Austria")
    {
        $country_id = Country::where('name', $country_name)->first()->id;
        return User::with('UserDetail')->where('active', 1)->whereHas('UserDetail',     function($user)  use ($country_id){
            $user->where('citizenship_country_id', $country_id);
        })->get();
    }

    public function deleteUserNoDetails(User $user)
    {

    
    if(!$user->userDetail){
            $user->delete();
            return response()->json("Deleted",204);
        }
        return response()->json("Not Found or Cannot be deleted", 404);
    }
    
}