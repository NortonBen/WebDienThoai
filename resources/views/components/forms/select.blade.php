<?php
$___data = [];
$__val = $_item['val'];
$__name = $_item['name'];
foreach ($_datas as $__item) {
    $___data[$__item->{$__val}] = $__item->{$__name};
}
?>
<div class="form-group">
    {{ Form::label($label, null, ['class' => 'control-label']) }}
    {{ Form::select($name, $___data, $value,array_merge(['class' => 'form-control'], $attributes)) }}
</div>