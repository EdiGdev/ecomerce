<div>
    <div
        class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
        <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
            <a href="/"
                class=" inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <svg class="w-6 h-6 mb-1 {{ request()->routeIs('home') ? 'text-blue-500' : 'text-gray-500' }}  dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9" />
                </svg>

                <span
                    class="text-sm {{ request()->routeIs('home') ? 'text-blue-500' : 'text-gray-500' }}   dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Inicio</span>
            </a>
            <button type="button" data-drawer-target="drawer-navigation-categories"
                data-drawer-show="drawer-navigation-categories" data-drawer-backdrop="true"
                aria-controls="drawer-navigation-categories"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="21" height="20" fill="none"
                    viewBox="0 0 21 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3.308 9a2.257 2.257 0 0 0 2.25-2.264 2.25 2.25 0 0 0 4.5 0 2.25 2.25 0 0 0 4.5 0 2.25 2.25 0 1 0 4.5 0C19.058 5.471 16.956 1 16.956 1H3.045S1.058 5.654 1.058 6.736A2.373 2.373 0 0 0 3.308 9Zm0 0a2.243 2.243 0 0 0 1.866-1h.767a2.242 2.242 0 0 0 3.733 0h.767a2.242 2.242 0 0 0 3.733 0h.767a2.247 2.247 0 0 0 1.867 1A2.22 2.22 0 0 0 18 8.649V19H9v-7H5v7H2V8.524c.37.301.83.469 1.308.476ZM12 12h3v3h-3v-3Z" />
                </svg>
                <span
                    class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Categorias</span>
            </button>

            @livewire('search')


            @livewire('dropdown-favoritos')
        </div>
    </div>

    <!-- drawer component -->
    <div id="drawer-navigation-categories"
        class="fixed top-16 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-full dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-navigation-categories-label">
        <div class="overflow-hidden">
            <h5 id="drawer-navigation-categories-label"
                class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Categorias M y G</h5>
            <button type="button" data-drawer-hide="drawer-navigation-categories"
                aria-controls="drawer-navigation-categories"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-10 h-10 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
        </div>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium mb-28 divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($categories as $category)
                    <li class="divide-y divide-gray-200 dark:divide-gray-700">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-category{{ $category->id }}"
                            data-collapse-toggle="dropdown-category{{ $category->id }}">

                            <span
                                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                                {!! $category->icon !!}
                            </span>

                            <a href="{{ route('categories.show', $category) }}"
                                class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap hover:underline">
                                {{ $category->name }}</a>
                            <svg class="w-3 h-3 transition-transform transform" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>

                        </button>
                        <ul id="dropdown-category{{ $category->id }}"
                            class="hidden py-2 space-y-2 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($category->subcategories as $subcategory)
                                <li>
                                    <a href="{{ route('categories.show', $category) . '?subcategoria=' . $subcategory->slug }}"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        {{ $subcategory->name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>


</div>
