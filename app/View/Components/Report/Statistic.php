<?php

namespace App\View\Components\Report;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Statistic extends Component
{
    public $bg;
    public $icon;
    public $text;
    public $details;
    /**
     * Create a new component instance.
     */
    public function __construct($bg,$icon,$text,$details)
    {
        $this->bg=$bg;
        $this->icon=$icon;
        $this->text=$text;
        $this->details=$details;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.report.statistic');
    }
}
