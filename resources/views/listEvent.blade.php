@extends('layout.layout')

@section('content')

    <!-- ======= Nav-bar ======= -->
    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">eNno</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{route('index') }}" class="logo"><img src="{{ asset('img/sample/logo.png') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{route('index') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('about') }}">About</a></li>
          <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('conference') }}">Event Conferencet</a></li>
              <li><a href="{{route('entertainment') }}">Event Entertainment</a></li>
              <li><a href="{{route('exhibitions') }}">Event Exhibitions</a></li>
              <li><a href="{{route('incentives') }}">Event Incentives</a></li>
              <li><a href="{{route('meetings') }}">Event Meetings</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#" class="nav-link scrollto active">List Event</a></li>
              <li><a href="{{route('image') }}">Image</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!-- End Header -->
  
  <main id="main">
    <div class="container" style="margin-top: 140px; margin-bottom: 30px;">
        <div class="section-title">
            <h2>List Event</h2>
            <h3><span>List Event</span></h3>
          </div>

          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  Upcomming Event
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                ...
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  2021
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                ...
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  2020
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                <tr>
                    <p>PRB 2020</p>
                  </tr>
                  <tr>
                    <p>BIMTEK TOT INAPORTNET</p>
                  </tr>
                  <tr>
                    <p>FGD UKM</p>
                  </tr>
                  <tr>
                    <p>HARTEKNAS</p>
                  </tr>
                  <tr>
                    <p>FGD USAHA JASA TRANSPORTASI LAUT</p>
                  </tr>
                  <tr>
                    <p>KONSYERING EVALUASI TRAYEK</p>
                  </tr>
                  <tr>
                    <p>KONSYERING EVALUASI TRAYEK II</p>
                  </tr>
                  <tr>
                    <p>PRB 2020</p>
                  </tr>
                  <tr>
                    <p>FGD USAHA JASA TRANSPORTASI LAUT</p>
                  </tr>
                  <tr>
                    <p>KONSIYERING PENYUSUNAN BUKU</p>
                  </tr>
                  <tr>
                    <p>WORKSHOP UKM</p>
                  </tr>
                  <tr>
                    <p>EVALUASI KEG INAPORTNET 2020</p>
                  </tr>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapsefour">
                  2019
                </button>
              </h2>
              <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingfour">
                <div class="accordion-body">
                  <tr>
                    <p>FASILITASI PEMETAAN DOK TEKNIS BT</p>
                  </tr>
                  <tr>
                    <p>FGD PENYAJIAN DATA ANGKUTAN LAUT</p>
                  </tr>
                  <tr>
                    <p>FGD IMPELEMENTASI UU NO 17 2008 </p>
                  </tr>
                  <tr>
                    <p>FGD PENYUSUNAN REVISI PM 157 2015 INAPORTNET</p>
                  </tr>
                  <tr>
                    <p>FGD SLS INAPORTNET</p>
                  </tr>
                  <tr>
                    <p>PRB 2019</p>
                  </tr>
                  <tr>
                    <p>HARTEKNAS</p>
                  </tr>
                  <tr>
                    <p>MALAM APRESIASI</p>
                  </tr>
                  <tr>
                    <p>FGD HARMONISASI DAN SINKRONISASI</p>
                  </tr>
                  <tr>
                    <p>FGD PENYAJIAN DATA ANGKUTAN LAUT</p>
                  </tr>
                  <tr>
                    <p>FGD KEMUDAHAN BERUSAHA</p>
                  </tr>
                  <tr>
                    <p>FGD SIMPLIKASI DAN PERIJINAN</p>
                  </tr>
                  <tr>
                    <p>DISEMINASI KEBIJAKAN PENANAMAN MODAL</p>
                  </tr>
                </div>
              </div>
            </div>
          </div>
    </div>
    
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @endsection