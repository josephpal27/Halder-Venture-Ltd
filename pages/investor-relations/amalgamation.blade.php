@extends('layouts.app')

@section('title', 'Amalgamation | Halder Venture Limited - Strategic Mergers & Expansions')
@section('description', 'Learn about Halder Venture Limited amalgamation initiatives focused on strategic growth and expansion in the agro industry. Our mergers strengthen our presence in Indian rice and edible oil markets, enhancing product quality and market reach.')
@section('keywords', 'Rice exporter in India, oil producers in india, oil factory in india, parboiled rice export, halder venture limited, Halder venture products, edible oil manufacturers in west bengal, oil manufacturing company in india, Indian rice industry, Agro Products')

@section('content')



<div class="halder-ban" data-aos="fade-up" data-aos-duration="3000">

  <div class="col-lg-12">
    <div class="ban-h">
      <img src="assets/img/investors-banner.webp" alt="" loading="lazy">
    </div>
  </div>

</div>


<!-- banner end -->






<!-- report table start -->






<div class="report-table py-5">

  <h3 class="text-center">MERGER DOCUMENTS</h3>


  <section class="menu-ban py-5">

 <ul
   class="nav nav-tabs m-auto st-pr-list nav-fill mb-3"
   id="ex1"
   role="tablist"
   style="margin-top: 55px; border: none; width: 90%; display: flex; justify-content: center;"
 >
   <li class="mb-arp mx-2 nav-item" role="presentation">
     
     <a
       class="liStudentCounselling nav-link mt-4 active"
       id="ex2-tab-1"
       data-bs-toggle="tab"
       href="#ex2-tabs-1"
       role="tab"
       aria-controls="ex2-tabs-1"
       aria-selected="true"
       >Annual Report</a
     >
   </li>

   <li class="resp mx-2 liParentCounselling" role="presentation">
     
     <a
       class="liStudentCounselling nav-link mt-4"
       id="ex2-tab-2"
       data-bs-toggle="tab"
       href="#ex2-tabs-2"
       role="tab"
       aria-controls="ex2-tabs-2"
       aria-selected="false"
       >Documents For Corporate Matter</a
     >
   </li>

   <li class="resp mx-2 liParentCounselling" role="presentation">
     
    <a
      class="liStudentCounselling nav-link mt-4"
      id="ex2-tab-3"
      data-bs-toggle="tab"
      href="#ex2-tabs-3"
      role="tab"
      aria-controls="ex2-tabs-3"
      aria-selected="false"
      >Secured Creditors' NOC</a
    >
  </li>

  <li class="resp mx-2 liParentCounselling" role="presentation">
     
    <a
      class="liStudentCounselling nav-link mt-4"
      id="ex2-tab-4"
      data-bs-toggle="tab"
      href="#ex2-tabs-4"
      role="tab"
      aria-controls="ex2-tabs-4"
      aria-selected="false"
      >Shareholding Pattern</a
    >
  </li>

  <li class="resp mx-2 liParentCounselling" role="presentation">
     
    <a
      class="liStudentCounselling nav-link mt-4"
      id="ex2-tab-5"
      data-bs-toggle="tab"
      href="#ex2-tabs-5"
      role="tab"
      aria-controls="ex2-tabs-5"
      aria-selected="false"
      >Statutory Auditors' Certificates</a
    >
  </li>

  <li class="resp mx-2 liParentCounselling" role="presentation">
     
    <a
      class="liStudentCounselling nav-link mt-4"
      id="ex2-tab-6"
      data-bs-toggle="tab"
      href="#ex2-tabs-6"
      role="tab"
      aria-controls="ex2-tabs-6"
      aria-selected="false"
      >Valuers' Certificates</a
    >
  </li>

  <li class="resp mx-2 liParentCounselling" role="presentation">
     
    <a
      class="liStudentCounselling nav-link mt-4"
      id="ex2-tab-7"
      data-bs-toggle="tab"
      href="#ex2-tabs-7"
      role="tab"
      aria-controls="ex2-tabs-7"
      aria-selected="false"
      >Resolution For Scheme</a
    >
  </li>

  <li class="resp mx-2 liParentCounselling" role="presentation">
     
    <a
      class="liStudentCounselling nav-link mt-4"
      id="ex2-tab-8"
      data-bs-toggle="tab"
      href="#ex2-tabs-8"
      role="tab"
      aria-controls="ex2-tabs-8"
      aria-selected="false"
      >Scheme Of Amalgamation</a
    >
  </li>

  <li class="resp mx-2 liParentCounselling" role="presentation">
     
    <a
      class="liStudentCounselling nav-link mt-4"
      id="ex2-tab-9"
      data-bs-toggle="tab"
      href="#ex2-tabs-9"
      role="tab"
      aria-controls="ex2-tabs-9"
      aria-selected="false"
      >NCLT Orders</a
    >
  </li>

  <li class="resp mx-2 liParentCounselling" role="presentation">
     
    <a
      class="liStudentCounselling nav-link mt-4"
      id="ex2-tab-10"
      data-bs-toggle="tab"
      href="#ex2-tabs-10"
      role="tab"
      aria-controls="ex2-tabs-10"
      aria-selected="false"
      >Voting Results For NCLT Convened</a
    >
  </li>


 

   
   
 </ul>

 <div class="tab-content" id="ex2-content">
 
  <div
     class="tab-pane fade show active"
     id="ex2-tabs-1"
     role="tabpanel"
     aria-labelledby="ex2-tab-1">   

    <div class="container py-5">
    
   <div class="accordion" id="accordionExample">
     <div class="accordion-item amal-box">
         <h2 class="accordion-header">
             <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                 aria-expanded="true" aria-controls="collapseOne">
               <span style="text-align: center; color: #1f476e; font-size: 20px; font-weight: 600;">Annual Report - HVL</span>  
             </button>
         </h2>
         <div id="collapseOne" class="menu-name accordion-collapse collapse" data-bs-parent="#accordionExample">
             <div class="accordion-body">
              
              <table class="table table-bordered mt-4">
                <thead>
                  <tr class="title-back">
                    <th></th>
                    <th>Title</th>
                    <th class="text-center">Download</th>
                  </tr>
                </thead>
                <tbody>
        
                @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 9)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      @if ($amalgamation->tag === 'Annual Report - HVL')
                        <tr class="back-an">
                          <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                          <td class="pt-4">{{ $amalgamation->title }}</td>
                          <td class="tbl-im">
                            <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                          </td>
                        </tr>
                      @endif
                      @endforeach
                    @endif
                  @endforeach
        
                
                </tbody>
              </table>
              
             </div>
         </div>
     </div>

     <div class="accordion-item amal-box">
         <h2 class="accordion-header">
             <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse"
                 data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <span style="text-align: center; color: #1f476e; font-size: 20px;font-weight: 600;">Annual Report - JDM</span> 
             </button>
         </h2>
         <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
           <div class="accordion-body">
        

           
    <table class="table table-bordered mt-4">
      <thead>
        <tr class="title-back">
          <th></th>
          <th>Title</th>
          <th class="text-center">Download</th>
        </tr>
      </thead>
      <tbody>

              @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 9)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      @if ($amalgamation->tag === 'Annual Report - JDM')
                        <tr class="back-an">
                          <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                          <td class="pt-4">{{ $amalgamation->title }}</td>
                          <td class="tbl-im">
                            <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                          </td>
                        </tr>
                      @endif
                      @endforeach
                    @endif
                  @endforeach

      


      </tbody>
    </table>       
            
             
             </div>

         </div>
         </div>
     
     <div class="accordion-item amal-box">
         <h2 class="accordion-header">
             <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse"
                 data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
               <span style="text-align: center; color: #1f476e; font-size: 20px;font-weight: 600;"> Annual Report - PKAL</span> 
             </button>
         </h2>
         <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
           <div class="accordion-body">
            

           
            <table class="table table-bordered mt-4">
              <thead>
                <tr class="title-back">
                  <th></th>
                  <th>Title</th>
                  <th class="text-center">Download</th>
                </tr>
              </thead>
              <tbody>
      
              @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 9)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      @if ($amalgamation->tag === 'Annual Report - PKAL')
                        <tr class="back-an">
                          <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                          <td class="pt-4">{{ $amalgamation->title }}</td>
                          <td class="tbl-im">
                            <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                          </td>
                        </tr>
                      @endif
                      @endforeach
                    @endif
                  @endforeach
      
              
      
      
              </tbody>
            </table>
            

         </div>
         </div>
     </div>

     <div class="accordion-item amal-box">
       <h2 class="accordion-header">
           <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
               aria-expanded="true" aria-controls="collapseFour">
              <span style="text-align: center; color: #1f476e; font-size: 20px;font-weight: 600;">Annual Report - PKC</span> 
           </button>
       </h2>
       <div id="collapseFour" class="menu-name accordion-collapse collapse" data-bs-parent="#accordionExample">
           <div class="accordion-body">


    <table class="table table-bordered mt-4">
      <thead>
        <tr class="title-back">
          <th></th>
          <th>Title</th>
          <th class="text-center">Download</th>
        </tr>
      </thead>
      <tbody>

                @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 9)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      @if ($amalgamation->tag === 'Annual Report - PKC')
                        <tr class="back-an">
                          <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                          <td class="pt-4">{{ $amalgamation->title }}</td>
                          <td class="tbl-im">
                            <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                          </td>
                        </tr>
                      @endif
                      @endforeach
                    @endif
                  @endforeach

      


      </tbody>
    </table>
             
              
           </div>
       </div>
   </div>

 <div class="accordion-item amal-box">
   <h2 class="accordion-header">
       <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
           aria-expanded="true" aria-controls="collapseFive">
          <span style="text-align: center; color: #1f476e; font-size: 20px;font-weight: 600;">Annual Report - RAPL</span> 
       </button>
   </h2>
   <div id="collapseFive" class="menu-name accordion-collapse collapse" data-bs-parent="#accordionExample">
       <div class="accordion-body">
          

        <h3 style="text-align: center; color: #726f6f; font-size: 25px;"></h3>
        <table class="table table-bordered mt-4">
          <thead>
            <tr class="title-back">
              <th></th>
              <th>Title</th>
              <th class="text-center">Download</th>
            </tr>
          </thead>
          <tbody>
  
          @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 9)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      @if ($amalgamation->tag === 'Annual Report - RAPL')
                        <tr class="back-an">
                          <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                          <td class="pt-4">{{ $amalgamation->title }}</td>
                          <td class="tbl-im">
                            <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                          </td>
                        </tr>
                      @endif
                      @endforeach
                    @endif
                  @endforeach
  
          
  
  
          </tbody>
        </table>
  

           
           </div>
         </div>
   </div>

   <div class="accordion-item amal-box">
    <h2 class="accordion-header">
        <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
            aria-expanded="true" aria-controls="collapseSix">
           <span style="text-align: center; color: #1f476e; font-size: 20px;font-weight: 600;">Annual Report - SJRM</span> 
        </button>
    </h2>
    <div id="collapseSix" class="menu-name accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
           

          <table class="table table-bordered mt-4">
            <thead>
              <tr class="title-back">
                <th></th>
                <th>Title</th>
                <th class="text-center">Download</th>
              </tr>
            </thead>
            <tbody>
    
            @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 9)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      @if ($amalgamation->tag === 'Annual Report - SJRM')
                        <tr class="back-an">
                          <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                          <td class="pt-4">{{ $amalgamation->title }}</td>
                          <td class="tbl-im">
                            <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                          </td>
                        </tr>
                      @endif
                      @endforeach
                    @endif
                  @endforeach
            
    
    
            </tbody>
          </table>
   

            
            </div>
          </div>
    </div>



