<div>
    <div>

        {{-- <div class="md:-mt-16 max-w-7xl mx-auto md:px-4 sm:px-6 lg:px-24 py-6" x-data="{ activeTab: 1 }">
    <div class="flex justify-center gap-2 mt-8 border-b-2 border-gray-300 dark:border-gray-500 pb-2">
        <a x-on:click="activeTab=1" x-bind:class="activeTab == 1 ? 'bg-gray-100 dark:bg-gray-900 shadow-sm' : ''"
            class="text-neutral-700 dark:text-gray-300 font-bold px-4 py-2 rounded-md cursor-pointer">Descripción</a>
        <a x-on:click="activeTab=2" x-bind:class="activeTab == 2 ? 'bg-gray-100 dark:bg-gray-900 shadow-sm' : ''"
            class="text-neutral-700 dark:text-gray-300 font-bold px-4 py-2 rounded-md cursor-pointer">Reseñas</a>
    </div>
    <div class="bg-gray-200 dark:bg-gray-900 dark:text-gray-300 rounded-md p-2 text-base ck-content" x-show="activeTab==1" x-transition.duration.300>
        {!! $product->description !!}
    </div>
    <div class="bg-gray-200 dark:bg-gray-900 rounded-md text-xl" x-show="activeTab==2" x-transition.duration.300>
        @can('review', $product)
            <form class="bg-gray-200 rounded-md p-4 mt-2" action="{{route('review.store', $product)}}" method="POST">
                @csrf
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full object-cover mr-2" src="{{ Auth::user()->profile_photo_url }}"
                        alt="perfil del usuario logeado">
                        <p>{{ Auth::user()->name}}</p>
                </div>
                <input  placeholder="Agrega una reseña" class="border-gray-300 dark:border-gray-900 order-4 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-2 w-full" type="text" name="comment">

                <div class="flex items-center mt-2 order-3" x-data="{ rating: 5 }">
                    <ul class="flex space-x-2">
                        <li x-bind:class="rating >= 1 ? 'text-yellow-500' : ''">
                            <button type="button" class="focus:outline-none" x-on:click="rating = 1">
                                <i class="fas fa-star"></i>
                            </button>
                        </li>
                        <li x-bind:class="rating >= 2 ? 'text-yellow-500' : ''">
                            <button type="button" class="focus:outline-none" x-on:click="rating = 2">
                                <i class="fas fa-star"></i>
                            </button>
                        </li>
                        <li x-bind:class="rating >= 3 ? 'text-yellow-500' : ''">
                            <button type="button" class="focus:outline-none" x-on:click="rating = 3">
                                <i class="fas fa-star"></i>
                            </button>
                        </li>
                        <li x-bind:class="rating >= 4 ? 'text-yellow-500' : ''">
                            <button type="button" class="focus:outline-none" x-on:click="rating = 4">
                                <i class="fas fa-star"></i>
                            </button>
                        </li>
                        <li x-bind:class="rating >= 5 ? 'text-yellow-500' : ''">
                            <button type="button" class="focus:outline-none" x-on:click="rating = 5">
                                <i class="fas fa-star"></i>
                            </button>
                        </li>
                    </ul>
                    <input class="hidden" type="number" name="rating" x-model="rating">

                    <x-jet-button class="ml-auto">Agregar reseña</x-jet-button>
                </div>
            </form>
        @endcan
        @if ($product->reviews->isNotEmpty())
            <div class="text-gray-700">
                <div class="mt-2 grid grid-cols-1 lg:grid-cols-2 gap-2 xl:grid-cols-3">
                    @foreach ($product->reviews as $review)
                        <div class="flex bg-white rounded-md p-2 mb-2 shadow-md">
                            <div class="flex-shrink-0">
                                <img class="w-10 h-10 rounded-full object-cover mr-4"
                                    src="{{ $review->user->profile_photo_url }}" alt="{{ $review->user->name }}">
                            </div>
                            <div class="flex-1">
                                <p class="font-semibold text-lg">{{ $review->user->name }}</p>
                                <p class="text-sm text-neutral-500">{{ $review->created_at->diffForHumans() }}</p>
                                <div class="text-base">
                                    {!! $review->comment !!}
                                </div>
                            </div>
                            <div>
                                <p>
                                    {{ $review->rating }}
                                    <i class="fas fa-star text-yellow-500"></i>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="p-2 dark:text-gray-300">No hay reseñas de este producto.</div>
        @endif
    </div>
</div> --}}

        <hr class="mt-6 mb-2">

        <div class="flex items-center mb-3">
            <p class="font-semibold">0 comentarios</p>

            <button class="ml-3" x-data="{
                sort: window.Livewire.find('HMpivbFfiTpb5aACI6SH').entangle('sort'),
            }" x-on:click="sort = sort == 'asc' ? 'desc' : 'asc'">
                <i class="fas fa-sort-amount-down"
                    :class="{
                        'fa-sort-amount-down': sort === 'desc',
                        'fa-sort-amount-up': sort === 'asc',
                    }"></i>
                <span x-text="sort == 'desc' ? 'Orden descendente' : 'Orden Ascendente'">Orden descendente</span>
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
                        <div class="border-b">

                            <div>
                                <p class="ck-placeholder" data-placeholder="Agrega un comentario"><br></p>
                            </div>

                        </div>
                    </div>


                    <div class="flex justify-end items-center mt-3">
                        <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('HMpivbFfiTpb5aACI6SH').on('saved', () => {
                            clearTimeout(timeout);
                            shown = true;
                            timeout = setTimeout(() => { shown = false }, 2000);
                        })"
                            x-show.transition.out.opacity.duration.1500ms="shown"
                            x-transition:leave.opacity.duration.1500ms="" style="display: none;"
                            class="text-sm text-gray-600 mr-3">
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

    </div>




</div>
