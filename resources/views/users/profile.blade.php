@extends('layouts.app')

@section('content')
<div class="row profile-page">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1>Hi, {{ Auth::user()->first_name }}</h1>
			</div>
			<div class="panel-body">

				@if (Auth::user()->isRover)
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">Your Bookings</div>
						<div class="panel-body">
							<div class="list-group">
								@foreach $bookings as $booking
								<a href="" class="list-group-item"></a>
							</div>
						</div>
					</div>
				</div>

				@else
				<p>Here's a breakdown of your recent bookings. You may select any one of them to view more details.</p>

				<div class="list-group">
					@foreach ($user->bookings as $booking)
						<a href="#" class="list-group-item list-group-item-success">
						{{ $booking->description }}
						</a>
					@endforeach
				</div>
				@endif
			</div>
		</div>
	</div>
</div>

@endsection