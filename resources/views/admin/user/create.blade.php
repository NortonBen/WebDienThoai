@extends("layouts.admin")

@section("content")
    <div class="row">
        <h2>Thêm Tài Khoản</h2>
        <div class="col-md-10 col-md-offset-1">
            @include('layouts.error')
            {!! Form::open(['route' => 'admin.user.store']) !!}
            {{ Form::fText('first_name','Họ Tên Đệm') }}
            {{ Form::fText('last_name','Tên') }}
            {{ Form::fEmail('email','Email') }}
            {{ Form::fPassword('password','Mật khẩu') }}
            {{ Form::fPassword('repassword','Nhập Lại mật khẩu') }}
            {{ Form::fDate('birthday','Ngày Sinh') }}
            {{ Form::fText('phone','Số Diện Thoại') }}
            {{ Form::fText('address','Địa Chỉ') }}
            {{ Form::fSex('sex') }}
            {{ Form::fSelect('role_id','Phân Quyền',$roles,['val' => 'id', 'name' => 'name']) }}
            {{ Form::submit('Thêm người dùng',['class' => 'form-control']) }}
            {!! Form::close() !!}

        </div>
    </div>

@endsection