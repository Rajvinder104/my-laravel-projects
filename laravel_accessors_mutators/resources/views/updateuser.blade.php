@extends('layout')

@section('title')
    Update User Data
@endsection

@section('content')
    <div class="col-7">
        <form action="{{ route('user.update', $users->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mt-3">
                <label for="">User Name</label>
                <input type="text" value="{{ $users->user_name }}" name="user_name"
                    class="form-control @error('user_name') is-invalid @enderror" placeholder="Enter your name">
                <span class="text-danger">
                    @error('user_name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="">Email</label>
                <input type="text" value="{{ $users->email }}" name="email"
                    class="form-control mt-2 @error('email') is-invalid @enderror" placeholder="Enter your email">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="">Age</label>
                <input type="text" name="age" value="{{  $users->age }}"
                    class="form-control mt-2  @error('age') is-invalid @enderror" placeholder="Enter Age">
                <span class="text-danger">
                    @error('age')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="">Salary</label>
                <input type="text" name="salary" value="{{ $users->salary }}"
                    class="form-control mt-2 @error('salary') is-invalid @enderror" placeholder="Enter your salary">
                <span class="text-danger">
                    @error('salary')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="">Date Of Birth</label>
                <input type="text" value="{{ $users->dob }}" name="dob"
                    class="form-control mt-2 @error('dob') is-invalid @enderror" placeholder="Enter your DOB">
                <span class="text-danger">
                    @error('dob')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="">password</label>
                <input type="text" value="{{ $users->password }}" name="password"
                    class="form-control mt-2 @error('password') is-invalid @enderror" placeholder="Enter Password">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <input type="submit" class="form-control btn btn-primary mt-2" value="Update">
            </div>
        </form>
    </div>
@endsection
