<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class RemoveToCart extends Component
{

    protected $listeners = ['refreshProduct', 'destroy'];


    public function confirmDestroy()
    {
        $this->emit('confirmDestroy');
    }

    public function destroy()
    {
        Cart::destroy();

        //$this->emitTo('dropdown-cart', 'render');

       // $this->emitTo('merca-wallet', 'render');

        $this->emit('reloadPage');
    }

    public function render()
    {
        return view('livewire.remove-to-cart');
    }
}
