<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Create extends Component
{
    public $route;
    public $title;
    public $icon;
    public $color;
    /**
     * Create a new component instance.
     */
    public function __construct($route,$title,$icon='create',$color='primary')
    {
        $this->route=$route;
        $this->title=$title;
        $this->icon=$icon;
        $this->color=$color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.create');
    }
}
