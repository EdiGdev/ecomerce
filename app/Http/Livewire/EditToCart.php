<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

use function App\qty_available;

class EditToCart extends Component
{
    public $product;
    public $quantity;
    public $qty;
   
    
    public function mount()
    {  
        $this->quantity = qty_available($this->product);
       
        $cartItem = Cart::search(function ($cartItem, $rowId) {
            return $cartItem->id === $this->product;
        })->first();

        if ($cartItem) {
            $this->qty = $cartItem->qty;
        }
    }

    public function addToCart()
    {
       
        $cartItem = Cart::search(function ($cartItem, $rowId) {
            return $cartItem->id === $this->product;
        })->first();

        if ($cartItem) {

            Cart::update($cartItem->rowId, $this->qty);

        } 
        

        $this->emitTo('dropdown-cart', 'render');
       
    }

    public function increment()
    {
        
        if ($this->qty < $this->quantity) {
            $this->qty++;
            $this->addToCart();
        }

    }

    public function decrement()
    {
        if ($this->qty > 1) {
            $this->qty--;
            $this->addToCart();
        }

        $this->mount();
    }

    public function render()
    {
        return view('livewire.edit-to-cart');
    }
}
