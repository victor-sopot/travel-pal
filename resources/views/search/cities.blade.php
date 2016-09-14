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

@section('content')
	<div class="content row">
		<div class="col-md-12">
			<div class="flag">
				<img class="img-responsive" src="{{ asset('images/country-flags') }}/{{ $country->img }}.svg" alt="">
			</div>
			<h1>{{ $country->name }} <small>Listed Cities</small></h1>
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
@endsection

@section('scripts')

@endsection

@section('gmaps')
	<script>
		var geocoder;
		var map;
		function initMap() {
			var address = '{{ $country->name }}';
			geocoder = new google.maps.Geocoder();
			geocoder.geocode( { 'address': address }, function(results, status) {
				if (status == 'OK') {
					map.setCenter(results[0].geometry.location);
					var marker = new google.naps.Marker({
						map: map,
						position: results[0].geometry.location
					});
				} else {
					alert('Geocode couldn\'t be coded because ' + status);
				}
			});
			var latlng = new google.maps.LatLng(-34.397, 150.644);
			var mapOptions = {
				zoom: 5,
				center: address
			}
			map = new google.maps.Map(document.getElementById('map'), mapOptions);
		}

		function codeAddress() {
			
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnlV8WsygIcH1N6C5cMgkJXK_MkG8TKrA&callback=initMap"
	async defer></script>
@endsection