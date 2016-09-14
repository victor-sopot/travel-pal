@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ url('css/bootstrap-combobox.css') }}">
@endsection

@section('brand-image')
    <div class="row image-bg-fluid-height">
        <div class="col-md-offset-4 col-md-4">
            <h1 class="pageTitle">Begin Your Search</h1>    
            <select class="form-control country-select combobox" name="country" id="country">
                <option value="" disabled selected>Select a Country...</option>
                @foreach($countries as $country)
                    <option value="{{ $country->url }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
@endsection

@section('content')
    <div class="row home-wrap">
    	<div class="col-md-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
        			<div class="panel-title">
        				<h4>What is TravelPal?</h4>
        			</div>
    			</div>
    			<div class="panel-body">
    				<p>A TravelPal is a person that loves their city so much they want to share it with the world. Literally!</p>
        		</div>
        	</div>
        </div>
        <div class="col-md-4">
            <div class="slogan">
                <h2 class="center">"Hello"</h2>
            </div>
        </div>
        <div class="col-md-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
        			<div class="panel-title">
        				<h4>Apply</h4>
        			</div>
        		</div>
        		<div class="panel-body">
                    <p>Ever wanted to explore the grassroots of a country?</p>
                    <p>Rovers are local tour guides. They know the ins and outs of their cities, and want to share it with you. They are tailored to your criteria because well, it's your holiday!</p>
                </div>
        	</div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ url('/js/bootstrap-combobox.js') }}"></script>
    <script>
        $(function () {
            $('.combobox').combobox();
            $('.country-select').change(function () {
                // find the URL for the current selection
                // navigate to that URL!
                window.location = $(this).val();
            });
        });
    </script>
@endsection



