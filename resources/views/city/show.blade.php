@extends('layouts.app')
@section('title'){{ $city->name }}重点中学排名_{{ $city->name }}民办中学排名_中学查分网@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">全国</a></li>
                        <li><a href="{{ url('/province', [$city->province->id]) }}">{{ $city->province->name }}</a></li>
                        <li class="active"><a href="{{ url('/city', [$city->id]) }}">{{ $city->name }}</a></li>
                    </ol>
                </div>
                <div class="panel-body">
                    @foreach($schools as $school)
                    <div>
                        <a href="{{ route('school.show', [$school->id]) }}">{{ $school->name }}</a>
                    </div>
                    @endforeach
                </div>
                <div class="">
                        {!! $paginator->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
