<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    use HasFactory;

    protected $fillable = [
        'siret_providers',
        'name',
    ];

    protected $primaryKey = 'siret_providers';

    public $incrementing = false;
    public $timestamps = true;
}
