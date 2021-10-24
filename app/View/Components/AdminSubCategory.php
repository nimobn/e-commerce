<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminSubCategory extends Component
{
    public $color;
    
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-sub-category');
    }
}
