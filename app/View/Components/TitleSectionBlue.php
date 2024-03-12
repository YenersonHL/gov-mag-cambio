<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TitleSectionBlue extends Component
{
    public $title;
    public $subtitle;
    public $description;
    public function __construct($title = '', $subtitle = '', $description = '')
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->description = $description;
    }

    public function render(): View|Closure|string
    {
        return view('components.title-section-blue');
    }
}
