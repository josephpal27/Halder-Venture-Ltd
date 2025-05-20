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
<h3 class="text-center">FINANCIALS OF SUBSIDIARIES</h3>
<div class="dfcwervr d-flex justify-content-between align-items-center overflow-hidden mt-5">
  <div class="dihehr p-2">
    <h4>SELECT FINANCIAL YEAR</h4>
  </div>
  
  <div class="yr-select">
    <select id="selectField" class="form-select">
      <option selected="selected">Select Year</option>
      @foreach ($years as $year)
        <option value="{{ $year->id }}">{{ $year->name }}</option>
      @endforeach
    </select>
  </div>
</div>  

<div class="diuehr_content pt-5">

  
  @foreach ($years as $year)

  <div id="{{ $year->id }}" class="content">
    <div class="row justify-content-center">
   
      @foreach ($year->financialSubsidiaries as $financialSubsidiary)
      <div class="col-lg-6 mb-4">
      <div class="accordion-item gfgffff">
        <h2 class="accordion-header" id="headingOne">
          <a href="{{ config('app.backend_url') }}/uploads/financials-subsidiaries/{{ $financialSubsidiary->file }}" target="_blank"><button class="quarterrr accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            {{ $financialSubsidiary->subsidiary_name }}
          </button></a> 
        </h2>
      </div>
    </div>
      @endforeach

  </div>
  </div>

  @endforeach



</div>

</div>
</div>







<!-- report table end -->
@endsection