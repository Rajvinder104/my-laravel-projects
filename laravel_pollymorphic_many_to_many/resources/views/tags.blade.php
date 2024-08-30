<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tags</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                     <div class="heading">
                        <h4>Tags</h4>
                     </div>
                     <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tag Name</th>
                                <th class="text-center">Posts</th>
                                <th class="text-center">Videos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>{{ $tag->id}}</td>
                                    <td>{{ $tag->tag_name}}</td>
                                    <td><a href="{{ route('tag.show' , $tag->id)}}" class="btn btn-outline-info btn-sm form-control">posts</a></td>
                                    <td><a href="{{ route('view.getsinglerecord' , $tag->id)}}" class="btn btn-outline-warning btn-sm form-control">videos</a></td>
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
