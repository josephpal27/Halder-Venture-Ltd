@extends('layouts.app')

@section('title', 'Financial Results | Halder Venture Limited - Quarterly Performance Overview')
@section('description', 'Explore Halder Venture Limited’s financial results for insights into our annual performance, growth metrics, and financial stability. Discover our achievements in the Indian rice and edible oil industry, reflecting our commitment to excellence and sustainable growth.')
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
<h1 class="text-center">FINANCIAL RESULTS</h1>
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
   
      
      <div class="col-lg-6 mb-4">
        <div class="accordion-item gfgffff">
          <h2 class="accordion-header" id="headingOne">
            <button class="quarterrr accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              1st Quarter <i class="qurtsic fa-solid fa-plus"></i>
            </button> 
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul class="finan-result">
                @foreach ($year->financialResults as $FinancialResult)
                  @if ($FinancialResult->quarter_id == 1)
                    <li><a href="{{ config('app.backend_url') }}/uploads/financial-results/{{ $FinancialResult->file }}" target="_blank"><i class="fa-solid fa-square-check"></i> {{ $FinancialResult->title }} </a></li>	
                  @endif
                @endforeach
              </ul>
            </div>
          </div>
          
        </div>
      </div> 
      
      <div class="col-lg-6 mb-4">
        <div class="accordion-item gfgffff">
          <h2 class="accordion-header" id="headingTwo">
            <button class="quarterrr accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
              2nd Quarter <i class="qurtsic fa-solid fa-plus"></i>
            </button> 
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul class="finan-result">
                @foreach ($year->financialResults as $FinancialResult)
                  @if ($FinancialResult->quarter_id == 2)
                    <li><a href="{{ config('app.backend_url') }}/uploads/financial-results/{{ $FinancialResult->file }}" target="_blank"><i class="fa-solid fa-square-check"></i> {{ $FinancialResult->title }} </a></li>	
                  @endif
                @endforeach
              </ul>
            </div>
          </div>
          
        </div>
      </div> 

      <div class="col-lg-6 mb-4">
        <div class="accordion-item gfgffff">
          <h2 class="accordion-header" id="headingThree">
            <button class="quarterrr accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              3rd Quarter <i class="qurtsic fa-solid fa-plus"></i>
            </button> 
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul class="finan-result">
                @foreach ($year->financialResults as $FinancialResult)
                  @if ($FinancialResult->quarter_id == 3)
                    <li><a href="{{ config('app.backend_url') }}/uploads/financial-results/{{ $FinancialResult->file }}" target="_blank"><i class="fa-solid fa-square-check"></i> {{ $FinancialResult->title }} </a></li>	
                  @endif
                @endforeach
              </ul>
            </div>
          </div>
          
        </div>
      </div> 

      <div class="col-lg-6 mb-4">
        <div class="accordion-item gfgffff">
          <h2 class="accordion-header" id="headingFour">
            <button class="quarterrr accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
              4th Quarter <i class="qurtsic fa-solid fa-plus"></i>
            </button> 
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul class="finan-result">
                @foreach ($year->financialResults as $FinancialResult)
                  @if ($FinancialResult->quarter_id == 4)
                    <li><a href="{{ config('app.backend_url') }}/uploads/financial-results/{{ $FinancialResult->file }}" target="_blank"><i class="fa-solid fa-square-check"></i> {{ $FinancialResult->title }} </a></li>	
                  @endif
                @endforeach
              </ul>
            </div>
          </div>
          
        </div>
      </div> 
     

    </div>
  </div>
  @endforeach
  
</div>

</div>
</div>
<!-- report table end -->

@endsection