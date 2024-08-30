@extends('layout')

@section('title')
All User Data
@endsection

@section('content')
<div class="adduser">
    <a href="{{ route('user.create')}}" class="btn btn-primary">Add User</a>
</div>
<table class="table table-responsive table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>D:O:B</th>
            <th>Salary</th>
            <th>Password</th>
            <th>Action</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($user as $users)
            <tr>
                <td>{{ $users->id }}</td>
                <td>{{ $users->user_name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->dob }}</td>
                <td>{{ $users->salary }}</td>
                <td class="responsive">{{ $users->password }}</td>
                <td><a href="{{ route('user.show',$users->id) }}" class="btn btn-sm btn-primary">View</a></td>
                <td><a href="{{ route('user.edit',$users->id) }}" class="btn btn-sm btn-warning">Update</a></td>
                <td>
                    <form action="{{ route('user.destroy',$users->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="btn btn-sm btn-danger">Delete</button>
                    </form>
                   
            </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination mt-4">
{{ $user->links() }}			
</div>
@endsection