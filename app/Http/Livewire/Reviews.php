<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Reviews extends Component
{
    public $open = false;
    public $rating;
    public $comment;
    public $productId;
    public $reviewId; // Nuevo atributo para almacenar el ID de la reseña existente
    protected $rules = [
        'rating' => 'required|integer|between:1,5',
        'comment' => 'required|string',
    ];

    public function mount($productId)
    {
        $this->productId = $productId;
        $this->loadExistingReview(); // Cargar reseña existente al abrir el modal
    }

    public function render()
    {
        return view('livewire.reviews');
    }

    public function openModal()
    {
        if (Auth::check()) {
            $this->loadExistingReview(); // Cargar reseña existente al abrir el modal
            $this->open = true;
        } else {
            $this->emitTo('modal-component', 'openModal');
        }
    }

    public function closeModal()
    {
        $this->open = false;
        $this->reset(['open', 'rating', 'comment', 'reviewId']);
    }

    public function validateRating($star)
    {
        $this->rating = $star;

        if ($star < 1 || $star > 5) {
            $this->addError('rating', 'La calificación debe ser entre 1 y 5.');
        } else {
            $this->rating = $star;
        }
    }

    public function save()
    {
        $this->validate();

        // Actualizar la reseña existente si ya existe
        if ($this->reviewId) {
            $review = Review::find($this->reviewId);
            $review->update([
                'rating' => $this->rating,
                'comment' => $this->comment,
            ]);
        } else {
            // Crear una nueva reseña si no existe
            Review::create([
                'user_id' => auth()->user()->id,
                'product_id' => $this->productId,
                'rating' => $this->rating,
                'comment' => $this->comment,
            ]);
        }

        // Resetear valores y cerrar el modal
        $this->reset(['open', 'rating', 'comment', 'reviewId']);
    }

    private function loadExistingReview()
    {
        $user = auth()->user();

        if (Auth::check()) {
            // Buscar la reseña existente del usuario para este producto
            $existingReview = Review::where('user_id', $user->id)
                ->where('product_id', $this->productId)
                ->first();

            if ($existingReview) {
                // Si existe, cargar los valores en el componente
                $this->rating = $existingReview->rating;
                $this->comment = $existingReview->comment;
                $this->reviewId = $existingReview->id;
            }
        }
    }
}
