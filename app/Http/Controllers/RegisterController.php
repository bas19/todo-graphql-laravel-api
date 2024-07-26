<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class RegisterController extends Controller
{
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        dd($validated);
        
    }
}
