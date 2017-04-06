<div class="form-group">
    {{ Form::radio($name, 1 , 1 == $value) }}  {{ Form::label("Nam", null, ['class' => 'control-label']) }}
    {{ Form::radio($name, 2 , 2 == $value) }}  {{ Form::label("Nữ", null, ['class' => 'control-label']) }}
</div>