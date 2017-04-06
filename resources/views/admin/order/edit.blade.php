@extends("layouts.admin")

@section("content")
    <div class="row">
        <h2>Sửa Đơn Hàng</h2>
        <div class="col-md-10 col-md-offset-1">
            @include('layouts.error')
            {!! Form::open(['route' => ['admin.order.update',$order->id]]) !!}
            {{ method_field('PUT') }}
            <div class="form-group">
                <lable>Trạn Thái Hàng</lable>
                <select name="state"  class="form-control">
                    <option value="1" @if($order->state == 1) selected @endif>Chờ</option>
                    <option value="2" @if($order->state == 2) selected @endif>Đã Giao Hàng</option>
                </select>
            </div>

            {{ Form::submit('Lưu',['class' => 'form-control']) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection