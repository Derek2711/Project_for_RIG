<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin page(Template from Themewagon)</title>
  <!-- plugins:css -->
  @include('admin.css')
  <style type="text/css">
    .div_center {
      text-align: center;
      padding-top: 50px;
    }

    .h2 {
      font-size: 30px;
      padding-bottom: 20px;
    }

    .input_color {
      color: black;
    }

    .center,
    td,
    th {
      margin: auto;
      width: 50%;
      text-align: center;
      margin-top: 70px;
      border: 1px solid white;
      color: white;
    }

    tr {
      height: 50px;
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

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          @if(session()->has('message'))

          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
          </div>

          @endif
          @if(session()->has('delete'))

          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('delete')}}
          </div>

          @endif
          <div class="div_center">
            <h1 class="h2">Add Catagory</h1>
            <form action="{{url ('/add_catagory')}}" method="POST">
              @csrf
              <input class="input_color" type="text" name="catagory" placeholder="Write Catagory name">
              <input type="submit" class="btn btn-success" name="Submit" value="Add Catagory">
            </form>
          </div>
          <table class="center">

            <tr>
              <th>Catagory Name</th>
              <th>Action</th>
            </tr>
            @foreach($data as $data)
            <tr>
              <td>{{$data->catagory_name}}</td>
              <td><a onclick="return confirm('Are you sure to delete this catagory')" class="btn btn-danger" href="{{url('delete_catagory',$data->id)}}">Delete</a></td>
            </tr>
            @endforeach

          </table>
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