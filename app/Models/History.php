<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'connected_at',
        'disconnected_at',
    ];

    public $timestamps = false;
}
