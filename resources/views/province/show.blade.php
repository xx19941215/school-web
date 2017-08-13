@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    @foreach($province->cities->all() as $city)
                    <span>
                        <a href="">{{ $city->name }}</a>
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
