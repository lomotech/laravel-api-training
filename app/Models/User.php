<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function subDistrict(): BelongsTo
    {
        return $this->belongsTo(Zz\SubDistrict::class);
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(Zz\District::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(Zz\State::class);
    }

    public function religion(): BelongsTo
    {
        return $this->belongsTo(Zz\Religion::class);
    }

    public function registrationStatus(): BelongsTo
    {
        return $this->belongsTo(Zz\Status::class, 'registration_status_id');
    }
}
