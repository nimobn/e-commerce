<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminMenuItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $icon;
    public $lang_key;
    public function __construct($icon, $langKey)
    {
        $this->icon = $icon;
        $this->lang_key = $langKey;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-menu-item');
    }
}
