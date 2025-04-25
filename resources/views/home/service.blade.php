<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">Blog posts</h1>
       <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
       <div class="services_section_2">
          <div class="row">
            @if($posts->isNotEmpty())
            @foreach($posts as $key => $post)
               <div class="col-md-4">
                  <div><img src="{{asset('uploads/posts/'.$post->image)}}" class="services_img"></div>
                  <h1 style="font-weight: bold;">{{$post->title}}</h1>
                  <p style="color:blue">Auth: {{$post->user->name}}</p>
                  <div class="btn_main"><a href="{{route('post.detail',$post->id)}}">Read more</a></div>
               </div>
            @endforeach
            @endif
          </div>
       </div>
    </div>
 </div>