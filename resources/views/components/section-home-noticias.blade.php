<section class="container-fluid position-relative mb-5">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">
                        <x-title-section-basic setLabel="Noticias" />
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-wrap justify-content-end">
                            <button type="button" class="btn btn-lg" id="custom-next">
                                <i class="fa fa-angle-left"></i>
                            </button>
                            <button type="button" class="btn btn-lg" id="custom-prev">
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                        <section class="splide w-100" id="slider-section">
                          <div class="splide__track">
                                <ul class="splide__list">
                                    @foreach($news as $key => $article)
                                    <li class="splide__slide">
                                        <article class="card border-0 card-new">
                                            <div class="card-img-top position-relative overflow-hidden rounded-3">
                                                <a href="{{ url("/noticia/lorem-ipsum") }}" class="block h-100">
                                                    <img class="object-img h-100" src="{{ asset('img/padd/' . $key + 1 . '.jpg') }}" alt="">
                                                </a>
                                                <div class="position-absolute bottom-0 start-0 w-100 bg-black bg-opacity-50 text-white">
                                                    <h1 class="block p-3 pt-4 fs-6">
                                                        {{ $article['title'] }}
                                                    </h1>
                                                    <div class="d-flex gap-2 position-absolute top-0 end-0 px-2 translate-middle-y">
                                                        <button type="button" class="btn btn-light rounded-3">
                                                            <i class="fa fa-home"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-light rounded-3">
                                                            <i class="fa fa-home"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ url("/noticia/lorem-ipsum") }}" class="card-body text-decoration-none p-0 pt-3">
                                                {{ $article['description'] }}
                                            </a>
                                        </article>
                                    </li>
                                    @endforeach
                                </ul>
                          </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
