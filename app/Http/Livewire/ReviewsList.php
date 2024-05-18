<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Livewire\Component;

class ReviewsList extends Component
{
    public function render()
    {
        $reviews = Review::with(['user', 'product'])
            ->where('rating', 5)
            ->latest()
            ->take(10)
            ->get();

        return view('livewire.reviews-list', ['reviews' => $reviews]);
    }
}
