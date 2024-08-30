<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Validations Rules</title>
    <style>
        body {
            background: url('images/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body::after {
            position: fixed;
            display: inline-block;
            content: '';
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            opacity: 0.6;
            z-index: -1;
        }

        .logo {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;

        }

        .logo img {
            max-width: 100px;
        }

        .card {
            box-shadow: 0px 5px 20px 0px rgba(92, 97, 242, .2);
            padding: 20px 15px;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="logo">
                            <img src="images/laravel-logo.png" alt="">
                        </div>
                        {{-- <pre>
                        @php
                            print_r($errors->all());
                        @endphp
                        </pre> --}}
                        {{-- @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif --}}
                        <form action="{{ route('addwithvalidation') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group my-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Enter your name">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="">Age</label>
                                        <input type="text" name="age" value="{{ old('age') }}"
                                            class="form-control @error('age') is-invalid @enderror"
                                            placeholder="Enter your age">
                                        <span class="text-danger">
                                            @error('age')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="">Email</label>
                                        <input type="text" name="email" value="{{ old('email') }}"
                                            class="form-control  @error('email') is-invalid @enderror"
                                            placeholder="Enter your email">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- <div class="form-group my-3">
                                        <label for="">Password</label>
                                        <input type="text" name="password" value="{{ old('password') }}"
                                            class="form-control  @error('password') is-invalid @enderror"
                                            placeholder="Enter password">
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div> --}}
                                    {{-- <div class="form-group my-3">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="">Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Enter Phone number">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="">Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone number">
                                    </div> --}}
                                    <div class="form-group my-3">
                                        <label for="">City</label>
                                        <input type="text" name="city" value="{{ old('city') }}"
                                            class="form-control  @error('city') is-invalid @enderror"
                                            placeholder="Enter City">
                                        <span class="text-danger">
                                            @error('city')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group my-3">
                                        <input type="submit" value="Submit"class="form-control btn btn-danger">

                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
