<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubMenuItem extends Component
{
    public $text;
    public $link;
    public $active;
    /**
     * Create a new component instance.
     */
    public function __construct($text,$link,$active=false )
    {
        $this->text=$text;
        $this->link=$link;
        $this->active=$active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sub-menu-item');
    }
}
