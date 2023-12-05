<?php

namespace App\Http\Resources;

use Arr;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DistrictApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return Arr::except(parent::toArray($request), [
            'created_at',
            'updated_at',
            'deleted_at',
        ]);
    }
}