</div>


 </div>

</div>


 <div
 class="tab-pane fade"
 id="ex2-tabs-2"
 role="tabpanel"
 aria-labelledby="ex2-tab-2"
>


<div class="container py-5">

 <div class="accordion" id="accordionExample">


   <div class="accordion-item">
       <h2 class="accordion-header">
           <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
               aria-expanded="true" aria-controls="collapseOne">
               <table class="table table-bordered mt-4">
                <thead>
                  <tr class="title-back">
                    <th></th>
                    <th>Title</th>
                    <th class="text-center">Download</th>
                  </tr>
                </thead>
                <tbody>
        
                  @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 1)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      <tr class="back-an">
                        <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                        <td class="pt-4">{{ $amalgamation->title }}</td>
                        <td class="tbl-im">
                          <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                        </td>
                      </tr>
                      @endforeach
                    @endif
                  @endforeach
        
                </tbody>
              </table>
           </button>
       </h2>
 
   </div>




</div>

</div>

 
</div>


<div
 class="tab-pane fade"
 id="ex2-tabs-3"
 role="tabpanel"
 aria-labelledby="ex2-tabs-3"
>


<div class="container py-5">

 <div class="accordion" id="accordionExample">


   <div class="accordion-item">
       <h2 class="accordion-header">
           <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
               aria-expanded="true" aria-controls="collapseOne">
               <table class="table table-bordered mt-4">
                <thead>
                  <tr class="title-back">
                    <th></th>
                    <th>Title</th>
                    <th class="text-center">Download</th>
                  </tr>
                </thead>
                <tbody>
        
                @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 2)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      <tr class="back-an">
                        <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                        <td class="pt-4">{{ $amalgamation->title }}</td>
                        <td class="tbl-im">
                          <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                        </td>
                      </tr>
                      @endforeach
                    @endif
                  @endforeach
        
               
        
        
                </tbody>
              </table> 
           </button>
       </h2>
      
   </div>




