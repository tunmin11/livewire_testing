<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
	private $num = 0;
    public function render()
    {
    	$num = $this->num;
    	$data = ["name" => "Jelly" , "num" => $num];
        return view('livewire.hello-world',$data);
    }
}
