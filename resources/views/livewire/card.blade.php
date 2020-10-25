
<div>
	<div class="card-class" style="background-color: #{{$bgcolor}}; width: {{$width.$unit}}; height: {{$height.$unit}}" width = "100px" height="100px">

	</div>
	{{$unit}}
	<div class="col-4">
		<div class="form-control">
			<input type="radio" id="px" name="unit" value="px" wire:modal="unit">
			<label class="form-check-label" for="px">pexel</label>
			
			<input type="radio" id="inch" name="unit" value="inch" wire:modal="unit">
			<label class="form-check-label" for="inch">Inch</label>
		</div>
		<div class="form-group">
			<input class="form-control" type="text" wire:model="width">
		</div>
		<div class="form-group">
			<input class="form-control" type="text" wire:model="height">
		</div>
		<div class="form-group">
			<input class="form-control" type="text" wire:model="bgcolor">
		</div>
	</div>
</div>
