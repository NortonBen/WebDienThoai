@extends("layouts.admin")

@section("content")
    <div class="row">
        <h2>Danh Sách Tài Khoản</h2>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->birthday }}</td>
                        <td>
                            <a href="{{ route('admin.user.edit',$user->id) }}">Edit</a> |
                            <a href="{{ route('admin.user.show',$user->id) }}">Show</a> |
                            @if($user->role_id == 2)
                                <a href="{{ route('admin.doctor.show',$user->id) }}">Doctor</a> |
                            @elseif($user->role_id == 3)
                                <a href="{{ route('admin.patient.show',$user->id) }}">Patient</a> |
                            @endif
                            <a href="#"  onclick="$('#delete-{{ $user->id }}').submit()"  >Delete</a>
                            <form  method="post" id="delete-{{ $user->id }}" action="{{ route('admin.user.destroy',$user->id) }}">
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
            {{ $users->render() }}
        </div>
    </div>

@endsection