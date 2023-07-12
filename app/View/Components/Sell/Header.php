<?php

namespace App\View\Components\Sell;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $customer;
    public $details;
    public $link;
    /**
    /**
     * Create a new component instance.
     */
    public function __construct($customer,$details,$link='overview')
    {
        $this->customer=collect(json_decode($customer,true));
        $this->details=collect(json_decode($details,true));
        $this->link=$link;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sell.header');
    }
}
