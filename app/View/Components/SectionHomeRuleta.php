<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHomeRuleta extends Component
{
    public $slices = [
    ["title" => "Poder popular y federalismo", "text" => "lorem ipsum dolore", "color" => "#282560"],
    /**/
    ["title" => "Colegios, Universidad y Becas del Cambio", "text" => "lorem ipsum dolore", "color" => "#f56420"],
    ["title" => "Deporte para la Alegría", "text" => "lorem ipsum dolore", "color" => "#f56420"],
    ["title" => "Macondo cultural", "text" => "lorem ipsum dolore", "color" => "#f56420"],
    /**/
    ["title" => "Hospitales Medico en tu casa", "text" => "lorem ipsum dolore", "color" => "#47ad39"],
    ["title" => "Alimentos para el cambio", "text" => "lorem ipsum dolore", "color" => "#47ad39"],
    ["title" => "Ferias y utilidades de la equidad", "text" => "lorem ipsum dolore", "color" => "#47ad39"],
    /**/
    ["title" => "Agua al pueblo y vivienda digna", "text" => "lorem ipsum dolore", "color" => "#50a6dd"],
    ["title" => "Gestión Ambiental por la Vida", "text" => "lorem ipsum dolore", "color" => "#50a6dd"],
    /**/
    ["title" => "Cooperativas para el Progreso", "text" => "lorem ipsum dolore", "color" => "#e89e41"],
    ["title" => "Vias del Cambio", "text" => "lorem ipsum dolore", "color" => "#e89e41"],
    /**/
    ["title" => "Cambio por la Paz y la Seguridad", "text" => "lorem ipsum dolore", "color" => "#282560"],
    ["title" => "Políticas Públicas y Finanzas para el Cambio", "text" => "lorem ipsum dolore", "color" => "#282560"]
];

    public function __construct()
    {
        //
    }
    public function render(): View|Closure|string
    {
        return view('components.section-home-ruleta');
    }
}
