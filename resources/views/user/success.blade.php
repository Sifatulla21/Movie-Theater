<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="SSLCommerz">
    <title>Example - EasyCheckout (Popup) | SSLCommerz</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<section class="container-fluid mt-2">
    <div class="container">
        <h2 class="text-center mt-4">{{ $orderStatus }}</h2>
        <div class="w-50 mx-auto">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Customer Name</th>
                        <td></td>
                        <td>{{$order_detials->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Customer Email</th>
                        <td></td>
                        <td>{{$order_detials->email}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Customer Phone</th>
                        <td></td>
                        <td>{{$order_detials->phone}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Transaction ID</th>
                        <td></td>
                        <td>{{$order_detials->transaction_id}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Order Amount</th>
                        <td></td>
                        <td>{{$order_detials->amount}}Tk</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">Order Completed</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
</body>
</html>