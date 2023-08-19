<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'item_code',
        'item_name',
        'supplier_id',
        'quantity',
        'unit_price',
        'status'

    ];
}
