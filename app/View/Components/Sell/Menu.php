<?php

namespace App\View\Components\Sell;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    public $link;
    public $text;
    public $active;
    /**
    /**
     * Create a new component instance.
     */
    public function __construct($link,$text,$active=false)
    {
        $this->link=$link;
        $this->text=$text;
        $this->active=$active;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sell.menu');
    }
}
