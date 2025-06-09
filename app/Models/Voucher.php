<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
        'active',
        'name',
        'code',
        'quantity',
        'start_at',
        'end_at',
        'min_value'
    ];
}
