<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Tienda;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // procesar el valor de ese parámetro
        // y poder filtrar el listado de pedidos
        $orders = Order::query()->where('user_id', auth()->user()->id);

        if (request('status')) {
            $orders->where('status', request('status'));
        }
        $orders = $orders->get();

        for ($i = 1; $i <= 5; $i++) {
            $ordersByStatus[$i] = Order::where('user_id', auth()->user()->id)->where('status', $i)->count();
        }
        return view('orders.index', compact('orders', 'ordersByStatus'));
    }

    public function show(Order $order)
    {
        $tienda = Tienda::first();

        $this->authorize('author', $order);

        $items = json_decode($order->content);
        $envio = json_decode($order->envio);

        if ($order->paymentinfo && $order->status == 1) {

            $paymentinfo = true;
        } else {

            $paymentinfo = false;
        }
        return view('orders.show', compact('order', 'items', 'envio', 'paymentinfo', 'tienda'));
    }


    public function sendWhatsAppMessage(Request $request)
    {
        $tienda = Tienda::first();

        $orderId = $request->order;
        $order = Order::find($orderId);

        if (!$order) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }

        $user = User::find($order->user_id);

        $orderText = "Número de Orden: " . $order->id . "\n\n";
        $orderText .= "Datos del Comprador:\n";
        $orderText .= "Nombre: " . $order->name . "\n";
        $orderText .= "Correo Electrónico: " . $user->email . "\n";
        $orderText .= "Teléfono: " . $order->phone . "\n\n";
        $orderText .= "Datos de la Orden:\n";

        $envioData = json_decode($order->envio, true);
        $items = json_decode($order->content, true);

        if ($order->envio_type === '1') {
            $orderText .= "Los productos deben ser recogidos en tienda" . $tienda->direccion_tienda . "\n";
        } else {
            $orderText .= "Los productos serán enviados a:\n";
            $orderText .= $envioData['address'] . "\n";
            $orderText .= $envioData['department'] . " - " . $envioData['city'] . " - " . $envioData['district'] . "\n";
        }


        if ($items) {
            $orderText .= "---------------------------------------------------------------------\n";
            $orderText .= "Resumen de Artículos:\n";
            foreach ($items as $item) {

                $orderText .= "- " . $item['name'] . "\nPrecio: $" . $item['price'] . "\nCantidad: " . $item['qty'] . "\nTotal: $" . ($item['price'] * $item['qty']) . "\n";
                $orderText .= "---------------------------------------------------------------------\n";
            }
        }

        // Añadir detalles adicionales del pedido, como subtotal, costo de envío, total, etc.
        $orderText .= "Subtotal: $" . ($order->total - $order->shipping_cost) . "\n";
        $shippingCostText = ($order->shipping_cost == 0) ? "Gratis" : "$" . $order->shipping_cost;
        $orderText .= "Envío: " . $shippingCostText . "\n";
        $orderText .= "Pago: $" . $order->total . "\n";

        $encodedMessage = urlencode($orderText);
        $phoneNumber = $tienda->numero_telefono; // Reemplaza con el número deseado

        $whatsappURL = "https://api.whatsapp.com/send/?phone=" . $phoneNumber . "&text=" . $encodedMessage . "&app_absent=0";

        return redirect($whatsappURL);
    }
}
