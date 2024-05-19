<section class="container-fluid position-relative mb-5">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <x-title-section-basic setLabel="Videos" />
                    </div>
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                                <div v-if="reload">
                                    <iframe class="rounded-4 shadow-lg" width="100%" height="500" :src="currentVideoUrl" title="EL CAMBIO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                            {{-- <div class="col-12 col-lg-4">
                                <ul class="list-group-items">
                                    <template v-for="(video, index) in videoList">
                                        <li class="block mb-1 content-link-block"  @click="changeVideo(video.url)">
                                            <div class="card border-0">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <div class="block position-relative overflow-hidden rounded-3" style="width: 130px; height: 100px;">
                                                            <img class="object-img" :src="'{{ asset('img/padd/v-') }}' + (index+1) + '.png'" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <span class="badge text-bg-primary me-3">Video</span>
                                                            <time class="small text-muted">Enero 24, 2024</time>
                                                        </div>
                                                        <div>[[ video.title ]]</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </template>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
