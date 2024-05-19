<?php

namespace App\Traits;

trait BlogsList
{
    public $blogsList = [
        [
            "category" => "us",
            "path" => "/nosotros/carlos-caicedo",
            "imgs" => [
                ["img" => "a-1.jpg", "title" => "Fuerza del cambio"],
                ["img" => "a-2.jpg", "title" => "Por el pueblo"]
            ],
            "description" => "En la intrincada política colombiana, la historia de Carlos Eduardo Caicedo Omar se erige como un relato singular de luchas, perseverancia y resultados. En los cargos públicos ejercidos, ha materializado procesos de cambio y transformación, dignificando al pueblo.",
            "title" => "una historia de luchas y resultados",
            "beforeTilte" => "Carlos Caicedo"
        ],
        [
            "category" => "project",
            "path" => "/project/medico-en-tu-casa",
            "imgs" => [
                ["img" => "mc-1.jpg", "title" => "Medicos en tu casa"],
                ["img" => "mc-2.jpg", "title" => "Salud al alcance"]
            ],
            "description" => " Una iniciativa innovadora para la promoción de la salud y la gestión de riesgos en Magdalena, Colombia",
            "title" => "Médico en tu Casa",
            "beforeTilte" => "gestión del riesgo para las poblaciones vulnerables"
        ],
        [
            "category" => "project",
            "path" => "/project/modistas-del-cambio",
            "imgs" => [
                ["img" => "mc-3.jpg", "title" => "Fuerza del cambio"],
                ["img" => "mc-4.jpg", "title" => "Fuerza del queso"]
            ],
            "description" => "Proyecto de Reactivación Económica en el Departamento del Magdalena: Impulsado por Carlos Caicedo",
            "title" => "Modiastas del cambio",
            "beforeTilte" => "Estrategia de Reactivaciónd de la Económica"
        ],
        [
            "category" => "us",
            "path" => "/nosotros/fuerza-ciudadana",
            "imgs" => [
                ["img" => "f-ciudadana.jpg", "title" => ""],
                ["img" => "f-ciudadana2.jpg", "title" => ""]
            ],
            "description" => "Fuerza Ciudadana, un movimiento político que con el tiempo se ha posicionado en el contexto nacional",
            "title" => "¡Fuerza Ciudadana, más que un partido!",
            "beforeTilte" => "Un referente de la izquierda progresista"
        ]
    ];
}
