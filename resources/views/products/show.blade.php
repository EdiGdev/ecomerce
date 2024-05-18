<x-app-layout>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8 px-4 relative">

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 w-full">

                <div class="col-span-1 lg:col-span-3 order-2 lg:order-1">

                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 mt-2 py-4 w-full">
                        <div>
                            <div class="flexslider">
                                @livewire('product-favorite-button', ['product' => $product], key($product->id))
                                <ul class="slides">

                                    @foreach ($product->images as $image)
                                        <li data-thumb="{{ Storage::url($image->url) }}">
                                            <img class="w-24 h-24 object-cover" src="{{ Storage::url($image->url) }}" />
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="-mt-10 text-gray-700">
                                <h2 class="font-bold text-lg">Descripción</h2>
                                {!! $product->description !!}
                            </div>
                        </div>

                    </div>

                </div>


                <aside class="col-span-1 lg:col-span-2 order-1 lg:order-2 py-4">

                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h1 class="text-2xl font-bold text-gray-700">{{ $product->name }}</h1>
                                <div class="flex">
                                    <p class="text-gray-700">Marca: <a class="underline capitalize hover:text-blue-500"
                                            href="">{{ $product->brand->name }}</a></p>
                                    <div class="text-gray-700 mx-6">
                                        <div class="flex items-center  mb-5">
                                            <!-- Estrella por defecto -->
                                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 22 20">
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

                                    </div>

                                    <a href=""
                                        class="text-blue-500 hover:text-blue-600 underline">{{ $product->reviews->count() }}
                                        reseñas</a>

                                </div>
                                <div class="text-2xl font-semibold text-gray-700 my-4">
                                    <div class="flex justify-between">
                                        <div class="font-semibold mb-2 space-x-3">
                                            @php
                                                $discountDecimal = $product->discount / 100;

                                                $discountedPrice = $product->price * $discountDecimal;

                                                $discountAmount = $product->price - $discountedPrice;
                                            @endphp
                                            <span>
                                                @if ($product->discount > 0)
                                                    $ {{ number_format(floor($discountAmount), 0, ',', '.') }}
                                                @else
                                                    $ {{ number_format(floor($product->price), 0, ',', '.') }}
                                                @endif
                                            </span>
                                            @if ($product->discount > 0)
                                                <span class="line-through text-red-500">
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
                                </div>
                                <div class="bg-white rounded-lg shadow-lg mb-6">
                                    <div class="flex items-center p-4">
                                        <span
                                            class="flex items-center justify-center h-10 w-10 rounded-full bg-lime-600">
                                            <i class="fas fa-truck text-sm text-white"></i>
                                        </span>
                                        <div class="ml-4">
                                            <p class="text-lg font-semibold text-lime-600">Se hacen envíos solo a
                                                Ecuador</p>
                                            <p>Recíbelo el
                                                {{ Date::now()->addDay(7)->locale('es')->format('l j F') }}</p>
                                        </div>
                                    </div>
                                </div>
                                @if ($product->subcategory->size)
                                    @livewire('add-cart-item-size', ['product' => $product])
                                @elseif($product->subcategory->color)
                                    @livewire('add-cart-item-color', ['product' => $product])
                                @else
                                    @livewire('add-cart-item', ['product' => $product])
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="mt6">
                        @livewire('reviews', ['productId' => $product->id])
                    </div>


                </aside>

            </div>

            @auth
                <div class="mt-8 lg:py-8 py-4">
                    @livewire('question', ['model' => $product])
                </div>
            @endauth
        </div>

    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
    @endpush
</x-app-layout>


{{-- <div>

                        <hr class="mt-6 mb-2">

                        <div class="flex items-center mb-3">
                            <p class="font-semibold">7 comentarios</p>

                            <button class="ml-3" 
                                x-on:click="sort = sort == 'asc' ? 'desc' : 'asc'">
                                <i class="fas"
                                    :class="{
                                        'fa-sort-amount-down': sort === 'desc',
                                        'fa-sort-amount-up': sort === 'asc',
                                    }"></i>
                                <span
                                    x-text="sort == 'desc' ? 'Orden descendente' : 'Orden Ascendente'"></span>
                            </button>
                        </div>

                        <div class="flex">
                            <figure class="flex-shrink-0 mr-4">
                                <img class="w-10 h-10 sm:w-12 sm:h-12 object-cover rounded-full"
                                    src="https://ui-avatars.com/api/?name=E+A+G+C&amp;color=7F9CF5&amp;background=EBF4FF"
                                    alt="">
                            </figure>

                            <div class="w-[calc(100%-3.5rem)] sm:w-[calc(100%-4rem)]">
                                <form wire:submit.prevent="store">

                                    <div class="ckeditor">
                                        <div class="border-b" wire:ignore x-data="{
                                            myEditor: '',
                                            isFocus: false,
                                            content: window.Livewire.find('yYkWheczBhlTTuaeRKD0').entangle('question_create.body').defer
                                        }"
                                            x-init="$watch('content', value => {
                                                if (!value) {
                                                    this[myEditor].setData('');
                                                }
                                            });
                                            
                                            BalloonEditor.create($refs.myEditor, {
                                                placeholder: 'Agrega un comentario',
                                            
                                                simpleUpload: {
                                                    // The URL that the images are uploaded to.
                                                    uploadUrl: 'https://codersfree.com/image/upload',
                                                }
                                            }).then(editor => {
                                            
                                                myEditor = Math.random().toString(36).substr(2, 10);
                                                this[myEditor] = editor;
                                            
                                                if (content) {
                                                    editor.setData(content);
                                                    editor.focus();
                                                    isFocus = true;
                                                }
                                            
                                            
                                                editor.model.document.on('change:data', () => {
                                                    content = editor.getData()
                                                })
                                            
                                                editor.editing.view.document.on('change:isFocused', (evt, data, isFocused) => {
                                                    if (isFocused) {
                                                        isFocus = true;
                                                    } else {
                                                        isFocus = false;
                                                    }
                                                });
                                            });">

                                            <div x-ref="myEditor"
                                                x-bind:class="isFocus ? 'bg-white' : ''">
                                            </div>

                                        </div>
                                    </div>


                                    <div class="flex justify-end items-center mt-3">
                                        <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('yYkWheczBhlTTuaeRKD0').on('saved', () => { clearTimeout(timeout);
                                            shown = true;
                                            timeout = setTimeout(() => { shown = false }, 2000); })"
                                            x-show.transition.out.opacity.duration.1500ms="shown"
                                            x-transition:leave.opacity.duration.1500ms
                                            style="display: none;" class="text-sm text-gray-600 mr-3">
                                            Guardado.
                                        </div>

                                        <button type="submit"
                                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                            Comentar
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>


                        <p class="text-lg font-semibold mt-6 mb-4">Comentarios:</p>

                        
                    </div> --}}
