<div class="card shadow p-3">
    
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show fixed-bottom col-8 m-auto" role="alert">
            <strong>{{ session('message')}} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($Updating)
        @include('livewire.students.update-student')
    @else
	    @include('livewire.students.create-student')
    @endif

    <hr>
    <div class="row col-12 justify-content-end">
        <div class="form-group col-3">
            <input type="text" wire:model="search" class="form-control" placeholder="Search ....">
        </div>
    </div>
    <table class="table table-border">
        <thead class="bg-primary text-white">
            <tr>
                <td>No.</td>
                <td>Full Name</td>
                <td>Last name</td>
                <td>Gender</td>
                <td>Phone</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($student_list as $index => $student)
            <tr>
                <td>{{$index}}.</td>
                <td>{{$student->firstname}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->gendername}}</td>
                <td>{{$student->phone}}</td>
                <td>
                    <a wire:click="delete({{$student->id}})" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a>
                    <a wire:click="edit({{$student->id}})" class="btn btn-primary btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

   


    
</div>


