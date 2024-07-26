<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Http\Services\AuthService;

final readonly class Login
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $email = $args['email'];
        $password = $args['password'];

        $token = AuthService::login($email, $password);

        if (!$token) {
            return 'Invalid';
        }
        
        return $token;
    }
}
