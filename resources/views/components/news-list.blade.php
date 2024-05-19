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
                            @foreach($newList as $key => $value)
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="card overflow-hidden border-0 shadow-sm h-100 text-link">
                                    <a href="{{ url('/noticias/' . $value['path']) }}" class="card-body bg-light position-relative text-decoration-none">
                                        <h6 class="fs-5 fw-normal">{{ $value['title'] }}</h6>
                                        <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti doloremque officia corporis modi alias hic debitis ab sint similique, culpa omnis illum expedita ratione, at, exercitationem dignissimos facere ducimus impedit!</p>
                                    </a>
                                    <div class="position-relative w-100">
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
                                    <img src="{{ asset('img/galery/' . $value['img']) }}" class="card-img-botton img-cover" alt="...">
                                </div>
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
