<div class="container-fluid position-relative mb-5">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">
                        <x-title-section-basic setLabel="Noticias destacadas" />
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <a href="{{ url('/noticias/' . $last['path']) }}" class="card text-link border-0 overflow-hidden rounded-3 shadow-md mb-4 position-relative">
                                    <div class="card-body p-0" style="height: 500px;">
                                        <img class="w-100 object-img" src="{{ asset('img/galery/' . $last['img']) }}" alt="">
                                    </div>
                                    <div class="block p-4 pt-3 bg-black-glass-30 text-white position-absolute bottom-0 start-0 w-100">
                                        <div class="mb-2">
                                            <span class="badge text-bg-primary me-2">{{ $last['category'] }}</span> Santa Marta - {{ $last['date'] }}
                                        </div>
                                        <h1 class="fs-4">{{ $last['title'] }}</h1>
                                        <div class="position-absolute top-0 start-0 w-100 z-1 translate-middle-y">
                                            <div class="d-flex justify-content-end pe-3 flex-wrap gap-1">
                                                <button type="button" class="btn bg-white shadow-md">
                                                    <i class="fa fa-facebook"></i>
                                                </button>
                                                <button type="button" class="btn bg-white shadow-md">
                                                    <i class="fa fa-facebook"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                    <div>
                                        <p>{{ $last['subtitle'] }}</p>
                                    </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <ul class="list-unstyled">
                                    @foreach($outstanding as $key => $value)
                                    <li class="mb-1 border-bottom pt-2">
                                        <a href="{{ url('/noticias/' . $value['path']) }}" class="card border-0 text-link">
                                            <div class="row">
                                                <div class="col-auto col-lg-12 col-xl-auto mb-2">
                                                    <div class="block shadow-md position-relative overflow-hidden rounded-3" style="width: 130px; height: 100px;">
                                                        <img class="object-img" src="{{ asset('img/galery/' . $value['img']) }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col col-lg-12 col-xl">
                                                    <div class="mb-2">
                                                        <span class="badge text-bg-primary me-3">{{ $value['category'] }}</span>
                                                        <time class="small text-muted">{{ $value['date'] }}</time>
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-1">{{ $value['title'] }}</h6>
                                                        <p class="small text-muted">{{ $value['subtitle'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
