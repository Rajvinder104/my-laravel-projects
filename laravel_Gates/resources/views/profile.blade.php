<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Profile</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-body">

                        <div class="thumbnail">
                            <h4>User Profile</h4>
                        </div>
                        <table class="table table-responsive table-bordered">
                            <tr>
                                <th>NAME :</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>EMAIL :</th>
                                <td>{{ $user->email }}</td>

                            </tr>
                            <tr>
                                <th>AGE :</th>
                                <td>{{ $user->age }}</td>

                            </tr>
                        </table>

                        <a href="{{ route('dashboard')}}" class="btn btn-dark mt-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
