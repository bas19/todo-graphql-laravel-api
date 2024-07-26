<?php

namespace App\Http\Services;
use Auth;

class AuthService
{
  /**
   * @param string $email
   * @param string $password
   * @return string|null
   */
  public static function login($email, $password) {
    $token = null;
    if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
      $token = auth()->user()->createToken('personal-token')->plainTextToken;
    }
    return $token;
  }
}