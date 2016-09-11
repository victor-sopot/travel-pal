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
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <h3>List of Cities:</h3>
            <ul id="list-of-cities">
              <li><a href="#">LCA</a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
            </ul>
        </div>
        <div class="col-md-7">
            <h3>Current Available Rovers:</h3>
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