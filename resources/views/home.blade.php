@extends('layouts.app')

@section('brand-image')
    <div class="container-fluid">
      <div class="row image-bg-fluid-height">
        <div class="col-md-12">
            <h1 class="pageTitle">Rent a Local</h1>
            <button class="btn btn-lg btn-callout">Start Searching</button>
        </div>
    </div>
@endsection

@section('content')
<div class="container">
    <div class="row home-wrap">
    	<div class="col-md-3">
        	<div class="panel panel-default">
        		<div class="panel-heading">
        			<div class="panel-title">
        				<h4>Explore!</h4>
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
        				<h4>Something else</h4>
        			</div>
        		</div>
        		<div class="panel-body">
        			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, ea. Illum, ducimus quam! Minima suscipit maxime excepturi necessitatibus laudantium rem dolore vel expedita, illum totam in, repellendus accusamus, dolores distinctio.
        		</div>
        	</div>
        </div>
    </div>
</div>
@endsection
