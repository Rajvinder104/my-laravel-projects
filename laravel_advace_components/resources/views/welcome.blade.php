<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Slot Component</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <x-alert type="primary" class="text-danger">
                            <x-slot:title>
                                Heading Goes Here
                            </x-slot>
                            <p class="mb-0 alert alert-warning">Lorem ipsum dolor sit amet.
                                {{ $component->link('This is Just link ', 'https://gnidemo.com/') }}
                            </p>

                        </x-alert>
                        {{-- ------------------------------------------------------------------------------------------------------------------------------------------------ --}}
                        {{-- <x-card/> --}}
                        @php
                            $componentName = 'card';

                        @endphp
                        <div class="card">
                            <div class="card-body">
                                <h4>card component Inline</h4>
                                <x-dynamic-component :component="$componentName" class="m-4" />
                            </div>
                        </div>



                        {{-- ----------------------------------------------------------------------------------------------------------------------------------------- --}}


                        @php
                            $componentName2 = 'alert';
                        @endphp
                        <div class="card my-3">
                            <div class="card-body">
                                <h4>Alert Component</h4>
                                <x-dynamic-component :component="$componentName2" class="m-4" type='success'>
                                    <x-slot:title class="text-dark">
                                        myheading
                                    </x-slot:title>

                                    <span class="text-danger">Lorem ipsum dolor sit amet.</span>
                                </x-dynamic-component>
                            </div>
                        </div>




                        {{-- ---------------------------------------------------------------------------------------------------------------------------------------------------- --}}


                        <x-form action="/somepage" method="PUT" class="myclass mt-5" id="myid">
                            <input type="text" name="name">
                            <button type="submit">Save</button>
                        </x-form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
