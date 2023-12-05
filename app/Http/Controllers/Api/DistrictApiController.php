<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DistrictApiResource;
use App\Models\Zz\District;
use Cache;

class DistrictApiController extends Controller
{
    public function index()
    {
        $key = request('state_id', 'all');

        $districts = Cache::remember('districts_' . $key, 60 * 60 * 24, function () {
            return District::query()
                ->select(['id', 'name', 'state_id'])
                ->when(request('state_id'),
                    fn($q) => $q->where('state_id', request('state_id'))
                )
                ->orderBy('name')
                ->get();
        });

        return DistrictApiResource::collection($districts);
    }
}
