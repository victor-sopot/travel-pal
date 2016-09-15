<?php use App\Country; $country = Country::all(); ?>
@extends('layouts.app')

@section('content')

	<div class="row content">
		<div class="col-md-offset-4 col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Welcome</div>
				<div class="panel-body">
					<h4>Congratulations! You are now a TravelPal!</h4>
					<p>Here are your chosen settings, feel free to edit them on your <a href="{{ route('profile') }}">profile page</a>.</p>
					<dl style="background: url('{{ asset('images/country-flags') }}/{{ $pal->rover->country->img }}.svg') no-repeat" class="dl-horizontal">
						<dt>Chosen City</dt>
						<dd>{{ $pal->rover->city->name }}</dd>

						<dt>Country</dt>
						<dd>{{ $pal->rover->country->name }} </dd>
					</dl>
				</div>
			</div>
			<div class="btn-group" role="group">
				<a href="{{ route('home') }}" class="btn btn-second">Go Home</a>
				<a href="mailto:adamcyp@gmail.com?subject='HELP!'" class="btn btn-second">What Next?</a>
			</div>
		</div>

	</div>

@endsection