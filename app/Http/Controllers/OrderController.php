<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function show(Order $order)
    {
        //decodificque algo que este
        $items = json_decode($order->content);
        return view('orders.show', compact('order','items'));
    }
}
