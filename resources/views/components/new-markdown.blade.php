<div class="container-fluid position-relative mb-5">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4 pt-5">
                        <x-title-section-basic setLabel="Noticias" />
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-7">
                        <app-markdown markdown="{{ $new }}"></app-markdown>
                    </div>
                    <div class="col-auto">
                        <div class="small mb-3 text-center w-100">
                            <div class="w-100"><i class="fa fa-share-alt fs-3"></i></div>
                            <div class="small text-muted">Compartir</div>
                        </div>
                        <div class="d-flex flex-column gap-2 align-items-center">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-facebook"></i>
                            </button>
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-facebook"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


