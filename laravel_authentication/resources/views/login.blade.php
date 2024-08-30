<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title>

</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="logo">
                        <img src="images/logo.png" alt="">
                    </div>
                    <div class="heading">
                        <h4>Authentication Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('loginMatch') }}" method="POST">
                            @csrf
                            <div class="form-group mt-3">
                                <label for="useremail" class="form-lable">Email</label>
                                <input type="email" name="email" placeholder="Enter your Email" class="form-control @error('email') is-invalid @enderror"
                                    id="useremail">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="userpassword" class="form-lable">Password</label>
                                <input type="password" name="password" placeholder="Enter your Password "
                                    class="form-control @error('password') is-invalid @enderror" id="userpassword">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn-brand">Login</button>
                                <span class="login">Still no account? <a href="{{ route('register') }}"> Create new
                                        account</a></span>
                            </div>
                        </form>
                    </div>
                    {{-- @if ($errors->any())
                        <div class="card-footer text-body-secondary">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
