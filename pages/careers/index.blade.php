@extends('layouts.app')

@section('title', 'Halder Venture Limited Careers | Best Rice Exporters & Edible Oil Manufacturers in West Bengal & India')
@section('description', 'Be part of excellence! Join Halder Venture Limited, a leading rice exporter and edible oil manufacturer in West Bengal and India. Explore rewarding careers and contribute to our success on the agro-products and industry line.')
@section('keywords', 'Rice exporter in India, oil producers in india, oil factory in india, parboiled rice export, halder venture limited, Halder venture products, edible oil manufacturers in west bengal, oil manufacturing company in india, Indian rice industry, Agro Products')

@section('content')
    <!-- banner start -->


  <div class="halder-ban" data-aos="fade-up" data-aos-duration="3000">

<div class="col-lg-12">
  <div class="product-ban text-center">
    <img src="assets/img/Carrier-Page-banner.webp" alt="" loading="lazy">
    <!-- <h2>POLICY TO DETERMINE MATERIAL SUBSIDIARIES</h2> -->
  </div>
</div>

</div>


<!-- banner end -->



<div class="careerpge text-center py-5">
<div class="container">
  <h1>CAREERS</h1>
  <hr style="background-color: #a9e2ca; opacity: 2; width: 8rem;margin: auto;padding-bottom: 5px;">

  <div class="row">

    <div class="col-lg-2"></div>

    <div class="col-lg-8">

      <div class="career-form pt-5">
        <!-- Load icon library -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
       <!-- The form -->
       <form class="example" action="action_page.php">

        <div class="in-career position-relative">

       <input type="text" placeholder="Search for jobs below" name="search">
       <i class="fa-solid fa-magnifying-glass"></i>

      </div>

       </form>
  
      </div>
     </div>

    <div class="col-lg-2"></div>

    </div>

    @foreach ($careers as $career)
      <div class="row justify-content-center pt-5">

        <div class="col-lg-9">
          <div class="career-content pt-5">
          
            <div class="row justify-content-center">
              <div class="col-lg-7 mb-3">
                <div class="hgfduyt">
                <h6>{{ strtoupper($career->designation) }}</h6>
                <P class="pt-2 mb-2">Experience : {{ $career->experience }}</P>
                <p>Location: {{ $career->location }}</p>
              </div>
            </div>

            <div class="col-lg-5 mb-3 pt-4">
            <a href="{{ route('careers.show', $career->id) }}"><button type="button" class="crerters btn btn-primary">View Details</button></a> 
            </div>
          </div>
          
        </div>
        </div>

      </div>
    @endforeach



</div>
</div>
@endsection