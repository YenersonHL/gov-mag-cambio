@extends('layouts.public')
@section('title', 'Inicio')
@section('body')
<x-carousel-home />
<x-section-home-project />
<x-section-home-ruleta />
<x-section-home-noticias :news="$news" title="En los medios" />
<x-news-outstanding />
<x-section-home-videos />
<x-section-home-social />
<div id="fb-root"></div>
@endsection
@section('script')
<script type="text/javascript">
const { timer } = rxjs;
const { take } = rxjs.operators;

function init() {
    const content = document.getElementById('content-ruseta');
    const title = document.getElementById('ruseta-title');
    const text = document.getElementById('ruseta-text');
    const elementosAnimados = document.querySelectorAll('.slice');
    const elementoFijo = document.getElementById('observer');

    let ultimoElementoSobreFijo = null;
    let indexStore = null;

    const verificarSuperposicion =()=> {
        elementosAnimados.forEach((elementoAnimado) => {
            const animadoRect = elementoAnimado.getBoundingClientRect();
            const fijoRect = elementoFijo.getBoundingClientRect();

            if (
                animadoRect.right >= fijoRect.left &&
                animadoRect.left <= fijoRect.right &&
                animadoRect.bottom >= fijoRect.top &&
                animadoRect.top <= fijoRect.bottom
            ) {
                ultimoElementoSobreFijo = elementoAnimado;
            }
        });

        if (ultimoElementoSobreFijo) {
            content.style.backgroundColor = ultimoElementoSobreFijo.getAttribute('data-color');
            title.textContent = ultimoElementoSobreFijo.getAttribute('data-title');
            text.textContent = ultimoElementoSobreFijo.getAttribute('data-text');
        }
        requestAnimationFrame(verificarSuperposicion);
    }

    verificarSuperposicion();

    var splideInstance = new Splide('#slider-section', {
        type: 'loop',
        perPage: 4.5,
        gap: 10,
        pagination: false,
        arrows: false,
        breakpoints: {
            1200: {
                perPage: 3.5,
            },
            768: {
                perPage: 2.5,
            },
            576: {
                perPage: 1.5,
            }
        }
    });


    var prevButton = document.getElementById('custom-prev');
    var nextButton = document.getElementById('custom-next');

    splideInstance.on('mounted', function(e) {
        prevButton.addEventListener('click', function() {
            splideInstance.go('+1');
        });

        nextButton.addEventListener('click', function() {
            splideInstance.go('-1');
        });
    });

    splideInstance.mount();
}
new Vue({
        delimiters: ['[[', ']]'],
        el: '#app',
        mounted() {
            const timerObservable = timer(500).pipe(
                take(1)
            );

            timerObservable.subscribe(() => {
                init();
            });
        },
        data: {
            reload: true,
            currentVideoUrl: 'https://www.youtube.com/embed/7FqfEOiOaoo',
            videoList: [
                { title: 'Poder Popular y Ferias de la Equidad', url: 'https://www.youtube.com/embed/7FqfEOiOaoo' },
                { title: 'Recibimos por parte del Ministerio del Interior el premio', url: 'https://www.youtube.com/embed/KMfAksDzzzs' },
                { title: 'Programa Institucional "Magdalena Está Cambiando', url: 'https://www.youtube.com/embed/x6LRHJVFXos' },
                { title: 'Santa Marta: Vida y Cambio.', url: 'https://www.youtube.com/embed/QMKXr-9KLng' }
            ],
        },
        methods: {
            changeVideo(url) {
                this.reload = false;
                setTimeout(() => {
                    this.reload = true;
                }, 200);
                this.currentVideoUrl = url;
            },
        },
    });
</script>
<script async src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v19.0"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection
