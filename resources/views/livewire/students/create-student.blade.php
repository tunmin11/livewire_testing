<div >
    <!-- <form wire:submit.prevent="insert">  -->
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputEmail4">First Name</label>
            <input wire:model="fname" type="text" class="form-control" id="inputEmail4"
      placeholder="Enter Firstname">
            @error('fname') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
          <div class="form-group col-md-3">
            <label for="inputPassword4">Last Name</label>
            <input type="text" wire:model="lname" class="form-control" id="inputPassword4" placeholder="Enter Lastname">
            @error('lname') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
 
          <div class="form-group col-md-3">
            <label for="inputCity">Phone</label>
            <input type="text" wire:model="phone" class="form-control" placeholder="Enter Mobile">
            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="form-group col-md-2">
            <label for="inputState">Gender</label>
            <select id="inputState" wire:model="gender" class="form-control">
              <option selected>Choose...</option>
              <option value="0">Male</option>
              <option value="1">Female</option>
            </select>
            @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
        </div>
        <button type="submit" wire:click.prevent="insert" style="float:right; margin-right:8%; margin-bottom:3px" class="btn btn-primary" >Create</button>
    <!-- </form> -->
</div>