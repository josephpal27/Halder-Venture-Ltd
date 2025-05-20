@extends('layouts.app')

@section('title', 'Events | Halder Venture Limited - Upcoming Engagements & Industry Participation')
@section('description', 'Stay updated on Halder Venture Limited’s events, including trade shows, exhibitions, and industry conferences. Join us as we showcase our premium Indian rice and edible oils, reflecting our commitment to excellence and innovation in the agro industry.')
@section('keywords', 'Rice exporter in India, oil producers in india, oil factory in india, parboiled rice export, halder venture limited, Halder venture products, edible oil manufacturers in west bengal, oil manufacturing company in india, Indian rice industry, Agro Products')

@section('content')


<!-- banner start -->


<div class="halder-ban" data-aos="fade-up" data-aos-duration="3000">

    <div class="col-lg-12">
      <div class="ban-h">
        <img src="{{ asset('assets/img/event-banner-2.webp') }}" alt="banner" loading="lazy">
      </div>
    </div>
  
  </div>
  
  
  <!-- banner end -->


  <!-- Content Start -->

  <section class="events-content container-lg">
    <div class="events-head">
        <h1 style="color: #0b3d4c !important;" data-aos="fade-up" data-aos-duration="2000">EVENTS</h1>
        <div class="line" data-aos="fade-up" data-aos-duration="2000"></div>
    </div>

    <div class="events-dropdown" data-aos="fade-up" data-aos-duration="2500">
        <button><span>2024</span><i class="fa-solid fa-caret-down" style="margin-left: 7px;"></i></button>
        <ul class="hide">
          <li id="li-1">2024</li>
          <li id="li-2">2023</li>
        </ul>
    </div>


    <div class="events-slider" id="events-slider-1" data-aos="fade" data-aos-duration="3000">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img/event-24-1.jpg') }}" class="d-block mx-auto" alt="Slide 1" style="border-radius: 10px;">
                <!-- <div class="carousel-caption d-none d-md-block">
                  <h4>Poila Baishak</h4>
                </div> -->
                <h4>Poila Baishak</h4>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/event-24-2.jpg') }}" class="d-block mx-auto" alt="Slide 2" style="border-radius: 10px;">
                <h4>Gulfood 2024</h4>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/event-24-4.jpg') }}" class="d-block mx-auto" alt="Slide 2" style="border-radius: 10px;">
                <h4>Townhall</h4>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <div class="events-slider" id="events-slider-2" style="display: none;">
        <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img/event-24-3.jpg') }}" class="d-block mx-auto" alt="Slide 1" style="border-radius: 10px;">
                <h4>World Food Moscow 2023</h4>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/event-24-5.jpg') }}" class="d-block mx-auto" alt="Slide 2" style="border-radius: 10px;">
                <h4>Humsathi</h4>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

   
  </section>
  <!-- Content End -->
  
  
  <script>
  let li1 = document.querySelector('.events-dropdown #li-1');
let li2 = document.querySelector('.events-dropdown #li-2');
let slide1 = document.getElementById('events-slider-1');
let slide2 = document.getElementById('events-slider-2');

li2.addEventListener('click', () => {
    slide1.style.display = 'none';
    slide2.style.display = '';
})
li1.addEventListener('click', () => {
    slide1.style.display = '';
    slide2.style.display = 'none';
})

  </script>




 @endsection