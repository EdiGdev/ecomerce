<div>

    <div>
        <button type="button" wire:click="openModalSearch"
            class="md:hidden mt-2 inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
            <span
                class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Buscar</span>
        </button>
        
        <button wire:click="openModalSearch" class="md:block hidden mt-2">
            <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
        </button>

        @if ($showModalSearch)
            <div class="fixed inset-0 bg-black bg-opacity-50 z-40" wire:click="closeModalSearch"></div>

            <div class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto max-h-screen flex justify-center"
                wire:click="closeModalSearch" wire:keydown.escape="closeModalSearch">

                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                        <div class="px-3 py-2 border-b rounded-t dark:border-gray-600" x-data x-init="$refs.searchInput.focus()">
                            <form wire:submit.prevent="search" autocomplete="off" class="flex items-center">

                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>

                                    </div>
                                    <input type="text" wire:model="search" x-ref="searchInput"
                                        placeholder="¿Estás buscando algún producto?" wire:click.stop
                                        class="pl-8 w-full bg-transparent rounded-full outline-none border-transparent focus:border-transparent focus:ring-transparent text-base dark:text-white"
                                        required>
                                </div>

                            </form>
                        </div>

                        <!-- Aquí van los resultados de la búsqueda -->
                        @forelse ($products as $product)
                            <a href="{{ route('products.show', $product) }}"
                                class="flex items-center border-b py-2 px-3">
                                <img class="w-12 h-12 object-cover rounded-md"
                                    src="{{ Storage::url($product->images->first()->url) }}">
                                <div class="ml-4">
                                    <p class="text-lg font-semibold leading-5">{{ $product->name }}</p>
                                    <p>Categoría: {{ $product->subcategory->category->name }}</p>
                                </div>
                            </a>

                        @empty
                            {{-- :class="{ 'hidden': !$wire.open }"  @click.away="$wire.open = false" --}}
                            <div class="text-lg leading-5 flex justify-center text-center -space-y-2">

                                <div class="p-14">
                                    No hay búsquedas recientes.
                                    <br>
                                    <br>
                                </div>

                            </div>
                        @endforelse

                    </div>
                </div>
        @endif
    </div>



    {{-- <div class="flex-1 relative x-data">
    <form action="{{ route('search') }}" autocomplete="off" method="get">
        <x-jet-input name="name" wire:model="search" type="text" class="flex w-full"
                     placeholder="¿Estás buscando algún producto?"></x-jet-input>
        <button class="absolute top-0 right-0 w-12 h-full bg-blue-500 flex items-center justify-center rounded-r-md">
            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
        </button>
    </form>
    <div class="absolute w-full mt-1 hidden" :class="{ 'hidden' : !$wire.open } " @click.away="$wire.open = false">
        <!--Muestra la tarjeta de la busqueda-->
        <!--La clase se agrega y se quita dinamicamente y el evento click es cuando pincha fuera-->
        <div class="bg-white rounded-lg shadow-lg">
            <div class="px-4 py-3 space-y-1">
                @forelse ($products as $product)
                    <a href="{{ route('products.show', $product) }}" class="flex"><!--Ponemos la Url a la que queremos que rediriga-->
                        <img class="w-16 h-12 object-cover" src="{{ Storage::url($product->images->first()->url) }}">
                        <div class="ml-4 text-gray-700">
                            <p class="text-lg font-semibold leading-5">{{$product->name}}</p>
                            <p>Categoria: {{$product->subcategory->category->name}}</p>
                        </div>
                    </a>
                @empty
                    <!--ensaje en caso de que no exista ningún producto coincidente con nuestra busqueda-->
                    <p class="text-lg leading-5">
                        No existe ningún registro con los parámetros especificados
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</div> --}}

</div>
