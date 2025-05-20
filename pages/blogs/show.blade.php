@extends('layouts.app')

@section('content')
    <!-- blog collective start -->


  <div class="blog-collective py-5">
    <h2 class="ms-4">{{ $blog->title }}</h2>

    <ul class="c-e-list ps-0 ms-4 pt-2">
      <li class="gal-c-e"><a href="{{ route('blogs.index') }}">Blogs</a></li>
      <li class="ms-3"><i class="c-e-list-inn fa-solid fa-angle-right"></i></li>
      <li class="ms-3"><a href="#">{{ $blog->category->name }}</a></li>
    </ul>

  </div>


  
  <div class="blog-internal mt-lg-4 mt-md-0 py-5">
   
    <div class="container">

    <div class="row">

      <div class="col-lg-8">
        
        <div class="internal-left">
          <ul class="c-e-list ps-0 ms-4 pt-lg-4 pt-md-0">
            <li class="gal-c-e"><i class="fa-regular fa-message"></i></li>
            <li class="ms-2"><p>Blogs </p></li>
            <li class="ms-2"><i class="fa-solid fa-user"></i></li>
            <li class="ms-2"><p>Halder Venture Limited</p></li>
            <li class="ms-2"><i class="fa-regular fa-calendar"></i></li>
            <li class="ms-2"><p>{{ $blog->created_at->format('F j, Y') }}</p></li>
          </ul>

          <hr>

          <div class="internal-imgg">
            <img src="{{ config('app.backend_url') }}/uploads/blogs/{{ $blog->image }}" alt="{{ $blog->title }}">

            
            {!! $blog->content !!}

            <!-- <div class="hgbt pt-4">
              <button type="button" class="leftbtn btn btn-secondary">Next Post</button>

              <button type="button" class="rightbttn btn btn-secondary">Previous Post</button>
            </div>  -->

          </div>

          <!-- <div class="comment">
            <h6>Leave a comment</h6>
          </div>

          <div class="comment-formmn py-5">
            <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-10">
               
                <div class="mb-3">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name Here...">
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email Here...">
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Website...">
                </div>

                <button type="button" class="mt-4 downntbtn btn btn-secondary">Post Comment</button>

              </div>
             
              </div>
            </div>
          </div> -->

        </div>

      </div>

      <div class="col-lg-4">

        <!-- <div class="right-intern py-5">
          <h5 class="ms-4">Categories</h5>
        </div> -->

         <div class="recent-posts mt-5 py-3">
          <h5 class="ms-4">Recent Posts</h5>

          @foreach ($blogs as $blog)
            <div class="row m-auto pt-4">
              <div class="col-lg-2 pt-2">
              <a href="{{ route('blogs.show', $blog->id) }}"><div class="recent-img">
                  <img src="{{ config('app.backend_url') }}/uploads/blogs/{{ $blog->image }}" alt="{{ $blog->title }}"></a>
                </div></a>
              </div>

              <div class="col-lg-10">
                <div class="recent-content">
                <a href="{{ route('blogs.show', $blog->id) }}" style="text-decoration: none; color: inherit;"><h6>{{ $blog->title }}</h6></a>
                </div> 
              </div>
              <hr style="color: #d3d3d3; margin: auto;">
              
            </div>
          @endforeach

          
          

        </div> 

        <!-- <div class="bottomm-intern mt-5 py-3">
          <h5 class="ms-4">Archives</h5>
          <p class="pt-3 ms-4">July 2024</p>
          <p class="ms-4">July 2024</p>
          <p class="ms-4">July 2024</p>
          <p class="ms-4">July 2024</p>
        </div> -->

      </div>

    </div>

    </div>

  </div>



  <!-- blog collective end -->

@endsection