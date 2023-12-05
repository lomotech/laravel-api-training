<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CreateUserRequest;
use App\Http\Requests\Api\ShowUserRegistrationStatusRequest;
use App\Http\Resources\StateApiResource;
use App\Models\User;
use App\Models\Zz\State;
use Cache;
use Hash;

class StateApiController extends Controller
{
    public function index(){
        $states = Cache::remember('states', 60 * 60 * 24, function () {
            return State::query()
                ->select(['id', 'name'])
                ->orderBy('name')
                ->get();
        });

        return StateApiResource::collection($states);
    }
}
