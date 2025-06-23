@extends('layouts.app')

@section('title', 'Newsletter | Halder Venture Limited - Latest Updates & Insights')


@section('content')


<!-- banner start -->


<div class="halder-ban" data-aos="fade-up" data-aos-duration="3000">

    <div class="col-lg-12">
      <div class="ban-h">
        <img src="{{ asset('assets/img/Newsletter Page WEB.webp') }}" alt="banner" loading="lazy">
      </div>
    </div>
  
  </div>
  
  
  <!-- banner end -->


  <!-- Content Start -->

  <section class="newsletter-content container-lg">
    <div class="newsletter-head">
        <h1 style="color: #0b3d4c !important;" data-aos="fade-up" data-aos-duration="2000">NEWSLETTERS</h1>
        <div class="line" data-aos="fade-up" data-aos-duration="2000"></div>
    </div>

    <div class="newsletter-dropdown" data-aos="fade-up" data-aos-duration="2500">
        <button>2024 - 25 <i class="fa-solid fa-caret-down" style="margin-left: 3px;"></i></button>
        <ul class="hide">
          <a href=""><li>2024 - 25</li></a>
        </ul>
    </div>

    <div class="content-box-row">
        <!-- Box 1 -->
        <div class="content-box" data-aos="fade" data-aos-duration="2000">
            <a href="{{ asset('assets/newletter-1.pdf') }}" target="_blank">
                <img src="{{ asset('assets/img/newsletter-box-1.png') }}" alt="Image">
            </a>
        </div>
        <!-- Box 2 -->
        <div class="content-box" data-aos="fade" data-aos-duration="2000">
            <a href="{{ asset('assets/newletter-2.pdf') }}" target="_blank">
                <img src="{{ asset('assets/img/newsletter-box-2.png') }}" alt="Image">
            </a>
        </div>
        <!-- Box 3 -->
        <div class="content-box" data-aos="fade" data-aos-duration="2000">
            <a href="{{ asset('assets/newletter-3.pdf') }}" target="_blank">
                <img src="{{ asset('assets/img/newsletter-box-3.jpg') }}" alt="Image">
            </a>
        </div>
        <!-- Box 4 -->
        <div class="content-box" data-aos="fade" data-aos-duration="2000">
            <a href="{{ asset('assets/newletter-4.pdf') }}" target="_blank">
                <img src="{{ asset('assets/img/newsletter-box-4.jpg') }}" alt="Image">
            </a>
        </div>
        <!-- Box 5 -->
        <div class="content-box" data-aos="fade" data-aos-duration="2000">
            <a href="{{ asset('assets/newsletter-5.pdf') }}" target="_blank">
                <img src="{{ asset('assets/img/newsletter-box-5.jpg') }}" alt="Image">
            </a>
        </div>
    </div>
  </section>
  <!-- Content End -->



@endsection
