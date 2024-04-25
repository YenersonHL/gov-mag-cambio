<nav class="navbar navbar-custom navbar-expand-lg bg-orange position-sticky top-0" style="z-index: 1000;">
    <div class="container-fluid">
        <a class="navbar-brand text-white fs-2" aria-current="page" href="{{ url('/') }}">Carlos <b>Caicedo</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#modalNavegation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ">
            <div class="d-flex w-100 justify-content-end">
            <ul class="navbar-nav mb-2 mb-lg-0 gap-4">
                @foreach($navegationMenu as $value => $key)
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url($key['path']) }}">{{ $key['label'] }}</a>
                </li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
</nav>
