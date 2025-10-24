<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SSOController extends Controller
{
    // Called from iframe message: user ID is passed
    public function ssoLogin(Request $request)
    {
        $userId = $request->input('id');

        if (!$userId) {
            return response()->json(['error' => 'No user ID provided'], 400);
        }

        $user = User::find($userId);
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        Auth::guard('web')->login($user);

        return response()->json(['success' => true]);
    }
}
