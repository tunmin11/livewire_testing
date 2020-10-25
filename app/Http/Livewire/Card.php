<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
	public $width = 100, $height = 100, $bgcolor = "eeeeee", $unit="px";


    public function render()
    {
        return view('livewire.card');
    }
    
}
