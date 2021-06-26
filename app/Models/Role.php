<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'rel_role',
    ];

    protected $primaryKey = 'ref_role';

    public $incrementing = false;
    public $timestamps = false;
}
