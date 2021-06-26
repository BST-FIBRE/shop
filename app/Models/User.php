<?php

namespace App\Models;

use App\Traits\UUIDS;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, UUIDS, Notifiable;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'percentage',
        'ref_role',
        'name_wallet',
        'password',
        'email_verified_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
