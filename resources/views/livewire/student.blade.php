<div class="card shadow p-3">
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
            </tr>
        </thead>
        <tbody>
            @foreach($student_list as $index => $student)
            <tr>
                <td>{{$index + $student_list->firstItem()}}.</td>
                <td>{{$student->firstname}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->gendername}}</td>
                <td>{{$student->phone}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $student_list->links() }}

</div>
