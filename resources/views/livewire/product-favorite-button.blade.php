<div>
    <button wire:click="toggleFavorite"
        class="z-10 absolute top-2 right-2 {{ $isFavorited ? 'bg-blue-600' : 'bg-red-600' }} text-white p-1.5 rounded-full hover:{{ $isFavorited ? 'bg-blue-500' : 'bg-red-500' }} focus:outline-none focus:{{ $isFavorited ? 'bg-blue-500' : 'bg-blue-500' }}">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
            <path
                d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z" />
        </svg>
    </button>

</div>
