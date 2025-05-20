@extends('layouts.app')

@section('content')
    <!-- banner start -->


  <div class="halder-ban" data-aos="fade-up" data-aos-duration="3000">

<div class="col-lg-12">
  <div class="product-ban text-center">
    <img src="{{ asset('assets/img/Carrier-Page-banner.png') }}" alt="">
    <!-- <h2>POLICY TO DETERMINE MATERIAL SUBSIDIARIES</h2> -->
  </div>
</div>

</div>


<!-- banner end -->




<!-- career internal -->


<div class="Careers-internal py-5">
<div class="container">
<a href="{{ route('careers.index') }}"><i class="pt-3 fa-solid fa-arrow-left"></i></a>
 <div class="row justify-content-center">
   <div class="col-lg-10">
     <div class="career-intern">
       <div class="row">

         <div class="col-lg-8">
          <div class="crsdgf">

            @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif

            <h5>{{ strtoupper($career->designation) }} </h5>  <p>Location/{{ $career->location }}</p>
          </div>
         </div>

         <!-- <div class="col-lg-4">
           <div class="btn-intern">
            <button type="button" class="crerters btn btn-primary">Apply</button>
           </div>
         </div> -->

         <hr>
       </div>

       <div class="row">

        <div class="col-lg-3">
          <div class="qual">
            <h6>Job description</h6>
          </div>
        </div>

        <div class="col-lg-9">
          <div class="qua-right">
          {!! nl2br(e($career->description)) !!}
        </div>
        </div>

        <div class="col-lg-3 mt-2">
          <div class="qual">
            <h6>Experience Requirements:
            </h6>
          </div>
        </div>

        <div class="col-lg-9 mt-2">
          <div class="qua-right">
          {!! nl2br(e($career->experience_requirements)) !!}
          </div>
        </div>

        <div class="col-lg-3 mt-2">
          <div class="qual">
            <h6>Educational Qualifications:
            </h6>
          </div>
        </div>

        <div class="col-lg-9 mt-2">
          <div class="qua-right">
            {!! nl2br(e($career->educational_qualifications)) !!}
        </div>
        </div>

        <!-- <div class="col-lg-3">
          <div class="qual">
            <h6>Experience :</h6>
          </div>
        </div>

        <div class="col-lg-9">
          <div class="qua-right">
            <p>3 - 5 Years</p> 
        </div>
        </div> -->

        <!-- <div class="col-lg-3">
          <div class="qual">
            <h6>Job ID :</h6>
          </div>
        </div>

        <div class="col-lg-9">
          <div class="qua-right">
            <p>0123456</p> 
        </div> -->
        <!-- <div class="btngfh pt-5 ms-4">
          <button type="button" class="ms-4 s-c-r btn btn-primary">Apply</button>
            <button type="button" class="ms-4 s-c-r btn btn-primary">Back</button>
        </div> -->
        </div>

       </div>

       <div class="row pt-5">
        <div class="col-lg-8 pt-5">
         <div class="crsdgf">
           <h5>APPLYING FOR {{ strtoupper($career->designation) }}</h5> 
         </div>
        </div>
        <hr>
      </div>

        @include('pages.careers.partials.form', ['career' => $career])
    
      </div>
 </div>
</div>
</div>


<!-- career internal -->
@endsection