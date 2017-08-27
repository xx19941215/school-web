@extends('layouts.app')
@section('title'){{ $province->name }}重点中学排名_{{ $province->name }}民办中学排名@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">全国</a></li>
                        <li class="active"><a href="{{ url('/province', [$province->id]) }}">{{ $province->name }}</a></li>
                    </ol>
                </div>
                <div class="panel-body">
                    @foreach($province->cities->all() as $city)
                    <span>
                        <a href="{{ url('/city', [$city->id]) }}">{{ $city->name }}</a>
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
