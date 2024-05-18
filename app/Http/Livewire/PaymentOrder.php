<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Tienda;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentOrder extends Component
{
    use AuthorizesRequests;
    public $order;
    protected $listeners = ['payOrder']; //escucha el evento que estamos pidiendos
    public $tienda;
    public function mount(Order $order)
    {
        $this->tienda = Tienda::first();
        $this->order = $order;
    }
    public function payOrder()
    {
        $this->order->status = 2; //recibido
        $this->order->save(); //actualizamos en la bbdd y lo guardamos
        return redirect()->route('orders.show', $this->order);
    }

    public function makePayment()
    {
        $this->authorize('view', $this->order);

        $user = Auth::user();

        if (!$user) {
            // Manejar el caso en el que el usuario no está autenticado.
        }

        // Obtén la información del total de la compra desde el campo 'content' de la orden
        $content = json_decode($this->order->content, true); // Convierte el JSON a un array

        $costoDelProducto = 0;

        // Suma los subtotales de cada producto para obtener el costo total
        foreach ($content as $producto) {
            $costoDelProducto += $producto['subtotal'];
        }

        if ($user->balance < $costoDelProducto) {
            // Mostrar un mensaje de saldo insuficiente o manejar la falta de saldo.
            $this->addError('paymentError', '¡Saldo insuficiente para realizar la compra!');
            return;
        }

        // Define los metadatos para la transacción de retiro
        $meta = [
            'order_id' => $this->order->id,
            'description' => 'Pago por orden #' . $this->order->id,
            'content' => $content,
        ];

        // Realiza la compra restando el 'costoDelProducto' al saldo del usuario
        $pago = $user->withdraw($costoDelProducto, $meta);

        // Actualiza el estado de la orden a "Recibido"
        if ($pago) {
            $this->order->status = 2;
            $this->order->save();
        }

        return redirect()->route('orders.show', $this->order);
    }



    public function render()
    {
        //en caso de no estar autenticado no vera la pagina
        $this->authorize('view', $this->order);

        $items = json_decode($this->order->content);
        $envio = json_decode($this->order->envio);
        return view('livewire.payment-order', compact('items', 'envio'));
    }
}
