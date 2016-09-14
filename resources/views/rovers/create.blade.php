@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row content">
		<div class="col-md-12">
			<form action="{{ route('rovers.store') }}" method="POST">
	
				<textarea name="bio" id="bio" cols="30" rows="10"></textarea>
				<select name="city_id">
					@foreach($cities as $city)
						<option value="{{$city->id}}">{{$city->name}}</option>
					@endforeach
				</select>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<button type="submit">Submit</button>
			</form>		
		</div>
	</div>
</div>
@endsection