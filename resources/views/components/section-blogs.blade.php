<div class="container-fluid position-relative mb-5">
    <div class="row">
        <div class="col-12">
            <div class="container">
                @foreach($blogsList as $key => $value)
                <div class="row align-items-center mb-5">
                    <a href="{{ url($value['path']) }}" class="col-12 text-decoration-none">
                        <x-title-section-blue
                        :subtitle="$value['beforeTilte']"
                        :title="$value['title']" />
                    </a>
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <x-title-section-blue :description="$value['description']" />
                    </div>
                    <div class="col-lg-6 ps-lg-4">
                        <div class="row">
                            @foreach($value['imgs'] as $key2 => $value2)
                            <div class="col-12 col-md mb-3 mb-md-0">
                                <x-img-titles :img="$value2['img']" :title="$value2['title']" />
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <img src="{{ asset('img/Tribal.png') }}" class="tribal end-botton" width="180" alt="">
</div>
