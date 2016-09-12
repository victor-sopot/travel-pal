@extends('layouts.app')

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

