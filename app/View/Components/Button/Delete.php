<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Delete extends Component
{
    public $route;
    public $title;
    public $icon;
    /**
     * Create a new component instance.
     */
    public function __construct($route,$icon,$title='')
    {
        $this->route=$route;
        $this->icon=$icon;
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.delete');
    }
}
