@extends('layouts.app')

@section('searchbar')

	<div class="container-fluid search">
		<div class="row">
			<div class="col-md-3">
				<div class="search-head">
					<h3><small><a href="{{ url('home') }}">Back</a></small> Searching: </h3>
				</div>
			</div>
			<div class="col-md-4">
				<div id="search-bar">

					<a href="#" class="bg-info">"Country"</a><a href="#" class="bg-info">{{ $city->name }} <span class="glyphicon glyphicon-remove"></span></a>
				</div>
			</div>
			<div class="col-md-5">
				
			</div>
		</div>

	</div>

@endsection

@section('content')

<div class="container">
	<div class="content row">
		<div class="col-md-12">
			<h1>Pals Available</h1>
		</div>
	</div>
	<div class="content row">
		<div class="col-md-6">
			@if (count($city->rovers) === 0)
			<p>None found, sorry.</p>
			@elseif (count($city->rovers) > 0)
			<ul class="list-group">
				@foreach ($city->rovers as $rover)
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">{{ $rover->user->first_name }}</h4>
						<p class="list-group-item-text">{{ $rover->user->last_name }}</p>
					</a>
				@endforeach
			</ul>
			@endif
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
</div>

@endsection