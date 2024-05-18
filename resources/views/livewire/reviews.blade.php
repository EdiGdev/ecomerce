<div>

    <div>
        <button wire:click="openModal"
            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition w-full inline-flex justify-center mt-5">
            Calificar este Producto
        </button>

        @if ($open)
            <div class="fixed inset-0 flex items-center justify-center z-50">
                <div class="fixed inset-0 transition-opacity" wire:click="closeModal">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <div class="bg-white w-full max-w-lg p-6 rounded-md overflow-hidden z-50">
                    <div class="text-lg">
                        <h2 class="text-3xl font-semibold text-center mt-4">¡Tu opinión importa!</h2>
                    </div>

                    <div class="mt-4">
                        <p class="text-center">¿Cómo fue tu experiencia?</p>

                        <div class="flex justify-center space-x-8 mt-4 text-gray-600">
                            @for ($i = 1; $i <= 5; $i++)
                                <button wire:click="validateRating({{ $i }})">
                                    <i class="fas fa-star text-3xl {{ $rating >= $i ? 'text-yellow-300' : '' }}"></i>
                                </button>
                            @endfor
                        </div>

                        @error('rating')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror

                        <textarea wire:model.defer="comment" rows="3" placeholder="Mensaje..."
                            class="w-full p-4 rounded-md text-gray-800 bg-gray-50 mt-6"></textarea>

                        @error('comment')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror

                        <button type="button" wire:click="save" wire:loading.attr="disabled" wire:target="save"
                            class="w-full py-3 mt-8 font-semibold rounded-md text-gray-50 bg-blue-600">
                            @if ($reviewId)
                                Actualizar reseña
                            @else
                                Dejar reseña
                            @endif
                        </button>
                    </div>

                    <div class="flex flex-row justify-end text-right">
                        <div class="flex justify-center items-center mt-10">
                            <p class="text-gray-600 text-sm">Tu comentario nos ayudará a mejorar</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>


</div>
