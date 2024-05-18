<?php

namespace App\Http\Livewire;

use App\Models\Address;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

use function App\qty_available;

class AddCartItemColor extends Component
{
    public $product;
    public $colors;
    public $qty = 1;
    public $quantity = 0;
    public $color_id = '';
    public $options = [
        'size_id' => null,
    ];

    public function mount()
    {
        $this->colors = $this->product->colors; //carga el color del producto que le pase
        $this->options['image'] = Storage::url($this->product->images->first()->url);
    }
    public function decrement()
    {
        $this->qty--;
    }
    public function increment()
    {
        $this->qty++;
    }
    public function updatedColorId($value)
    {
        $color = $this->product->colors->find($value);
        $this->quantity = qty_available($this->product->id, $color->id);
        $this->options['color'] = $color->name;
        $this->options['color_id'] = $color->id; //la función helper que definimos lo pueda tener en cuenta y calcular el valor correctamente
    }
    public function addItem()
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

        $this->quantity = qty_available($this->product->id, $this->color_id);
        $this->reset('qty');
        $this->emitTo('dropdown-cart', 'render');

        if (auth()->check()) {
            $this->emitTo('merca-wallet', 'render');
        }
    }

    public function render()
    {
        return view('livewire.add-cart-item-color');
    }
}
