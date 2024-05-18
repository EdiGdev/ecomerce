<?php

namespace App\Http\Controllers;

use App\Models\User;
use Bavix\Wallet\Models\Transaction;
use Illuminate\Http\Request;

class WalletController extends Controller
{

    public function index()
    {
        $User = User::find(auth()->id());
        $transacciones = $User->transactions()->get();

        return view('wallet.index', compact('transacciones'));
    }

    public function mostrarFormulario()
    {

        $usuarios = User::where('id', '!=', auth()->id())->get(); // Obtener una lista de usuarios, excluyendo al usuario autenticado



        return view('prueba', compact('usuarios'));
    }


    public function recargarDinero(Request $request)
    {
        $usuarioDestino = User::find($request->input('usuario_id'));

        $cantidad = $request->input('cantidad');

        if ($usuarioDestino) {
            $usuarioOrigen = auth()->user();

            // $usuarioOrigen->charge = (-$cantidad);
            $usuarioDestino->deposit($cantidad);

            return 'Recarga realizada correctamente.';
            // return redirect()->route('recargaExitosa')->with('success', 'Recarga realizada correctamente.');

        } else {
            return back()->with('error', 'Usuario destino no válido.');
        }
    }



    public function retirarDinero(Request $request)
    {
        $usuario = User::find($request->usuario_id);

        // Lógica para retirar dinero del usuario
        // Asumiendo que la clase User tiene un método asociado al proceso de retiro
        $cantidad = $request->cantidad;
        $usuario->withdraw($cantidad);

        return 'Retiro realizado exitosamente';
        // Aquí podrías agregar más lógica según tu implementación
        // Por ejemplo, redireccionar con un mensaje de éxito o error
    }


    public function TranferirDinero(Request $request)
    {
        $usuario = User::find($request->usuario_id);

        // Lógica para retirar dinero del usuario
        // Asumiendo que la clase User tiene un método asociado al proceso de retiro
        $cantidad = $request->cantidad;
        $usuario->withdraw($cantidad);

        return 'Se ha trenferido exitosamente';
        // Aquí podrías agregar más lógica según tu implementación
        // Por ejemplo, redireccionar con un mensaje de éxito o error
    }
}
