@push('css')

@endpush

<!-- <input type="hidden" name="id" value="{$product->id}" id="id"> -->
    {!! Form::hidden('id', $data->id, ['class' => 'form-control', 'id'=>'id']) !!}

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'INPUT框:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', '单选:') !!}
    {!! Form::select('type',['1'=>'优惠卷','2' => '幸福币','3' => '虚拟物品','4' => '会员'], 1, ['class' => 'form-control']) !!}
</div>







<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('保存', ['class' => 'btn btn-primary','name' => 'action']) !!}
    <a href="{!! route('admin.{FEATURE_NAME_L}.index') !!}" class="btn btn-default">Cancel</a>
</div>



<script id="product-preview-tpl" type="text/html">
{{--    @include('admin.products.preview')--}}
</script>

@push('js')
@endpush
