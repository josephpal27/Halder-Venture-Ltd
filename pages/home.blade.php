@extends('layouts.app')

@section('title', 'Halder Venture Limited | Emerging Leaders in Indian Rice Industry and Related Agro Products')
@section('description', 'As a part of the renowned Halder Group, Halder Venture Limited is an emerging leader in Indian rice export, offering a diverse range of quality rice products, edible oils and related agro products.')
@section('keywords', 'Rice exporter in India, oil producers in india, oil factory in india, parboiled rice export, halder venture limited, Halder venture products, edible oil manufacturers in west bengal, oil manufacturing company in india, Indian rice industry, Agro Products')
@section('google-site-verification', '9_VJAkv0rxWNnn5-dG9LbSz_LswrarK-uqKA02rjlLg')

@section('content')
    
  <!-- banner -->
  <div class="home-bans owl-carousel owl-theme">    
    
    <div class="item">
      <div class="home-imgg">
          <img src="assets/img/home-page-banner-1.webp" alt="">
        </div>          
    </div>

    <div class="item">
      <div class="home-imgg">
          <img src="assets/img/home-page-banner-2.webp" alt="">
        </div>          
    </div>

    <div class="item">
      <div class="home-imgg">
          <img src="assets/img/home-page-banner-3.webp" alt="">
        </div>          
    </div>
   
