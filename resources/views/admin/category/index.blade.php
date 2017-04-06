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
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('admin.category.edit',$category->id) }}">Edit</a> |
                            <a href="{{ route('admin.category.show',$category->id) }}">Show</a> |
                            <a href="#"  onclick="$('#delete-{{ $category->id }}').submit()"  >Delete</a>
                            <form  method="post" id="delete-{{ $category->id }}" action="{{ route('admin.category.destroy',$category->id) }}">
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
            {{ $categories->render() }}
        </div>
    </div>

@endsection