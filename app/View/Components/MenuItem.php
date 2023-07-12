<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItem extends Component
{

    public $type;
    public $icon;
    public $text;
    public $link;
    public $active;
    public $count;
    public $id;
    /**
     * Create a new component instance.
     */
    public function __construct($type,$icon, $text, $link = null, $active = false,  $count = 0,  $id = null)
    {
        $this->type=$type;
        $this->icon=$icon;
        $this->text=$text;
        $this->link=$link;
        $this->active=$active;
        $this->count=$count;
        $this->id=$id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-item');
    }
}
