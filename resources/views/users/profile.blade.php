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
					<div class="panel pal-panel">
						<div class="panel-heading">Your Requests</div>
						<div class="panel-body">
							<div class="list-group">
								
								<li class="list-group-item">
									<h4>Johnathon Hughes</h4>
									<button type="button" class="btn btn-callout" data-toggle="modal" data-target="#pal-booking" data-whatever="hey">View Booking</button>
								</li>
							</div>
						</div>
					</div>
				</div>

				<!-- Small modal -->
				<div id="#pal-booking" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
				  	<div class="modal-dialog modal-sm" role="document">
				    	<div class="modal-content">
				      		what
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

@section('scripts')

<script>
	$('#pal-booking').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('whatever') // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('New message to ' + recipient)
	  modal.find('.modal-body input').val(recipient)
	})
</script>
@endsection