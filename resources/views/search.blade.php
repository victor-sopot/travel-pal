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

@section('brand-image')
  <header class="image-bg-fluid-height">
    <h1 class="pageTitle">Discover Somewhere New</h1>

    <button class="btn btn-primary">Start Searching</button>
  </header>
@endsection

@section('content')

    <div class="row content">
        <div class="col-md-8 col-md-offset-2">
            <div class="input-group">
                <input type="text" class="form-control input-lg" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default btn-lg" type="button">Go!</button>
                </span>
            </div><!-- /input-group -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Current Available Rovers:</h3>
            <div id="map-container">
                <div id="map"></div>
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