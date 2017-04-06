@extends("layouts.admin")

@section("content")
    <div class="row">
        <h2>Thêm Danh Mục</h2>
        <div class="col-md-10 col-md-offset-1">
            @include('layouts.error')
            {!! Form::open(['route' => 'admin.category.store']) !!}
            {{ Form::fText('name','Tên') }}
            {{ Form::submit('Thêm Loại',['class' => 'form-control']) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection