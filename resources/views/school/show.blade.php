@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $school->name }}</div>
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
