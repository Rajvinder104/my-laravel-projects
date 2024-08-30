<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
    <style>

    </style>
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
                        <h4>Authentication Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('registerSave') }}" method="POST">
                            @csrf
                            <div class="form-group mt-3">
                                <label for="username">Name</label>
                                <input type="text" name="name" placeholder="Enter your name" class="form-control"
                                    id="username">
                            </div>
                            <div class="form-group mt-3">
                                <label for="useremail">Email</label>
                                <input type="email" name="email" placeholder="Enter your Email" class="form-control"
                                    id="useremail">
                            </div>
                            <div class="form-group mt-3">
                                <label for="userage">Age</label>
                                <input type="text" name="age" placeholder="Enter your Age" class="form-control"
                                    id="userage">
                            </div>
                            <div class="form-group mt-3">
                                <label for="userpassword">Password</label>
                                <input type="password" name="password" placeholder="Enter your Password"
                                    class="form-control" id="userpassword">
                            </div>
                            <div class="form-group mt-3">
                                <label for="userpassword-confirm">Confirm Password</label>
                                <input type="password" name="password_confirmation" placeholder="Conform your Password"
                                    class="form-control" id="userpassword-confrim">
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn-brand ">Register</button>
                                <span class="login">Already have account? <a
                                        href="{{ route('login') }}">Login</a></span>

                            </div>
                        </form>
                    </div>
                    @if ($errors->any())
                        <div class="card-footer text-body-secondary">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>
