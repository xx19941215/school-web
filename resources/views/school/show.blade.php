@extends('layouts.app')
@section('title'){{ $school->name }}网站_{{ $school->name }}查分网站@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">全国</a></li>
                        <li><a href="{{ url('/province', [$school->province->id]) }}">{{ $school->province->name }}</a></li>
                        <li><a href="{{ url('/city', [$school->city->id]) }}">{{ $school->city->name }}</a></li>
                        <li class="active"><a href="{{ url('/school', [$school->id]) }}">{{ $school->name }}</a></li>
                    </ol>
                </div>
                <div class="panel-body">
                    <p>
                        {{ $school->name }}位于 {{ prop($school->province, 'name')}} {{ prop($school->city,'name') }} {{ prop($school->district, 'name') }}
                    </p>
                    <span>
                        {{--<a href="{{ route('school.show', [$school->id]) }}">{{ $school->name }}</a>--}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
