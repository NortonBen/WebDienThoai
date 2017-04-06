@extends("layouts.admin")

@section("content")
    <div class="row">
        <h2>Chi Tiết Đơn Hàng</h2>
        <div class="col-md-10 col-md-offset-1">
            @include('layouts.error')
            <ul class="list-group">
                <li class="list-group-item">Mã Đơn hàng: {{ $order->id }}</li>
                <li class="list-group-item">Người Mua: {{ $order->User->full_name() }}</li>
                <li class="list-group-item">Sô Tiền: {{ $order->price }}</li>
                <li class="list-group-item">Ngày Mua: {{ $order->created_at }}</li>
                <li class="list-group-item">Ngày Cập Nhập: {{ $order->updated_at }}</li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="row">
        <h3>Chi Tiết Đơn Hàng</h3>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá Sản Phẩm</th>
                        <th>Sô Lượng</th>
                        <th>Thàng Tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->Detail as $item)
                        <tr>
                            <td>{{ $item->Product->name }}</td>
                            <td><img src="{{ route('image',$item->Product->image) }}" alt="" style="width: 200px"></td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->count }}</td>
                            <td>{{ ($item->price*$item->count) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection