@extends('layouts.app')

@section('title', 'Scrutinizer Report | Halder Venture Limited - Election Results & Insights')
@section('description', 'Access the Scrutinizer Report from Halder Venture Limited for detailed insights into election results and shareholder voting outcomes. This report ensures transparency and integrity in our decision-making processes within the Indian rice and edible oil sectors.')
@section('keywords', 'Rice exporter in India, oil producers in india, oil factory in india, parboiled rice export, halder venture limited, Halder venture products, edible oil manufacturers in west bengal, oil manufacturing company in india, Indian rice industry, Agro Products')

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
<h1 class="text-center">SCRUTINIZER REPORT</h1>
<div class="dfcwervr d-flex justify-content-between align-items-center overflow-hidden mt-5">
  <div class="dihehr p-2">
    <h4>SELECT FINANCIAL YEAR</h4>
  </div>
  
  <div class="yr-select">
    <select id="selectField" class="form-select">
      <option selected="selected">Select Year</option>
      @foreach ($scrutinizerReports as $scrutinizerReport)
        <option value="{{ $scrutinizerReport->id }}">{{ $scrutinizerReport->year }}</option>
      @endforeach
    </select>
  </div>
</div>  

<div class="diuehr_content pt-5">

  
  
  
  @foreach ($scrutinizerReports as $scrutinizerReport)
  <div id="{{ $scrutinizerReport->id }}" class="content">
    <div class="row justify-content-center">
   
      <div class="col-lg-6 mb-4">
      <div class="accordion-item gfgffff">
        <h2 class="accordion-header" id="headingOne">
          <a href="{{ config('app.backend_url') }}/uploads/scrutinizer-reports/{{ $scrutinizerReport->file }}" target="_blank"><button class="quarterrr accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Scrutinizer Report {{ $scrutinizerReport->year }}
          </button></a> 
        </h2>
      </div>
    </div>


  </div>
  </div>
  @endforeach
  

  


  </div>
  </div>

  


</div>

</div>
</div>





<!-- report table end -->
@endsection