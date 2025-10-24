<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SSOController extends Controller
{
    public function checkParentAuth()
    {
        try {
            // Make request to parent site with credentials (cookies)
            $response = Http::withOptions([
                'verify' => false, // Only for local development
            ])->withCredentials()
              ->get(env('HOTLINEWEBSITE_LINK') . '/api/auth/check-guest');

            if ($response->successful() && $response->json('authenticated')) {
                $userData = $response->json('user');

                // Create or update user in child site
                $user = User::updateOrCreate(
                    ['email' => $userData['email']],
                    [
                        'name' => $userData['name'],
                        'password' => bcrypt(uniqid()), // Random password
                        'parent_user_id' => $userData['id']
                    ]
                );

                // Login user on child site
                Auth::login($user);

                return redirect()->intended('/dashboard');
            }

            return redirect('/login')->with('message', 'Please login on parent site first');

        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Unable to verify authentication');
        }
    }

 public function ssoLogin(Request $request)
{
    // Get user ID from request
    $userId = $request->input('id');

    // Validate it exists
    if (!$userId) {
        return response()->json(['error' => 'No user ID provided'], 400);
    }

    // Find the user
    $user = User::find($userId);
    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    // Log the user in
    Auth::login($user);

    // Return success
    return response()->json(['success' => true]);
}

}
