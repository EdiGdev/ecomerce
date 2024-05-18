<div>

    <div x-data="{ open: false }" class="md:hidden mt-2">
        <!-- Botón para abrir el drawer -->
        <button @click="open = true"
            class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <div class="relative">

                <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 19">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 4C5.5-1.5-1.5 5.5 4 11l7 7 7-7c5.458-5.458-1.542-12.458-7-7Z" />
                </svg>
                @php
                    $user = Auth::user();
                    $favoritesCount = $user ? $user->favorites()->count() : 0;
                @endphp
                @if ($favoritesCount)
                    <span
                        class="mt-0 absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-blue-100 transform translate-x-1/2 -translate-y-1/2 bg-blue-600 rounded-full">{{ $favoritesCount }}</span>
                @endif
            </div>

            <span
                class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">
                Favoritos</span>
        </button>


        <div x-show.transition.opacity="open" @click.away="open = false" :class="{ 'hidden': !open }"
            class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 [&[x-cloak]]:hidden">
            <div class="fixed inset-y-0 right-0 w-full flex">
                <!-- Contenido del Drawer -->
                <div class="w-full bg-white shadow-xl p-4" x-show="open">
                    <div class="overflow-hidden">
                        <h5 id="navigation-favorite-label"
                            class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Mis Favoritos
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
                        <div class="{{ $favoritesCount ? 'h-auto overflow-y-auto' : '' }}">
                            <ul class="divide-y">
                                @forelse($user->favorites ?? [] as $item)
                                    <li class="flex p-2 border-b border-gray-200">
                                        <img class="h-15 w-20 object-cover mr-4"
                                            src="{{ Storage::url($item->product->images->first()->url) }}" alt="">
                                        <article class="flex-1">
                                            <h1 class="font-bold">{{ $item->product->name }}</h1>
                                            <div class="flex">
                                                <p>Cant disp: {{ $item->product->quantity }}</p>
                                            </div>
                                            <p> ${{ number_format(floor($item->product->price), 0, ',', '.') }}</p>
                                        </article>
                                    </li>
                                @empty
                                    <li class="py-6 px-4">
                                        <p class="text-center text-gray-700">
                                            No hay productos en la lista de deseos
                                        </p>
                                    </li>
                                @endforelse
        
                                @if ($favoritesCount)
                                    <div class="py-2 px-3">
                                        <x-button-enlace href="{{ route('shopping-cart') }}" color="blue" class="w-full">
                                            Ver toda la lista de deseos
                                        </x-button-enlace>
                                    </div>
                                @endif
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="md:block hidden">
        <x-jet-dropdown width="96">
            <x-slot name="trigger">
                <span class="relative inline-block cursor-pointer px-1">
                    <x-favoritos color="gray"> </x-favoritos>

                    @php
                        $user = Auth::user();
                        $favoritesCount = $user ? $user->favorites()->count() : 0;
                    @endphp

                    @if ($favoritesCount)
                        <span
                            class="mt-2 absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-blue-100 transform translate-x-1/2 -translate-y-1/2 bg-blue-600 rounded-full">{{ $favoritesCount }}</span>
                    @endif
                </span>
            </x-slot>

            <x-slot name="content">
                <div class="{{ $favoritesCount ? 'h-auto overflow-y-auto' : '' }}">
                    <ul class="divide-y">
                        @forelse($user->favorites ?? [] as $item)
                            <li class="flex p-2 border-b border-gray-200">
                                <img class="h-15 w-20 object-cover mr-4"
                                    src="{{ Storage::url($item->product->images->first()->url) }}" alt="">
                                <article class="flex-1">
                                    <h1 class="font-bold">{{ $item->product->name }}</h1>
                                    <div class="flex">
                                        <p>Cant disp: {{ $item->product->quantity }}</p>
                                    </div>
                                    <p> ${{ number_format(floor($item->product->price), 0, ',', '.') }}</p>
                                </article>
                            </li>
                        @empty
                            <li class="py-6 px-4">
                                <p class="text-center text-gray-700">
                                    No hay productos en la lista de deseos
                                </p>
                            </li>
                        @endforelse

                        @if ($favoritesCount)
                            <div class="py-2 px-3">
                                <x-button-enlace href="{{ route('shopping-cart') }}" color="blue" class="w-full">
                                    Ver toda la lista de deseos
                                </x-button-enlace>
                            </div>
                        @endif
                    </ul>
                </div>
            </x-slot>
        </x-jet-dropdown>
    </div>




</div>
