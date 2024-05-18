<div>

    <x-jet-dropdown width="96">
        <x-slot name="trigger">
            <button type="button" wire:click="markAsRead()" class="mt-2 relative inline-block cursor-pointer px-1">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" class="fill-gray-600"
                        stroke="none">
                        <path
                            d="M2500 5109 c-14 -6 -36 -20 -48 -32 -50 -47 -52 -58 -52 -340 l0 -264 -102 -17 c-537 -94 -985 -481 -1157 -1001 -68 -208 -73 -251 -81 -795 -7 -438 -10 -493 -28 -570 -74 -307 -225 -566 -450 -768 -91 -82 -134 -154 -152 -250 -29 -162 60 -326 218 -400 l57 -27 533 -5 533 -5 29 -87 c70 -207 212 -369 405 -463 133 -65 197 -79 350 -79 105 0 145 4 209 22 272 78 476 276 556 539 l22 72 531 3 532 3 67 32 c82 39 142 99 182 183 27 58 31 75 31 155 0 82 -3 97 -33 157 -24 49 -53 85 -110 138 -251 233 -393 477 -463 799 -19 87 -22 142 -29 586 -8 534 -11 563 -76 758 -115 349 -364 651 -689 836 -144 83 -354 155 -512 176 l-52 7 -3 266 c-3 260 -4 268 -27 305 -39 64 -124 93 -191 66z m230 -963 c507 -77 909 -478 985 -983 11 -73 15 -194 15 -476 0 -208 5 -421 11 -475 23 -213 76 -397 169 -587 98 -201 240 -392 391 -526 72 -64 82 -88 52 -121 -15 -17 -84 -18 -1795 -18 -1765 0 -1778 0 -1798 20 -11 11 -20 27 -20 34 0 8 41 55 91 103 256 247 416 522 498 853 45 185 51 258 51 668 0 490 13 599 94 799 70 170 219 365 365 477 255 196 576 279 891 232z m268 -3533 c-89 -209 -320 -329 -540 -282 -81 18 -172 66 -233 126 -52 51 -115 144 -115 171 0 9 97 12 450 12 l450 0 -12 -27z">
                        </path>
                        <path
                            d="M1015 4861 c-16 -10 -64 -54 -105 -97 -424 -446 -687 -1082 -693 -1681 -2 -139 0 -153 19 -180 72 -98 195 -98 267 -1 18 23 22 51 29 170 33 589 234 1068 625 1489 77 83 99 129 88 187 -19 105 -144 166 -230 113z">
                        </path>
                        <path
                            d="M3951 4863 c-18 -9 -44 -34 -58 -55 -22 -32 -25 -46 -21 -97 4 -56 8 -64 56 -118 252 -279 399 -509 505 -788 90 -236 147 -529 147 -750 0 -107 23 -165 80 -203 45 -30 130 -28 177 6 59 42 67 76 60 256 -20 515 -200 1021 -514 1437 -104 139 -246 293 -286 313 -44 20 -102 20 -146 -1z">
                        </path>
                    </g>
                </svg>

                @if ($count)
                    <span
                        class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-blue-100 transform translate-x-1/2 -translate-y-1/2 bg-blue-600 rounded-full">
                        {{ $count }} </span>
                @endif
            </button>
        </x-slot>
        <x-slot name="content">
            <div class="w-full">

                @if ($notifications && $notifications->count() > 0)
                    <div class="block px-4 py-2 text-base text-gray-400">
                        Listado de notificaciones
                    </div>

                    <div class=" divide-y-2">
                        @foreach ($notifications as $notification)
                            <!-- Team Settings -->
                            <x-jet-dropdown-link
                                class="{{ $notification->read_at ? 'text-gray-700' : 'text-indigo-700' }} "
                                href="{{ $notification->data['url'] }}">
                                {{ $notification->data['message'] }}
                                <span
                                    class="text-base font-bold">{{ $notification->created_at->diffForHumans() }}</span>
                            </x-jet-dropdown-link>
                        @endforeach

                    </div>
                    <div class=" text-right block px-4 py-2 text-sm text-gray-400">
                        <a href="{{ route('messages.index') }}" class=" text-indigo-700">Ver todas las notificaciones</a>
                    </div>
                @else
                    <ul class="divide-y w-full">
                        <li class="py-6 flex justify-center ">
                            <p class="text-center text-gray-700">
                                No hay notificaciones
                            </p>
                        </li>
                    </ul>
                @endif
            </div>
        </x-slot>
    </x-jet-dropdown>




</div>
