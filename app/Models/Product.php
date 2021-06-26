<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_product',
        'name',
        'description',
        'characteristic',
        'tech_review',
        'inStock',
        'occasion',
        'restock_at',
        'quantity',
        'name_category',
    ];

    protected $primaryKey = 'reference_product';

    public $incrementing = false;
    public $timestamps = true;
}
