@extends('layouts.app')
<?php use App\Country;
$countries = Country::all() ?>

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
		<div class="col-offset-md-2 col-md-4">
			<h1 data-name="country">{{ $country->name }}</h1>
			<datalist id="countries">
				@foreach ($countries as $value)
				<option value="{{ $value->name }}">
				@endforeach
			</datalist>
		</div>
		<div class="col-md-4">
			<div class="flag">
				<img class="img-responsive" src="{{ asset('images/country-flags') }}/{{ $country->img }}.svg" alt="">
			</div>
		</div>
	</div>
	<div class="content row">
		<div class="col-md-6">
			<h4>Listed Cities</h4>
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
	<script type="text/javascript">
		$.fn.inlineEdit = function(replaceWith, connectWith) {
			$(this).hover(function() {
			        $(this).addClass('hover');
			    }, function() {
			        $(this).removeClass('hover');
			    });

		    $(this).click(function() {

		        var elem = $(this);

		        elem.hide();
		        elem.after(replaceWith);
		        replaceWith.focus();

		        replaceWith.blur(function() {

		            if ($(this).val() != "") {
		                connectWith.val($(this).val()).change();
		                elem.text($(this).val());
		            }

		            $(this).remove();
		            elem.show();
		        });
		    });
		}
	</script>
	<script type="text/javascript">
		var replaceWith = $('<input name="country" id="country" list="countries"><input type="hidden" name="_token" value="{{ csrf_token() }}">'),
			connectWith = $('input[name="hiddenField"]');

			$('[data-name="country"]').inlineEdit(replaceWith, connectWith);
	</script>
	<script type="text/javascript">
		$(document).on('focus', 'input#country', function() {
			$(this).val('');
		});

		$(document).on('blur', 'input#country', function() {
			$(this).val('{{ $country->name }}')
		});

		$(document).on('keypress', 'input#country', function(e) {
			var key = e.which;
			if(key == 13) {
				var country = $(this).val();
				var url = '{{ $country->plainurl }}' + country;
				$.ajax({
					url: '/countries',
					type: 'post',
					data: {'countryName' : country, '_token': $('input[name=_token]').val()},
					success: function(data){
						window.location = data;
					}
				});
			}
		});
	</script>
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