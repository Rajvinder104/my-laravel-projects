<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>first table</title>
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
            margin-top: 10px;
        }

        .bg-label-primary {
            background-color: #eee6ff !important;
            color: #9055fd !important;
            text-decoration: none;
        }

    </style>
        <style>
            .pagination li {
                margin: 0 2px;
            }
            .pagination .disabled span {
                cursor: default;
            }
            .pagination .active span {
                font-weight: bold;
            }
        </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <h1 class="heading">All Users List</h1>
                    <div class="new my-3">
                        <a href="/newuser" class="btn btn-success">Add New </a>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $id => $users)
                                <tr>
                                    <td>{{ $users->id }}</td>
                                    <td>{{ $users->name }}</td>



                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="pagination">
                        {{ $data->links('vendor.pagination.default') }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
