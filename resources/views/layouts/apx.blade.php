<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!--   <link rel="stylesheet" href="{{ asset('vendor/glider-js/glider.min.css') }}">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.8/glider.min.css"
        integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="{{ asset('vendor/glider-js/glider.min.css') }}">-->
    <link rel="stylesheet" href="{{ asset('vendor/flex-slider/flexslider.css') }}">

    @livewireStyles
    <!-- Scripts -->

    <!--  <script src="{{ asset('vendor/glider-js/glider.min.js') }}"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.8/glider.min.js"
        integrity="sha512-AZURF+lGBgrV0WM7dsCFwaQEltUV5964wxMv+TSzbb6G1/Poa9sFxaCed8l8CcFRTiP7FsCgCyOm/kf1LARyxA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--   <script src="{{ asset('vendor/glider-js/glider.min.js') }}"></script>-->
    <script src="{{ asset('vendor/flex-slider/node_modules/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('vendor/flex-slider/jquery.flexslider-min.js') }}"></script>

</head>

<body>
    <div x-data="setup()">
        <div class="flex h-screen antialiased text-gray-900 bg-blue-gray-100 dark:bg-dark dark:text-light">

            <div>

                <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden"
                    style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"></div>

                <!-- Sidebar -->
                <aside x-transition:enter="transition transform duration-300"
                    x-transition:enter-start="-translate-x-full opacity-30  ease-in"
                    x-transition:enter-end="translate-x-0 opacity-100 ease-out"
                    x-transition:leave="transition transform duration-300"
                    x-transition:leave-start="translate-x-0 opacity-100 ease-out"
                    x-transition:leave-end="-translate-x-full opacity-0 ease-in"
                    class="
           fixed
           inset-y-0
           z-10
           flex flex-col flex-shrink-0
           w-64
           max-h-screen
           overflow-hidden
           transition-all
           transform
           bg-white
           border-r
           shadow-lg
           lg:static lg:shadow-none
         "
                    :class="{ '-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen }">
                    <!-- sidebar header -->
                    <div class="flex items-center justify-between flex-shrink-0 p-2"
                        :class="{ 'lg:justify-center': !isSidebarOpen }">
                        <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">
                            <span :class="{ 'block': !isSidebarOpen }" class="hidden"> M & G </span> <span
                                :class="{ 'lg:hidden': !isSidebarOpen }">MERCA & GANA </span>
                        </span>
                        <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <nav class="flex-1 hover:overflow-y-auto max-h-screen">
                        <div class="h-full px-3 py-4 overflow-y-auto">
                            <ul class="space-y-2 font-medium overflow-hidden">
                                <li>
                                    <a href="#" :class="{ 'lg:flex lg:justify-center': !isSidebarOpen }"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9" />
                                        </svg>
                                        <span :class="{ 'lg:hidden': !isSidebarOpen }" class="ml-3">Inicio</span>
                                    </a>
                                </li>
                                <li>
                                    <button type="button" :class="{ 'lg:flex lg:justify-center': !isSidebarOpen }"
                                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                        aria-controls="dropdown-envios" data-collapse-toggle="dropdown-envios">
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 18 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                                        </svg>

                                        <span :class="{ 'lg:hidden': !isSidebarOpen }"
                                            class="flex-1 ml-3 text-left whitespace-nowrap">E-commerce</span>
                                        <svg :class="{ 'lg:hidden': !isSidebarOpen }" class="w-3 h-3" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>

                                    </button>

                                    <ul id="dropdown-envios"
                                        :class="{ 'hidden': !isSidebarOpen, 'py-2 space-y-2': !isSidebarOpen }">
                                        <template
                                            x-for="(item, index) in ['Tus Envios', 'Enviar Dinero', 'Mis contactos']">
                                            <li>

                                                <button x-text="item.charAt(0)"
                                                    :data-tooltip-target="'tooltip-right-' + index"
                                                    data-tooltip-placement="top" type="button"
                                                    class="font-bold text-base text-center flex lg:justify-center lg:text-center items-center w-full text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"></button>

                                                <div x-text="item" :id="'tooltip-right-' + index" role="tooltip"
                                                    class="absolute z-40 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">

                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>

                                                <a href="#" x-show="isSidebarOpen"
                                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                                    x-text="item">
                                                </a>
                                            </li>
                                        </template>
                                    </ul>


                                </li>


                                <li>
                                    <button type="button" :class="{ 'lg:flex lg:justify-center': !isSidebarOpen }"
                                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                        aria-controls="dropdown-beneficios"
                                        data-collapse-toggle="dropdown-beneficios">
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 18 20">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                                        </svg>

                                        <span :class="{ 'lg:hidden': !isSidebarOpen }"
                                            class="flex-1 ml-3 text-left whitespace-nowrap">E-commerce</span>
                                        <svg :class="{ 'lg:hidden': !isSidebarOpen }" class="w-3 h-3"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>

                                    </button>

                                    <ul id="dropdown-beneficios"
                                        :class="{ 'hidden': !isSidebarOpen, 'py-2 space-y-2': !isSidebarOpen }">
                                        <template
                                            x-for="(item, index) in ['Tus Envios', 'Enviar Dinero', 'Mis contactos']">
                                            <li>
                                                
                                                <button x-text="item.charAt(0)"
                                                    :data-tooltip-target="'tooltip-beneficios-' + index"
                                                    data-tooltip-placement="top" type="button"
                                                    class="font-bold text-base text-center flex lg:justify-center lg:text-center items-center w-full text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"></button>

                                                <div x-text="item" :id="'tooltip-beneficios-' + index"
                                                    role="tooltip"
                                                    class="absolute z-40 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">

                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>

                                                <a href="#" x-show="isSidebarOpen"
                                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                                    x-text="item">
                                                </a>
                                            </li>
                                        </template>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </nav>

                </aside>

            </div>

            <div class="flex flex-col flex-1">
                <header class="flex-shrink-0 border-b">
                    <div class="flex items-center justify-between p-2">

                        <div class="flex items-center space-x-3">
                            <span class="p-2 text-xl font-semibold tracking-wider uppercase lg:hidden">MERCA Y
                                GANA</span>


                            <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                                <svg class="w-4 h-4 text-gray-600"
                                    :class="{ 'transform transition-transform -rotate-180': isSidebarOpen }"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>


                        <div class="flex items-center ml-auto rtl:ml-0 rtl:mr-auto">

                            <div class="ml-3  mx-6 relative  hidden md:block">

                                @auth
                                    <x-jet-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button
                                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover"
                                                    src="{{ Auth::user()->profile_photo_url }}"
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
                                @else
                                    <x-jet-dropdown align="right" width="48">

                                        <x-slot name="trigger">

                                            <svg class="h-6 w-6 text-gray-700" xmlns="http://www.w3.org/2000/svg"
                                                version="1.0" viewBox="0 0 512.000000 512.000000"
                                                preserveAspectRatio="xMidYMid meet" style=" fill:#374151">
                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                    class="text-gray-700" stroke="none">
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

                </header>

                <div class="flex flex-1">

                    <main class="flex items-center justify-center flex-1 px-4 py-8">

                        {{ $slot }}

                    </main>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        <script>
            const setup = () => {
                return {

                    isSidebarOpen: false,
                    toggleSidbarMenu() {
                        this.isSidebarOpen = !this.isSidebarOpen
                    },

                }
            }
        </script>

        <script src="{{ mix('js/app.js') }}"></script>
        @auth
            @if (Auth::check())
                <script>
                    Echo.private('App.Models.User.{{ Auth::user()->id }}')
                        .notification((notification) => {
                            window.livewire.emit('notification');
                        });
                </script>
            @endif
        @endauth

</body>

</html>
