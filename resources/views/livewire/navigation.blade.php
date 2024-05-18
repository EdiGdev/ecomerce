<!-- Nosotros vamos a definir
la variable ‘open’ a ‘false’ que controlará que el elemento no sea mostrado.-->
<header class="bg-white shadow sticky top-0 z-50" x-data="dropdown()">

    <div
        class="md:flex hidden container items-center h-16 justify-between md:justify-start max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <!--a variable cambie a true y por tanto se muestre el listado.-->
        <a :class="{ 'bg-opacity-100 text-blue-500': open }" x-on:click="show()"
            class="flex flex-col items-center justify-center order-last md:order-first  border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:text-gray-900 focus:outline-none transitio">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="text-sm hidden sm:block">
                Categorias M & G
            </span>
        </a>
        <a href="/" class="flex items-center md:mx-6">
            {{-- ml-2 --}}
            <img class="w-8 h-8 text-white" src="{{ asset('img/myg.svg') }}" alt="">

            <span class="ml-1 text-xl font-bold text-black dark:text-white">Mercay<span
                    class="text-[#38B6FF]">Gana</span></span>
        </a>

        <!-- Se oculta cuando la vista esta estrecha-->

        <div class="flex-1 hidden md:block">
            @auth
                @livewire('merca-wallet', ['userId' => auth()->id()])
            @endauth
        </div>

        <div class="hidden md:block mx-1.5">
            @livewire('address-component')
        </div>

        <div class="hidden md:block mx-1.5">
            @livewire('search')
        </div>

        <div class="hidden md:block mx-1.5">
            @livewire('dropdown-favoritos')
        </div>

        <div class="hidden md:block mx-1.5">
            @livewire('dropdown-cart')
        </div>

        @auth
            <div class="hidden md:block mx-1.5">
                @livewire('notification-component')
            </div>
        @endauth

        <!--Muestra un dropdown-->
        <div class="mx-1.5 relative  hidden md:block">
            <!--Esta vista solo pueden tener usuaios autenticado-->
            @auth
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Administrar cuenta') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __(' Mi Perfil') }}
                        </x-jet-dropdown-link>
                        @role('cliente')
                            <x-jet-dropdown-link href="{{ route('wallet.index') }}">
                                {{ __(' Mi Billetera') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="{{ route('orders.index') }}">
                                {{ __('Mis Pedidos') }}
                            </x-jet-dropdown-link>
                        @endrole
                        @role('admin')
                            <x-jet-dropdown-link href="{{ route('admin.index') }}">
                                {{ __('Admin') }}
                            </x-jet-dropdown-link>
                        @endrole

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
                <!--Cuando no estas logueado-->
            @else
                <x-jet-dropdown align="right" width="48">

                    <x-slot name="trigger">

                        <svg class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" version="1.0"
                            viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet" style=" fill:#374151">
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" class="text-gray-700"
                                stroke="none">
                                <path
                                    d="M2380 5114 c-19 -2 -78 -9 -130 -14 -330 -36 -695 -160 -990 -336 -375 -224 -680 -529 -904 -904 -175 -292 -291 -632 -338 -990 -16 -123 -16 -497 0 -620 82 -623 356 -1150 820 -1581 256 -239 575 -425 922 -539 274 -91 491 -124 800 -124 228 0 329 9 530 50 689 141 1304 583 1674 1204 175 292 291 632 338 990 16 123 16 497 0 620 -47 358 -163 698 -338 990 -224 375 -529 680 -904 904 -289 173 -634 291 -980 336 -88 12 -438 21 -500 14z m385 -304 c583 -54 1146 -347 1517 -790 487 -581 652 -1337 452 -2067 -77 -281 -213 -550 -398 -785 -34 -43 -63 -78 -66 -78 -3 0 -19 43 -35 96 -85 284 -283 589 -512 790 -144 126 -341 247 -518 319 l-40 16 35 26 c63 47 216 208 253 266 142 221 202 460 177 704 -37 366 -251 681 -575 850 -674 350 -1488 -91 -1565 -850 -20 -197 18 -404 106 -579 71 -141 189 -287 305 -375 27 -20 49 -40 49 -43 0 -3 -33 -18 -73 -34 -270 -109 -540 -321 -729 -571 -109 -145 -213 -349 -264 -520 -15 -52 -31 -95 -34 -95 -8 0 -122 148 -179 233 -63 94 -174 310 -219 425 -78 198 -127 427 -144 675 -52 717 271 1445 839 1898 459 366 1041 542 1618 489z m5 -860 c257 -73 458 -274 536 -535 35 -119 37 -289 6 -406 -93 -347 -395 -579 -752 -579 -357 0 -659 232 -752 579 -31 117 -29 287 6 406 88 296 316 497 636 559 58 11 247 -3 320 -24z m-5 -1851 c310 -40 584 -178 821 -414 178 -178 290 -358 362 -585 26 -81 67 -271 59 -275 -1 -1 -31 -24 -67 -52 -308 -240 -679 -394 -1095 -454 -116 -17 -454 -17 -570 0 -416 60 -787 214 -1095 454 -36 28 -66 51 -67 52 -2 1 4 39 12 84 91 517 461 950 961 1124 221 77 431 98 679 66z">
                                </path>
                            </g>
                        </svg>


                    </x-slot>
                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>
                    </x-slot>
                </x-jet-dropdown>
            @endauth
        </div>

    </div>

    <div class="md:hidden container flex items-center h-16 justify-between max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 w-full">
        <!-- Lado izquierdo con imagen y logo -->
        <div class="flex items-center w-1/3">
            <a href="/" class="flex items-center">
                <img class="w-8 h-8 text-white" src="{{ asset('img/myg.svg') }}" alt="">
                <span class="ml-1 text-xl font-bold text-black dark:text-white">Mercay<span class="text-[#38B6FF]">Gana</span></span>
            </a>
        </div>
    
        <!-- Lado derecho con iconos -->
        <div class="flex items-center justify-end w-full space-x-3">
            @livewire('address-component')
            @livewire('dropdown-cart')
    
            @auth
                @livewire('notification-component')
                <div class="relative">
                    <!-- Dropdown de usuario autenticado -->
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="mt-1 flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Administrar cuenta') }}
                            </div>
    
                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __(' Mi Perfil') }}
                            </x-jet-dropdown-link>
                            @role('cliente')
                                <x-jet-dropdown-link href="{{ route('orders.index') }}">
                                    {{ __('Mis Pedidos') }}
                                </x-jet-dropdown-link>
                            @endrole
                            @role('admin')
                                <x-jet-dropdown-link href="{{ route('admin.index') }}">
                                    {{ __('Admin') }}
                                </x-jet-dropdown-link>
                            @endrole
    
                            <div class="border-t border-gray-100"></div>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            @else
                <!-- Dropdown para usuarios no autenticados -->
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <svg class="mt-2 w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 11 14H9a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 10 19Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </x-slot>
    
                    <x-slot name="content">
                        <x-jet-dropdown-link href="{{ route('login') }}">
                            {{ __('Login') }}
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('register') }}">
                            {{ __('Register') }}
                        </x-jet-dropdown-link>
                    </x-slot>
                </x-jet-dropdown>
            @endauth
        </div>
    </div>
    

    <!--al actualizar vemos un recuadro gris que ocupa toda la ventana menos el menú.-->
    <nav id="navigation-menu" :class="{ 'block': open, 'hidden': !open }" x-show="open"
        class="bg-gray-700 bg-opacity-25 w-full absolute hidden">
        {{-- Menu computadora --}}

        <!-- component -->

        <div class="container h-full hidden md:block">
            <div x-on:click.away="close()" class="grid grid-cols-4 h-full relative">
                <ul class="bg-white dark:bg-gray-700 overflow-y-auto journal-scroll">
                    @foreach ($categories as $category)
                        <li
                            class="navigation-link text-gray-500 dark:text-gray-200 hover:bg-gray-100 dark:bg-gray-700 hover:text-gray-700 transition duration-300 dark:hover:bg-sky-900 dark:rounded-md dark:transition dark:duration-300">
                            <a href="{{ route('categories.show', $category) }}"
                                class="py-2 px-4 text-sm flex items-center justify-between">
                                <div class="flex justify-center">
                                    <span class="flex justify-center w-9">
                                        {!! $category->icon !!}
                                    </span>
                                    {{ $category->name }}
                                </div>
                                <i class="fa-solid fa-angle-right"></i>
                            </a>

                            <div
                                class="navigation-submenu bg-gray-100 dark:bg-gray-800 absolute h-full w-3/4 right-0 top-0 hidden">
                                <x-navigation-subcategories :category="$category"></x-navigation-subcategories>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="col-span-3 bg-gray-100 dark:bg-gray-900">
                    <x-navigation-subcategories :category="$categories->first()"></x-navigation-subcategories>
                </div>
            </div>
        </div>


        {{-- Menú movil --}}

        <div class="bg-white h-full overflow-y-auto">
            <div class="container-menu bg-gray-200 py-3 mb-2">
                <div class="flex-1 hidden md:block">
                    @auth
                        @livewire('merca-wallet', ['userId' => auth()->id()])
                    @endauth
                </div>

                <div class="md:block mx-1.5">
                    @livewire('address-component')
                </div>

                <div class="md:block mx-1.5">
                    @livewire('search')
                </div>

                <div class="md:block mx-1.5">
                    @livewire('dropdown-favoritos')
                </div>

                <div class="md:block mx-1.5">
                    @livewire('dropdown-cart')
                </div>

                @auth
                    <div class=" md:block mx-1.5">
                        @livewire('notification-component')
                    </div>
                @endauth
            </div>
            <ul class="bg-white">
                @foreach ($categories as $category)
                    <li class="text-gray-500 hover:bg-blue-500 hover:text-white">
                        <a href="{{ route('categories.show', $category) }}"
                            class="py-2 px-4 text-sm flex items-center">
                            <span class="flex justify-center w-9">
                                {!! $category->icon !!}
                            </span>
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <p class="text-gray-500 px-6 my-2">USUARIOS</p>

            @livewire('cart-movil')

            @auth
                <a href="{{ route('profile.show') }}"
                    class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-blue-500
