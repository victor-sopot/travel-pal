@extends('layouts.app')

@section('content')
	<div class="row content">
		<div class="col-md-12">
			<h1>Become a TravelPal</h1>
			<form id="becomePal" class="form-horizontal" action="{{ url('pal/store') }}" method="POST">
			<fieldset>
			<legend>Application Form</legend>

			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="city">Find Your City</label>
			  <div class="col-md-5">
			    <select class="form-control input-md" id="city" name="city" required="">
			    	<option value=""></option>
					@foreach ($cities as $city)
						<option value="{{ $city->id }}">{{ $city->name }}</option>
					@endforeach
				</select>
			  </div>
			  <div class="col-md-4">
			  	<p class="bg-info" id="citySelect">For now you can only be listed under 1 city. In our next release, you can apply to be a part of many cities, or even an entire country!</p>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="tel">Telephone</label>  
			  <div class="col-md-5">
			  	<input id="tel" name="tel" type="tel" placeholder="Valid without area codes..." class="form-control input-md" required="">
			  	<span class="help-block">This is for potential travellers to contact you</span>  
			  </div>
			  <div class="col-md-4">
			  	<p class="bg-info" id="telInput">We respect your privacy, so we won't distribute this to anyone. It is for travellers to keep handy on their arrival to your country.</p>
			  </div>
			</div>

			<!-- Textarea -->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="bio">Bio</label>
			  <div class="col-md-5">                     
			    <textarea class="form-control input-md" id="bio" name="bio"></textarea>
			  </div>
			  <div class="col-md-4">
			  	<p class="bg-info" id="bioInput">Tell us a little about you. The more you provide the better chances of travellers choosing you!</p>
			  </div>
			</div>

			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="duration">Duration of Residence</label>
			  <div class="col-md-5">
			    <select id="duration" name="duration" class="form-control input-md">
			      <option value="1">Less than 3 years</option>
			      <option value="2">3 - 6 years</option>
			      <option value="3">More than 6 years</option>
			    </select>
			  </div>
			  <div class="col-md-4">
			  	<p class="bg-info" id="durationInfo">We'd like to ensure that our TravelPals are experienced enough in their country of residence. This ensures the highest quality for our travellers.</p>
			  	<p class="bg-warning" id="durationInfo">Please note at this time we require a minimum of 3 years.</p>
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-success">Apply!</button>
			  </div>
			</div>

			</fieldset>
			{{ csrf_field() }}
			</form>

		</div>
		<div class="col-md-4">
			<h3></h3>
		</div>
	</div>
@endsection

@section('scripts')

	<script type="text/javascript">
		$('input#city').on('focus', function(){
			$('#citySelect').fadeToggle();
		}).on('blur', function() {
			$('#citySelect').fadeToggle();
		});

		$('input#tel').on('focus', function(){
			$('#telInput').fadeToggle();
		}).on('blur', function() {
			$('#telInput').fadeToggle();
		});

		$('textarea#bio').on('focus', function(){
			$('#bioInput').fadeToggle();
		}).on('blur', function() {
			$('#bioInput').fadeToggle();
		});

		$('select#duration').on('focus', function(){
			$('#durationInfo').fadeToggle();
		}).on('blur', function() {
			$('#durationInfo').fadeToggle();
		});
	</script>

@endsection