<?php

namespace App\Services\Jobs;

use App\Repositories\Contracts\JobRepositoryContract;
use Illuminate\Database\Eloquent\Collection;

class ChartDataService
{
    public function __construct(private JobRepositoryContract $jobRepository) {}

    public function execute(string|null $filterType, string|null $filterValue): Collection
    {
        if ($filterType && $filterValue) {
            return $this->jobRepository->filter($filterType, $filterValue);
        }

        return $this->jobRepository->all();
    }
}
