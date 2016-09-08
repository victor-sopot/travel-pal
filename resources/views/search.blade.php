@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div><!-- /input-group -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h1>Current Available Rovers:</h1>
            <ul class="list-unstyled" id="rovers">
                <li>
                    
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
</div>
@endsection
