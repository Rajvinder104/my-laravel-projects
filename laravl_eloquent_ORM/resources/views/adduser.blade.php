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
                <input type="text" name="name" value="{{ old('name') }}"
                    class="form-control @error('name') is-invalid @enderror"  placeholder="Enter your name">
                <span class="text-danger">
                    @error('name')
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
                    class="form-control mt-2  @error('age') is-invalid @enderror" placeholder="Enter your age">
                <span class="text-danger">
                    @error('age')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group mt-3">
                <label for="">city</label>
                <input type="text" name="city" value="{{ old('city') }}"
                    class="form-control mt-2  @error('city') is-invalid @enderror" placeholder="Enter your city">
                <span class="text-danger">
                    @error('city')
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
