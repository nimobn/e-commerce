<?php

namespace App\Http\Livewire;

use App\Http\Controllers\admin\FeatureController;
use Livewire\Component;

class FeatureBox extends Component
{
    public $box_counter = 0;
    public $feature = null;
    public function render()
    {
        return view('livewire.feature-box');
    }

    public function mount($feature=null)
    {
        // $this->box_counter = count($feature->features);
        $this->feature = $feature;
    }

    public function addBox()
    {
        $this->box_counter++;
    }

    public function rmBox()
    {
        $this->box_counter--;
    }
}
