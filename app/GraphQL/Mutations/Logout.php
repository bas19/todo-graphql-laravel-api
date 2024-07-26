<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

final class Logout
{
    /** @param  array{}  $args */
    public function __invoke($_, array $args)
    {
        $user = auth()->user();
        $user->tokens()->delete();
        return $user;
    }
}
