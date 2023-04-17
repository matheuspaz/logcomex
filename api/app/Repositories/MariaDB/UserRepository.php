<?php

namespace App\Repositories\MariaDB;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryContract;

class UserRepository implements UserRepositoryContract
{
    public function findByEmail(string $email): User|null
    {
        return User::where('email', $email)->first();
    }

    public function create(string $name, string $email, string $password): User
    {
        return User::create(['name' => $name, 'email' => $email, 'password' => $password]);
    }
}
