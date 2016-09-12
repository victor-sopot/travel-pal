@extends('layouts.app')

@section('brand-image')
    <div class="container-fluid">
      <div class="row image-bg-fluid-height">
        <div class="col-md-6 col-md-offset-3">

            <h1 class="pageTitle">Begin Your Search</h1>

            <form class="form-inline" action="/search" method="post">
                <div class="form-group">
                    {{ csrf_field() }}

                    <select class="form-control" name="country" id="country">
                        <option value="1">Cyprus</option>
                        <option value="2">Malta</option>
                        <option value="3">Bulgaria</option>
                    </select>
                    <button class="btn btn-callout">Search</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('content')
<div class="container">
    <div class="row home-wrap">
    	<div class="col-md-4">
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
        <div class="col-md-4">
            <div class="slogan">
                <h2 class="center">"Slogan"</h2>
            </div>
        </div>
        <div class="col-md-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
        			<div class="panel-title">
        				<h4>Something else</h4>
        			</div>
        		</div>
        		<div class="panel-body">
                    <p>Ever wanted to explore the grassroots of a country?</p>
                    <p>Rovers are local tour guides. They know the ins and outs of their cities, and want to share it with you. They are tailored to your criteria because well, it's your holiday!</p>        		</div>
        	</div>
        </div>
    </div>
</div>
@endsection
