@extends('layouts.app')

@section('content')

	<h1>{{ $user->name }}</h1>

	<ul class="list-unstyled">
	@foreach($follows as $follow)

		<li>{{ $follow->name }}</li>

	@endforeach
	</ul>

@endsection