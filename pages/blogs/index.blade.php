@extends('layouts.app')

@section('content')
    <!-- blog collective start -->


  <div class="blog-collective py-5">
    <h2 class="ms-4">Blog</h2>

    <ul class="c-e-list ps-0 ms-4 pt-2">
      <li class="gal-c-e"><a href="blog-collective.html">Home</a></li>
      <li class="ms-3"><i class="c-e-list-inn fa-solid fa-angle-right"></i></li>
      <li class="ms-3"><a href="#">Blog</a></li>
    </ul>

  </div>


  
  <div class="blogsss mt-5 py-5">
   
    <div class="row m-auto">

      @foreach ($blogs as $blog)
          <div class="col-lg-4 mb-4">
            <div class="blg-coverr">
            <div class="blg">
              <a href="{{ route('blogs.show', $blog->id) }}" target="_blank"><img src="{{ config('app.backend_url') }}/uploads/blogs/{{ $blog->image }}" alt="{{ $blog->title }}"></a>
            </div>

            <ul class="c-e-list ps-0 pt-4">
              <li class="gal-c-e"><i class="fa-regular fa-calendar"></i></li>
              <li class="ms-3"><p>{{ $blog->created_at->format('F j, Y') }}</p></li>
              <li class="ms-3"><a href="#"><i class="fa-regular fa-message"></i> &nbsp 0</a></li>
            </ul>

            <h5>{{ substr($blog->title, 0, 80) }}...</h5>

            <a href="{{ route('blogs.show', $blog->id) }}" target="_blank"><button type="button" class="ps-0 blg-btnn btn btn-secondary">Explore More <i class="fa-solid fa-arrow-right"></i></button></a>

          </div>
        </div>
      @endforeach

    </div>
  </div>
</div>



  <!-- blog collective end -->
@endsection