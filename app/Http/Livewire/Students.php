<?php

namespace App\Http\Livewire;

use App\Student;
use Livewire\Component;

class Students extends Component
{
    public $search, $students;
    public function render()
    {
        $student_list = Student::where('firstname', 'like', '%'.$this->search.'%')
                                ->Orwhere('lastname', 'like', '%'.$this->search.'%')
                                ->Orwhere('gender', 'like', '%'.$this->search.'%')
                                ->Orwhere('phone', 'like', '%'.$this->search.'%')
                                ->paginate(5);
                                
        $this->students = $student_list->toArray();
        return view('livewire.student',compact('student_list'));
    }
}
