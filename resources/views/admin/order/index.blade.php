@extends("layouts.admin")

@section("content")
    <div class="row">
        <h2>Danh Sách Đơn Hàng</h2>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <?php $user = $order->User ?>
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $user->full_name() }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.order.edit',$order->id) }}">Edit</a> |
                            <a href="{{ route('admin.order.show',$order->id) }}">Show</a> |
                            <a href="#"  onclick="$('#delete-{{ $order->id }}').submit()"  >Delete</a>
                            <form  method="post" id="delete-{{ $order->id }}" action="{{ route('admin.order.destroy',$order->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            {{ $orders->render() }}
        </div>
    </div>

@endsection