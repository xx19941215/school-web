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
                    <section>
                        <h4 class="bg-success">基本资料</h4>
                        <p>
                            {{ $school->name }}位于 {{ objProp($school->province, 'name')}}{{ objProp($school->city,'name') }}{{ objProp($school->district, 'name') }}
                            , 学校为{{ empty($school->school_type) || $school->school_type == '校' ? '普通中学' : $school->school_type}}, 班级类型包括{{ empty($school->class_type) ? '普通班' : $school->class_type }}, 校长{{ empty($school->master) ? '小编暂时不知道' : $school->master }}
                            , 住宿方式可以选择{{ empty($school->accommodation) ? '寄宿' : $school->accommodation}}, 学校建立时间{{ empty($school->establishment_year) ? '比较模糊' : $school->establishment_year }}, 你可以选择{{ empty($school->entrance_way) ? '考试' : $school->entrance_way }}进入
                            {{ $school->name}}学习, 假如你想进入这所学校的话, 你可以 拨打 {{ empty($school->tel) ? '号码百事通' : $school->tel}} 询问一下相关的信息。对了，{{ $school->name}}有{{ empty($school->test_type) ? '期末考试' : $school->entrance_way }}，学校地址{{ empty($school->addr) ? '你可以使用百度搜索一下' : $school->addr }}
                            学校网站{{ empty($school->website) ? '暂无' : $school->website }}。
                        </p>
                    </section>
                    <section>
                        <h4 class="bg-success">中学简介</h4>
                        <p>
                            {!! empty($school->content) ? '暂无' : preg_replace('/<a(.*?)>/', '', $school->content)  !!}
                        </p>
                    </section>
                    <section>
                        <h4 class="bg-success">附近中学</h4>
{{--                        {{ dd($school->district->schools->take(4)) }}--}}
                    </section>
                    <span>
                        {{--<a href="{{ route('school.show', [$school->id]) }}">{{ $school->name }}</a>--}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
