@extends('layouts.app')

@section('gmapsstyle')
    <style>
      #map-container {
        height: 400px;
        width: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
@endsection

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

					<a href="#" class="bg-info">{{ $country->name }} <span class="glyphicon glyphicon-remove"></span></a>
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
			<h1>Listed Cities</h1>
		</div>
	</div>
	<div class="content row">
		<div class="col-md-6">

			<ul class="listed-cities list-group">
				@foreach ($country->cities as $city)
					<li class="city-list-item list-group-item">
						<a href="{{ route('cities.show', $city->id) }}">{{ $city->name }}</a> <span class="badge">{{ $city->rovers->count() }} </span>
					</li>
				@endforeach
			</ul>
		</div>
		<div class="col-md-6">
			<div id="map-container">
                <div id="map"></div>
            </div>
		</div>
	</div>
</div>

@endsection

@section('gmaps')
	<script>
	  var map;
	  function initMap() {
	    map = new google.maps.Map(document.getElementById('map'), {
	      center: {lat: -34.397, lng: 150.644},
	      zoom: 8
	    });
	  }
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHt6RswAP5SkTi1GME-NujRtBIRhYQ9hg&callback=initMap"
	async defer></script>
@endsection