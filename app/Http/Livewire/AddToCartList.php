<?php

namespace App\Http\Livewire;

use App\Models\Address;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

use function App\qty_available;

class AddToCartList extends Component
{

    public $product;
    public $quantity;
    public $qty = 1;
    public $options = [
        'color_id' => null,
        'size_id' => null,
    ];

    protected $listeners = ['cartDestroyed'];

    //protected $listeners = ['add-tocart', 'render'];

    public $addedToCart = false;

    public function mount()
    {
        $this->quantity = qty_available($this->product->id);
        $this->options['image'] = Storage::url($this->product->images->first()->url);
        // Obtén la cantidad actual en el carrito para este producto
        $cartItem = Cart::search(function ($cartItem, $rowId) {
            return $cartItem->id === $this->product->id;
        })->first();

        if ($cartItem) {
            $this->qty = $cartItem->qty;
            $this->addedToCart = true;
        }
    }

    public function addToCart()
    {
        if (auth()->check()) {
            $userAddress = Address::where('user_id', auth()->id())->first();

            if (!$userAddress) {

                $this->emit('openAddressModal');

                return;
            }
        } else {
            $cacheKey = 'user_address_' . md5(request()->ip());

            if (!Cache::has($cacheKey)) {

                $this->emit('openAddressModal');

                return;
            }
        }

        $this->emit('cartDestroyed', $this->product->id);

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

        $this->addedToCart = true;

        $this->emitTo('dropdown-cart', 'render');

        $this->mount();
        //  $this->emitTo('add-tocart', 'render');

        if (auth()->check()) {
            $this->emitTo('merca-wallet', 'render');
        }
    }

    public function increment()
    {
        if ($this->quantity != 0) {
            $this->qty++;
            $this->addToCart();
        }

        $this->mount();
    }


    public function decrement()
    {
        if ($this->qty > 0) {
            $this->qty--;
            $this->addToCart();
        }

        if ($this->qty == 0) {
            $this->qty = 1;
            $this->addedToCart = false;
            return;
        }

        $this->mount();
    }


    public function cartDestroyed()
    {

        $this->qty = 1;
        $this->addedToCart = false;
        $this->mount();
    }


    public function render()
    {
        return view('livewire.add-to-cart-list');
    }
}
