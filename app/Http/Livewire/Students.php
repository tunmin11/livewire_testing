<?php

namespace App\Http\Livewire;

use App\Student;
use Livewire\Component;

class Students extends Component
{
    public $search, $students, $firstname, $lastname, $phone, $gender, $studentID;
    public $Updating = false;

    public function render()
    {
        $student_list = Student::where('firstname', 'like', '%'.$this->search.'%')
                                ->Orwhere('lastname', 'like', '%'.$this->search.'%')
                                ->Orwhere('gender', 'like', '%'.$this->search.'%')
                                ->Orwhere('phone', 'like', '%'.$this->search.'%')
                                ->get();
                                
        $this->students = $student_list->toArray();
        
        return view('livewire.student',compact('student_list'));
    }

    public function insert()
    {

        $validatedDate = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);

        Student::create($validatedDate);
        
        $this->reset();//Reset form data

        session()->flash('message', 'Student successfully Created.');
    }


    public function rest(){
        $this->firstname = "";
        $this->lastname = "";
        $this->phone = "";
        $this->gender = "";
    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();

        session()->flash('message','Student successfully Deleted.');
    }

    public function edit($id)
    {
        $student = Student::find($id);

        $this->studentID = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->phone = $student->phone;
        $this->gender = $student->gender;

        $this->Updating = true;
    }
}
