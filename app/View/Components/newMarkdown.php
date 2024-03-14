<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Traits\Helpers;

class newMarkdown extends Component
{
    use Helpers;
    public $new = '';
    public function __construct($new = '')
    {
        // $new
        $this->new = $this->readMarkdownFile('test-md');
    }

    public function render(): View|Closure|string
    {
        return view('components.new-markdown');
    }


}
