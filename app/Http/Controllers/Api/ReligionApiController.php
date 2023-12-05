<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReligionApiResource;
use App\Http\Resources\SubDistrictApiResource;
use App\Models\Zz\Religion;
use App\Models\Zz\SubDistrict;
use Cache;

class ReligionApiController extends Controller
{
    public function index()
    {
        $religions = Cache::remember('religions', 60 * 60 * 24, function () {
            return Religion::query()
                ->select(['id', 'name', 'ddsa_code'])
                ->orderBy('id')
                ->get();
        });

        return ReligionApiResource::collection($religions);
    }
}
