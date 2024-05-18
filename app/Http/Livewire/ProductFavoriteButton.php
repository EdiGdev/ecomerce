<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductFavoriteButton extends Component
{
    public $product;
    public $isFavorited;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->isFavorited = $this->product->isFavorited();
    }

    public function toggleFavorite()
    {
        if (Auth::check()) {
            $this->product->toggleFavorite();
        } else {
            $this->emitTo('modal-component', 'openModal');
        }

        $this->isFavorited = $this->product->isFavorited();
        $this->emitTo('dropdown-favoritos', 'render');
    }

    public function render()
    {
        return view('livewire.product-favorite-button');
    }
}
