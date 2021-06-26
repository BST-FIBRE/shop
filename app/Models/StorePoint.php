<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorePoint extends Model
{
    use HasFactory;

    protected $primaryKey = 'ref_point';

    public $incrementing = false;
    public $timestamps = false;
}
