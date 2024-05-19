<?php

namespace App\Traits;

trait NavegationMenu
{
    public $navegationMenu = [
        [
            "path" => "/",
            "label" => "Inicio"
        ],
        [
            "path" => "/nosotros",
            "label" => "Nosotros"
        ],
        [
            "path" => "/proyectos",
            "label" => "Proyectos"
        ],
        [
            "path" => "/noticias",
            "label" => "Noticias"
        ],
        [
            "path" => "/contacto",
            "label" => "Contacto"
        ],
    ];
}
