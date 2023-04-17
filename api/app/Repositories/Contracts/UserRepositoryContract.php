<?php

namespace App\Repositories\Contracts;

use App\Models\User;

interface UserRepositoryContract
{
    public function findByEmail(string $email): User|null;
    public function create(string $name, string $email, string $password): User;
}