</div>  





 <!-- banner -->




  <!-- who we are start -->



  <div class="who-we py-lg-5 py-md-0 position-relative overflow-hidden">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6 mb-4">
          <div class="who-img" data-aos="fade-right" data-aos-duration="3000">
            <img src="assets/img/img-1.webp" alt="Halder Venture Limited Logo Design">
          </div>
        </div>

        <div class="col-lg-6 mb-4">
          <div class="who-content" data-aos="fade-left" data-aos-duration="3000">
            <h3>WHO WE ARE</h3>
            <p class="pt-2"><b>Halder Venture Limited</b>, a leading rice and edible oil manufacturing company with a legacy dating back to 1924, continues its mission of <b>Growing Goodness</b> in communities worldwide. Started with <b>B.C. Halder Rice and Oil Mills</b>, founded by <b>Mr Brindaban Chandra Halder</b>, the company has built a century-long heritage of excellence, responsibility, and innovation. <br> <br> Driven by a vision to nurture humanity and build a well-nourished society, Halder Venture Limited is committed to making <b>nutritious food accessible to all</b>. Headquartered in <b>West Bengal, India</b>, the company has expanded its global footprint, operating in countries including <b>Singapore, Benin, Togo, Ghana, Cameroon, Ivory Coast, Russia, and Bangladesh</b>. <br> <br> With a diverse portfolio of <b>rice and edible oil products</b>, Halder Venture Limited is dedicated to promoting <b>sustainability and social responsibility</b>, encouraging healthier lifestyles while ensuring the highest industry standards.</p>
            <a href="{{ route('about') }}"><button type="submit" class="mt-4 hal-button btn btn-success">READ MORE <i
                  class="fa-solid fa-right-long"></i></button></a>
            <div class="l-img-h">
              <img class="position-absolute" src="assets/img/img-2.webp" alt="">
            </div>
          </div>
        </div>

      </div>

      <div class="manage">

        <div class="row align-items-center">



          <div class="col-lg-7 mb-4">
            <div class="who-content-2" data-aos="fade-right" data-aos-duration="3000">
              <h3>MANAGING DIRECTOR'S DESK</h3>
              <p style="color: #0b3d4c;font-weight: 500;" class="pt-2">
                Halder Group, incorporated in 1924 by a visionary Mr. Madan Mohan Halder, is committed to the primary mission of manufacturing and marketing high quality Agro products. While fulfilling this objective, Halder Venture Limited has established itself as a market leader in both domestic and international markets.
              </p>
              <p>The enterprise owes its present grandeur to its capable management and dedicated workforce. Through keen understanding of markets, the export business and strategic business development, Halder Venture Limited has been able to create its luminous presence in the agro industry.</p>

              <!-- <button type="submit" class="mt-4 hal-button btn btn-success">READ MORE <i
                  class="fa-solid fa-right-long"></i></button> -->
              <div class="l-img-h">
                <img class=" position-absolute" src="assets/img/img-2.webp" alt="">
              </div>
            </div>
          </div>


          <div class="col-lg-5 mb-4">
            <div class="team-img" data-aos="fade-left" data-aos-duration="3000">
              <img src="assets/img/MD Png.webp" alt="Halder Venture Limited MD">
            </div>
          </div>


        </div>

      </div>


    </div>
  </div>


  <!-- who we are end -->




  <!-- what offering start -->



  <div class="offering py-lg-5 py-md-0 text-center position-relative">

    <div class="image-hll1">
      <img class="position-absolute" src="assets/img/img-8.webp" alt="">
    </div>

    <div class="container pt-lg-5 pt-md-0">

      <h3 class="pt-lg-5 pt-md-0 position-relative offr" data-aos="fade-right" data-aos-duration="3000">WHAT WE ARE <span
          style="color: #29b77b;">OFFERING</span></h3>

      <div class="bl-1">
        <img class="position-absolute" src="assets/img/img-12.webp" alt="">
      </div>

      <div class="offer-imgee owl-carousel owl-theme pt-5">
        <div class="item hghghg">
          <div class="card">
            <img src="assets/img/New Soyabean Oil.webp" class="card-img-top w-100" alt="Halder Venture Limited soybean oil" />
            <div class="iuuhsedrfsr position-absolute">
                <h2>Soyabean Oil</h2>
                
               <a href="{{ route('products.edibleOil') }}"><button type="button" class="oilbtn btn btn-secondary">View product</button></a> 
            </div>
        </div>
        </div>

        <div class="item hghghg">
          <div class="card">
            <img src="assets/img/New Sunflower Oil.webp" class="card-img-top w-100" alt="Halder Venture Limited sunflower oil" />

            <div class="iuuhsedrfsr position-absolute">
                <h2>Sunflower Oil</h2>
                
               <a href="{{ route('products.edibleOil') }}"><button type="button" class="oilbtn btn btn-secondary">View product</button></a> 
            </div>
        </div>
       </div>

        <div class="item hghghg">
          <div class="card">
            <img src="assets/img/New Mustard Oil.webp" class="card-img-top w-100" alt="Halder Venture Limited mustard oil" />

            <div class="iuuhsedrfsr position-absolute">
                <h2>Mustard Oil</h2>
                
               <a href="{{ route('products.edibleOil') }}"><button type="button" class="oilbtn btn btn-secondary">View product</button></a> 
            </div>
        </div>
       </div>

       <div class="item hghghg">
        <div class="card">
          <img src="assets/img/New Palmolein Oil.webp" class="card-img-top w-100" alt="Halder Venture Limited palmolein oil" />

          <div class="iuuhsedrfsr position-absolute">
              <h2>Palmolein Oil</h2>
              
             <a href="{{ route('products.edibleOil') }}"><button type="button" class="oilbtn btn btn-secondary">View product</button></a> 
          </div>
      </div>
     </div>

     <div class="item hghghg">
      <div class="card">
        <img src="assets/img/New Rice Bran Oil.webp" class="card-img-top w-100" alt="Halder Venture Limited new rice bran oil" />

        <div class="iuuhsedrfsr position-absolute">
            <h2>Rice Bran Oil</h2>
            
           <a href="{{ route('products.edibleOil') }}"><button type="button" class="oilbtn btn btn-secondary">View product</button></a> 
        </div>
    </div>
   </div>

   <div class="item hghghg">
    <div class="card">
      <img src="assets/img/New De Oiled Rice Bran (DORB).webp" class="card-img-top w-100" alt="Halder Venture Limited new de oiled rice bran" />

      <div class="iuuhsedrfsr position-absolute">
          <h2>De Oiled Rice Bran</h2>
          
         <a href="{{ route('products.index') }}"><button type="button" class="oilbtn btn btn-secondary">View product</button></a> 
      </div>
  </div>
 </div>

 <div class="item hghghg">
  <div class="card">
    <img src="assets/img/indianparbboiled.webp" class="card-img-top w-100" alt="Halder Venture Limited indian parboiled rice" />

    <div class="iuuhsedrfsr position-absolute">
        <h2>Indian Parboiled Rice</h2>
        
       <a href="{{ route('products.indianParboiledRice') }}"><button type="button" class="oilbtn btn btn-secondary">View product</button></a> 
    </div>
