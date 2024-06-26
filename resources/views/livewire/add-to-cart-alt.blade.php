<div>

    <div class="flex items-center mt-2">
        <button wire:loading.attr="disabled" wire:target="decrement" wire:click="decrement"
            class="text-gray-500 focus:outline-none focus:text-gray-600">
            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" stroke="currentColor">
                <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </button>

        <span class="text-gray-700 mx-2">{{ $qty }}</span>

        <button ire:loading.attr="disabled" wire:target="increment" wire:click="increment" :disabled="$quantity == 0"
            class="{{ $quantity == 0 ? 'bg-gray-200 cursor-not-allowed' : '' }}"
            style="{{ $quantity == 0 ? 'pointer-events: none;' : '' }}"
            class="text-gray-500 focus:outline-none focus:text-gray-600">
            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" stroke="currentColor">
                <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                </path>
            </svg>
        </button>
    </div>


</div>
