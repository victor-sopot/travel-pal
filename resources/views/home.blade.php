@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Welcome, traveller</h1></div>

                <div class="panel-body">
                    <p>Where are you travelling to?</p> 
                    <a href="/bookings/create" class="btn btn-default">Book a Rover!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
