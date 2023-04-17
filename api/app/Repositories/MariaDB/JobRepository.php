<?php

namespace App\Repositories\MariaDB;

use App\Models\Job;
use App\Repositories\Contracts\JobRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class JobRepository implements JobRepositoryContract
{
    public function filter(string $filterType, string $filterValue): Collection
    {
        return Job::where($filterType, $filterValue)->get();
    }

    public function all(): Collection {
        return Job::all();
    }
}
