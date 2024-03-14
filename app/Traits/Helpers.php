<?php

namespace App\Traits;

trait Helpers
{
    public function readMarkdownFile($filename)
    {
        $filePath = public_path('md/' . $filename . ".md");

        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        } else {
            return "El archivo '$filename' no fue encontrado. ";
        }
    }
}