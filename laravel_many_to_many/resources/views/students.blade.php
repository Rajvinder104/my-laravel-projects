<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Students</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                       <table class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id}}</td>
                                    <td>{{ $student->name}}</td>
                                    <td>{{ $student->email}}</td>
                                    <td>
                                        @foreach ($student->roles as $role)
                                            <ul>
                                                <li>{{ $role->role_name}}</li>
                                            </ul>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                       </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
