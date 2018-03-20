@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    {{$feature_title}}管理
                </header>
                <div class="panel-body">
                    @include('flash::message')
                    @include('admin.{FEATURE_NAME_L}.table')
                </div>
            </section>
        </div>
    </div>
@endsection