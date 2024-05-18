<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class MercaWallet extends Component
{

    public $listeners = ['render'];
    
    public $saldoActual;

    public $userId; // Agregar la propiedad para almacenar el ID del usuario

    public function mount($userId)
    {
        $this->userId = $userId;

        $user = User::find($this->userId);

        if ($user) {
          
            $this->saldoActual = $user->balance;
        } else {
            $this->saldoActual = 0;
        }
    }

    public function render()
    {
        return view('livewire.merca-wallet');
    }
}
