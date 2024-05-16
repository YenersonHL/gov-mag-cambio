@extends('layouts.public')
@section('title', 'Modistas del cambio')
@section('style')
<style type="text/css">
.queso {
    background-color: #fff;
}
</style>
@endsection
@section('body')
<x-header-title title="Modiastas del cambio" bgImg="img/bg/mc-131.jpg" description="Proyecto de Reactivación Económica en el Departamento del Magdalena: Impulsado por Carlos Caicedo"></x-header-title>
<section class="fs-5" id="viewportObserver">
    <div class="container-fluid mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-7">
                    <p>El proyecto de Implementación de una Estrategia de Reactivación Económica en el Departamento del Magdalena, liderado por la Gobernación del Magdalena bajo la dirección del Gobernador Carlos Caicedo durante su mandato de 2020 a 2023, surge como una respuesta contundente a las necesidades urgentes de reactivación económica y social en la región. Este proyecto ambicioso tiene como objetivo principal apoyar a los micronegocios del territorio, que representan el 97.5% del sector productivo y están conformados en su mayoría por población en situación de vulnerabilidad, con el fin de fortalecer sus capacidades productivas, fomentar la resiliencia y promover la generación de empleo.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h2 class="fw-bold text-uppercase mb-3 text-orange">Propósito y Objetivos</h2>
                    <p>
El propósito fundamental de este proyecto es mejorar las capacidades y habilidades productivas de los emprendedores del Magdalena, facilitando su inserción en los mercados locales y regionales. A través del fortalecimiento de los micronegocios y el desarrollo de bienes y servicios, se busca responder de manera efectiva a los desafíos socioeconómicos generados por la pandemia de COVID-19, promoviendo la asociatividad empresarial, la vinculación a cadenas de valor y el acceso a redes comerciales. El Gobernador Carlos Caicedo, visionario y comprometido con el desarrollo equitativo de la región, ha sido el impulsor principal de esta iniciativa transformadora que busca generar un impacto positivo y sostenible en la economía local.</p>
                </div>
                <div class="col-6">
                    <img class="w-100 animate_element d-block position-relative Out" data-animate="fadeInRight" src="{{ asset('img/bg/mc-134.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-7 mb-5">
                    <h2 class="fw-bold text-uppercase mb-3 text-orange">Público Objetivo y Alcance</h2>
                    <p>
El público objetivo de este proyecto son los micronegocios del Departamento del Magdalena, que representan una parte significativa del entramado productivo de la región y son clave para la generación de empleo y el dinamismo económico. Se estima que alrededor de 600 micronegocios, que representan a unas 3000 personas, se beneficiarán directamente de este proyecto, fortaleciendo así su capacidad productiva y comercial. Además, se prevé la conformación de una cooperativa que articule las unidades productivas, la generación de más de 3000 empleos directos y la entrega de dotación de equipos e insumos para impulsar el desarrollo de estas unidades productivas.</p>
                </div>
                <div class="col-7 mb-5">
                    <h2 class="fw-bold text-uppercase mb-3 text-orange">Impacto y Contribución Social</h2>
                    <p>
El proyecto de Reactivación Económica en el Departamento del Magdalena, liderado por el Gobernador Carlos Caicedo, busca no solo revitalizar la economía local, sino también promover la inclusión productiva y el empoderamiento de los emprendedores vulnerables de la región. A través del fortalecimiento técnico de los micronegocios, la promoción de la asociatividad empresarial y la realización de ferias y ruedas de negocios, se espera generar un impacto positivo en la generación de empleo, el desarrollo económico y la resiliencia de la comunidad. Carlos Caicedo, con su visión progresista y su compromiso con la equidad, ha liderado este proyecto como una respuesta integral a los desafíos socioeconómicos que enfrenta el Magdalena.</p>
                </div>
                <div class="col-7 mb-5">
                    <div class="row align-items-center fs-5 fw-bold text-uppercase text-orange shadow-lg p-2 text-center mb-5">
                        <div class="col text-end">Estrategias Clave de reactivación económica incluye varios componentes críticos:</div>
                        <div class="col-auto float-end display-1 fw-bold">son</div>
                    </div>
                    <div class="row align-items-center mb-4 animate_element" data-animate="fadeInLeft">
                        <div class="col-auto">
                            <div class="ag-avatar size-xl">
                                <img src="{{ asset('img/2634678.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col px-4">Fortalecimiento de Capacidades: Proporcionar formación y asistencia técnica a los emprendedores para mejorar sus habilidades productivas y comerciales.</div>
                    </div>
                    <div class="row align-items-center mb-4 animate_element" data-animate="fadeInRight">
                        <div class="col px-4">Promoción de la Asociatividad: Fomentar la cooperación entre micronegocios para acceder a nuevos mercados y crear alianzas estratégicas.</div>
                        <div class="col-auto">
                            <div class="ag-avatar size-xl">
                                <img src="{{ asset('img/1077170.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-4 animate_element" data-animate="fadeInLeft">
                        <div class="col-auto">
                            <div class="ag-avatar size-xl">
                                <img src="{{ asset('img/5520859.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col px-4">Apoyo Directo: Incluirá la entrega de equipos e insumos esenciales, además de la organización de ferias y ruedas de negocios para facilitar la comercialización de productos locales.</div>
                    </div>
                    <div class="row align-items-center mb-4 animate_element" data-animate="fadeInRight">
                        <div class="col px-4">Creación de una Cooperativa: Este ambicioso proyecto también incluye la formación de una cooperativa que servirá como plataforma para el desarrollo sostenible de los micronegocios participantes.</div>
                        <div class="col-auto">
                            <div class="ag-avatar size-xl">
                                <img src="{{ asset('img/5332297.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
                                <div class="col-7 mb-5">
                                    <h2 class="fw-bold text-uppercase mb-3 text-orange">Conclusión
</h2>
                                    <p>En resumen, el proyecto de Implementación de una Estrategia de Reactivación Económica en el Departamento del Magdalena, liderado por el Gobernador Carlos Caicedo, representa un paso crucial hacia la revitalización económica y social de la región[1]. Con un enfoque centrado en el fortalecimiento de los micronegocios, la generación de empleo y la promoción de la asociatividad empresarial, esta iniciativa busca no solo superar los desafíos actuales, sino también sentar las bases para un desarrollo equitativo y sostenible en el Magdalena. Carlos Caicedo, con su liderazgo visionario y su compromiso con la equidad, ha sido el motor impulsor de este proyecto transformador que busca generar un impacto positivo y duradero en la comunidad magdalenense.</p>
                                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('ui/add/element-animate.js') }}"></script>
<script type="text/javascript">
new Vue({
        delimiters: ['[[', ']]'],
        el: '#app',
        mounted() {
            elementAnimate();
        },
        data: {
            a: 'hoila'
        }
    });
</script>
@endsection