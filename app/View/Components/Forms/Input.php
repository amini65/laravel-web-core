<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $title;
    public $name;
    public $placeholder;
    public $tooltip;
    public $value;
    /**
     * Create a new component instance.
     */
    public function __construct($type,$title,$name,$placeholder,$tooltip=null,$value=null)
    {
        $this->type=$type;
        $this->title=$title;
        $this->name=$name;
        $this->placeholder=$placeholder;
        $this->tooltip=$tooltip;
        $this->value=$value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
