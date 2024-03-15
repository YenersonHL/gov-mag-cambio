<div class="container-fluid my-5 position-relative">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <x-title-section-basic setLabel="Proyectos de<br>exitos" />
                    </div>
                    <div class="col-12">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <div class="row">
                                        @foreach($linksHome as $key)
                                        <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                                            <a href="{{ url('/blog/'.$key['link']) }}" class="text-decoration-none content-link">
                                                <img height="60" src="{{ asset('img/'.$key['img']) }}" alt="">
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('img/Tribal.png') }}" class="tribal end-top" width="180" alt="">
</div>
