<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Subcategory extends Component
{
    public $subCategories = null;
    public $select = '';
    public $children;
    public function render()
    {
        return view('livewire.subcategory');
    }

    public function mount($subCategories = null){
        $this->subCategories = $subCategories;
    }

    public function updatedSelect($value)
    {
        $this->select = $value;
        $this->children = Category::where('path' , $value)->get();
    }

    public function change($subCategories){
        $this->subCategories = $subCategories;
    }
}
