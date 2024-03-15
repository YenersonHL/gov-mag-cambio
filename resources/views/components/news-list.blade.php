<div class="container-fluid position-relative mb-5">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4 pt-5">
                        <x-title-section-basic setLabel="Noticias" />
                    </div>
                    <div class="col-12 mb-3">
                        <div class="row">
                            @foreach([1,2,3,4,5,6] as $key)
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <a href="{{ url("/noticia/lorem-ipsum") }}" class="card overflow-hidden border-0 shadow-sm h-100 text-link">
                                    <div class="card-body bg-light position-relative">
                                        <h6 class="fs-5 fw-normal">Lorem, ipsum, dolor.</h6>
                                        <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti doloremque officia corporis modi alias hic debitis ab sint similique, culpa omnis illum expedita ratione, at, exercitationem dignissimos facere ducimus impedit!</p>
                                        <div class="position-absolute bottom-0 start-0 w-100 z-1 translate-middle-ny">
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
                                    <img src="{{ asset('img/galery/a-1.jpg') }}" class="card-img-botton img-cover" alt="...">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
