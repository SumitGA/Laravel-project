<!doctype html>
<html lan="en">
	<head>
		<meta charset="utf-8">
		<title>@yeild('title')</title>
		<link rel="stylesheet" type="text/css" href="{{ ('css/main.css') }}">
		@yield('styles')

	</head>
	<body>
		@include('includes.header')
		<div class="main">
			@yield('content')
			
		</div>
		
	</body>