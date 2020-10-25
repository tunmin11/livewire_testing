<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Counter extends Component
{
	public $count = 0, $name = "";

    public function increment()
    {
    	$this->count = rand(100000,999999);

    }

    public function render()
    {
        return view('livewire.counter');
    }

}
