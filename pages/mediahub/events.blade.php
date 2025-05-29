@extends('layouts.app')

@section('title', 'Events | Halder Venture Limited - Upcoming Engagements & Industry Participation')
@section('description', 'Stay updated on Halder Venture Limited’s events, including trade shows, exhibitions, and industry conferences. Join us as we showcase our premium Indian rice and edible oils, reflecting our commitment to excellence and innovation in the agro industry.')
@section('keywords', 'Rice exporter in India, oil producers in india, oil factory in india, parboiled rice export, halder venture limited, Halder venture products, edible oil manufacturers in west bengal, oil manufacturing company in india, Indian rice industry, Agro Products')

@section('content')


<!-- banner start -->


<div class="halder-ban" data-aos="fade-up" data-aos-duration="3000">

    <div class="col-lg-12">
      <div class="ban-h">
        <img src="{{ asset('assets/img/event-banner.jpg') }}" alt="banner" loading="lazy">
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
        <button><span>2025</span><i class="fa-solid fa-caret-down" style="margin-left: 7px;"></i></button>
        <ul class="hide">
          <li id="li-1">2025</li>
          <li id="li-2">2024</li>
          <li id="li-3">2023</li>
        </ul>
    </div>


    <div class="events-slider" data-aos="fade" data-aos-duration="3000" id="events-slider-1">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img/event-25-gulfood-2025.webp') }}" class="d-block mx-auto" alt="gulfood 2025">
                <h4>Gulfood 2025</h4>
                <p>Halder Venture Limited makes its return to Dubai World Trade Centre for its second-time showcase in one of the largest food and beverage exhibitions.</p>
                <div class="colon" id="colon-left">
                  <img src="{{ asset('assets/img/colon-1.png') }}" alt="colon">
                </div>
                <div class="colon" id="colon-right">
                  <img src="{{ asset('assets/img/colon-2.png') }}" alt="colon">
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/event-25-womens-day.webp') }}" class="d-block mx-auto" alt="women's day">
                <h4>Women's Day</h4>
                <p>Celebrating the incredible women of our company with heartfelt appreciation and thoughtful gifts at our head office.</p>
                <div class="colon" id="colon-left">
                  <img src="{{ asset('assets/img/colon-1.png') }}" alt="colon">
                </div>
                <div class="colon" id="colon-right">
                  <img src="{{ asset('assets/img/colon-2.png') }}" alt="colon">
                </div>
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

    <div class="events-slider" style="display: none;" id="events-slider-2">
        <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img/event-25-environment-day.webp') }}" class="d-block mx-auto" alt="environment day">
                <h4>Environment Day</h4>
                <p>Employees receive saplings to care for and track, fostering a year-long commitment to sustainability.</p>
                <div class="colon" id="colon-left">
                  <img src="{{ asset('assets/img/colon-1.png') }}" alt="colon">
                </div>
                <div class="colon" id="colon-right">
                  <img src="{{ asset('assets/img/colon-2.png') }}" alt="colon">
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/event-25-independence-day.webp') }}" class="d-block mx-auto" alt="independence day">
                <h4>Independence Day</h4>
                <p>Independence Day celebrations across our manufacturing units and head office.</p>
                <div class="colon" id="colon-left">
                  <img src="{{ asset('assets/img/colon-1.png') }}" alt="colon">
                </div>
                <div class="colon" id="colon-right">
                  <img src="{{ asset('assets/img/colon-2.png') }}" alt="colon">
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/event-25-centenary-celebrations.webp') }}" class="d-block mx-auto" alt="centenary celebrations">
                <h4>Centenary Celebrations</h4>
                <p>Marking 100 years of shared success, we celebrated the dedication of our people, employees, and partners who made it possible.</p>
                <div class="colon" id="colon-left">
                  <img src="{{ asset('assets/img/colon-1.png') }}" alt="colon">
                </div>
                <div class="colon" id="colon-right">
                  <img src="{{ asset('assets/img/colon-2.png') }}" alt="colon">
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/event-25-christmas.webp') }}" class="d-block mx-auto" alt="christmas">
                <h4>Christmas</h4>
                <p>We celebrated Christmas at the head office with festive activities, gifts, and snacks.</p>
                <div class="colon" id="colon-left">
                  <img src="{{ asset('assets/img/colon-1.png') }}" alt="colon">
                </div>
                <div class="colon" id="colon-right">
                  <img src="{{ asset('assets/img/colon-2.png') }}" alt="colon">
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/event-25-soccer-tournament.webp') }}" class="d-block mx-auto" alt="soccer tournament">
                <h4>Soccer tournament</h4>
                <p>Collaborated with Ahmadpur Football Association club for regional district-level soccer tournament in honour of our Late leader, Madan Mohan Halder, promoting sports.</p>
                <div class="colon" id="colon-left">
                  <img src="{{ asset('assets/img/colon-1.png') }}" alt="colon">
                </div>
                <div class="colon" id="colon-right">
                  <img src="{{ asset('assets/img/colon-2.png') }}" alt="colon">
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/event-24-1.jpg') }}" class="d-block mx-auto" alt="Poila Baishak">
                <h4>Poila Baishak</h4>
                <p>Employees come together to celebrate Bengali New Year.</p>
                <div class="colon" id="colon-left">
                  <img src="{{ asset('assets/img/colon-1.png') }}" alt="colon">
                </div>
                <div class="colon" id="colon-right">
                  <img src="{{ asset('assets/img/colon-2.png') }}" alt="colon">
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/event-24-2.jpg') }}" class="d-block mx-auto" alt="Gulfood 2024">
                <h4>Gulfood 2024</h4>
                <p>Halder Venture Limited makes its debut at Dubai’s largest food and beverage exhibitions at Dubai World Trade Centre.</p>
                <div class="colon" id="colon-left">
                  <img src="{{ asset('assets/img/colon-1.png') }}" alt="colon">
                </div>
                <div class="colon" id="colon-right">
                  <img src="{{ asset('assets/img/colon-2.png') }}" alt="colon">
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/event-24-4.jpg') }}" class="d-block mx-auto" alt="Townhall">
                <h4>Townhall</h4>
                <p>Virtual Townhall on 10th May 2024, connecting employees from our headquarters, factories, and international locations. The management outlined our vision for the year as we celebrated 100 years of our existence, fostering a sense of camaraderie.</p>
                <div class="colon" id="colon-left">
                  <img src="{{ asset('assets/img/colon-1.png') }}" alt="colon">
                </div>
                <div class="colon" id="colon-right">
                  <img src="{{ asset('assets/img/colon-2.png') }}" alt="colon">
                </div>
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

    <div class="events-slider" style="display: none;" id="events-slider-3">
        <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img/event-24-3.jpg') }}" class="d-block mx-auto" alt="World Food Moscow 2023">
                <h4>World Food Moscow 2023</h4>
                <p></p>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/event-24-5.jpg') }}" class="d-block mx-auto" alt="Humsathi">
                <h4>Humsathi</h4>
                <p></p>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
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
  let li3 = document.querySelector('.events-dropdown #li-3');
  let slide1 = document.getElementById('events-slider-1');
  let slide2 = document.getElementById('events-slider-2');
  let slide3 = document.getElementById('events-slider-3');

  li3.addEventListener('click', () => {
      slide1.style.display = 'none';
      slide2.style.display = 'none';
      slide3.style.display = '';
  })
  li2.addEventListener('click', () => {
      slide1.style.display = 'none';
      slide2.style.display = '';
      slide3.style.display = 'none';
  })
  li1.addEventListener('click', () => {
      slide1.style.display = '';
      slide2.style.display = 'none';
      slide3.style.display = 'none';
  })

  </script>




 @endsection