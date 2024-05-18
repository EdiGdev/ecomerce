<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateProduct extends Component
{
    protected $rules = [
        'category_id' => 'required',
        'subcategory_id' => 'required',
        'name' => 'required',
        'slug' => 'required|unique:products',
        'description' => 'required',
        'brand_id' => 'required',
        'price' => 'required',
        'discount' => ['numeric', 'between:0,100'],
    ];

    public $categories,  $subcategories = [], $brands = [];
    public $category_id = '', $subcategory_id = '', $brand_id = '';
    public $name, $slug,  $description, $price, $quantity, $discount = 0;
    public function mount()
    {
        $this->categories = Category::orderBy('id', 'desc')->get();
    }
    public function updatedCategoryId($value)
    {
        $this->subcategories = Subcategory::where('category_id', $value)->get();

        //marcas asociadas a las categorias que eh asociado
        $this->brands = Brand::whereHas('categories', function (Builder $query) use ($value) { //usa la vaariable dentro de la funcion que lleva como parametro
            $query->where('category_id', $value);
        })->get();

        $this->reset(['subcategory_id', 'brand_id']); //cada que se actualice una categoria se resetea todo
    }
    
    
    
    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }
    //propiedad computada
    public function getSubcategoryProperty()
    { //busca la subcategory y busca cuyo id coincida
        return Subcategory::find($this->subcategory_id);
    }

    //toma la propiedad de rules como reglas de validacion
    public function save()
    {
        if ($this->subcategory_id && !$this->subcategory->color && !$this->subcategory->size) {
            $this->rules['quantity'] = 'required';
        } //cantidad

        $this->validate();
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->subcategory_id = $this->subcategory_id;
        $product->brand_id = $this->brand_id;
        $product->discount = $this->discount;

        if ($this->subcategory_id && !$this->subcategory->color && !$this->subcategory->size) {
            $product->quantity = $this->quantity;
        }
        $product->save();

        return redirect()->route('admin.products.edit', $product);
    }
    public function render()
    {
        return view('livewire.admin.create-product')->layout('layouts.admin');
    }
}
