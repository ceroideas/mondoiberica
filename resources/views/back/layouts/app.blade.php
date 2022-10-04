<!DOCTYPE html>
<html lang="ES_es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		<title>{{ $title ?? '' }}</title>
		<meta name="description" content="{{ $description ?? '' }}">
		<meta name="robots" content="noindex, nofollow">
		
		<link rel="shortcut icon" href="/img/favicon.png"  />
		@vite(['resources/css/app.css', 'resources/js/app.js'])
	
	</head>
	<body class="font-nunito text-gray antialiased">
		@include('front.layouts.sidebar')
		
		{{ $slot }}
	</body>
</html>
