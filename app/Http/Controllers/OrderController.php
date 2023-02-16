<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        //Obtenemos todos los pedidos asociados al usuario autenticado
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {   $this->authorize('view', $order);//filtra la vista
        //decodificque algo que este
        $items = json_decode($order->content);
        return view('orders.show', compact('order','items'));
    }
}