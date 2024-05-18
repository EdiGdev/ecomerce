<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

use function App\qty_available;

class DropdownCart extends Component
{
    public $product;
    public $quantity;
    public $qty = 1;
    public $options = [
        'color_id' => null,
        'size_id' => null,
    ];
    public $productIdr;
    public $listeners = ['render', 'decremen', 'increment'];

    public function addToCart()
    {
        $cartItem = Cart::search(function ($cartItem, $rowId) {
            return $cartItem->id === $this->product->id;
        })->first();

        if ($cartItem) {

            Cart::update($cartItem->rowId, $this->qty);
        } else {

            $discountPercentage = $this->product->discount;

            $discountDecimal = $discountPercentage / 100;
            $discountedPrice = $this->product->price * (1 - $discountDecimal);

            Cart::add([
                'id' => $this->product->id,
                'name' => $this->product->name,
                'qty' => $this->qty,
                'price' => $discountedPrice, // Usa el precio con descuento
                'weight' => 550,
                'options' => $this->options,
            ]);
        }

        $this->emitTo('dropdown-cart', 'render');

        $this->mount();

        if (auth()->check()) {
            $this->emitTo('merca-wallet', 'render');
        }
    }

    public function decrement($productId)
    {
        $this->productIdr = $productId;
        $this->product = Product::find($productId);
        $this->quantity = qty_available($productId);
        $this->options['image'] = Storage::url($this->product->images->first()->url);
        // Obtén la cantidad actual en el carrito para este producto
        $cartItem = Cart::search(function ($cartItem, $rowId) {
            return $cartItem->id === $this->productIdr;
        })->first();

        if ($cartItem) {
            $this->qty = $cartItem->qty;
        }


        if ($this->qty > 0) {
            $this->qty--;
            $this->addToCart();
        }

        if ($this->qty == 0) {
            $this->qty = 1;
            return;
        }
    }
    public function increment($productId)
    {
        $this->productIdr = $productId;
        $this->product = Product::find($productId);
        $this->quantity = qty_available($productId);
        $this->options['image'] = Storage::url($this->product->images->first()->url);
        // Obtén la cantidad actual en el carrito para este producto
        $cartItem = Cart::search(function ($cartItem, $rowId) {
            return $cartItem->id === $this->productIdr;
        })->first();

        if ($cartItem) {
            $this->qty = $cartItem->qty;
        }

        if ($this->quantity != 0) {
            $this->qty++;
            $this->addToCart();
        }
    }


    public function render()
    {
        return view('livewire.dropdown-cart');
    }
}
