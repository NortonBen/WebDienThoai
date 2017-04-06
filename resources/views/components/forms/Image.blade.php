<div class="form-group">
    <div class="col-md-12" style="padding-left: 0px">
        {{ Form::label($label, $label, ['class' => 'control-label']) }}
    </div>
    <div class="col-md-10"  style="padding-left: 0px">
        {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    </div>
    <div class="col-md-2">
        <button type="button" class="btn btn-success"onclick="SelectMedia('{{ $name }}')">Select Image</button>
    </div>
</div>