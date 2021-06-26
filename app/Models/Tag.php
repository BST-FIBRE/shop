<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_tag',
        'color',
    ];

    protected $primaryKey = 'name_tag';

    public $incrementing = false;
    public $timestamps = false;
}
