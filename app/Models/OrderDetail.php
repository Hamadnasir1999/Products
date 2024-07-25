<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'productCode',
        'quantityOrdered',
        'priceEach',
        'orderLineNumber',
    ];

    protected $table = 'orderdetails';

    public function order()
    {
        return $this->belongsTo(Order::class, 'orderNumber');
    }
}
