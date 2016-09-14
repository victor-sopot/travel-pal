@extends('layouts.app')


@section('content')
	<div class="content row">
		<div class="col-md-12">
			<h1>{{ $city->name }} <small>Pals Available</small></h1>
		</div>
	</div>
	<div class="content row">
		<div class="col-md-6">
			<div class="listed-pals list-group">
				@foreach ($city->rovers as $rover)
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">{{ $rover->bio }}</h4>
						@if($rover->user != null)
							<p>{{ $rover->user->first_name }}</p>
						@endif
					</a>
				@endforeach
			</div>

		</div>
		<div class="col-md-6">
			
		</div>
	</div>

@endsection