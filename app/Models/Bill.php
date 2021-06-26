<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount_due',
        'amount_paid',
        'amount_remaining',
        'currency',
        'tax',
        'paid_at'
    ];

    protected $primaryKey = 'ref_bill';

    public $incrementing = false;
}
