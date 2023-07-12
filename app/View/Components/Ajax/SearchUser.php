<?php

namespace App\View\Components\Ajax;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchUser extends Component
{

    public $customer;
    /**
     * Create a new component instance.
     */
    public function __construct($customer)
    {
        $this->customer=$customer;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ajax.search-user');
    }
}