hover:text-white">
                    <span class="flex justify-center w-9">
                        <i class="far fa-address-card"></i>
                    </span>
                    Perfil
                </a>

                <a href="{{ route('wallet.index') }}"
                    class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-blue-500 hover:text-white">
                    <span class="flex justify-center w-9">
                        <i class="fas fa-fingerprint"></i>
                    </span>
                    Billetera
                </a>

                <a href="" onclick="event.preventDefault();
document.getElementById('logout-form').submit()"
                    class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-blue-500 hover:text-white">
                    <span class="flex justify-center w-9">
                        <i class="fas fa-sign-out-alt"></i>
                    </span>
                    Cerrar sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}"
                    class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-blue-500
hover:text-white">
                    <span class="flex justify-center w-9">
                        <i class="fas fa-user-circle"></i>
                    </span>
                    Iniciar sesión
                </a>
                <a href="{{ route('register') }}"
                    class="py-2 px-4 text-sm flex items-center text-gray-500 hover:bg-blue-500
hover:text-white">
                    <span class="flex justify-center w-9">
                        <i class="fas fa-fingerprint"></i>
                    </span>
                    Registrar
                </a>
            @endauth
        </div>
    </nav>
</header>

<script>
    function dropdown() {
        return {
            open: false,
            show() {
                if (this.open) {
                    this.open = false;
                    document.getElementsByTagName('html')[0].style.overflow = 'auto'
                } else {
                    this.open = true;
                    document.getElementsByTagName('html')[0].style.overflow = 'hidden'
                }
            },
            close() {
                this.open = false;
                document.getElementsByTagName('html')[0].style.overflow = 'auto'
            }
        }
    }
</script>
