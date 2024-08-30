<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h4>WELCOME : {{ Auth::user()->name }}</h4>
                    </div>
                </div>
            </div>
            {{-- dosra trika v hai --}}
            {{-- @can('isAdmin')
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <a href="" class="btn btn-success form-control">Admin Panel</a>
                    </div>
                </div>
            </div>
            @endcan --}}
            @if (Gate::allows('isAdmin'))
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="" class="btn btn-success form-control">Admin Panel</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="" class="btn btn-dark form-control">Other Link</a>
                        </div>
                    </div>
                </div>
            @endif

            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('profileopen', Auth::user()->id) }}"
                            class="btn btn-primary form-control">Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('postsopen', Auth::user()->id) }}"
                            class="btn btn-warning form-control">Pots</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('logout') }}" class="btn btn-danger form-control">Logout</a>
                    </div>
                </div>
            </div>
      
        </div>
    </div>
</body>

</html>
