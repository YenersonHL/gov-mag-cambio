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
<div class="container-fluid hvh-75 img-cover-section bg-orange" style="background-image: url('{{ asset('img/caicedo-publico-01-glass.png')  }}');">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="row hvh-75 align-items-center">
                    <div class="col-12 text-center text-white">
                        <h1 class="display-1 text-uppercase fw-bold">una historia de luchas y resultados </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 col-lg-10 col-xl-8 p-5 bg-white biography-section rounded-5 fs-5">
                        <img src="{{ asset('img/caicedo-750x805.png') }}" class="float-start me-3 mb-4" width="50%" alt="">
                        <h2 class="display-4 text-center bg-orange mb-5 text-uppercase fw-bold text-white rounded-4 p-3">Carlos<br>caicedo</h2>
                        <p><span class="float-start display-3 lh-1 me-3 fw-bold">E</span> n la intrincada política colombiana, la historia de Carlos Eduardo Caicedo Omar se erige como un relato singular de luchas, perseverancia y resultados.</p>
                        <p>Nació en Aracataca, la tierra que inspiró las obras maestras de Gabriel García Márquez, y desde muy niño llegó a Santa Marta, criado en el seno de una familia humilde, su madre, empleada doméstica, y su padre, un maestro de origen guajiro.</p>
                        <p>En su hogar siempre estuvo rodeado de libros, siendo esto la base de su espíritu político y luchador. Se formó como profesional en la Universidad Nacional de Colombia, donde recibió el título de abogado; luego realizó un magíster en Dirección Universitaria en la Universidad de Los Andes; y actualmente es candidato a Doctor en Ciencias Políticas de la Administración y Relaciones Internacionales de la Universidad Complutense de Madrid (España).</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-orange mb-5 img-cschool-section" style="background-image: url({{ asset('img/liceo-750x430.jpg') }});">
                <div class="container">
                    <div class="row hvh-35 justify-content-center align-items-end py-3">
                        <div class="col-12 col-md-12 col-lg-10 col-xl-8 px-5 fs-5">
                            <p class="text-white text-sh-a mb-0 bg-orange p-3">Desde muy joven se comprometió con movimientos estudiantiles a favor del cambio social y fue así como se convirtió en presidente del Consejo Estudiantil del colegio público Liceo Celedón de Santa Marta, en donde se graduó como bachiller.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 col-lg-10 col-xl-8 mb-5 px-5 fs-5">
                        <p>Promovió en Bogotá la Séptima Papeleta, la cual dio origen a la Constitución Política de 1991. Para esa elección, asumió la candidatura por el movimiento social y político A Luchar, para ser constituyente en la lista de la Unión Patriótica, UP. Años después aportó como vocero del exitoso proceso de paz entre la Corriente de Renovación Socialista y el Gobierno Nacional.</p>
                        <img src="{{ asset('img/imgs-01.jpg') }}" class="float-md-end rounded-4 ms-md-4 mb-3 col-12 col-md-6" alt="">
                        <p>En los cargos públicos ejercidos, ha materializado procesos de cambio y transformación, dignificando al pueblo. Fue director de Atención y Prevención de Desastres en el departamento del Magdalena, desde donde atendió múltiples emergencias invernales y ambientales y liderando la Red de Solidaridad Social.</p>
                        <p>Durante 10 años fue rector de la Universidad del Magdalena, institución en la que adelantó un exitoso proceso de refundación, el cual dio lugar a la apertura de 20 nuevos programas de pregrado, pasando de menos de 2.000 a más de 9.000 estudiantes.</p>
                        <p>Además, triplicó el presupuesto, rescatándola de una profunda crisis financiera y promovió miles de becas y programas de equidad para las personas con menos recursos, al igual que para las minorías étnicas.</p>
                        <p>
                        Construyó un moderno Campus e implementó un novedoso programa de alimentación, transporte y monitorías para estimular el desempeño y permanencia en la Universidad.</p>
                        <p>Su lucha contra la corrupción ha sido incesante, poniendo en riesgo su propia integridad física y jurídica, siendo víctima de falsas denuncias y montajes de parapolíticos que manipularon, tanto a la Fiscalía como a diversos sectores de la Rama Judicial.</p>

                        <p>Siendo inocente lo privaron de la libertad por cinco años, pero gracias al apoyo popular y a la movilización estudiantil, así como, su lucha por la prevalencia de la verdad, quedó en libertad, para seguir defendiendo los derechos de las mayorías.</p>

                        <p>En el 2011 fue elegido Alcalde de Santa Marta para el período 2012 - 2015, con una diferencia histórica de votos. El respaldo popular jugó papel decisivo en el resultado final.</p>

                        <p>Impulsó un gobierno alejado de las transacciones burocráticas de la politiquería y corrupción, cambiando positivamente a la ciudad. Generó un ambiente de confianza que posibilitó la continuidad del modelo y la forma de gobernar para las mayorías en un período de 12 años.</p>

                        <p>Su capacidad para obtener resultados tangibles lo distinguen como el único líder de izquierda que ha logrado continuidad con su partido político.</p>

                        <p>A pesar de los desafíos y las convenciones establecidas por una clase política acostumbrada a la alternancia de los gobiernos territoriales, sin cambios significativos, Carlos Caicedo mantiene el apoyo de un pueblo que valora y respalda sus iniciativas, con la convicción que apuntan al desarrollo, el progreso y el cambio de paradigmas.</p>

                        <p>En el 2018, para la inscripción como pre-candidato presidencial recogió 2 millones de firmas, y en la consulta con el hoy mandatario nacional, Gustavo Petro, obtuvo más de 500 mil votos, consolidándose como un símbolo de esperanza para millones de colombianos que anhelan un cambio real.</p>

                        <p>Para el 2019, con más de 345 mil votos, se convirtió en el Gobernador del Magdalena para el periodo 2020-2023, logrando una transformación social y equitativa en el Departamento.</p>

                    </div>
                </div>
            </div>
            <div class="container-fluid bg-orange section-bg-img" style="background-image: url({{ asset('img/elecciones.jpeg') }});"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 col-lg-10 col-xl-8 mb-5 px-5 pt-3 fs-5 marg-n-content bg-white">
                        <h2 class="mb-4">TESTIMONIO DE RESILIENCIA </h2>
                        <p>En una batalla por la equidad y la justicia, a Carlos Caicedo le ha tocado enfrentarse a paramilitares, clanes políticos y a las instituciones del Estado permeadas por la extrema derecha. Siempre ha mantenido una valiente postura frente a la persecución y la adversidad.</p>

