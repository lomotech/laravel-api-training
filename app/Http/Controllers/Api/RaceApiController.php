<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RaceApiResource;
use App\Http\Resources\SubDistrictApiResource;
use App\Models\Zz\Race;
use App\Models\Zz\SubDistrict;
use Cache;

class RaceApiController extends Controller
{
    public function index()
    {
        $races = Cache::remember('races', 60 * 60 * 24, function () {
            return Race::query()
                ->select(['id', 'name'])
                ->orderBy('id')
                ->get();
        });

        return RaceApiResource::collection($races);
    }
}
