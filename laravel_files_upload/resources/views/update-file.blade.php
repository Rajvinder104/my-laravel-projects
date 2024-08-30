<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>update File Uploads</title>
</head>

<body class="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-4">Update : File Upload</h2>
            </div>
        </div>
        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-3">
                    <img id="output" class="img-fluid img-thumbnail" src="{{ asset('/storage/' . $user->file_name) }}"
                        alt="">
                </div>
                <div class="col-9 my-3">
                    <input type="file"
                        onchange="document.querySelector('#output').src=window.URL.createObjectURL(this.files[0])"
                        name="photo" accept="image/*">
                    @error('photo')
                        <div class="alert alert-danger my-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12 mt-3">
                    <input type="submit" class="btn btn-primary btn-sm" value="update">
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-6">
                @if (@session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

    </div>
</body>

</html>
