@extends("layouts.admin")

@section("content")
    <div class="row">
        <h2>Sửa Tài Khoản</h2>
        <div class="col-md-10 col-md-offset-1">
            @include('layouts.error')
            {!! Form::open(['route' => ['admin.user.update',$user->id]]) !!}
            {{ method_field('PUT') }}
            {{ Form::fText('first_name','Họ Tên Đệm',old('first_name',$user->first_name)) }}
            {{ Form::fText('last_name','Tên',old('last_name',$user->last_name)) }}
            {{ Form::fEmail('email','Email',old('email',$user->email)) }}
            {{ Form::fDate('birthday','Ngày Sinh',old('birthday',$user->birthday)) }}
            {{ Form::fText('phone','Số Diện Thoại',old('phone',$user->phone)) }}
            {{ Form::fText('address','Địa Chỉ',old('address',$user->address)) }}
            {{ Form::fSex('sex',old('sex',$user->sex)) }}
            {{ Form::fSelect('role_id','Phân Quyền',$roles,['val' => 'id', 'name' => 'name'],old('role_id',$user->role_id)) }}
            {{ Form::submit('Thêm người dùng',['class' => 'form-control']) }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection