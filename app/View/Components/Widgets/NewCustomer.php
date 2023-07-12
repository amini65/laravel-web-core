<?php

namespace App\View\Components\Widgets;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewCustomer extends Component
{


    public $col;
    public $text;
    public $description;
    /**
    /**
     * Create a new component instance.
     */
    public function __construct($text,$description,$col=6)
    {

//        $this->lists=collect(json_decode($lists,true));

        $this->col=$col;
        $this->text=$text;
        $this->description=$description;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widgets.new-customer');
    }
}
