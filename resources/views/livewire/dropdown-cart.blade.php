<div>
    <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <span class="relative inline-block cursor-pointer px-1">
                <x-cart size="30" color="white"></x-cart>
                <!--En caso de los productos esten en el punto rojo-->
                @if(Cart::count())
                    <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-
red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ Cart::count() }}</span>
                @else
                <span class="absolute top-0 right-0 inline-block w-2 h-2 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full"></span>
                @endif
            </span>
        </x-slot>
        <x-slot name="content">
            <ul>
                @forelse(Cart::content() as $item)
                    <li class="flex p-2 border-b border-gray-200">
                        <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}" alt="">
                        <article class="flex-1">
                            <h1 class="font-bold">{{ $item->name }}</h1>
                            <!--Solo se muestre en donde estan los colores-->
                            <div class="flex">
                                <p class="">Cant: {{ $item->qty }}</p>
                                @isset($item->options['color'])
                                    <p class="mx-2">- Color: {{ __(ucfirst($item->options['color'])) }}</p>
                                @endisset
                                @isset($item->options['size'])
                                    <p class="mx-2">{{ $item->options['size'] }}</p>
                                @endisset
                            </div>
                            <p>{{ $item->price }} &euro;</p>
                        </article>
                    </li>
                @empty
                    <li class="py-6 px-4">
                        <p class="text-center text-gray-700">
                            No tiene agregado ningún item en el carrito
                        </p>
                    </li>
                @endforelse
            </ul>
            <!--Total a pagar -->
            @if(Cart::count())
                <div class="px-3 py-2" >
                    <p class="text-lg text-gray-700"><span class="font-bold">Total:</span> {{ Cart::subtotal() }} &euro;</p>
                    <x-button-link href="{{ route('shopping-cart') }}" class="w-full" color="orange">
                        Ir al carrito de compras
                    </x-button-link>
                </div>
            @endif
        </x-slot>
    </x-jet-dropdown>
</div>
