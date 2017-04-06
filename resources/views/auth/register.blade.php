@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    @include('layouts.error')
                    {!! Form::open(['route' => 'register']) !!}
                    {{ Form::fText('first_name','Họ Tên Đệm') }}
                    {{ Form::fText('last_name','Tên') }}
                    {{ Form::fEmail('email','Email') }}
                    {{ Form::fPassword('password','Mật khẩu') }}
                    {{ Form::fPassword('repassword','Nhập Lại mật khẩu') }}
                    {{ Form::fDate('birthday','Ngày Sinh') }}
                    {{ Form::fText('phone','Số Diện Thoại') }}
                    {{ Form::fText('address','Địa Chỉ') }}
                    {{ Form::fSex('sex') }}
                    {{ Form::submit('Thêm người dùng',['class' => 'form-control']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
