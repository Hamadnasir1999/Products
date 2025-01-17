<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'orderNumber';

    protected $fillable = [
        'customerNumber', 'orderDate', 'requiredDate', 'shippedDate',
        'status', 'comments', 'totalAmount',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerNumber', 'customerNumber');
    }
}
