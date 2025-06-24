@extends('layouts.app')

@section('title', 'Shareholding Pattern | Halder Venture Limited - Ownership Structure Overview')
@section('description', 'Explore the shareholding pattern of Halder Venture Limited to understand our ownership structure. Gain insights into the distribution of shares among stakeholders, reflecting our commitment to transparency in the rice and edible oil industries.')
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
<h1 class="text-center">SHARE HOLDING PATTERN</h1>
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
      
    @if ($year->shareholdingPatterns->where('quarter_id', 1)->count() > 0)
      <div class="col-lg-6 mb-4">
        <div class="accordion-item gfgffff">
          <h2 class="accordion-header" id="headingOne">
            @foreach ($year->shareholdingPatterns as $shareholdingPattern)
              @if ($shareholdingPattern->quarter_id == 1)
                <a href="{{ config('app.backend_url') }}/uploads/shareholding-patterns/{{ $shareholdingPattern->file }}" target="_blank"><button class="quarterrr accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  {{ $shareholdingPattern->quarter->name }}
                </button></a> 
                @break
              @endif
            @endforeach
          </h2>
        </div>
      </div>
    @endif

    @if ($year->shareholdingPatterns->where('quarter_id', 2)->count() > 0)
    <div class="col-lg-6 mb-4">
      <div class="accordion-item gfgffff">
        <h2 class="accordion-header" id="headingTwo">
          @foreach ($year->shareholdingPatterns as $shareholdingPattern)
            @if ($shareholdingPattern->quarter_id == 2)
              <a href="{{ config('app.backend_url') }}/uploads/shareholding-patterns/{{ $shareholdingPattern->file }}" target="_blank"><button class="quarterrr accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                {{ $shareholdingPattern->quarter->name }}
              </button></a> 
              @break
            @endif
          @endforeach
        </h2>
      </div>
    </div>
    @endif

    @if ($year->shareholdingPatterns->where('quarter_id', 3)->count() > 0)
    <div class="col-lg-6 mb-4">
      <div class="accordion-item gfgffff">
        <h2 class="accordion-header" id="headingThree">
          @foreach ($year->shareholdingPatterns as $shareholdingPattern)
            @if ($shareholdingPattern->quarter_id == 3)
              <a href="{{ config('app.backend_url') }}/uploads/shareholding-patterns/{{ $shareholdingPattern->file }}" target="_blank"><button class="quarterrr accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                {{ $shareholdingPattern->quarter->name }}
              </button></a> 
              @break
            @endif
          @endforeach
        </h2>
      </div>
    </div>
    @endif

    @if ($year->shareholdingPatterns->where('quarter_id', 4)->count() > 0)
    <div class="col-lg-6 mb-4">
      <div class="accordion-item gfgffff">
        <h2 class="accordion-header" id="headingFour">
          @foreach ($year->shareholdingPatterns as $shareholdingPattern)
            @if ($shareholdingPattern->quarter_id == 4)
              <a href="{{ config('app.backend_url') }}/uploads/shareholding-patterns/{{ $shareholdingPattern->file }}" target="_blank"><button class="quarterrr accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                {{ $shareholdingPattern->quarter->name }}
              </button></a> 
              @break
            @endif
          @endforeach
        </h2>
      </div>
    </div>
    @endif
  </div>
  </div>
@endforeach

  


</div>

</div>
</div>






<!-- report table end -->
@endsection