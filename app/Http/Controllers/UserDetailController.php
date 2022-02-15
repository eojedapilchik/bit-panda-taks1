<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{

    public function editIfExists(Request $request, $id)
    {
        $user = User::find($id);
        if(!$user) return response()->json("Not found", 404);
        $user_details = $user->userDetail;
        if(!$user_details) return response()->json("Not found", 404);
        $user_details->update($request->all());
        return response()->json($user_details, 200);
    }
    
}