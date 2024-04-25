<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Traits\NewsAll;

class newsOutstanding extends Component
{
    use NewsAll;
    public $outstanding = [];
    public $last = null;
    public function __construct()
    {
        $this->outstanding = array_slice($this->newList, -5, 4);
        $this->last = end($this->newList);
    }

    public function render(): View|Closure|string
    {
        return view('components.news-outstanding');
    }
}
