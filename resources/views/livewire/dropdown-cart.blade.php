<div>



    <div class="md:block hidden">
        <x-jet-dropdown width="96">
            <x-slot name="trigger">
                <span class="relative inline-block cursor-pointer px-1">
                    <x-cart color="gray"></x-cart>
                    <!--En caso de los productos esten en el punto rojo-->
                    @if (Cart::count())
                        <span
                            class="mt-2 absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-blue-100 transform translate-x-1/2 -translate-y-1/2 bg-blue-600 rounded-full">{{ Cart::count() }}</span>
                    @else
                        {{--  <span
                        class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span> --}}
                    @endif
                </span>
            </x-slot>
            <x-slot name="content">

                <div class="{{ Cart::content()->count() > 5 ? 'h-96 overflow-y-auto' : 'h-auto overflow-y-auto' }}">

                    <ul class="divide-y">
                        @forelse(Cart::content() as $item)
                            <li>
                                <div class="p-2 flex justify-between mt-2 w-full">
                                    <div class="flex">
                                        <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}"
                                            alt="">
                                        <article class="flex-1 w-full">

                                            <div>
                                                <h3 class="font-bold text-gray-900">
                                                    {{ $item->name }}
                                                </h3>

                                                <div class="flex items-center mt-2">
                                                    @unless (request()->is('shopping-cart'))
                                                        <button class="text-gray-500 focus:outline-none focus:text-gray-600"
                                                            onclick="emularClicDecremento('{{ $item->id }}', event)">
                                                            <svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                            </svg>
                                                        </button>

                                                        <span class="text-gray-700 mx-2">{{ $item->qty }}</span>

                                                        <button class="text-gray-500 focus:outline-none focus:text-gray-600"
                                                            onclick="emularClicIncremento('{{ $item->id }}', event)">
                                                            <svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                                stroke="currentColor">
                                                                <path
                                                                    d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    @endunless
                                                </div>
                                                <div class="flex">

                                                    @isset($item->options['color'])
                                                        <p class="mx-2">- Color:
                                                            {{ __(ucfirst($item->options['color'])) }}
                                                        </p>
                                                    @endisset
                                                    @isset($item->options['size'])
                                                        <p class="mx-2">{{ $item->options['size'] }}</p>
                                                    @endisset
                                                </div>

                                            </div>
                                        </article>
                                    </div>
                                    <span class="text-gray-900"> $
                                        {{ number_format(floor($item->price), 0, ',', '.') }}</span>
                                </div>
                            </li>
                        @empty
                            <li class="py-6 px-4">
                                <p class="text-center text-gray-700">
                                    No tiene agregado ningún item en el carrito
                                </p>
                            </li>
                        @endforelse
                    </ul>
                </div>
                <!--Total a pagar -->
                @if (Cart::count())
                    <div class="border-t">
                        <div class="flex justify-between px-3 py-3">

                            <div class="flex justify-start">
                                <p class="font-semibold text-lg flex items-center text-gray-700"><span
                                        class="font-bold">Total:</span>&nbsp; $
                                    {{ number_format(floor((float) str_replace(',', '', Cart::subtotal())), 0, ',', '.') }}
                                </p>
                            </div>
                            <div class="justify-end">
                                @livewire('remove-to-cart')
                            </div>
                        </div>

                        <div class="px-3">
                            <x-button-link href="{{ route('shopping-cart') }}" class="w-full" color="blue">
                                Ir al Carrito
                            </x-button-link>
                        </div>

                    </div>
                @endif
            </x-slot>
        </x-jet-dropdown>
    </div>

    <div x-data="{ open: false }" class="md:hidden">
        <!-- Botón para abrir el drawer -->
        <button @click="open = true">
            <span class="relative inline-block cursor-pointer px-1">
                <x-cart color="gray"></x-cart>
                <!--En caso de los productos esten en el punto rojo-->
                @if (Cart::count())
                    <span
                        class="mt-2 absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-blue-100 transform translate-x-1/2 -translate-y-1/2 bg-blue-600 rounded-full">{{ Cart::count() }}</span>
                @else
                    {{--  <span
                    class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span> --}}
                @endif
            </span>
        </button>


        <div x-show.transition.opacity="open" @click.away="open = false" :class="{ 'hidden': !open }"
            class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 [&[x-cloak]]:hidden">
            <div class="fixed inset-y-0 right-0 w-full flex">
                <!-- Contenido del Drawer -->
                <div class="w-full bg-white shadow-xl p-4" x-show="open">
                    <div class="overflow-hidden">
                        <h5 id="navigation-favorite-label"
                            class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Mi Carrito de
                            Compras
                        </h5>
                        <button @click="open = false" type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-10 h-10 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                    </div>
                    <div class="py-4 overflow-y-auto">
                        <div
                            class="{{ Cart::content()->count() > 5 ? 'h-96 overflow-y-auto' : 'h-auto overflow-y-auto' }}">

                            <ul class="divide-y">
                                @forelse(Cart::content() as $item)
                                    <li>
                                        <div class="p-2 flex justify-between mt-2 w-full">
                                            <div class="flex">
                                                <img class="h-15 w-20 object-cover mr-4"
                                                    src="{{ $item->options->image }}" alt="">
                                                <article class="flex-1 w-full">

                                                    <div>
                                                        <h3 class="font-bold text-gray-900">
                                                            {{ $item->name }}
                                                        </h3>

                                                        <div class="flex items-center mt-2">
                                                            @unless (request()->is('shopping-cart'))
                                                                <button
                                                                    class="text-gray-500 focus:outline-none focus:text-gray-600"
                                                                    onclick="emularClicDecremento('{{ $item->id }}', event)">
                                                                    <svg class="h-5 w-5" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                        </path>
                                                                    </svg>
                                                                </button>

                                                                <span
                                                                    class="text-gray-700 mx-2">{{ $item->qty }}</span>

                                                                <button
                                                                    class="text-gray-500 focus:outline-none focus:text-gray-600"
                                                                    onclick="emularClicIncremento('{{ $item->id }}', event)">
                                                                    <svg class="h-5 w-5" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" viewBox="0 0 24 24"
                                                                        stroke="currentColor">
                                                                        <path
                                                                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                        </path>
                                                                    </svg>
                                                                </button>
                                                            @endunless
                                                        </div>
                                                        <div class="flex">

                                                            @isset($item->options['color'])
                                                                <p class="mx-2">- Color:
                                                                    {{ __(ucfirst($item->options['color'])) }}
                                                                </p>
                                                            @endisset
                                                            @isset($item->options['size'])
                                                                <p class="mx-2">{{ $item->options['size'] }}</p>
                                                            @endisset
                                                        </div>

                                                    </div>
                                                </article>
                                            </div>
                                            <span class="text-gray-900"> $
                                                {{ number_format(floor($item->price), 0, ',', '.') }}</span>
                                        </div>
                                    </li>
                                @empty
                                    <li class="py-6 px-4">
                                        <p class="text-center text-gray-700">
                                            No tiene agregado ningún item en el carrito
                                        </p>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                        <!--Total a pagar -->
                        @if (Cart::count())
                            <div class="border-t">
                                <div class="flex justify-between px-3 py-3">

                                    <div class="flex justify-start">
                                        <p class="font-semibold text-lg flex items-center text-gray-700"><span
                                                class="font-bold">Total:</span>&nbsp; $
                                            {{ number_format(floor((float) str_replace(',', '', Cart::subtotal())), 0, ',', '.') }}
                                        </p>
                                    </div>
                                    <div class="justify-end">
                                        @livewire('remove-to-cart')
                                    </div>
                                </div>

                                <div class="px-3">
                                    <x-button-link href="{{ route('shopping-cart') }}" class="w-full"
                                        color="blue">
                                        Ir al Carrito
                                    </x-button-link>
                                </div>

                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function emularClicDecremento(productId, event) {
            const decrementButton = document.querySelector(`[data-action="decrement"][data-product-id="${productId}"]`);
            if (decrementButton) {
                decrementButton.click();
            } else {
                // Llamada directa al método de Livewire
                Livewire.emit('decrement', productId);
                console.log('decrem');
            }
            event.stopPropagation();
        }

        function emularClicIncremento(productId, event) {
            const incrementButton = document.querySelector(`[data-action="increment"][data-product-id="${productId}"]`);
            if (incrementButton) {
                incrementButton.click();
            } else {
                // Llamada directa al método de Livewire
                Livewire.emit('increment', productId);
                console.log('incremet');
            }
            event.stopPropagation();
        }
    </script>
</div>
