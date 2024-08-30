<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>File Uploads</title>
    <style>
        .img-thumbnail {

            width: 100%;
        }
    </style>
</head>

<body class="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-4">File Upload</h2>
            </div>
        </div>
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 my-3">
                    <input type="file" name="photo" accept="image/*" class="form-control">
                    @error('photo')
                        <div class="alert alert-danger my-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-6 mb-3">
                    <input type="submit" class="btn btn-primary btn-sm form-control" value="Submit">
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
        <div class="row">
            @foreach ($users as $user)
                <div class="col-12 col-md-6 col-lg-4 my-3">

                    {{-- ess to phela artisan di command nall storage namm da folder create hovega
                    php artisan storage::link --}}

                    {{-- fetch Data --}}
                    <div class="brand-img">
                        <img src="{{ asset('/storage/' . $user->file_name) }}" alt=""
                            class="img-fluid img-thumbnail">
                    </div>
                    {{-- Delete Data --}}

                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm my-3 form-control">Delete</button>
                    </form>

                    {{-- Update Data --}}
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm form-control">Update</a>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
