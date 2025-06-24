@extends('layouts.app')

@section('title', 'Notices | Halder Venture Limited - Official Announcements & Updates')
@section('description', 'Stay informed with official notices from Halder Venture Limited. Access important announcements, updates, and regulatory information related to our operations in the Indian rice and edible oil industries.')
@section('keywords', 'Rice exporter in India, oil producers in india, oil factory in india, parboiled rice export, halder venture limited, Halder venture products, edible oil manufacturers in west bengal, oil manufacturing company in india, Indian rice industry, Agro Products')

@section('content')
      <!-- banner start -->


  <div class="halder-ban" data-aos="fade-up" data-aos-duration="3000">

<div class="col-lg-12">
  <div class="ban-h">
    <img src="assets/img/investors-banner.webp" alt="" loading="lazy">
  </div>
</div>

</div>


<!-- banner end -->


<div class="annuals pt-5">
  <h1 class="text-center">NOTICES</h1>
</div>



<!-- report table start -->



<div class="report-table py-5">

<div class="container">


  <table class="table table-bordered">
    <thead>
      <tr class="title-back">
        <th></th>
        <th>Title</th>
        <th class="text-center">Download</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($notices as $notice)
        <tr class="back-an">
          <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
          <td class="pt-4">{{ $notice->title }}</td>
          <td class="tbl-im">
            <a href="{{ config('app.backend_url') }}/uploads/notices/{{ $notice->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
          </td>
        </tr>
      @endforeach

      

    


    </tbody>
  </table>


</div>


</div>






<!-- report table end -->
@endsection