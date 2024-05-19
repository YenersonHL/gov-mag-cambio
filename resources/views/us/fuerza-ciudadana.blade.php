@extends('layouts.public')
@section('title', 'Inicio')
@section('style')
<style type="text/css">
.hvh-35 {
    height: 35vh;
}
.hvh-75 {
    height: 70vh;
}
.section-bg-img,
.img-cschool-section,
.img-cover-section {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50% 0;
}

.section-bg-img {
    height: 380px;
}
.section-bg-img,
.img-cschool-section {
    background-attachment: fixed;
}
.marg-n-content,
.biography-section {
    margin-top: -4rem;
}
</style>
@endsection
@section('body')
<section class="im-headparallax" id="im-headparallax">
    <div class="im-content">
        <picture class="im-item-translate" data-im-control="translate" data-im-tranlate="y" data-im-slide="-0.4">
            <img src="{{ asset('img/galery/portada-z-1.png') }}" alt="">
        </picture>
        <picture class="im-item-translate im-static" data-im-control="translate" data-im-tranlate="y" data-im-slide="1">
            <img src="{{ asset('img/galery/portada-z-3.png') }}" alt="">
        </picture>
        <picture class="im-item-translate" data-im-control="translate" data-im-tranlate="y" data-im-slide="-0.9">
            <img src="{{ asset('img/galery/portada-z-2.png') }}" alt="">
        </picture>
        <picture class="im-item-translate" data-im-control="translate" data-im-tranlate="y" data-im-slide="-0.5">
            <img src="{{ asset('img/galery/portada-z-4.png') }}" alt="">
        </picture>
    </div>
</section>

<div class="container-fluid" style="z-index: 1; position: relative;">
    <div class="row">
        <div class="col-12 px-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 col-lg-10 col-xl-8 p-5 bg-white biography-section rounded-5 fs-5">
                        <img src="{{ asset('img/galery/f-c.png') }}" class="float-start me-3 mb-4" width="50%" alt="">
                        <p><span class="float-start display-3 lh-1 me-3 fw-bold">D</span>e las entrañas de la universidad pública surge Fuerza Ciudadana, un movimiento político que con el tiempo se ha posicionado en el contexto nacional como un referente de la izquierda progresista.</p>
                        <p>En los salones y pasillos de la Universidad del Magdalena y en todo el Campus, se concibió este proyecto político que tuvo como líder a quien en ese momento (año 1997) regentaba como rector: Carlos Eduardo Caicedo Omar.</p>
                        <p>Este visionario hombre conformó un grupo significativo de personas junto a un colectivo de universitarios que soñaban con cambiar a Colombia. El primer gran logro fue la refundación de la Universidad del Magdalena, al rescatarla de la peor crisis académica y financiera de su historia.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-orange mb-5 img-cschool-section" style="background-image: url({{ asset('img/galery/a-b.jpg') }});">
                <div class="container">
                    <div class="row hvh-35 justify-content-center align-items-end py-3">
                        <div class="col-12 col-md-12 col-lg-10 col-xl-8 px-5 fs-5">
                            <p class="text-white text-sh-a mb-0 bg-orange p-3">El éxito de este proyecto de país fue la carta de presentación para que Carlos Caicedo aspirara en el 2011 a ser alcalde de Santa Marta. Fuerza Ciudadana, con el liderazgo de Caicedo, y el apoyo de universitarios y de cientos de voluntario, logró recoger más de 130 mil firmas para inscribir a su candidato a la Alcaldía, pero unos días antes, debido al riesgos por los ataques y montajes de políticos tradicionales en asocio con grupos criminales se decidió hacer la inscripción con el aval del partido Liberal.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 col-lg-10 col-xl-8 mb-5 px-5 fs-5">
                        <p>Pese a que los montajes judiciales, las amenazas y las falsas noticias no cesaron, y a que la clase política tradicional de Santa Marta y el Magdalena se unió en su contra, Carlos Caicedo con Fuerza Ciudadana de su lado, sacó 74 mil 165 votos, el 51.19% de la votación total, duplicó en sufragios al candidato de las maquinarias y de la corrupta clase política local.</p>
                        <img src="{{ asset('img/imgs-01.jpg') }}" class="float-md-end rounded-4 ms-md-4 mb-3 col-12 col-md-6" alt="">
                        <p>Esa votación, que en el momento representó la mayor en toda la historia de una justa electoral en la capital del Magdalena, estuvo basada en el voto de opinión. Fuerza Ciudadana, liderada por Carlos Caicedo, no sólo derrotó a la clase política tradicional, enquistada en el gobierno sin impulsar su desarrollo social y económico, sino que abrió las puertas del movimiento de cambio en el departamento y el Caribe.</p>
                        <p>Al cierre de su tarea administrativa y con un 83 por ciento de favorabilidad, fue reconocido por los samarios como el mejor alcalde históricamente de la ciudad y el segundo con más aceptación en el país. </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-orange section-bg-img" style="background-image: url({{ asset('img/elecciones.jpeg') }});"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 col-lg-10 col-xl-8 mb-5 px-5 pt-3 fs-5 marg-n-content bg-white">
                        <h2 class="mb-4">CRECIMIENTO POLÍTICO</h2>
                        <p>En el año 2015, Fuerza Ciudadana asume como movimiento independiente la Alcaldía de Santa Marta, por medio de la elección de Rafael Alejandro Martínez; quien como estudiante junto con el rector Carlos Caicedo, hizo parte del proceso de refundación de la Universidad del Magdalena. 90 mil votos consolidaron la continuidad de las obras del Cambio trazado por su antecesor.</p>
