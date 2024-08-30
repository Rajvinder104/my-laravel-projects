<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Posts</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">

                        <div class="m-3 p-3 text-white rounded bg-secondary">
                            <h4>User Posts</h4>
                        </div>
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->description }}</td>
                                        <td><a href="{{ route('post.update', $post->id) }}"
                                                class="btn btn-warning btn-sm form-control">Update</a></td>
                                        <td><a href="" class="btn btn-danger btn-sm form-control">Delete</a></td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                        <a href="{{ route('dashboard') }}" class="btn btn-dark mt-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
