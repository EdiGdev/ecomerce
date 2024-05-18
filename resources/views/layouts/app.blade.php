<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--   <script src="{{ asset('vendor/glider-js/glider.min.js') }}"></script>-->
    <script src="{{ asset('vendor/flex-slider/node_modules/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('vendor/flex-slider/jquery.flexslider-min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/balloon/ckeditor.js"></script>
</head>

<body class="font-sans antialiased journal-scroll">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation')
        <!--Esto muestra el contenido en el navegador-->
        <main>
            {{ $slot }}

            @livewire('modal-component')

            @auth
                <div class="hidden md:block">
                    @livewire('chat-component')
                </div>

            @endauth
        </main>

        @stack('modals')
        <x-footer></x-footer>
    </div>
   
    <div class="md:hidden">
        @livewire('navigation-flex')
    </div>
    @livewireScripts
    <!--queremos que se ejecute en todas nuestras páginas-->
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
    <!--colocar el código JS de la vista welcome para que se cargue en el layout usando las directivasde blade-->
    @stack('scripts')
    <script src="{{ mix('js/app.js') }}" defer onload="inicializarLaravelEcho()"></script>
    @auth
        @if (Auth::check())
            <script>
                function inicializarLaravelEcho() {
                    Echo.private('App.Models.User.{{ Auth::user()->id }}')
                        .notification((notification) => {
                            window.livewire.emit('notification');
                        });
                }
            </script>
        @endif
    @endauth

    <script>
        Livewire.on('reloadPage', () => {
            location.reload();
        });
    </script>

</body>

</html>
