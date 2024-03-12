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
                        <div class="col-8">
                            <h5 class="fs-1 mb-5 fw-bold text-orange">MENÚ</h5>
                            <ul class="list-unstyled modal-link-navegation text-uppercase">
                                <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Inicio</a></li>
                                <li><a class="{{ request()->is('noticias') ? 'active' : '' }}" href="{{ url('/noticias') }}">Noticias</a></li>
                                <li><a class="{{ request()->is('blog') ? 'active' : '' }}" href="{{ url('/blog') }}">Nosotros</a></li>
                                <li><a class="{{ request()->is('contacto') ? 'active' : '' }}" href="{{ url('/contacto') }}">Contactar</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('img/logo-cambio-orange.png') }}" width="300" alt="">
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
