@extends("layouts.admin")

@section("content")
    <div class="row">
        <h2>Danh Sách Tài Khoản</h2>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td><img src="{{ route('image',$product->image) }}" alt="" style="height:150px; max-width: 200px; "></td>
                        <th>{{ $product->price }}</th>
                        <th>{{ $product->Category->name }}</th>
                        <td>
                            <a href="{{ route('admin.product.edit',$product->id) }}">Edit</a> |
                            <a href="{{ route('admin.product.show',$product->id) }}">Show</a> |
                            <a href="#"  onclick="$('#delete-{{ $product->id }}').submit()"  >Delete</a>
                            <form  method="post" id="delete-{{ $product->id }}" action="{{ route('admin.product.destroy',$product->id) }}">
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
            {{ $products->render() }}
        </div>
    </div>

@endsection