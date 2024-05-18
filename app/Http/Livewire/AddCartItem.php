<?php

namespace App\Http\Livewire;

use App\Models\Address;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

use function App\qty_available;

class AddCartItem extends Component
{
    public $product;
    public $quantity;
    public $qty = 1;
    //los productos que estan enviando se debe asegurar que recibe la informacións
    public $options = [
        'color_id' => null,
        'size_id' => null,
    ];


    //cantidad que es respectiva al stock
    public function mount()
    {
        //calcula el stock menos la cantidad agregada
        $this->quantity = qty_available($this->product->id);
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
        
        $this->quantity = qty_available($this->product->id);
       
        $this->reset('qty');

        //Queremos que cuando se añada un ítem
        //al carrito de compras desde add-cart-item, la clase AddCartItem le comunique a la otra clase DropdownCart
        //que se ha producido este hecho, y así el numerito del carrito aumente sin tener que actualizar la página

        $this->emitTo('dropdown-cart', 'render');  //cuyo primer parámetro es a que vista queremos llamar y como se llama el evento

        if (auth()->check()) {
            $this->emitTo('merca-wallet', 'render');
        }
    }
    public function render()
    {
        return view('livewire.add-cart-item');
    }
}
