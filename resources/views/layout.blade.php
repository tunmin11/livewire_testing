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
	@livewire('counter')
	@livewireScripts
</body>
	
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</html>
