<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{

    public function editIfExists(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user_details = $user->userDetail();
        $user_details->update($request->all());
        return response()->json($user_details, 200);
    }
    
}