<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function highestSpendingCustomer()
    {
        $customer = DB::table('customers')
            ->join('orders', 'customers.customerNumber', '=', 'orders.customerNumber')
            ->join('orderdetails', 'orders.orderNumber', '=', 'orderdetails.orderNumber')
            ->select('customers.*', DB::raw('SUM(orderdetails.priceEach * orderdetails.quantityOrdered) as totalSpent'))
            ->groupBy('customers.customerNumber')
            ->orderBy('totalSpent', 'desc')
            ->first();

        return view('customers.highest_spending', compact('customer'));
    }

    public function highestOrderCountCustomer()
    {
        $customer = DB::table('customers')
        ->join('orders', 'customers.customerNumber', '=', 'orders.customerNumber')
        ->select('customers.*', DB::raw('COUNT(orders.orderNumber) as orderCount'))
        ->groupBy('customers.customerNumber')
        ->orderBy('orderCount', 'desc')
        ->first();

    return view('customers.highest_order_count', compact('customer'));
    }
}
