@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="content row">
		<div class="col-md-6">
			@foreach ($response['country'] as $response)
			<h1>{{ $response->name }}</h1>
			@endforeach

			<ul>
				@foreach ($response['cities'] as $city)
					<li><a href="#">{{ $city->name }}</a> (0)</li>
					@endforeach
			</ul>
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
</div>

@endsection