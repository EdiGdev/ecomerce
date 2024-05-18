<div wire:init="loadProducts">
    @if (count($products))
        <div class="glider-contain">
            <ul class="py-4 glider-{{ $category->id }}">
                @foreach ($products as $product)
                    <li class="w-96 shadow  {{ !$loop->last ? 'sm:mr-4' : '' }}">

                        <article class=" bg-white overflow-hidden sm:rounded-lg flex flex-col h-full">

                            <figure class="relative aspect-w-16 aspect-h-9">
                                <div class="absolute left-0 top-0 h-16 w-16">
                                    @if ($product->discount > 0)
                                        <div
                                            class="absolute left-[-34px] top-[32px] z-10 w-[170px] -rotate-45 transform bg-blue-900 py-1 text-center font-semibold text-xl text-white">
                                            {{ $product->discount }}% dto.
                                        </div>
                                    @endif
                                </div>

                                @livewire('product-favorite-button', ['product' => $product], key($product->id))

                                <a href="{{ route('products.show', $product) }}">

                                    <img class="object-cover object-center w-full h-60"
                                        src="{{ Storage::url($product->images->first()->url) }}" alt=""></a>
                            </figure>

                            <div class="px-6 pt-4 pb-5 flex-1 flex flex-col">
                                <h1 class="text-lg mb-1 leading-5">
                                    <a href="{{ route('products.show', $product) }}">
                                        {{ Str::limit($product->name, 40) }}
                                    </a>
                                </h1>

                                <div class="text-gray-500 text-sm mb-1 mt-auto">{!! Str::limit($product->description, 60) !!} </div>

                                <div class="flex items-center mt-2.5 mb-5">
                                    <!-- Estrella por defecto -->
                                    <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>

                                    <!-- Resto de las estrellas -->
                                    @php
                                        $averageRating = $product->reviews->avg('rating');
                                    @endphp

                                    @for ($i = 2; $i <= 5; $i++)
                                        <svg class="w-4 h-4 {{ $i <= $averageRating ? 'text-yellow-300' : 'text-gray-200 dark:text-gray-600' }} mr-1"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    @endfor

                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">
                                        @if ($averageRating > 1)
                                            {{ number_format($averageRating, 1) }}
                                        @else
                                            1.0
                                        @endif
                                    </span>
                                </div>

                                <div class="flex justify-between">
                                    <div class="font-semibold mb-2 space-x-3">
                                        @php
                                            $discountDecimal = $product->discount / 100;

                                            $discountedPrice = $product->price * $discountDecimal;

                                            $discountAmount = $product->price - $discountedPrice;
                                        @endphp
                                        <span class="text-xl font-bold text-gray-900 dark:text-white">
                                            @if ($product->discount > 0)
                                                $ {{ number_format(floor($discountAmount), 0, ',', '.') }}
                                            @else
                                                $ {{ number_format(floor($product->price), 0, ',', '.') }}
                                            @endif
                                        </span>
                                        @if ($product->discount > 0)
                                            <span class="line-through text-red-500 text-sm">
                                                $ {{ number_format(floor($product->price), 0, ',', '.') }}
                                            </span>
                                        @endif

                                    </div>

                                    <div class="mx-2 group">

                                        <a href="{{ route('product.wp', ['product' => $product]) }}"
                                            class="flex items-center justify-center text-white bg-[#25d366] rounded-full w-10 h-10 hover:bg-[#25d366] dark:bg-[#25d366] dark:hover:bg-[#25d366] focus:ring-4 focus:ring-[#25d366] focus:outline-none dark:focus:ring-[#25d366]">
                                            <i class="fab fa-whatsapp text-2xl"></i>
                                        </a>

                                    </div>
                                </div>

                                @livewire('add-to-cart', ['product' => $product], key($product->id))

                            </div>
                        </article>


                    </li>
                @endforeach

            </ul>

            {{-- div class="glider-prev absolute left-0 z-10 flex items-center" aria-label="Previous">
                <button 
                    class="bg-white -ml-2 lg:-ml-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none text-blue-400">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="glider-next absolute  right-0 z-10 flex items-center" aria-label="Next">
                <button 
                    class="bg-white -mr-2 lg:-mr-4 flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none text-blue-400">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div> --}}

            <button aria-label="Previous" class="glider-prev">
                <svg class="-mx-4 w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" width="24" height="24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <button aria-label="Next" class="glider-next">
                <svg class="-mx-4 w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" width="24" height="24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <div role="tablist" class="dots"></div>
            
        </div>
    @else
        <div class="mb-4 h-48 flex justify-center items-center bg-white shadow-xl border border-gray-100 rounded-lg">
            <div class="rounded animate-spin ease duration-300 w-10 h-10 border-2 border-indigo-500"></div>
        </div>
    @endif


</div>
