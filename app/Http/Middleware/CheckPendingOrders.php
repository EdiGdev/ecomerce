<?php

namespace App\Http\Middleware;

use App\Models\Order;
use Closure;
use Illuminate\Http\Request;

class CheckPendingOrders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Verificar si la ruta actual NO es la vista de pago
        if ($request->route()->getName() !== 'orders*') {
            // Lógica para mostrar el banner de órdenes pendientes
            if (auth()->check()) {
                $pendientes = Order::where('user_id', auth()->user()->id)->where('status', 1)->count();
                if ($pendientes) {
                    $mensaje = "Tiene $pendientes órdenes pendientes de pago. <a class='font-bold' href='" . route('orders.index') . "?status=1'>Pagar</a>";
                    session()->flash('flash.banner', $mensaje);
                }
            }
        }

        return $next($request);
    }
}
