@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="content row">
		<div class="col-md-6">
			<h1>Rovers in {{ $city->name }}</h1>

			<ul>
				@foreach ($city->rovers as $rover)
					<li>
						{{ $rover->bio }}
						{{ $rover->user->first_name }}
					</li>
				@endforeach
			</ul>
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
</div>

@endsection