<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
class TitleSectionBasic extends Component
{
    public $setLabel;
    public function __construct($setLabel)
    {
        $this->setLabel = $setLabel;
    }

    public function render(): View|Closure|string
    {
        return view('components.title-section-basic');
    }
}
