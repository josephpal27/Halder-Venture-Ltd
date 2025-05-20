@extends('layouts.app')

@section('title', 'Postal Ballot | Halder Venture Limited - Shareholder Voting & Participation')
@section('description', 'Discover Halder Venture Limited postal ballot process, enabling shareholders to participate in key decisions from the comfort of their homes. Learn about voting procedures and make your voice heard in our strategic direction within the rice and edible oil industries.')
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

      @foreach ($postalBallots as $postalBallot)
        <tr class="back-an">
          <td class="pt-4 text-center"><i class="fa-regular fa-file-lines"></i></td>
          <td class="pt-4">{{ $postalBallot->title }}</td>
          <td class="tbl-im">
            <a href="{{ config('app.backend_url') }}/uploads/postal-ballots/{{ $postalBallot->file }}" target="_blank"><img src="assets/img/pdf_icon.png" alt=""></a>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>


</div>


</div>






<!-- report table end -->
@endsection