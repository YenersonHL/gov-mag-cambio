<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Traits\NavegationMenu;

class NavegationTop extends Component
{
    use NavegationMenu;
    public function __construct()
    {
        //
    }
    public function render(): View|Closure|string
    {
        return view('components.navegation-top');
    }
}
