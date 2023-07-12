<?php

namespace App\View\Components\Report;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Calls extends Component
{
    public $bg;
    public $icon;
    public $count;
    /**
     * Create a new component instance.
     */
    public function __construct($bg,$icon,$count)
    {
        $this->bg=$bg;
        $this->icon=$icon;
        $this->count=$count;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.report.calls');
    }
}