</div>

</div>

 
</div>


<div
 class="tab-pane fade"
 id="ex2-tabs-4"
 role="tabpanel"
 aria-labelledby="ex2-tabs-4"
>


<div class="container py-5">

 <div class="accordion" id="accordionExample">


   <div class="accordion-item">
       <h2 class="accordion-header">
           <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
               aria-expanded="true" aria-controls="collapseOne">
               <table class="table table-bordered mt-4">
                <thead>
                  <tr class="title-back">
                    <th></th>
                    <th>Title</th>
                    <th class="text-center">Download</th>
                  </tr>
                </thead>
                <tbody>
        
                @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 10)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      @if ($amalgamation->tag === 'None')
                        <tr class="back-an">
                          <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                          <td class="pt-4">{{ $amalgamation->title }}</td>
                          <td class="tbl-im">
                            <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                          </td>
                        </tr>
                      @endif
                      @endforeach
                    @endif
                  @endforeach
        
        
                </tbody>
              </table> 
           </button>
       </h2>
      
   </div>

   <div class="accordion-item amal-box pt-5">
    <h2 class="accordion-header">
        <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
           <span style="text-align: center; color: #1f476e; font-size: 20px;font-weight: 600;">Post - With Pan</span> 
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
   

      
<table class="table table-bordered mt-4">
 <thead>
   <tr class="title-back">
     <th></th>
     <th>Title</th>
     <th class="text-center">Download</th>
   </tr>
 </thead>
 <tbody>

            @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 10)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      @if ($amalgamation->tag === 'Post - With Pan')
                        <tr class="back-an">
                          <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                          <td class="pt-4">{{ $amalgamation->title }}</td>
                          <td class="tbl-im">
                            <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                          </td>
                        </tr>
                      @endif
                      @endforeach
                    @endif
                  @endforeach
 


 </tbody>
