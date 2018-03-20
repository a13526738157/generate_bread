@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    {{$feature_title}}
                </header>
                <div class="panel-body">
                    @include('admin.common.error')
                    <div class="row" style="padding-left: 20px">
                       @include('admin.{FEATURE_NAME_L}.show_fields')
                        <a href="{!! route('admin.products.index') !!}" class="btn btn-default">返回</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
