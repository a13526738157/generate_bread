@push('css')

@endpush

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', '文本:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', '类型:') !!}
    {!! Form::select('type',['1'=>'优惠卷','2' => '幸福币','3' => '虚拟物品','4' => '会员'], null, ['class' => 'form-control']) !!}
</div>


<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', '数量:') !!}
    {!! Form::number('price',0, ['class' => 'form-control']) !!}
</div>
<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_new', '复选框:') !!}
    {!! Form::checkbox('is_new', '1', false) !!}
    {!! Form::label('is_hot', '复选框:') !!}
    {!! Form::checkbox('is_hot', '1', false) !!}

</div>




<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('保存', ['class' => 'btn btn-primary','name' => 'action']) !!}
    <a href="{!! route('admin.{FEATURE_NAME_L}.index') !!}" class="btn btn-default">返回</a>
    <input type="button" name="action" class = 'btn btn-primary' id="preview-btn" value="预览"/>
</div>


@push('js')

@endpush
