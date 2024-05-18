<div>
  
    <div x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 16,
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
        grabCursor: true,
    })" class="relative mx-auto">
        @if ($reviews->count() > 3)
            <div class="absolute inset-y-0 left-0 z-10 flex items-center">
                <button @click="swiper.slidePrev()"
                    class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none text-blue-400">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        @endif
        <div class="swiper" x-ref="container">
            <ul class="swiper-wrapper">
                @forelse ($reviews as $review)
                    <li class="swiper-slide text-gray-800">
                        <figure class="flex justify-center">
                            <img class="w-20 h-20 object-cover rounded-full"
                                src="{{ $review->user->profile_photo_url }}" alt="{{ $review->user->name }}">
                        </figure>

                        <div class="bg-white rounded-lg max-w-2xl mx-auto px-8 pt-14 pb-8 shadow-lg -mt-10">
                            <div class="flex">
                                <div class="text-3xl text-indigo-500 leading-tight">“</div>
                                <div class="text-sm text-gray-600 text-center flex-1 mx-5 py-4">
                                    <p>{{ $review->comment }}</p>
                                </div>
                                <div class="text-3xl text-indigo-500 leading-tight self-end">”</div>
                            </div>

                            <div class="mt-4">
                                <p class="text-md text-indigo-500 font-bold text-center">
                                    {{ $review->user->name }}
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-300 text-center">
                                    Compró {{ $review->product->name }}
                                </p>
                            </div>
                        </div>
                    </li>
                @empty
                    <li class="swiper-slide text-center">No hay nuevas reseñas</li>
                @endforelse
            </ul>
        </div>

        @if ($reviews->count() > 3)
            <div class="absolute inset-y-0 right-0 z-10 flex items-center">
                <button @click="swiper.slideNext()"
                    class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none text-blue-400">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        @endif
    </div>

</div>