</div>
</div>

<div class="item hghghg">
  <div class="card">
    <img src="assets/img/indianwhite.webp" class="card-img-top w-100" alt="Halder Venture Limited indian white rice" />

    <div class="iuuhsedrfsr position-absolute">
        <h2>Indian White Rice</h2>
        
       <a href="{{ route('products.indianWhiteRice') }}"><button type="button" class="oilbtn btn btn-secondary">View product</button></a> 
    </div>
</div>
</div>


<div class="item hghghg">
  <div class="card">
    <img src="assets/img/vietnameserice.webp" class="card-img-top w-100" alt="Halder Venture Limited vietnamese rice" />

    <div class="iuuhsedrfsr position-absolute">
        <h2>Vietnamese Rice</h2>
        
       <a href="{{ route('products.vietnameseRice') }}"><button type="button" class="oilbtn btn btn-secondary">View product</button></a> 
    </div>
</div>
</div>

       
</div>

      <div class="bl-2">
        <img class="position-absolute" src="assets/img/img-12.webp" alt="">
      </div>

    </div>

    <div class="image-hl-2">
      <img class="position-absolute" src="assets/img/img-9.webp" alt="">
    </div>

  </div>



  <!-- what offering end -->




  <!-- img part start -->



  <div class="img-part mt-5">

    <div class="container">
      <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="imgpp" data-aos="zoom-in" data-aos-duration="3000">
          <iframe width="100%" height="350" src="https://www.youtube.com/embed/AaUFCuK_3bA?si=rGIPz5xv9ZBGS1IK"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </div>
      </div>
    </div>

  </div>


  <!-- img part end -->





  <!-- exporting countries start -->




  <div class="exporting-countries pb-5 text-center">

    <h3 class="hh" data-aos="zoom-in" data-aos-duration="3000"><a href="https://halderventure.in/presence" style="text-decoration: none; color: #fff;">OUR FOOTPRINTS</a></h3>

    <div class="container py-5">
      <div class="owl-carousel exporting-country owl-theme">

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-1.webp" alt="Halder Venture Limited Niger">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-2.webp" alt="Halder Venture Limited Vietnam">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-3.webp" alt="Halder Venture Limited Bangladesh">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-4.webp" alt="Halder Venture Limited Myanmar">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-5.webp" alt="Halder Venture Limited Sierra Leone">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-6.webp" alt="Halder Venture Limited Togo">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-7.webp" alt="Halder Venture Limited Benin">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-8.webp" alt="Halder Venture Limited Nepal">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-9.webp" alt="Halder Venture Limited China">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-10.webp" alt="Halder Venture Limited The Gambia">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-12.webp" alt="Halder Venture Limited Argentina">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
              <a href="https://halderventure.in/presence">
                <img src="assets/img/country-img13-removebg-preview.webp" alt="Halder Venture Limited Malaysia">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-14.webp" alt="Halder Venture Limited Russia">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-15.webp" alt="Halder Venture Limited Cameroon">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-16.webp" alt="Halder Venture Limited Ukraine">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-17.webp" alt="Halder Venture Limited Indonesia">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-18.webp" alt="Halder Venture Limited Ivory coast">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-19.webp" alt="Halder Venture Limited Mali">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-20.webp" alt="Halder Venture Limited Ghana">
            </a>
          </div>
        </div>

        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-21.webp" alt="Halder Venture Limited India">
            </a>
          </div>
        </div>
        
        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-22.webp" alt="Halder Venture Limited Djibouti">
            </a>
          </div>
        </div>
        
        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-23.webp" alt="Halder Venture Limited Singapore">
            </a>
          </div>
        </div>
        
        <div class="item">
          <div class="country-img">
            <a href="https://halderventure.in/presence">
                <img src="assets/img/country-24.webp" alt="Halder Venture Limited Brazil">
            </a>
          </div>
        </div>



      </div>
    </div>

  </div>




  <!-- exporting countries end -->





  <!-- our latest news start -->



  <div class="latest-news py-5 text-center" data-aos="zoom-in" data-aos-duration="3000">
    <h3>Latest <span style="color: #0b3d4c;">Blogs</span></h3>

    <div class="container">

      <div class="row justify-content-center mt-4">

        <div class="col-lg-10">

          <div class="latest-slide owl-carousel owl-theme">
            
            <div class="latest mx-2">
              <div class="row align-items-center">
                <div class="col-lg-4">
                  <div class="latest-img">
                    <img src="assets/img/sustainability-blog.png" alt="image">
                  </div>
                </div>

                <div class="col-lg-8 pt-5">
                  <div class="latest-content">
                    <h3>Emerging through ethanol from broken rice, future of green energy harnesses.</h3>
                    <p class="pt-3">In recent years, the world has been achieving a remarkable transformation in energy sourcing to sustainability. One of the best prospects of biofuels as an alternative to traditional fossil fuels is Ethanol from broken rice, since it helps both in the reduction of agricultural waste and in using it as fuel and having it in an environmentally friendly alternative for the same.</p>

                    <a href="https://halderventure.in/blogs/31" target="_blank">
                      <div class="slide-bt"><button type="submit" class="mt-4  btn btn-transperent">Read More</button>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="latest mx-2">
              <div class="row align-items-center">
                <div class="col-lg-4">
                  <div class="latest-img">
                    <img src="assets/img/edible-oil-blog.png" alt="image">
                  </div>
                </div>

                <div class="col-lg-8 pt-5">
                  <div class="latest-content">
                    <h3>The advantage of cold pressed oils redefining healthy living.</h3>
                    <p class="pt-3">In this fast-paced world, the growing need for healthy lifestyle options has placed cold-pressed oils under the spotlight. Nutrient-rich and sustainable, these oils have won the hearts of consumers seeking wellness and a conscience for environmental stewardship.</p>

                    <a href="https://halderventure.in/blogs/30" target="_blank">
                      <div class="slide-bt"><button type="submit" class="mt-4  btn btn-transperent">Read More</button>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>  
            
            
            <div class="latest mx-2">
              <div class="row align-items-center">
                <div class="col-lg-4">
                  <div class="latest-img">
                    <img src="assets/img/edible-oil-18-02.png" alt="">
                  </div>
                </div>

                <div class="col-lg-8 pt-5">
                  <div class="latest-content">
                    <h3>Sustainability in agriculture : the role of rice bran oil production in promoting eco-friendly practices</h3>
                    <p class="pt-3">Sustainability has emerged as the basic principle of modern agriculture, forcing industries to innovate and adopt methods that balance productivity with ecological accountability.</p>

                    <a href="https://halderventure.in/blogs/29" target="_blank">
                      <div class="slide-bt"><button type="submit" class="mt-4  btn btn-transperent">Read More</button>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
             

            <div class="latest mx-2">
              <div class="row align-items-center">

                <div class="col-lg-4">
                  <div class="latest-img">
                    <img src="assets/img/blog3-27-12.png" alt="">
                  </div>
                </div>

                <div class="col-lg-8 pt-5">
                  <div class="latest-content">
                    <h3>The connection between soil health and rice quality in India</h3>
                    <p class="pt-3">As a leading rice producer, India’s soil health plays a crucial role in determining rice -quality and yields. Soil health plays a crucial role in supporting plant growth, nutrient uptake, and overall rice quality.</p>

                    <a href="https://halderventure.in/blogs/22" target="_blank">
                      <div class="slide-bt"><button type="submit" class="mt-4  btn btn-transperent">Read More</button>
                      </div>
                    </a>

                  </div>
                </div>

              </div>
            </div>

            

          </div>

        </div>

      </div>

    </div>

  </div>


  <!-- our latest news end -->
@endsection