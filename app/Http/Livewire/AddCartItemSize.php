<?php

namespace App\Http\Livewire;

use App\Models\Address;
use App\Models\Size;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

use function App\qty_available;

class AddCartItemSize extends Component
{

    public $product;
    public $sizes;
    public $size_id = '';
    public $colors = [];
    public $color_id = '';
    public $qty = 1;
    public $quantity = 0;
    public $options = [];

    public function mount()
    {
        $this->sizes = $this->product->sizes;
        $this->options['image'] = Storage::url($this->product->images->first()->url);
    }

    public function updatedSizeId($value)
    {
        $size = Size::find($value);
        $this->colors = $size->colors;
        $this->options['size'] = $size->name;
        $this->options['size_id'] = $size->id;
    }

    public function updatedColorId($value)
    {
        $size = Size::find($this->size_id);
        $color = $size->colors->find($value);
        $this->quantity = qty_available($this->product->id, $color->id, $size->id);;
        $this->options['color'] = $color->name;
        $this->options['color_id'] = $color->id;
    }

    public function decrement()
    {
        $this->qty--;
    }

    public function increment()
    {
        $this->qty++;
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

        //cada vez que agreguemos un nuevo ítem al carrito debemos de actualizar la propiedad quantity
        $this->quantity = qty_available($this->product->id, $this->color_id, $this->size_id);
        $this->reset('qty');
        $this->emitTo('dropdown-cart', 'render');

        if (auth()->check()) {
            $this->emitTo('merca-wallet', 'render');
        }
    }
    public function render()
    {
        return view('livewire.add-cart-item-size');
    }
}
