@extends('layouts.site')

@section('content')
    <div class="col-md-12" style="background-color:  white; padding: 20px">
        <h2>Giỏ Hàng</h2>
        <table class="table table-bordered" style="margin-top: 50px">
            <thead>
            <tr>
                <th>Sản Phẩm</th>
                <th>Hình Ảnh</th>
                <th>Sô Lượng</th>
                <th>Sô Tiền</th>
                <th>Tông Tiền</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach(Cart::content() as $item)
                <tr>
                    <th>{{ $item->name }}</th>
                    <th><img src="{{ route('image',$item->options->image) }}" alt="" style="width: 200px"></th>
                    <th>{{ $item->qty }}</th>
                    <th>{{ $item->price }}</th>
                    <th>{{ $item->total }}</th>
                    <th>
                        <a href="#" onclick="getElementById('{{ 'cart_'.$item->id }}').submit()">Xóa</a>
                        {!! Form::open(['route'=>['cart.remove',$item->rowId],'id'=>'cart_'.$item->id]) !!}

                        {!! Form::close() !!}
                    </th>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">&nbsp;</td>
                <td>Total</td>
                <td><?php echo Cart::total(); ?></td>
                <td></td>
            </tr>
            </tfoot>
        </table>
        <div class="col-md-12">
            <div class="col-md-4 col-md-offset-8">
                {!! Form::open(['route'=>'order']) !!}
                <input type="submit" class="btn btn-info" style="padding: 5px;" value="Đặt Hàng">
                <a href="{{ route('product') }}"  class="btn btn-success" style="padding: 5px;">Tiếp Tục Mua Hàng</a>
                {!! Form::close() !!}

            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    @include('layouts.message')
@endsection