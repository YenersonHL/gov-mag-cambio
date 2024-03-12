<section class="container-fluid position-relative mb-5">
    <div class="row">
        <div class="col-12">
            <section class="splide w-100" id="slider-footer">
                <div class="splide__track container mx-auto">
                    <ul class="splide__list">
                        @foreach([330,286,285,288,323,331] as $key)
                        <li class="splide__slide">
                            <div class="d-flex flex-wrap justify-content-center w-100">
                                <img height="40" src="{{ asset("img/logoipsum-" . $key . ".svg") }}" alt="">
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>
    </div>
</section>
