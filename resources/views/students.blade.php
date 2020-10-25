<!DOCTYPE html>
<html>
<head>
	<title>
		Livewire Testing
	</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	
	@livewireStyles
</head>

<body>
<div class="container p-3 mt-3">
	@livewire('students')
</div>
	@livewireScripts
</body>
	
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</html>
