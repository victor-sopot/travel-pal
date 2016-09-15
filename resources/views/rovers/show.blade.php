@extends('layouts.app')

@section('content')
	<div class="row content">
		<div class="col-md-4">
			<img src="http://placehold.it/300x400" alt="">
		</div>
		<div class="col-md-8">
			<h2>{{ $rover->user->first_name }} {{ $rover->user->last_name }}</h2>
			<p>Verified TravelPal in: </p>
			<ul class="list-group">
				<li class="list-group-item"><a href="{{ route('cities.show', $rover->city->id) }}">{{ $rover->city->name }}</a>, <a href="{{ route('countries.show', $rover->country->id) }}">{{ $rover->country->name }}</a></li>
			</ul>

			<a href="#" id="startbook" class="btn btn-callout">Book this Pal!</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset-4 col-md-6">
			<form id="bookingForm" action="{{ route('booking.store') }}" method="POST">
				<fieldset>
					<legend>Booking Form</legend>

					<div class="form-group">
						<label for="month" class="col-md-7 control-label">Select Month</label>
						<div class="col-md-5">
							<select class="form-control" name="month" id="month">
								<option value="1">January</option>
								<option value="2">February</option>
								<option value="3">March</option>
								<option value="4">April</option>
								<option value="5">May</option>
								<option value="6">June</option>
								<option value="7">July</option>
								<option value="8">August</option>
								<option value="9">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-7 control-label" for="activity">Choose what you'd like to do: </label>
						<div class="col-md-5">
							<input class="form-control" type="text" id="activity" name="activity">
						</div>
					</div>
					{{ csrf_field() }}
					<div class="form-group">
						<button id="submit" name="submit" class="btn btn-success">Book!</button>
					</div>




				</fieldset>
			</form>
		</div>
	</div>
@endsection

@section('scripts')
	<script type="text/javascript">
		$('#startbook').on('click', function(e){
			e.preventDefault();
			$('#bookingForm').fadeIn(2000).slideDown(2000);
		});
	</script>
@endsection