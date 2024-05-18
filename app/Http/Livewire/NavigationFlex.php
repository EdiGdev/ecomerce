<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class NavigationFlex extends Component
{
    public function render()
    {
        $categories = Category::orderBy('id', 'desc')->get();

        return view('livewire.navigation-flex', compact('categories'));
    }
}
