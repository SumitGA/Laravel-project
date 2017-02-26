@extends('layouts.master')

@section('content')

	<div class="centered">
		<a href="{{ route('greet') }}">Greet</a>
		<a href="{{ route('hug') }}">Hug</a>
		<a href="{{ route('kiss') }}">kiss</a>
		

		
	</div>

@endsection