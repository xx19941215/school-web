@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    @foreach($provinces as $province)
                    <div class="">
                        <p>
                        <a href="{{ route('province.show', [$province->id]) }}">{{ $province->name }}</a>
                        </p>
                        @foreach($province->cities as $city)
                        <spam>
                        <a href="{{ route('city.show', [$city->id]) }}">{{ $city->name }}</a>
                        </span>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
