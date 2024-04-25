<?php
namespace App\Traits;

trait BlogsList
{
    public $blogsList = [
        [
            "path"=>"/blog/carlos-caicedo",
            "imgs"=>[
                ["img"=>"a-1.jpg", "title"=>"Fuerza del cambio"],
                ["img"=>"a-2.jpg", "title"=>"Fuerza del queso"]
            ],
            "description"=>"En la intrincada política colombiana, la historia de Carlos Eduardo Caicedo Omar se erige como un relato singular de luchas, perseverancia y resultados. En los cargos públicos ejercidos, ha materializado procesos de cambio y transformación, dignificando al pueblo.",
            "title"=>"una historia de luchas y resultados",
            "beforeTilte"=>"Carlos Caicedo"
        ]
    ];
}