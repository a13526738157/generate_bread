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
                    <div class="row">
                        {!! Form::open(['route' => 'admin.{FEATURE_NAME_L}.store','method' => 'put']) !!}
                            @include('admin.{FEATURE_NAME_L}.fields')
                        {!! Form::close() !!}
                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection
