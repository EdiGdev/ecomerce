<div>
    <p class="mb-4">
        <span class="font-semibold text-lg">Stock disponible:</span>
        <span class="{{ $quantity == 0 ? 'text-red-500' : 'text-gray-700' }}">
            {{ $quantity == 0 ? 'Sin stock' : $quantity }}
        </span>
    </p>


    @if ($product->subcategory->size || $product->subcategory->color)
        <a href="{{ route('products.show', $product) }}"
            class="w-full h-10 inline-flex justify-center items-center px-4 py-2 bg-blue-500
border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600
active:bg-blue-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue disabled:opacity-25
transition"
            color="blue"><svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Agregar
        </a>
    @else
        @if (!$addedToCart && !$product->subcategory->size && !$product->subcategory->size)
        <div class="flex-1">
            <x-button wire:click="addToCart" wire:loading.attr="disabled" wire:target="addToCart" color="blue"
                class="w-full h-10 inline-flex justify-center items-center px-4 py-2 bg-blue-500
                border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600
                active:bg-blue-500 focus:outline-none focus:border-blue-500 focus:shadow-outline-blue disabled:opacity-25
                transition {{ $quantity == 0 ? 'bg-gray-200 cursor-not-allowed' : '' }}"
                :disabled="$quantity == 0"
                style="{{ $quantity == 0 ? 'pointer-events: none;' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Agregar
            </x-button>
        </div>
        
        
        
        @else
            <div class="flex justify-center items-center space-x-12">
                <x-btn-secudary wire:loading.attr="disabled" wire:target="decrement" wire:click="decrement"
                    data-product-id="{{ $product->id }}" data-action="decrement">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 2">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h16" />
                    </svg>
                </x-btn-secudary>

                <div>
                    <span class="mx-2 text-gray-700">{{ $qty }}</span>
                </div>

                <x-btn-primary wire:loading.attr="disabled" wire:target="increment" wire:click="increment"
                    :disabled="$quantity == 0" class="{{ $quantity == 0 ? 'bg-gray-200 cursor-not-allowed' : '' }}"
                    style="{{ $quantity == 0 ? 'pointer-events: none;' : '' }}" data-product-id="{{ $product->id }}"
                    data-action="increment">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </x-btn-primary>
                
            </div>
        @endif
    @endif



</div>
