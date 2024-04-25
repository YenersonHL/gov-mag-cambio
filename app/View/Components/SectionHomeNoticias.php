<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHomeNoticias extends Component
{
    public $news = [
        [
            'title' => 'El Tiempo',
            'target' => '_blank',
            'img' => '1.jpg',
            'description' => 'Se oficializa el apoyo Caribe para el \'Sí\'',
            'url' => 'https://www.eltiempo.com/archivo/documento/CMS-16696306',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '8/9/2016',
        ],
        [
            'title' => 'El Tiempo',
            'target' => '_blank',
            'img' => '1.jpg',
            'description' => 'Absuelven a ex rector de la Universidad del Magdalena, Carlos Caicedo',
            'url' => 'https://www.eltiempo.com/archivo/documento/CMS-9315900',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '9/5/2011',
        ],
        [
            'title' => 'El Tiempo',
            'target' => '_blank',
            'img' => '1.jpg',
            'description' => 'El legado que el alcalde Carlos Caicedo le deja a Santa Marta',
            'url' => 'https://www.eltiempo.com/archivo/documento/CMS-16468570',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '28/12/2015',
        ],
        [
            'title' => 'La FM',
            'target' => '_blank',
            'img' => '11.jpg',
            'description' => 'Proponen empresa pública para el manejo de la energía en la Costa Caribe',
            'url' => 'https://www.lafm.com.co/colombia/proponen-empresa-publica-manejo-la-energia-la-costa-caribe',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '15/3/2017',
        ],
        [
            'title' => 'El Heraldo (Magdalena)',
            'target' => '_blank',
            'img' => '12.jpg',
            'description' => 'Caicedo denuncia a exdirectivos de Metroagua, Inassa y Canal Isabel II por desfalco a acueducto samario',
            'url' => 'https://www.elheraldo.co/magdalena/caicedo-denuncia-exdirectivos-de-metroagua-inassa-y-canal-isabel-ii-por-desfalco-acueducto ',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '8/7/2017',
        ],
        [
            'title' => 'Asuntos:legales',
            'target' => '_blank',
            'img' => '13.webp',
            'description' => '‘Los colombianos están cansados de la politiquería’: Caicedo',
            'url' => 'https://www.asuntoslegales.com.co/actualidad/el-candidato-carlos-caicedo-propone-reestructurar-el-estado-para-bajar-el-gasto-2606768',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '7/3/2018',
        ],
        [
            'title' => 'EL Tiempo',
            'target' => '_blank',
            'img' => '1.jpg',
            'description' => 'Carlos Caicedo propone reestructurar el Estado para disminuir el gasto',
            'url' => 'https://www.eltiempo.com/colombia/otras-ciudades/elecciones-2018-carlos-caicedo-vota-en-el-hogar-infantil-bastidas-192536',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '11/3/2018',
        ],
        [
            'title' => 'W radio',
            'target' => '_blank',
            'img' => '14.avif',
            'description' => 'Ex alcalde Carlos Caicedo busca frenar alzas en tarifas de Electricaribe',
            'url' => 'https://www.wradio.com.co/noticias/regionales/ex-alcalde-carlos-caicedo-busca-frenar-alzas-en-tarifas-de-electricaribe/20180824/nota/3790397.aspx?outputType=amp',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '24/8/2018',
        ],
        [
            'title' => 'W radio',
            'target' => '_blank',
            'img' => '15.jpg',
            'description' => 'Caicedo propone una consulta nacional para la conversión a un Estado federalista',
            'url' => 'https://www.wradio.com.co/noticias/regionales/ex-alcalde-carlos-caicedo-busca-frenar-alzas-en-tarifas-de-electricaribe/20180824/nota/3790397.aspx?outputType=amp',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '18/9/20',
        ],
        [
            'title' => 'Política',
            'target' => '_blank',
            'img' => '16.webp',
            'description' => 'Carlos Caicedo es nombrado el mejor gobernante progresista y segundo mejor del país',
            'url' => 'https://www.abcpolitica.com/carlos-caicedo-es-nombrado-el-mejor-gobernante-progresista-y-segundo-mejor-del-pais/',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '26/4/2021',
        ],
        [
            'title' => 'V. (Voces)',
            'target' => '_blank',
            'img' => '17.webp',
            'description' => 'La historia de Carlos Caicedo y cómo fue juzgado injustamente por 5 años',
            'url' => 'https://www.voces.co/la-historia-de-carlos-caicedo-y-como-fue-juzgado-injustamente-por-5-anos',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '13/12/2022',
        ],
        [
            'title' => 'El Tiempo',
            'target' => '_blank',
            'img' => '10.jpeg',
            'description' => 'Fiscalía precluyó proceso contra Carlos Caicedo por crímenes en la Unimagdalena',
            'url' => 'https://www.eltiempo.com/colombia/otras-ciudades/fiscalia-precluyo-proceso-contra-caicedo-por-crimenes-en-unimagdalena-739762',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '6/2/2023',
        ],
        [
            'title' => 'RCN Radio',
            'target' => '_blank',
            'img' => '9.webp',
            'description' => '“Terminan 20 años de infamias”: Carlos Caicedo sobre fallo a su favor',
            'url' => 'https://www.rcnradio.com/judicial/terminan-20-anos-de-infamias-carlos-caicedo-sobre-fallo-a-su-favor',
            'tags' => ['Lorem', 'Ipsum', 'News'],
            'category' => 'General',
            'date' => '24/2/2023',
        ]
    ];
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section-home-noticias');
    }
}
