<div class="container-fluid position-relative mb-5">
    <div class="row">
        <div class="col-12">
            <div class="container">
                @foreach([1,2] as $key)
                <div class="row align-items-center mb-5">
                    <div class="col-12">
                        <x-title-section-blue
                        subtitle="Así cambio"
                        title="Sanata Marta" />
                    </div>
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <x-title-section-blue
                        description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nemo deserunt ducimus, qui, tempora velit odio hic aut aliquam cum beatae, at mollitia, aspernatur excepturi ut eligendi cupiditate et pariatur." />
                    </div>
                    <div class="col-lg-6 ps-lg-4">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <x-img-titles img="a-1.jpg" title="Fuerza del cambio" />
                            </div>
                            <div class="col-12 col-md-6">
                                <x-img-titles img="a-2.jpg" title="El cambio sigue" />
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <img src="{{ asset('img/Tribal.png') }}" class="tribal end-botton" width="180" alt="">
</div>
