<?php

namespace App\View\Components\Page;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Title extends Component
{
    public $text;
    public $description;
    /**
     * Create a new component instance.
     */
    public function __construct($text,$description=null)
    {
        $this->text=$text;
        $this->description=$description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page.title');
    }
}
