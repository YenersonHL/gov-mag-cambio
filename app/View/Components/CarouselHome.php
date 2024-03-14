<?php

namespace App\View\Components;
use App\Traits\CarouselImg;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CarouselHome extends Component
{
    use CarouselImg;
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.carousel-home');
    }
}
