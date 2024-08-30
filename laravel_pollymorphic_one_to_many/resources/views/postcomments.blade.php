<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Posts Comment</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h4>Posts Comments</h4>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-responsive ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Comments</th>
                                    <th>Likes</th>
                                    <th>Commentable Id</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts->comments as $video)
                                    <tr>
                                        <td>{{ $video->id }}</td>
                                        <td>{{ $video->detail }}</td>
                                        <td>{{ $video->likes }}</td>
                                        <td>{{ $video->commentable_id }}</td>

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
