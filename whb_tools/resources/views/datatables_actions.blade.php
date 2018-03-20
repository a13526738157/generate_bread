<div class='btn-group'>
    <a href="{!! route('admin.{FEATURE_NAME_L}.show', $id) !!}" target="_blank" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{!! route('admin.{FEATURE_NAME_L}.edit', $id) !!}" target="_blank" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    {!! Form::open(['route' => ['admin.{FEATURE_NAME_L}.destroy', $id], 'method' => 'delete']) !!}

    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
    {!! Form::close() !!}

</div>
