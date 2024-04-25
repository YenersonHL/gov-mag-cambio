<!-- Modal -->
<div class="modal fade modal-navegation" id="modalNavegation" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <div></div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-8 mb-3">
                            <h5 class="fs-1 mb-5 fw-bold text-orange">MENÚ</h5>
                            <ul class="list-unstyled modal-link-navegation text-uppercase">
                                @foreach($navegationMenu as $value => $key)
                                <li>
                                    <a class="{{ request()->is($key['path']) ? 'active' : '' }}" href="{{ url($key['path']) }}">
                                        {{ $key['label'] }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-12 col-lg-4">
                            <picture>
                                <source srcset="{{ asset('img/logo-cambio-orange-sm.png') }}" width="150" media="(max-width: 600px)">
                                <source srcset="{{ asset('img/logo-cambio-orange-md.png') }}" width="225" media="(max-width: 1024px)">
                                <img src="{{ asset('img/logo-cambio-orange.png') }}" width="300" alt="">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>
