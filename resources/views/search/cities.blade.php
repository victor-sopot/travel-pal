@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="content row">
		<div class="col-md-6">
			<h1>{{ $country->name }}</h1>

			<ul>
				@foreach ($country->cities as $city)
					<li>
						<a href="{{ route('cities.show', $city->id) }}">{{ $city->name }}</a> ({{ $city->rovers->count() }})
					</li>
				@endforeach
			</ul>
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
</div>

@endsection