<section class="container-fluid position-relative mb-5 pb-2">
    <div class="row">
        <div class="col-12 p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 bg-img-cover position-relative" style="background-image: url('{{ asset('img/padd/110.jpg') }}');">
                        <div class="position-absolute w-100 h-100 top-0 start-0 bg-orange-mid-gradient"></div>
                        <div class="row align-items-end position-relative h-100 z-1 text-center">
                            <div class="py-5">
                                <img src="{{ asset('img/logo-cambio-white.png') }}" width="200" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 bg-orange-gradient text-white">
                        <div class="block p-5 my-5">
                            <form class="row form-contat">
                                <div class="col-12 col-xl-9 mb-4">
                                    <h2 class="text-uppercase text-center fw-bold border-bottom pb-1 border-2 border-white">Comentanos tus inquietudes</h2>
                                    <div class="fs-4 lh-sm">Envianos tus sugerencias y preguntas. Para nosotros es importante tu opinio.</div>
                                </div>
                                <div class="col-12 col-xl-9">
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="input-uno" class="form-label">Nombre</label>
                                            <input type="email" class="form-control border-white placeholder-white bg-transparent text-white" id="input-uno" placeholder="Nombre">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="input-dos" class="form-label">Apellido</label>
                                            <input type="email" class="form-control border-white placeholder-white bg-transparent text-white" id="input-dos" placeholder="Apellido">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="input-tres" class="form-label">Correo electronico</label>
                                            <input type="email" class="form-control border-white placeholder-white bg-transparent text-white" id="input-tres" placeholder="Correo electronico">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="input-cuadro" class="form-label">Telefono</label>
                                            <input type="email" class="form-control border-white placeholder-white bg-transparent text-white" id="input-cuadro" placeholder="Telefono">
                                        </div>
                                        <div class="col-12 mb-3">
                                              <label for="input-cinco" class="form-label">Escribe tu comentario</label>
                                              <textarea class="form-control border-white placeholder-white bg-transparent w-100" id="input-cinco" rows="3"></textarea>
                                        </div>
                                        <div class="col-12 mb-3 text-end">
                                            <button type="button" class="btn btn-outline-light px-5">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
