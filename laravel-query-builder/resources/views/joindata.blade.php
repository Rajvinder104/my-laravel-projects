<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Join Data</title>
    <style>
        .heading {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
            color: #fff;
            font-weight: 600;
            border: transparent;
            border-radius: 7px;
            padding: 10px 12px;
            margin-bottom: 0;
            font-size: 15px;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-reponsive">
                    <h1 class="heading">All Users Join Data</h1>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>email</th>
                                {{-- <th>password</th> --}}
                                <th>City name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    {{-- <td>{{ $data->password }}</td> --}}
                                    <td>{{ $data->cities }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div>
                        {{ $students->links('pagination::bootstrap-5')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
