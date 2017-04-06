@extends("layouts.admin")

@section("content")
    <div class="row">
        <h2>Thêm Sản Phẩm</h2>
        <div class="col-md-10 col-md-offset-1">
            @include('layouts.error')
            {!! Form::open(['route' => 'admin.product.store']) !!}
            {{ Form::fText('name','Tên Sản Phẩm') }}
            {{ Form::fImage('image','Hình ảnh') }}
            {{ Form::fHTML('description','Mô Tả') }}
            {{ Form::fHTML('detail','Chi Tiết') }}
            {{ Form::fNumber('price','Giá Tiền') }}
            {{ Form::fSelect('category_id','Phân Quyền',$categories,['val' => 'id', 'name' => 'name']) }}
            {{ Form::submit('Thêm Sản Phẩm',['class' => 'form-control']) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection