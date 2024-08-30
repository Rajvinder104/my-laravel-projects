<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="headind">
                            <h4>Login</h4>
                        </div>
                        <form action="{{ route('loginMatch') }}" method="POST">
                            @csrf

                            <div class="form-group mt-3">
                                <label for="useremail">Email</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Enter Your Email">
                            </div>
                            <div class="form-group mt-3">
                                <label for="userpassword">Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Enter your Password">
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-info" type="submit">Login</button>
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
