<div>
    <section class="relative bg-cover overflow-hidden">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    @if ($banner->redirect_to)
                        <a href="{{ $banner->redirect_to }}"
                            class="swiper-slide bg-center bg-no-repeat bg-cover bg-blend-multiply"
                            style="background-image: url('{{ Storage::url($banner->url) }}');">
                            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">

                            </div>
                        </a>
                    @else
                        <div class="swiper-slide bg-center bg-no-repeat bg-cover bg-blend-multiply"
                            style="background-image: url('{{ Storage::url($banner->url) }}');">
                            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">

                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="swiper-pagination absolute bottom-4 left-1/2 transform -translate-x-1/2"></div>
    </section>
</div>
