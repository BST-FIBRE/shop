<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_wallet',
        'percentage',
    ];

    protected $primaryKey = 'name';

    public $incrementing = false;
    public $timestamps = false;
}
