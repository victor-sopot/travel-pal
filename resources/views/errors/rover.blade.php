@extends('layouts.app')

@section('content')

<div class="row content">
	<div class="col-md-12">
		<h1>{{ $response }}</h1>

		<a href="{{ url('/profile') }}">View Your Profile</a>
	</div>
</div>

{{-- <a href="{{ route('/home') }}">Home</a> --}}

@endsection