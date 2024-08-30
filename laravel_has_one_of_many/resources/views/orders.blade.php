<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Orders</title>
</head>
<body>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Amount</th>
                                    <th>Customer ID</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                   @foreach ($orders->orders as $order)
                                       <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->amount}}</td>
                                        <td>{{ $order->customer_id}}</td>
                                        <td>{{ $order->created_at}}</td>
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
