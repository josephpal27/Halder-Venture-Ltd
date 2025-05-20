@extends('layouts.app')


@section('content')
       <!-- banner start -->


   <div class="halder-ban" data-aos="fade-up" data-aos-duration="3000">

<div class="col-lg-12">
  <div class="product-ban">
    <img src="assets/img/investors-banner.webp" alt="" loading="lazy">
  </div>
</div>

</div>


<!-- banner end -->







<!-- report table start -->



<div class="annuals py-5">
<div class="container">
<h3 class="text-center text-uppercase">Familiarization Programme of Independent Directors</h3>
<div class="dfcwervr d-flex justify-content-between align-items-center overflow-hidden mt-5">
  <div class="dihehr p-2">
    <h4>SELECT FINANCIAL YEAR</h4>
  </div>
  
    <div class="yr-select">
        <select id="selectField" class="form-select">
          <option selected="selected">Select Year</option>
          <option value="option1">2025-26</option>
          <!-- <option value="option2">2026-27</option> -->
        </select>
    </div>
</div>  

<div class="diuehr_content pt-5">

    <div id="option1" class="content">
        <div class="row justify-content-center">
        <div class="col-lg-6">
        <div class="accordion-item gfgffff">
          <h2 class="accordion-header" id="headingOne">
           <a href="{{ asset('uploads/1st Familiarization programme_2025-26.pdf') }}" target="_blank"><button class="quarterrr accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            1st Familiarization Programme 2025-26
          </button></a> 
          </h2>
        </div>
      </div>
    </div>
    </div>
  
</div>

</div>
</div>







<!-- report table end -->
@endsection