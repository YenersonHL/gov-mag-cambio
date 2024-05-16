<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderTitle extends Component
{
    public $title = "Blog";
    public $description = "Una historia de luchas y resultados";
    public $bgImg = "";

    public function __construct($title = 'Title', $description = 'Description', $bgImg = '')
    {
        $this->title = $title;
        $this->description = $description;
        $this->bgImg = $bgImg;
    }

    public function render(): View|Closure|string
    {
        return view('components.header-title');
    }
}
