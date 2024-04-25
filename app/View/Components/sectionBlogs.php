<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Traits\BlogsList;

class sectionBlogs extends Component
{
    use BlogsList;
    public function __construct()
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.section-blogs');
    }
}