</table>       
       
        
        </div>

    </div>
    </div>

    <div class="accordion-item amal-box">
      <h2 class="accordion-header">
          <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwoone" aria-expanded="false" aria-controls="collapseTwoone">
             <span style="text-align: center; color: #1f476e; font-size: 20px;font-weight: 600;">Pre - With Pan</span> 
          </button>
      </h2>
      <div id="collapseTwoone" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
     

        
 <table class="table table-bordered mt-4">
   <thead>
     <tr class="title-back">
       <th></th>
       <th>Title</th>
       <th class="text-center">Download</th>
     </tr>
   </thead>
   <tbody>

   @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 10)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      @if ($amalgamation->tag === 'Pre - With Pan')
                        <tr class="back-an">
                          <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                          <td class="pt-4">{{ $amalgamation->title }}</td>
                          <td class="tbl-im">
                            <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                          </td>
                        </tr>
                      @endif
                      @endforeach
                    @endif
                  @endforeach


   </tbody>
 </table>       
         
          
          </div>

      </div>
      </div>




</div>

</div>

 
</div>


<div
 class="tab-pane fade"
 id="ex2-tabs-5"
 role="tabpanel"
 aria-labelledby="ex2-tabs-5"
>


<div class="container py-5">

 <div class="accordion" id="accordionExample">


   <div class="accordion-item">
       <h2 class="accordion-header">
           <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
               aria-expanded="true" aria-controls="collapseOne">
               <table class="table table-bordered mt-4">
                <thead>
                  <tr class="title-back">
                    <th></th>
                    <th>Title</th>
                    <th class="text-center">Download</th>
                  </tr>
                </thead>
                <tbody>
        
                @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 3)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      <tr class="back-an">
                        <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                        <td class="pt-4">{{ $amalgamation->title }}</td>
                        <td class="tbl-im">
                          <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                        </td>
                      </tr>
                      @endforeach
                    @endif
                  @endforeach

                
        
        
                </tbody>
              </table>
           </button>
       </h2>
 
   </div>




</div>

</div>

 
</div>


<div
class="tab-pane fade"
id="ex2-tabs-6"
role="tabpanel"
aria-labelledby="ex2-tabs-6"
>


<div class="container py-5">

