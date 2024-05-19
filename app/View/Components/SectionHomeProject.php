<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Traits\Projects;

class SectionHomeProject extends Component
{
    use Projects;
    public function __construct()
    {
        //
    }
    public function render(): View|Closure|string
    {
        return view('components.section-home-project');
    }
}
