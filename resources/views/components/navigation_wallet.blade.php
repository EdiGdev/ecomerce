<div>

    <div x-ref="loading" class="fixed inset-0 z-[200] flex items-center justify-center text-white bg-black bg-opacity-50"
        style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
        Loading.....
    </div>
    <!-- Sidebar backdrop -->
    <div x-show.in.out.opacity="isSidebarOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden"
        style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"></div>
    <!-- Sidebar -->
    <aside x-transition:enter="transition transform duration-300"
        x-transition:enter-start="-translate-x-full opacity-30  ease-in"
        x-transition:enter-end="translate-x-0 opacity-100 ease-out" x-transition:leave="transition transform duration-300"
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
   lg:z-auto lg:static lg:shadow-none
 "
        :class="{ '-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen }">
        <!-- sidebar header -->
        <div class="flex items-center justify-between flex-shrink-0 p-2"
            :class="{ 'lg:justify-center': !isSidebarOpen }">
            <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">
                <span :class="{ 'lg:hidden': isSidebarOpen }">M & G </span> <span
                    :class="{ 'lg:hidden': !isSidebarOpen }">MERCA & GANA </span>
            </span>
            <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
                <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <!-- Sidebar links -->
        <nav class="flex-1 overflow-hidden hover:overflow-y-auto">
            <ul class="p-2 overflow-hidden">
                <li>
                    <a href="#" class="flex items-center p-2 space-x-2 rounded-md hover:bg-gray-100"
                        :class="{ 'justify-center': !isSidebarOpen }">
                        <span>
                            <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </span>
                        <span :class="{ 'lg:hidden': !isSidebarOpen }">Inicio</span>
                    </a>
                </li>
                <!-- Sidebar Links... -->
            </ul>
        </nav>
        <!-- Sidebar footer -->
        <div class="flex-shrink-0 p-2 border-t max-h-14">

        </div>
    </aside>

    <header class="flex-shrink-0 border-b">
        <div class="flex items-center justify-between p-2">
            <!-- Navbar left -->
            <div class="flex items-center space-x-3">
                <span class="p-2 text-xl font-semibold tracking-wider uppercase lg:hidden">MERCA Y GANA</span>
                <!-- Toggle sidebar button -->
                <button @click="toggleSidbarMenu()" class="p-2 rounded-md focus:outline-none focus:ring">
                    <svg class="w-4 h-4 text-gray-600"
                        :class="{ 'transform transition-transform -rotate-180': isSidebarOpen }"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Mobile search box -->
            <div x-show.transition="isSearchBoxOpen" class="fixed inset-0 z-10 bg-black bg-opacity-20"
                style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
                <div @click.away="isSearchBoxOpen = false"
                    class="absolute inset-x-0 flex items-center justify-between p-2 bg-white shadow-md">
                    <div class="flex items-center flex-1 px-2 space-x-2">
                        <!-- search icon -->
                        <span><svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </span>
                        <input type="text" placeholder="Search"
                            class="w-full px-4 py-3 text-gray-600 rounded-md focus:bg-gray-100 focus:outline-none" />
                    </div>
                    <!-- close button -->
                    <button @click="isSearchBoxOpen = false" class="flex-shrink-0 p-4 rounded-md">
                        <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

    </header>

</div>
