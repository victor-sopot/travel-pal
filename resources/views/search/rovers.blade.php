@extends('layouts.app')

@section('searchbar')

	<div class="container-fluid search">
		<div class="row">
			<div class="col-md-12">
				<div id="search-bar">
					<a href="#" class="search-tag">{{ $city->name }}</a>
				</div>
			</div>
		</div>

	</div>

@endsection

@section('content')

<div class="container-fluid">
	<div class="content row">
		<div class="col-md-6">
			@if (count($city->rovers) === 0)
			<p>None found, sorry.</p>
			@elseif (count($city->rovers) > 0)
			<ul>
				@foreach ($city->rovers as $rover)
					<li>
						{{ $rover->user->first_name }}
					</li>
				@endforeach
			</ul>
			@endif
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
</div>

@endsection