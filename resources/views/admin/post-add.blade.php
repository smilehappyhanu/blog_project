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
                <!-- Form Elements -->
                <div class="col-lg-12">
                @include('admin.message')
                  <div class="block">
                    <div class="title"><strong>Add posts</strong></div>
                    <div class="block-body">
                      <form class="form-horizontal" method="POST" action="{{route('post.create')}}" name="addPostForm" id="addPostForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Title</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" name="title" id="title">
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                          
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Description</label>
                            <div class="col-sm-9">
                              <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                              @error('description')
                                <p class="text-danger">{{ $message }}</p>
                             @enderror
                            </div>
                          </div>
                       
                          <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Image</label>
                            <div class="col-sm-9">
                              <input type="file" class="form-control" name="image" id="image">
                            </div>
                          </div>

                        <div class="form-group row">
                          <div class="col-sm-9 ml-auto">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </form>
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