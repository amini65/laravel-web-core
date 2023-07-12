<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IconSvg extends Component
{

    public $name;
    public $color;
    public $size;
    /**
     * Create a new component instance.
     */
    public function __construct($name,$color='#000000', $size='svg-icon svg-icon-2')
    {
        $this->name=$name;
        $this->color=$color;
        $this->size=$size;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.icon-svg');
    }
}
