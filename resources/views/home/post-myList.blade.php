<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{asset('template/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('template/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('template/images/fevicon.png" type="image/gif')}}" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('template/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('template/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="{{asset('template/images/logo.png')}}"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="contact.html">Contact</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="index.html"><img src="{{asset('template/images/logo.png')}}"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="index.html">Home</a></li>
                     <li><a href="about.html">About</a></li>
                     <li><a href="services.html">Services</a></li>
                     <li><a href="blog.html">Blog</a></li>
                     <li><a href="contact.html">Contact us</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- header section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container-fluid">
            @if($posts->isNotEmpty())
                @foreach($posts as $post)
                    @if($post->image)
                        <div class="row">
                            <div class="col-md-8">
                                <div class="about_taital_main">
                                    <h1 class="about_taital">{{$post->title}}</h1>
                                    <p class="about_text">{{$post->description}}</p>    
                                    <div class="readmore_bt"><a href="{{route('post.detail',$post->id)}}">Read more</a></div>                       
                                </div>
                            </div>
                            
                            <div class="col-md-4 padding_right_0">
                                <div><img src="{{asset('uploads/posts/'.$post->image)}}" class="about_img"></div>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-md-12">
                                <div class="about_taital_main">
                                    <h1 class="about_taital">{{$post->title}}</h1>
                                    <p class="about_text">{{$post->description}}</p>     
                                    <div class="readmore_bt"><a href="{{route('post.detail',$post->id)}}">Read more</a></div>                       
                                </div>
                            </div>
                            
                        </div>
                    @endif                   
                @endforeach
            @else
                <div class="col-md-12">Record not found.</div>
            @endif
            <div class="readmore_bt float-right"><a href="{{route('homepage')}}">Back</a></div>
         </div>
      </div>
      <!-- about section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="location_main">
               <div class="call_text"><img src="{{asset('template/images/call-icon.png')}}"></div>
               <div class="call_text"><a href="#">Call +01 1234567890</a></div>
               <div class="call_text"><img src="{{asset('template/images/mail-icon.png')}}"></div>
               <div class="call_text"><a href="#">demo@gmail.com</a></div>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="{{asset('template/images/fb-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{asset('template/images/twitter-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{asset('template/images/linkedin-icon.png')}}"></a></li>
                  <li><a href="#"><img src="{{asset('template/images/instagram-icon.png')}}"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('template/js/jquery.min.js')}}"></script>
      <script src="{{asset('template/js/popper.min.js')}}"></script>
      <script src="{{asset('template/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('template/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('template/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('template/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="j{{asset('template/s/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{asset('template/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>