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
              <li><a href="#" class="nav-link scrollto active">Event Concept</a></li>
              <li><a href="{{route('Mice') }}">MICE</a></li>
              <li><a href="{{route('MediaExposure') }}">Media Exposure</a></li>
              <li><a href="{{route('EventEntertainment') }}">Event Entertainment</a></li>
              <li><a href="{{route('EventManagement') }}">Event Management</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('list') }}">List Event</a></li>
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

    <!-- ======= Footer ======= -->
    <footer id="footer">

<div class="footer-top contact">

    <div class="container">

        <div class="row">
            <div class="col-sm-5">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>
            </div>
            <div class="social-links col-sm-3">
                <h4>Sosial Media :</h4>
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="col-sm-4">
                <div class="info">
                    <h4>Contact Us :</h4>
                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h5>Email:</h5>
                            <p>info@example.com</p>
                        </div>
                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h5>Call:</h5>
                            <p>+1 5589 55488 55s</p>
                        </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

</footer>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @endsection