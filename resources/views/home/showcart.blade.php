<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="home/images/favicon.png" type="">
    <title>Project(Template download from Themewagon)</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style>
        .center {
            margin: auto;
            /* width: 50%; */
            text-align: center;
            padding: 30px;
        }

        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }



        .th {
            font-size: 20px;
            padding: 10px;
            background-color: azure;
        }

        tr {
            background-image: linear-gradient(to left, azure, white);

        }

        .order {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

        <!-- slider section -->
        <!-- @if(session()->has('message'))

        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>

        @endif -->
        @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>

        @endif


        <div class="center">
            <table>
                <tr>
                    <th class="th">Product title</th>
                    <th class="th">Quantity</th>
                    <th class="th">Image</th>
                    <th class="th">Price</th>
                    <th class="th">Action</th>


                </tr>

                <?php

                $total_price = 0;

                ?>

                @foreach($cart as $cart)
                <tr style="height: 100px;">
                    <td style="width: 150px;">{{$cart->product_title}}</td>
                    <td style="width: 150px;">{{$cart->quantity}}</td>
                    <td style="width: 120px;"><img src="/product/{{$cart->image}}" width="100px" height="100px"></td>
                    <td style="color: red;width: 120px;">${{$cart->price}}</td>
                    <td style="width: 120px;"><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this product')" href="{{url('/remove_cart',$cart->id)}}">Remove</a></td>


                </tr>
                <?php

                $total_price += $cart->price;

                ?>
                @endforeach
                <tr style="height: 70px;font-weight: bolder;" class="th">
                    <td colspan="3">Total</td>
                    <td style="color: red;">${{$total_price}}</td>
                    <!-- <td><a class="btn btn-danger">Back</a></td> -->
                </tr>

            </table>
            <div class="order">
                <h5 style="font-size: 20px;margin-bottom: 10px;">Proceed to order</h5>
                <a href="{{url('cash_order')}}" class="btn btn-info">Cash on delivery</a>
                <a href="" class="btn btn-info">Pay with E-wallet</a>
            </div>

        </div>

        <!-- footer start -->
        @include('home.footer')
        <!-- footer end -->
        <div class="cpy_">
            <p class="mx-auto">© 2023 All Rights Reserved By <a href="#">For Your Fashion</a><br>

                Distributed By <a href="#">Themewagon</a>

            </p>
        </div>
        <!-- jQery -->
        <script src="home/js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="home/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="home/js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="home/js/custom.js"></script>
</body>

</html>