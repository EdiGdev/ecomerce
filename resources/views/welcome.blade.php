<x-app-layout>

    <!-- Agrega la hoja de estilos de Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">



    @livewire('banner-home')


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>


    <div class="container-menu py-8">
        @foreach ($categories as $category)
            <section>
                <div class="flex items-center mb-2">
                    <h1 class="text-lg uppercase font-semibold text-gray-700">
                        {{ $category->name }}
                    </h1>
                    <a href="{{ route('categories.show', $category) }}"
                        class="text-blue-500 hover:text-blue-600 hover:underline ml-2 font-semibold">Ver más</a>
                </div>
                @livewire('category-products', ['category' => $category])
            </section>
        @endforeach
    </div>


    <section class="container-menu py-8">
        <h1 class="text-2xl font-semibold text-center">RESEÑAS POPULARES</h1>
        <p class="text-center mb-6">Mira lo que opinan algunos de nuestros clientes</p>

        @livewire('reviews-list')
    </section>




    @push('scripts')
        <script>
            Livewire.on('glider', function(id) {
                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 1,
                    slidesToScroll: 2,
                    draggable: true,
                    dots: '.glider-' + id + '~.dots',
                    arrows: {
                        prev: '.glider-' + id + '~.glider-prev',
                        next: '.glider-' + id + '~.glider-next'
                    },
                    itemWidth: 200,
                    responsive: [{
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                itemWidth: 150,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                itemWidth: 300,
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                itemWidth: 350,
                            }
                        },
                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToShow: 3.9,
                                slidesToScroll: 1,
                                itemWidth: 400,
                            }
                        }
                    ]
                });
            });
        </script>
    @endpush
</x-app-layout>
