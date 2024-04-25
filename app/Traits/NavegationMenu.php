<?php

namespace App\Traits;

trait NavegationMenu
{
    public $navegationMenu = [
        [
            "path"=>"/",
            "label"=>"Inicio"
        ],
        [
            "path"=>"/blog",
            "label"=>"Blog"
        ],
        [
            "path"=>"/noticias",
            "label"=>"Noticias"
        ],
        [
            "path"=>"/contacto",
            "label"=>"Contacto"
        ],
    ];
}