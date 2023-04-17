<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface JobRepositoryContract
{
    public function filter(string $filterType, string $filterValue): Collection;
    public function all(): Collection;
}
