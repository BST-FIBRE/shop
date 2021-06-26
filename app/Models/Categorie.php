<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sub_name',
    ];

    protected $primaryKey = 'name';

    public $incrementing = false;
    public $timestamps = false;
}
