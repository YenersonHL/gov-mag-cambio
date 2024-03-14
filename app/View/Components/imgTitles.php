<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class imgTitles extends Component
{
    public string $img;
    public string $title;
    public function __construct(string $img = '', string $title = '')
    {
        $this->img = $img;
        $this->title = $title;
    }
    public function render(): View|Closure|string
    {
        return view('components.img-titles');
    }
}
