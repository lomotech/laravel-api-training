<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OccupationStatusApiResource;
use App\Models\Zz\OccupationStatus;
use Cache;

class OccupationStatusApiController extends Controller
{
    public function index()
    {
        $occupationStatuses = Cache::remember('occupation_statuses', 60 * 60 * 24, function () {
            return OccupationStatus::query()
                ->select(['id', 'name'])
                ->orderBy('name')
                ->get();
        });

        return OccupationStatusApiResource::collection($occupationStatuses);
    }
}
