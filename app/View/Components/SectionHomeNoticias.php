<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHomeNoticias extends Component
{
    public $news = [];
    public $title = '';

    public function __construct($title = 'title', $news = [])
    {
        $this->news = $news;
        $this->title = $title;
    }

    public function render(): View|Closure|string
    {
        return view('components.section-home-noticias');
    }
}
