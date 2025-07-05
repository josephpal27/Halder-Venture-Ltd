  <!-- header start -->

  <header>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/logo.webp') }}" width="80%" alt="" loading="lazy"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="mx-2 nav-item @if(request()->is('/')) hmm @endif">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="mx-2 nav-item @if(request()->is('about')) hmm @endif">
              <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="mx-2 nav-item @if(request()->is('products')) hmm @endif">
              <a class="nav-link" href="/products">Products</a>
            </li>
            <li class="mx-2 nav-item @if(request()->is('brands')) hmm @endif">
              <a class="nav-link" href="/brands">Brands</a>
            </li>
            <li class="mx-2 nav-item hbhn @if(request()->route()->getName() === 'investor.directors' || request()->route()->getName() === 'investor.policy' || request()->route()->getName() === 'investor.notices' || request()->route()->getName() === 'investor.amalgamation' || request()->route()->getName() === 'investor.annualGeneralMeeting' || request()->route()->getName() === 'investor.closureOfTradingWindow' || request()->route()->getName() === 'investor.investorSupport' || request()->route()->getName() === 'investor.postalBallot' || request()->route()->getName() === 'investor.scrutinizerReport' || request()->route()->getName() === 'investor.shareholdingPattern' || request()->route()->getName() === 'investor.paperAdvertisement' || request()->route()->getName() === 'investor.financialResults' || request()->route()->getName() === 'investor.annualReturn' || request()->route()->getName() === 'investor.annualReport' ||
                request()->route()->getName() === 'investor.familiarizationProgramme' || request()->route()->getName() === 'investor.financialsSubsidiaries' || request()->route()->getName() === 'investor.whishtle') hmm @endif">
              <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false"
                href="#">Investor Relations</a>

                <ul class="ggg dropdown-menu">


                  <div class="row">

                    <div class="col-lg-4">
                    <div class="inves-drop">
                      
                      <h5>Financial Information</h5>
                      <hr style="background-color: #1f476e; opacity: 2; width: 50px; margin: auto;">

                     <a href="/annual-report"><p class="pt-4">Annual Report</p></a>

                      <a href="/annual-return"><p>Annual Return</p></a>

                      <a href="/financial-results"><p>Financial Results</p></a>

                      <a href="/financials-subsidiaries"><p>Financials of Subsidiaries</p></a>
                      
                      <a href="/notices"><p>Notices</p></a> 

                      <a href="/paper-advertisement"><p>Paper Advertisement</p></a> 

                    </div>
                   </div>


                    <div class="col-lg-4">
                     <div class="inves-drop">

                      <h5>Investor Information</h5>
                      <hr style="background-color: #1f476e; opacity: 2; width: 50px; margin: auto;">

                      <a href="/amalgamation"><p class="pt-4">Amalgamation</p></a>

                      <a href="/annual-general-meeting"><p>Annual General Meeting</p></a> 

                      <a href="/closure-of-trading-window"><p>Closure of Trading Window</p></a>

                      <a href="/investor-support"><p>Investor Support</p></a>
                      
                      <a href="/postal-ballot"><p>Postal Ballot</p></a>

                      <a href="/scrutinizer-report"><p>Scrutinizer Report</p></a>

                      <a href="/shareholding-pattern"><p>Shareholding Pattern</p></a>
                      
                      <!-- <a href="{{ asset('uploads/1st Familiarization programme_2025-26.pdf') }}" target="_blank"><p>Familiarization Programme of Independent Directors</p></a> -->
                      
                      <a href="/familiarization-programme"><p>Familiarization Programme of Independent Directors</p></a>

                    </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="inves-drop">

                      <h5>Corporate Information</h5>
                      <hr style="background-color: #1f476e; opacity: 2; width: 50px; margin: auto;">

                      <a href="/directors"><p class="pt-4">Board of Directors</p></a>

                      <a href="{{ asset('uploads/credit-rating/Halder Venture Limited_25Apr2025.pdf') }}" target="_blank"><p>Credit Rating Details</p></a>

                     <a href="/policy-determine"><p>Policy to Determine Material Subsidiaries</p></a> 

                      <a href="/whishtle-blower"><p>Whistle Blower Policy</p></a>
                      
                      <a href="{{ asset('uploads/policy-on-determination-materiality-for-disclosures (1).pdf') }}" target="_blank"><p>Materiality Policy</p></a>
                      
                      <a href="{{ asset('uploads/Nomination-and-Remuneration-Policy.pdf') }}" target="_blank"><p>Nomination and Remuneration Policy</p></a>
                      
                      <a href="{{ asset('uploads/Code of conduct to regulate moniter and report trading by designated person.pdf') }}" target="_blank"><p>Insider Code</p></a>
                      
                      <a href="{{ asset('uploads/Code for fair disclosure of UPSI.pdf') }}" target="_blank"><p>Fair Disclosure of UPSI</p></a>
                      
                      <a href="{{ asset('uploads/Terms and Conditions for appointment of Independent Director (1).pdf') }}" target="_blank"><p>Terms and Conditions for appointment of Independent Director</p></a>

                      <a href="{{ asset('uploads/Code-of-Conduct-for-Board-and-SMP.pdf') }}" target="_blank"><p>Code of conduct for Board and SMP</p></a>

                      <a href="{{ asset('uploads/Related-Party-Transaction-Policy.pdf') }}" target="_blank"><p>Related party Transaction policy</p></a>

                      <a href="{{ asset('uploads/HVL - MOA and AOA.pdf') }}" target="_blank"><p>MOA and AOA</p></a>

                    </div>

                  </div>
                  <!-- <li><a class="dropdown-item" href="amalgamation.html">Amalgamation</a></li>
                  <li><a class="dropdown-item" href="annual-report.html">Annual Report</a></li>
                  <li><a class="dropdown-item" href="annual-return.html">Annual Return</a></li>
                  <li><a class="dropdown-item" href="annual-general-meeting.html">Annual General Meeting</a></li>
                  <li><a class="dropdown-item" href="boardof-directors.html">Board Of Directors</a></li>
                  <li><a class="dropdown-item" href="closure-of-trading-window.html">Closure Of Trading Window</a></li>
                  <li><a class="dropdown-item" href="corporate-governance.html">Corporate Governance</a></li>
                  <li><a class="dropdown-item" href="financial-results.html">Financial Results</a></li>
                  <li><a class="dropdown-item" href="financial-of-subsidiaries.html">Financial Of Subsidiaries</a></li>
                  <li><a class="dropdown-item" href="Investor Support.html">Investor Support</a></li>
                  <li><a class="dropdown-item" href="notices.html">Notices</a></li>
                  <li><a class="dropdown-item" href="policy-determine.html">Policy To Determine Material Subsidiaries</a></li>
                 <li><a class="dropdown-item" href="postal-ballot.html">Postal Ballot</a></li>
                 <li><a class="dropdown-item" href="paper-advertisement.html">Paper Advertisement</a></li>
                 <li><a class="dropdown-item" href="scrutinizer-report.html">Scrutinizer Report</a></li>
                 <li><a class="dropdown-item" href="share-holding-pattern.html">Share Holding Pattern</a></li>
                  <li><a class="dropdown-item" href="whistle-blower.html">Whistle Blower</a></li> -->
                  
                </ul>

            </li>
              
            <li class="mx-1 nav-item hbhn @if(request()->route()->getName() === 'mediahub.newsletter' || request()->route()->getName() === 'mediahub.events' || request()->route()->getName() === 'mediahub.pressReleases' || request()->route()->getName() === 'mediahub.mediaCoverages') hmm @endif">
              <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false"
                href="#">Media Hub</a>

                <ul class="ggg dropdown-menu" style="width: 20% !important; margin-left: 13.5% !important;">


                  <div class="row">

                    <div class="col-lg-12">
                      <div class="inves-drop">

                      <a href="{{ route('mediahub.newsletter') }}"><p class="pt-4">Newsletters</p></a>

                      <a href="{{ route('mediahub.events') }}"><p>Events</p></a>

                      <a href="{{ route('mediahub.pressReleases') }}"><p>Press Releases</p></a>  

                      <a href="{{ route('mediahub.mediaCoverages') }}"><p>Media Coverages</p></a>
                      

                    </div>

                  </div>
                  
                </ul>

            </li>

    
            <li class="mx-2 nav-item @if(request()->is('careers')) hmm @endif">
              <a class="nav-link" href="/careers">Careers</a>
            </li>
            <li class="mx-2 nav-item @if(request()->is('presence')) hmm @endif">
              <a class="nav-link" href="/presence">Our Presence</a>
            </li>
            <li class="mx-2 nav-item @if(request()->is('contact')) hmm @endif">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
          </ul>
        </div>


      </div>
    </nav>

  </header>



  <!-- header end -->