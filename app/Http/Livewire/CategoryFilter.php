<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryFilter extends Component
{

    use WithPagination;

    //por defecto es list
    public $view = 'grid';
    public $category, $subcategoria, $marca;
    public $queryString = ['subcategoria', 'marca'];

    public function limpiar()
    {
        $this->reset(['subcategoria', 'marca', 'page']);
    }

    public function updatedSubcategoria()
    {
        $this->resetPage();
    }
    public function updatedMarca()
    {
        $this->resetPage();
    }

    public function render()
    {
        //la consulta , puede ser agregada má de forma dinamica
        $productsQuery = Product::query()->whereHas('subcategory.category', function (Builder $query) {
            $query->where('id', $this->category->id);
        });

        //Si se tiene seleccionado algo, osea el filtro se agrega solo sii esque tenemos algo almacenado
        if ($this->subcategoria) {
            $productsQuery = $productsQuery->whereHas('subcategory', function (Builder $query) {
                $query->where('slug', $this->subcategoria);
            });
        }
        if ($this->marca) {
            $productsQuery = $productsQuery->whereHas('brand', function (Builder $query) {
                $query->where('name', $this->marca);
            });
        }

        //la coleccion
        $products = $productsQuery->paginate(20);
        return view('livewire.category-filter', compact('products'));
    }

    public function toggleFavorite($id)
    {
        $product = Product::find($id);
        if (Auth::check()) {
            $product->toggleFavorite();
        } else {
            $this->emitTo('modal-component', 'openModal');
        }

        $this->emitTo('dropdown-favoritos', 'render');
    }
}
