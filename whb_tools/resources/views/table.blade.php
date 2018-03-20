@section('external_css')
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/assets/gritter/css/jquery.gritter.css')}}" />

@endsection

{{--@include('admin.products.search')--}}
{!! $dataTable->table(['width' => '100%']) !!}


@push('js')
    <script src="{{asset('admin_assets/js/gritter.js')}}" type="text/javascript"></script>

    <script src="//cdn.bootcss.com/datatables/1.10.12/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('vendor/datatables/buttons.server-side.js')}}"></script>
    {!! $dataTable->scripts() !!}
@endpush