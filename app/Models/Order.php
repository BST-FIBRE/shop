<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'closed',
        'canceled',
        'paid',
        'total_ht',
        'total_ttc',
        'ordered_at',
        'reference_bill',
        'id_user',
        'ref_point',
    ];
}
