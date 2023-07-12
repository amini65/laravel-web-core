<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select2 extends Component
{

    public $title;
    public $name;
    public $placeholder;
    public $tooltip;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$name,$placeholder,$tooltip=null)
    {
        $this->title=$title;
        $this->name=$name;
        $this->placeholder=$placeholder;
        $this->tooltip=$tooltip;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.select2');
    }
}
