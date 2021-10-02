<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<h2>Listen event here!</h2>
	<div id="app">
	{{-- <example-component></example-component> --}}
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>