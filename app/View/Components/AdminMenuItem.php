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
    public $sub_items;
    public $has_sub_menu;
    public $href;
    public function __construct($icon, $langKey, $subItems=null, $href="#", $hasSubMenu = true)
    {
        $this->icon = $icon;
        $this->lang_key = $langKey;
        $this->sub_items = $subItems;
        $this->has_sub_menu = filter_var($hasSubMenu, FILTER_VALIDATE_BOOLEAN); 
        $this->href= $href;
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
