<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubDistrictApiResource;
use App\Models\Zz\Status;
use App\Models\Zz\SubDistrict;
use Cache;

class StatusApiController extends Controller
{
    public function index()
    {
        $statuses = Cache::remember('statuses', 60 * 60 * 24, function () {
            return Status::query()
                ->select(['id', 'name'])
                ->orderBy('id')
                ->get();
        });

        return SubDistrictApiResource::collection($statuses);
    }
}
