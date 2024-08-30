<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>View User</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-bordered table-hover">
                    <?php  foreach ($data as $key => $users) { ?>
                    <tr>
                        <th>Name</th>
                        <td>{{ $users->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $users->email }}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{ $users->name }}</td>
                    </tr>
                    <?php   }?>

                </table>
            </div>
        </div>
    </div>
</body>

</html>
