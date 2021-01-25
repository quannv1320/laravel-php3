<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderDetail;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $orders ->load('order_details', 'products');
        return view('order.index', compact('orders'));
    }
}
