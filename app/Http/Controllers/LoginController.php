<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\AuthService;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $token = AuthService::login($request->email, $request->password);
        if (!$token) {
            return response()->json([
                'error' => 'Invalid credentials.'
            ], 401);
        }
        return response()->json(['token' => $token]);
    }
}
