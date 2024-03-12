<div class="container-fluid position-relative mb-5">
    <div class="row">
        <div class="col-12">
            <div class="container">
                @foreach([1,2,3] as $key)
                <div class="row align-items-center mb-5">
                    <div class="col-12">
                        <x-title-section-blue
                        subtitle="Así cambio"
                        title="Sanata Marta" />
                    </div>
                    <div class="col-6">
                        <x-title-section-blue
                        description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nemo deserunt ducimus, qui, tempora velit odio hic aut aliquam cum beatae, at mollitia, aspernatur excepturi ut eligendi cupiditate et pariatur." />
                    </div>
                    <div class="col-6 ps-4">
                        <div class="row">
                            <div class="col-6">
                                <x-img-titles />
                            </div>
                            <div class="col-6">
                                <x-img-titles />
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
