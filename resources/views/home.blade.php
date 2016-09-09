@extends('layouts.app')

@section('brand-image')
  <header class="image-bg-fluid-height">
    <h1 class="pageTitle">{{ $pageTitle }}</h1>

    <button class="btn btn-primary">Start Searching</button>
  </header>
@endsection

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading"><h1>Welcome, traveller</h1></div>

            <div class="panel-body">
                <p>Where are you travelling to?</p> 
                <a href="/bookings/create" class="btn btn-default">Book a Rover!</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
    	<div class="panel panel-default">
    		
    	</div>
    </div>
    <div class="col-md-4">
    	
    </div>
</div>
@endsection
