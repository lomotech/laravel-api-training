<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CreateUserRequest;
use App\Http\Requests\Api\ShowUserRegistrationStatusRequest;
use App\Models\User;
use Hash;

class UserApiController extends Controller
{
    public function store(CreateUserRequest $request)
    {
        $input = $request->validated();

        User::create([
            'name' => $input['name'],
            'identity_number' => $input['identity_number'],
            'email' => $input['email'],
            'address_1' => $input['address_1'],
            'password' => Hash::make($input['password']),
            'registration_status_id' => 1 //new
        ]);

        return response(['message' => 'Pendaftaran anda telah berjaya disimpan. Proses pengesahan akan dibuat.']);
    }

    public function showRegisterStatus(ShowUserRegistrationStatusRequest $request)
    {
        $input = $request->validated();

        $user = User::query()
            ->where('identity_number', $input['identity_number'])
            ->first();

        if(!$user) {
            return response(['message' => 'Pengguna ini tiada di dalam sistem'], 419);
        }

        $data = [
            'registration_status' => $user->registrationStatus->name
        ];

        return response(['message' => 'Maklumat status pendaftaran pengguna berjaya dikesan', 'data' => $data]);
    }
}
