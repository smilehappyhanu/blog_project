<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('admin-template/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('admin-template/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('admin-template/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('admin-template/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('admin-template/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('admin-template/img/favicon.icon')}}">

  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <section class="no-padding-top">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="block">
                    <div class="title"><strong>List posts</strong></div>
                    <div class="table-responsive"> 
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Tile</th>
                            <th>Description</th>
                            <th>Post by</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @if($posts->isNotEmpty())
                            @foreach($posts as $post)
                                <tr>
                                    <th scope="row">{{$post->id}}</th>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->description}}</td>
                                    <td>{{$post->user->name}}</td>
                                    <td>{{$post->status}}</td>
                                    <td>
                                        <img src="{{asset('uploads/posts/'.$post->image)}}" alt="">
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-success" type="submit">Edit</a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger" type="submit">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                         @else
                            <tr>
                                <td colspan="7">Record not found.</td>
                            </tr>
                         @endif
                        </tbody>
                      </table>
                      <div class="col-md-12 mt-3">
                        {{$posts->links()}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>



        @include('admin.footer')
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admin-template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin-template/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admin-template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin-template/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admin-template/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin-template/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin-template/js/charts-home.js')}}"></script>
    <script src="{{asset('admin-template/js/front.js')}}"></script>
  </body>
</html>