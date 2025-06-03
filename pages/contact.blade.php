@extends('layouts.app')

@section('title', 'Halder Venture Limited | Premium Rice, Edible Oils & Other Agro Products - Contact Us For Enquiries')


@section('content')
<!-- banner start -->
<div class="halder-ban" data-aos="fade-up" data-aos-duration="3000">
<div class="col-lg-12">
  <div class="ban-h">
    <img src="assets/img/Contact Us _ Halder.webp" alt="" loading="lazy">
  </div>
</div>

</div>
<!-- banner end -->

<!-- leave message start -->
<div class="leave-msg t-sff py-5 text-center position-relative">

<h1>LEAVE US A MESSAGE</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="cl-img">
  <img src="assets/img/contactphn.png" alt="">
</div>

<div class="container pt-5">
    <div class="row">
      <div class="col-lg-3 mb-4"></div>
        <div class="col-lg-6 mb-4">

        <div class="formmm">
          <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            @method('POST')
            <label for="email" class="name-form form-label"></label>
            <input class="mb-4 py-3 hal-c-b form-control form-control-lg" type="text" placeholder="Full Name"
              aria-label=".form-control-lg example" name="name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="email" class="name-form form-label"></label>
            <input class="mb-4 py-3 hal-c-b form-control form-control-lg" type="text" placeholder="E-mail"
              aria-label=".form-control-lg example" name="email">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="email" class="name-form form-label"></label>
            <input class="mb-4 py-3 hal-c-b form-control form-control-lg" type="text" placeholder="Phone Number"
              aria-label=".form-control-lg example" name="phone">
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="email" class="name-form form-label"></label>
            <input class="mb-4 py-3 hal-c-b form-control form-control-lg" type="text" placeholder="Company Name"
              aria-label=".form-control-lg example" name="company">
            @error('company')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

              <label for="email" class="name-form form-label"></label>
              <input class="mb-5 py-3 hal-c-b form-control form-control-lg" type="text" placeholder="Designation"
                aria-label=".form-control-lg example" name="designation">
              @error('designation')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror

                <select class="py-3 mb-4  hal-c-b form-select" aria-label="Default select example" name="reason" required>
                  <option value="" selected> &nbsp;I Am Here For</option>
                  <option value="Trade Enquiries">Trade Enquiries</option>
                  <option value="Shareholding / Investor Information">Shareholding / Investor Information</option>
                  <option value="General Information">General Information</option>
                  <option value="Career">Career</option>
                  <option value="Feedback / Suggestion">Feedback / Suggestion</option>
                  <option value="Media">Media</option>
                </select>
                @error('reason')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
              

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"></label>
              <textarea class="py-4 form-control hal-c-b" type="text" placeholder="Type Your Message"
                id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
            </div>
            @error('message')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="text-center"> 
              <button type="submit" class="mt-4 butn-hald btn btn-primary">Send Message</button>
            </div>
           
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

</div>
<!-- leave message end -->
@endsection
