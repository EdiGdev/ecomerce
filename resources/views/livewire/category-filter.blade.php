<div>
    <!---Crea la tarjeta de categorias-->
    <div class="bg-white rounded-lg shadow-lg mb-6">
        <div class="px-6 py-2 flex justify-between items-center">
            <h1 class="font-semibold text-gray-700 uppercase">{{ $category->name }}</h1>
            <div class="hidden md:block  grid grid-cols-2 border border-gray-200 divide-x divide-gray-200 text-gray-500">

                <!--Botones de la derecha de , cambia de color si esta activo -->
                <i class="fas fa-border-all p-3 cursor-pointer {{ $view == 'grid' ? 'text-blue-500' : '' }}"
                    wire:click="$set('view','grid')"></i>
                <i class="fas fa-th-list p-3 cursor-pointer {{ $view == 'list' ? 'text-blue-500' : '' }}"
                    wire:click="$set('view', 'list')"></i>

            </div>
        </div>
    </div>

    <!--la sección de las subcategorías ocupa la primera y el listado de productos las cuatro restantes.-->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        <aside>
            <h2 class="font-semibold text-center mb-2">Subcategorías</h2>
            <!--Subcategorias-->
            <ul class="divide-y divide-gray-200">
                @foreach ($category->subcategories as $subcategory)
                    <li class="py-2 text-sm ">
                        <a class="cursor-pointer hover:text-blue-500 capitalize {{ $subcategoria == $subcategory->slug ? 'text-blue-500 font-semibold' : '' }}"
                            wire:click="$set('subcategoria', '{{ $subcategory->slug }}')">{{ $subcategory->name }}</a>
                    </li>
                @endforeach
            </ul>

            <!--Marcas-->
            <h2 class="font-semibold text-center mt-4 mb-2">Marcas</h2>
            <ul class="divide-y divide-gray-200">
                @foreach ($category->brands as $brand)
                    <li class="py-2  text-sm ">
                        <a class="cursor-pointer hover:text-blue-500 capitalize {{ $marca == $brand->name ? 'text-blue-500 font-semibold' : '' }}"
                            wire:click="$set('marca', '{{ $brand->name }}')">{{ $brand->name }}</a>
                    </li>
                @endforeach
            </ul>

            <!--Boton de filtro-->
            <x-jet-button class="mt-4" wire:click="limpiar">
                Eliminar Filtros
            </x-jet-button>
        </aside>

        <!--Itera todos los productos en la parte derecha-->
        <div class="md:col-span-2 lg:col-span-4">
            <!--Si tenemos almacenado el grid la vista cambia a forma de list-->
            @if ($view == 'grid')
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($products as $product)
                        <li class="bg-white rounded-lg shadow ">

                            <article class=" bg-white overflow-hidden sm:rounded-lg flex flex-col h-full">

                                <figure class="relative aspect-w-16 aspect-h-9">

                                    <button wire:click="toggleFavorite({{ $product->id }})"
                                        class="absolute top-2 right-2 {{ $product->isFavorited() ? 'bg-blue-600' : 'bg-red-600' }} text-white p-1.5 rounded-full hover:{{ $product->isFavorited() ? 'bg-blue-500' : 'bg-red-500' }} focus:outline-none focus:{{ $product->isFavorited() ? 'bg-blue-500' : 'bg-blue-500' }}">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 18">
                                            <path
                                                d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z" />
                                        </svg>
                                    </button>

                                    <a href="{{ route('products.show', $product) }}">
                                        <img class="object-cover object-center w-full h-60"
                                            src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                    </a>
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
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 22 20">
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

                    @empty
                        <li class="md:col-span-2 lg:col-span-4">
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                role="alert">
                                <strong class="font-bold">Upss!</strong>
                                <span class="block sm:inline">No existen productos con ese filtro.</span>
                            </div>
                        </li>
                    @endforelse
                </ul>
            @else
                <ul>
                    @forelse($products as $product)
                        <x-products-list :product="$product"></x-products-list>
                    @empty
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Upss!</strong>
                            <span class="block sm:inline">No existen productos con ese filtro.</span>
                        </div>
                    @endforelse
                </ul>
            @endif
            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>

    </div>
</div>
