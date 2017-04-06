@extends("layouts.admin")

@section("content")
    <div class="row">
        <h2>Sửa Tài Khoản</h2>
        <div class="col-md-10 col-md-offset-1">
            @include('layouts.error')
            {!! Form::open(['route' => ['admin.category.update',$product->id]]) !!}
            {{ method_field('PUT') }}
            {{ Form::fText('name','Tên Sản Phẩm',$product->name) }}
            {{ Form::fImage('image','Hình ảnh',$product->image) }}
            {{ Form::fHTML('description','Mô Tả',$product->description) }}
            {{ Form::fHTML('detail','Chi Tiết',$product->detail) }}
            {{ Form::fNumber('price','Giá Tiền',$product->price) }}
            {{ Form::fSelect('category_id','Phân Quyền',$categories,['val' => 'id', 'name' => 'name'],$product->category_id) }}
            {{ Form::submit('Lưu',['class' => 'form-control']) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection