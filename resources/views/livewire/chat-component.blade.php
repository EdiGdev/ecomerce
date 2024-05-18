<div>

    <div x-data="{ isChatOpen: @entangle('isChatOpen') }" @click.away="isChatOpen = false">
        <button wire:click="toggleChat"
            class="fixed bottom-4 right-4 inline-flex items-center justify-center text-sm font-medium border rounded-full w-16 h-16 bg-blue-600 text-white  cursor-pointer"
            type="button" aria-haspopup="dialog" aria-expanded="false" data-state="closed">
            @if ($isChatOpen)
                <svg class="w-6 h-6 text-white block border-gray-200 align-middle" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            @else
                <svg class="w-8 h-8 text-white block border-gray-200 align-middle -rotate-12" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path
                        d="M18 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3.546l3.2 3.659a1 1 0 0 0 1.506 0L13.454 14H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-8 10H5a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Zm5-4H5a1 1 0 0 1 0-2h10a1 1 0 1 1 0 2Z" />
                </svg>
            @endif
        </button>

        @if ($isChatOpen)
            <div x-show="isChatOpen"
                class="z-50 shadow-lg shadow-blue-500 fixed bottom-[calc(4rem+1.5rem)] right-0 mr-4 bg-white p-6 rounded-lg border border-[#e5e7eb] w-[440px] h-[450px]">


                <button wire:click="toggleChat" class="absolute top-4 right-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path
                            d="M4.354 4.354a.5.5 0 0 1 .708 0L8 7.293l3.938-3.939a.5.5 0 0 1 .708.708L8.707 8l3.939 3.938a.5.5 0 0 1-.708.708L8 8.707l-3.938 3.938a.5.5 0 0 1-.708-.708L7.293 8 3.354 4.042a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>

                <!-- Heading -->
                <div class="flex flex-col space-y-1.5 pb-6">
                    <h2 class="font-semibold text-lg tracking-tight">Habla con Nosotros</h2>
                    <p class="text-sm text-[#6b7280] leading-3">Esta la logica, falta implementar</p>
                </div>

                <!-- Chat Container -->
                <div class="pr-4 h-[274px]  min-w-[100%] overflow-y-auto journal-scroll">
                    <!-- Chat Message AI -->
                    <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1"><span
                            class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                            <div class="rounded-full bg-gray-100 border p-1"><svg stroke="none" fill="black"
                                    stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="20"
                                    width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                                    </path>
                                </svg></div>
                        </span>
                        <p class="leading-relaxed"><span class="block font-bold text-gray-700">MercayGana </span>Hi, how
                            can

                        </p>
                    </div>

                    <!--  User Chat Message -->
                    <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1"><span
                            class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                            <div class="rounded-full bg-gray-100 border p-1"><svg stroke="none" fill="black"
                                    stroke-width="0" viewBox="0 0 16 16" height="20" width="20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
                                    </path>
                                </svg></div>
                        </span>
                        <p class="leading-relaxed"><span class="block font-bold text-gray-700">You </span>Hola
                        </p>
                    </div>

                </div>
                <!-- Input box  -->
                <div class="flex items-center pt-0">
                    <form class="flex items-center justify-center w-full space-x-2">
                        <input
                            class="flex h-10 w-full rounded-md border border-[#e5e7eb] px-3 py-2 text-sm placeholder-[#6b7280] focus:outline-none focus:ring-2 focus:ring-[#9ca3af] disabled:cursor-not-allowed disabled:opacity-50 text-[#030712] focus-visible:ring-offset-2"
                            placeholder="Escribe tu mensaje" value="">
                        <button
                            class="inline-flex items-center justify-center rounded-md text-sm font-medium text-[#f9fafb] disabled:pointer-events-none disabled:opacity-50 bg-blue-600 hover:bg-blue-800 h-10 px-4 py-2">
                            Enviar</button>
                    </form>
                </div>

            </div>
        @endif
    </div>

</div>