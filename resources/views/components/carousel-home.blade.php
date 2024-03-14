<div id="carouselHome" class="carousel slide carousel-home" data-bs-ride="true">
    <div class="carousel-indicators">
        @foreach($carouselHome as $key => $value)
        <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}" aria-current="{{ $key === 0 ? 'true' : 'false' }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($carouselHome as $key => $value)
        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
            <img src="{{ asset('img/galery/'.$value['img']) }}" class="d-block w-100" alt="img">
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
