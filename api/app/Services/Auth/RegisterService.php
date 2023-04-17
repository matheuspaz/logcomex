<?php

namespace App\Services\Auth;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryContract;

class RegisterService
{
    public function __construct(private UserRepositoryContract $userRepository) {}

    public function execute(
        string $name,
        string $email,
        string $password
    ): User
    {
        return $this->userRepository->create(name: $name, email: $email, password: bcrypt($password));
    }
}