<p>Para ese mismo año, el movimiento político logró recoger más 230 mil firmas con las que Carlos Caicedo gestionó la salida de la concesión de servicio de agua y alcantarillado - Metroagua de Santa Marta -, siendo este un acto popular sin precedentes contra una empresa de pésimos servicios públicos en Colombia.</p>
<p>Fuerza Ciudadana encabezó en el Caribe, en el 2016, la cruzada por el 'Sí a la Paz’, visitando la mayoría de los departamentos en la región. Fueron más de 4 mil kilómetros recorridos y más de 360 horas de viaje empleadas para cumplir con la pedagogía.</p>
<p>En el 2018, fue el primer movimiento político alternativo del Caribe en postular un candidato a la Presidencia de la República, a través de Carlos Caicedo, logrando recoger 2 millones 053 mil 926 firmas de colombianos que deseaban un cambio para el país. Posteriormente, obtuvo más 500 mil votos en la Consulta de la Paz para elegir candidato presidencial, superando a otros aspirantes de gran trascendencia nacional.</p>
<p>Luego de 140 asambleas previas, desarrolladas entre ciudades, municipios, localidades y comunas de 22 departamentos, donde se registraron números superiores a los 9 mil asistentes, entre los cuales, más de 6 mil se afiliaron a la estructura, Fuerza Ciudadana, que celebró en Bogotá su primera Gran Convención Nacional como partido, con la presencia de 232 delegados procedentes de todos los rincones del país.</p>
<p>Resultando elegidos 1.273 directivos y 607 postulados a cargos de elección popular de cara a los comicios territoriales de 2019: 24 de ellos a Alcaldías, 217 a Concejos Municipales, 20 para ser diputados, 2 a las Juntas de Acciones Comunales y 204 para ser ediles.</p>
<p>En 2019, Carlos Caicedo fue elegido gobernador del Magdalena con una histórica votación de 345.786 sufragios y alcanzó a conquistar el electorado en más de 25 municipios del departamento, siendo el primer partido en alcanzar semejante gesta en Magdalena. Mientras que su fórmula a la Alcaldía, Virna Johnson, se convirtió en la primera mujer en ser alcaldesa, superando en votos a Rafael Martínez, su antecesor.</p>
<p>Fuerza Ciudadana ha sido el primer partido alternativo de Colombia en poner Gobernador (Magdalena) y Alcalde de una ciudad capital (Santa Marta), durante un mismo periodo, un hechos sin precedentes en la política nacional.</p>
<p>También, en 2019, logra su primera curul nacional, tras posicionar al líder social, Juan Amaya, en el Concejo Municipal de Neiva. Fuerza Ciudadana en el 2007, ya había tenido un concejal en alianza con un partido progresista, en Santa Marta.</p>
<p>En el 2022, Fuerza Ciudadana se lanza a la conquista del Congreso de la República con una lista propia. La colectividad obtuvo 435 mil votos al Senado y eligió a Ingrid Aguirre a la Cámara, siendo esta la primera curul de una colectividad alternativa en este departamento.</p>
<p>En ese mismo año, para el mes de diciembre, el Consejo Nacional Electoral le otorga la personería jurídica a Fuerza Ciudadana como partido político, lo que la potencializa para extenderse a todo el país en las elecciones regionales próximas para la época.</p>
<p>Para las elecciones regionales del 2023, Fuerza Ciudadana obtiene nuevamente la Gobernación del Magdalena con Rafael Martínez, quien sumó más de 306 mil votos, también gana la alcaldía de Santa Marta con Jorge Agudelo, pero una acción irregular de la Comisión Escrutadora, anula la votación de más de 86 mil samarios, situación jurídica que se encuentra en pleito ante la Corte Constitucional y el Consejo de Estado.</p>
<p>En estos comicios electorales, sumando el Magdalena y el resto del país, Fuerza Ciudadana logra obtener 81 concejales, 42 ediles, 2 diputados, 1 gobernador y una alcaldía que está por recuperarse en los estrados judiciales.</p>
<p>Fuerza Ciudadana es un sentimiento colectivo de esperanza que se tornó en cambio y optimismo, pudo demostrar que era posible transformar entornos, ciudades y sistemas de manera positiva.</p>
<p>A sus militantes los caracteriza su capacidad de lucha, su inconformismo con la desigualdad y su convicción de que las cosas pueden cambiar y que la pobreza se puede superar con políticas que incentiven los ingresos, el bienestar y el progreso.</p>
<p>Este partido tiene el ímpetu del Caribe, la solidaridad de la gente, el optimismo de la juventud, la experiencia de los que lucharon durante años y la convicción de un pueblo, que ya es consciente de sus derechos y de lo que es capaz de hacer cuando actúa por el mismo rumbo.</p>
<p>Fuerza Ciudadana es un semillero de liderazgos con la experiencia de cambios positivos y resultados que necesita Colombia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
class ImHeadparallax {
    constructor(el) {
        this.contents = [];
        this.options = {};
        this.main = (typeof el === 'string') ? document.getElementById(el) : el;
        this.init();
    }
    init() {
        const contents = this.main.querySelectorAll('[data-im-control=translate]');
        contents.forEach((el) => this.contents.push({
            el,
            slide: Number(el.getAttribute('data-im-slide'))
        }));
        this.windowScroll();
    }
    windowScroll() {
        window.addEventListener("scroll", () => {
            let scrollY = window.scrollY;
            this.contents.forEach(paralax => {
                let quantity = -(scrollY / 1.5) * paralax.slide;
                paralax.el.style.cssText = `--im-translate-slide: ${Number(quantity.toFixed(3))}px;`;
            });
        });
    }
}
new Vue({
        delimiters: ['[[', ']]'],
        el: '#app',
        mounted() {
            const itemlist = new ImHeadparallax('im-headparallax');
        },
        data: {},
        methods: {},
    });
</script>
@endsection