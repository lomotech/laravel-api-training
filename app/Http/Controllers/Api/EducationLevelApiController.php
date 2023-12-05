<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EducationLevelApiResource;
use App\Http\Resources\SubDistrictApiResource;
use App\Models\Zz\EducationLevel;
use App\Models\Zz\SubDistrict;
use Cache;

class EducationLevelApiController extends Controller
{
    public function index()
    {
        $educationLevels = Cache::remember('education_level', 60 * 60 * 24, function () {
            return EducationLevel::query()
                ->select(['id', 'name', 'ddsa_code'])
                ->orderBy('ddsa_code')
                ->get();
        });

        return EducationLevelApiResource::collection($educationLevels);
    }
}
