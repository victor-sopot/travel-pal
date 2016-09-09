@extends('layouts.app')

@section('brand-image')
  <header class="image-bg-fluid-height">
    <h1 class="pageTitle">{{ $pageTitle }}</h1>
    <div class="btn-group">
	    <button class="btn btn-lg btn-default dropdown-toggle" type="button" data-toggle="dropdown">
	    	Choose a country
	    	<span class="caret"></span>
	    </button>
	    <ul class="dropdown-menu">
	    	<li><a href="#">Country 1</a></li>
	    	<li><a href="#">Country 2</a></li>
	    	<li><a href="#">Country 3</a></li>
	    	<li><a href="#">Country 4</a></li>
	    	<li><a href="#">Country 5</a></li>
	    	<li><a href="#">Country 6</a></li>
	    	<li><a href="#">Country 7</a></li>
	    	<li><a href="#">Country 8</a></li>
	    </ul>
	</div>
    <button class="btn btn-lg btn-callout">Start Searching</button>
  </header>
@endsection

@section('content')

<div class="row home-wrap">
	<div class="col-md-3">
    	<div class="panel panel-default">
    		<div class="panel-heading">
    			<div class="panel-title">
    				<h1>Explore!</h1>
    			</div>
			</div>
			<div class="panel-body">
				<p>Ever wanted to explore the grassroots of a country?</p>
	    		<p>Rovers are local tour guides. They know the ins and outs of their cities, and want to share it with you. They are tailored to your criteria because well, it's your holiday!</p>
    		</div>
    	</div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h1>Welcome, traveller</h1></div>

            <div class="panel-body">
                <p>Where are you travelling to?</p> 
                <a href="/bookings/create" class="btn btn-default">Book a Rover!</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
    	<div class="panel panel-default">
    		<div class="panel-heading">
    			<div class="panel-title">
    				<h1>Something else</h1>
    			</div>
    		</div>
    		<div class="panel-body">
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, ea. Illum, ducimus quam! Minima suscipit maxime excepturi necessitatibus laudantium rem dolore vel expedita, illum totam in, repellendus accusamus, dolores distinctio.
    		</div>
    	</div>
    </div>
</div>
@endsection
