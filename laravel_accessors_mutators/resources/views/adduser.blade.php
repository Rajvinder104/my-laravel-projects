@extends('layout')

@section('title')
    Add New User
@endsection

@section('content')
    <div class="col-7">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group mt-3">
                <label for="">Name</label>
                <input type="text" name="user_name" value="{{ old('user_name') }}"
                    class="form-control @error('user_name') is-invalid @enderror" placeholder="Enter your name">
                <span class="text-danger">
                    @error('user_name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="">Email</label>
                <input type="text" name="email" value="{{ old('email') }}"
                    class="form-control mt-2  @error('email') is-invalid @enderror" placeholder="Enter your email">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="">Age</label>
                <input type="text" name="age" value="{{ old('age') }}"
                    class="form-control mt-2  @error('age') is-invalid @enderror" placeholder="Enter Age">
                <span class="text-danger">
                    @error('age')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="">Salary</label>
                <input type="text" name="salary" value="{{ old('salary') }}"
                    class="form-control mt-2  @error('salary') is-invalid @enderror" placeholder="Enter salary">
                <span class="text-danger">
                    @error('salary')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="">DOB</label>
                <input type="date" name="dob" value="{{ old('dob') }}"
                    class="form-control mt-2  @error('dob') is-invalid @enderror" placeholder="Enter your DOB">
                <span class="text-danger">
                    @error('dob')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="">Password</label>
                <input type="text" name="password" value="{{ old('password') }}"
                    class="form-control mt-2  @error('password') is-invalid @enderror" placeholder="Enter Password">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <input type="submit" class="form-control btn btn-primary mt-2" value="Submit">
            </div>

        </form>
    </div>
@endsection
