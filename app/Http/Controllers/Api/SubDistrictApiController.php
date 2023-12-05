<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StateApiResource;
use App\Http\Resources\SubDistrictApiResource;
use App\Models\Zz\SubDistrict;
use Cache;

class SubDistrictApiController extends Controller
{
    public function index()
    {
        $key = request('district_id', 'all');

        $subDistricts = Cache::remember('subdistricts_' . $key, 60 * 60 * 24, function () {
            return SubDistrict::query()
                ->select(['id', 'name', 'district_id'])
                ->when(request('district_id'),
                    fn($q) => $q->where('district_id', request('district_id'))
                )
                ->orderBy('name')
                ->get();
        });

        return SubDistrictApiResource::collection($subDistricts);
    }
}
