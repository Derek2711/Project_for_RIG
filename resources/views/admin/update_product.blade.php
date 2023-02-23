<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <base href="/public">
    <!-- plugins:css -->
    @include('admin.css')
    <style>
        .div_center {
            text-align: center;
            padding-top: 50px;
        }

        .h2 {
            font-size: 30px;
            padding-bottom: 20px;

        }

        .color {
            color: black;
            padding: 10px auto;
        }

        .file {
            margin-top: 20px;
            color: black;

        }

        .select {
            color: black;
        }
        .form-control{
            color: black;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.header')
            <div class="main-panel">
                <div class="content-wrapper">
                    @if(session()->has('add_message'))

                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('add_message')}}
                    </div>

                    @endif
                    <div class="div_center">
                        <h1 class="h2">Add product</h1>
                        <div class="container-fluid">
                            <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="title" class="form-control" placeholder="{{$product->title}}" required="">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="description" class="form-control" placeholder="{{$product->description}}" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="number" min="0" class="form-control" name="price" aria-label="Amount (to the nearest dollar)" placeholder="{{$product->price}}">
                                    <span class="input-group-text">.00</span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">A</span>
                                    <input type="number" min="0" class="form-control" name="quantity" aria-label="Amount (to the nearest dollar)" placeholder="{{$product->quantity}}">
                                    <span class="input-group-text">0</span>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <input type="number" min="0" class="form-control" name="discount" aria-label="Amount (to the nearest dollar)" placeholder="{{$product->discount_price}}">
                                    <span class="input-group-text">.00</span>
                                </div>
                                <div class="select">
                                    <select class="form-select" aria-label="Default select example" name="catagory">
                                        <option value="{{$product->catagory}}" selected>{{$product->catagory}}</option>
                                        @foreach($catagory as $catagory)
                                        <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <input class="form-control file" type="file" name="image" id="formFileDisabled">
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-success" value="Add Product" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- partial -->
                </div>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html> 