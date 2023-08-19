<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'product_id',
        'item_name',
        'supplier_id',
        'quantity',
        'unit_price',
        'status'
    ];
}
