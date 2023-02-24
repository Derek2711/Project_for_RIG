<!DOCTYPE html>
<html>

<head>
    <base href="/public">
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
        .h6{
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')

        <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto;width: 50%;padding: 30px;">
            <div class="box">

                <div class="img-box">
                    <img src="/product/{{$product->image}}" alt="">
                </div>
                <div class="detail-box" style="margin-top: 20px;text-align: center;">
                    <h5>
                        {{$product->title}}
                    </h5>
                    <br>
                    @if($product->discount_price != null)
                    <h6>
                        ${{$product->discount_price}}
                    </h6>
                    <h6 style="text-decoration: line-through; color: red;">
                        ${{$product->price}}
                    </h6>
                    @else
                    <h6>
                        ${{$product->price}}
                    </h6>
                    @endif
                    <div style="font-size: 20px;font-weight: bold;margin-top: 20px;">
                        <h6 class="h6">Catagory : {{$product->catagory}}</h6>
                        <h6 class="h6">Description : {{$product->description}}</h6>
                        <h6 class="h6">Only {{$product->quantity}} items left!</h6>
                    </div>
                </div>
            </div>
        </div>

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