<p>Su vida trasciende las fronteras de la política convencional y se convierte en un testimonio de resiliencia y compromiso con los ideales de justicia y equidad. Su legado sigue siendo un faro de esperanza en un país que busca dejar atrás décadas de conflicto y desigualdad, recordándonos que la verdadera transformación comienza desde abajo, desde las raíces mismas de la sociedad.</p>

<p>Es el único líder de izquierda que ha dado resultados, que ha gobernado varias veces sin menoscabar su trayectoria ni imagen, a pesar de los intentos para sacarlo de la política y perjudicarlo, ante el pueblo que siempre ha confiado en sus proyectos.</p>

<p>Siendo Gobernador en el periodo 2020-2023, consolidó al Magdalena como el que más luchó contra la pobreza en Colombia, reconocido por el Dane. Más alfabetizados, atención oportuna a la población vulnerable a través de las Ferias de la Equidad; miles de atendidos en salud con el programa Médico en Tu Casa; más y mejor alimentación escolar universalizada, implementación de estrategias contra la desnutrición, entregas de bicicletas, mobiliario escolar y computadores para estudiantes y más jóvenes a la educación superior con Becas Del Cambio, fueron soportes de una gestión de gobierno que hizo posible lo que ninguno antes había logrado: Cambiar el Magdalena.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">const queso = 1;</script>
@endsection
