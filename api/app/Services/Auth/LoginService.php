<?php

namespace App\Services\Auth;

use App\Repositories\Contracts\UserRepositoryContract;
use Exception;
use Illuminate\Support\Facades\Hash;
use Throwable;

class LoginService
{
    public function __construct(private UserRepositoryContract $userRepository) {}

    public function execute(string $email, string $password): string|Throwable
    {
        $user = $this->userRepository->findByEmail(email: $email);

        if (!Hash::check($password, $user->password)) {
            throw new Exception("Password does not match");
        }

        $tokenService = new GenerateTokenService($user);

        return $tokenService->execute($user);
    }
}
