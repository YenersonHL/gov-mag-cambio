<div class="container-fluid" id="content-ruseta">
    <div class="row">
        <div class="col-12">
            <div class="container section-ruseta">
                <div class="row align-items-center">
                    <div class="col-6 position-relative">
                        <div class="content-ruseta">
                            <div class="ruseta">
                                @foreach($slices as $key => $value)
                                    <span class="slice" data-id="{{ $key + 1 }}" data-color="{{ $value["color"] }}" data-title="{{ $value["title"] }}" data-text="{{ $value["text"] }}"></span>
                                @endforeach
                                <img src="{{ asset('img/ROSETA.png') }}" alt="">
                            </div>
                            <div class="observer" id="observer"></div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="content-text d-flex align-items-center text-white">
                            <div class="block ps-4 border-start border-3 border-white">
                                <h3 id="ruseta-title" class="fs-2 text-uppercase"></h3>
                                <div class="fs-5" id="ruseta-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>