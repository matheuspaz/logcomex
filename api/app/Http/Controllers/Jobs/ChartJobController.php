<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use App\Services\Jobs\ChartDataService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChartJobController extends Controller
{
    public function index(Request $request, ChartDataService $chartDataService): JsonResponse
    {
        $validator = Validator::make($request->query->all(), [
            'filter_type' => 'filled',
            'filter_value' => 'filled'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $dataFiltered = $chartDataService->execute($request->filter_type, $request->filter_value);

        return response()->json($dataFiltered, 200);
    }
}