<div class="accordion" id="accordionExample">


 <div class="accordion-item">
     <h2 class="accordion-header">
         <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
             aria-expanded="true" aria-controls="collapseOne">
             <table class="table table-bordered mt-4">
              <thead>
                <tr class="title-back">
                  <th></th>
                  <th>Title</th>
                  <th class="text-center">Download</th>
                </tr>
              </thead>
              <tbody>
      
              @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 4)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      <tr class="back-an">
                        <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                        <td class="pt-4">{{ $amalgamation->title }}</td>
                        <td class="tbl-im">
                          <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                        </td>
                      </tr>
                      @endforeach
                    @endif
                  @endforeach
      
             
      
      
              </tbody>
            </table> 
         </button>
     </h2>
    
 </div>




</div>

</div>


</div>

<div
class="tab-pane fade"
id="ex2-tabs-7"
role="tabpanel"
aria-labelledby="ex2-tabs-7"
>


<div class="container py-5">

<div class="accordion" id="accordionExample">


 <div class="accordion-item">
     <h2 class="accordion-header">
         <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
             aria-expanded="true" aria-controls="collapseOne">
             <table class="table table-bordered mt-4">
              <thead>
                <tr class="title-back">
                  <th></th>
                  <th>Title</th>
                  <th class="text-center">Download</th>
                </tr>
              </thead>
              <tbody>
      
              @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 5)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      <tr class="back-an">
                        <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                        <td class="pt-4">{{ $amalgamation->title }}</td>
                        <td class="tbl-im">
                          <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                        </td>
                      </tr>
                      @endforeach
                    @endif
                  @endforeach
      
      
              </tbody>
            </table> 
         </button>
     </h2>
    
 </div>




</div>

</div>


</div>

<div
class="tab-pane fade"
id="ex2-tabs-8"
role="tabpanel"
aria-labelledby="ex2-tabs-8"
>


<div class="container py-5">

<div class="accordion" id="accordionExample">


 <div class="accordion-item">
     <h2 class="accordion-header">
         <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
             aria-expanded="true" aria-controls="collapseOne">
             <table class="table table-bordered mt-4">
              <thead>
                <tr class="title-back">
                  <th></th>
                  <th>Title</th>
                  <th class="text-center">Download</th>
                </tr>
              </thead>
              <tbody>
      
              @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 6)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      <tr class="back-an">
                        <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                        <td class="pt-4">{{ $amalgamation->title }}</td>
                        <td class="tbl-im">
                          <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                        </td>
                      </tr>
                      @endforeach
                    @endif
                  @endforeach
      
      
              </tbody>
            </table> 
         </button>
     </h2>
    
 </div>




</div>

</div>


</div>

<div
class="tab-pane fade"
id="ex2-tabs-9"
role="tabpanel"
aria-labelledby="ex2-tabs-9"
>


<div class="container py-5">

<div class="accordion" id="accordionExample">


<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <table class="table table-bordered mt-4">
             <thead>
               <tr class="title-back">
                 <th></th>
                 <th>Title</th>
                 <th class="text-center">Download</th>
               </tr>
             </thead>
             <tbody>
     
             @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 7)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      <tr class="back-an">
                        <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                        <td class="pt-4">{{ $amalgamation->title }}</td>
                        <td class="tbl-im">
                          <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                        </td>
                      </tr>
                      @endforeach
                    @endif
                  @endforeach 
     
            
     
     
             </tbody>
           </table> 
        </button>
    </h2>
   
</div>




</div>

</div>


</div>

<div
class="tab-pane fade"
id="ex2-tabs-10"
role="tabpanel"
aria-labelledby="ex2-tabs-10"
>


<div class="container py-5">

<div class="accordion" id="accordionExample">


<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="menu-name accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <table class="table table-bordered mt-4">
             <thead>
               <tr class="title-back">
                 <th></th>
                 <th>Title</th>
                 <th class="text-center">Download</th>
               </tr>
             </thead>
             <tbody>
     
                @foreach ($amalgamationCategories as $amalgamationCategory)
                    @if ($amalgamationCategory->id === 8)
                      @foreach ($amalgamationCategory->amalgamations as $amalgamation)
                      <tr class="back-an">
                        <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
                        <td class="pt-4">{{ $amalgamation->title }}</td>
                        <td class="tbl-im">
                          <a href="{{ config('app.backend_url') }}/uploads/amalgamations/{{ $amalgamation->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
                        </td>
                      </tr>
                      @endforeach
                    @endif
                  @endforeach

                  <!--back-an class is added in the tr tag-->
     
            
     
             </tbody>
           </table> 
        </button>
    </h2>
   
</div>




</div>

</div>


</div>


   
     
   </div>

  </div>
 
</section>


</div>

</div>




<!-- report table end -->
@endsection