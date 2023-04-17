<?php

namespace App\Services\Auth;

use App\Models\User;

class GenerateTokenService
{
    public function execute(User $user): string
    {
        return $user->createToken('api')->plainTextToken;
    }
}
