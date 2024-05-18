<?php

namespace App\Http\Livewire;

use Livewire\Component;

namespace App\Http\Livewire;

use Livewire\Component;

class DropdownFavoritos extends Component
{

    public $listeners = ['render'];

    public function render()
    {
        return view('livewire.dropdown-favoritos');
    }
}
