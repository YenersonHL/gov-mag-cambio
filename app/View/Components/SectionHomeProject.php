<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Traits\LinksHome;

class SectionHomeProject extends Component
{
    use LinksHome;
    public function __construct()
    {
        //
    }
    public function render(): View|Closure|string
    {
        return view('components.section-home-project');
    }
}
