
<div class="card shadow p-3 m-4" >

        <div class="form-row" wire:keydown.enter="update">
            <input type="hidden" wire:model="studentID">
          <div class="form-group col-md-3">
            <label for="inputEmail4">First Name</label>
            <input wire:model="firstname" type="text" class="form-control"  placeholder="Enter Firstname">
            @error('fname') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
          <div class="form-group col-md-3">
            <label for="inputPassword4">Last Name</label>
            <input type="text" wire:model="lastname" class="form-control" placeholder="Enter Lastname">
            @error('lname') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
 
          <div class="form-group col-md-3">
            <label for="inputCity">Phone</label>
            <input type="text" wire:model="phone" class="form-control" placeholder="Enter Mobile" >
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group col-md-2">
            <label for="inputState">Gender</label>
            <select id="inputState" wire:model="gender" class="form-control">
              <option selected>Choose...</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>
            @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
        </div>

        <div class="form-group text-right col-11">
          <button type="submit" wire:click.prevent="update" class="btn btn-dark" >Update</button>
        </div>
       
</div>