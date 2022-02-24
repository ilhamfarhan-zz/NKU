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
              <li><a href="{{route('EventConcept') }}" >Event Concept</a></li>
              <li><a href="{{route('Mice') }}">MICE</a></li>
              <li><a href="{{route('MediaExposure') }}">Media Exposure</a></li>
              <li><a href="{{route('EventManagement') }}">Event Entertainment</a></li>
              <li><a href="#" class="nav-link scrollto active">Event Management</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">List Event</a></li>
              <li><a href="#">Image</a></li>
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
    <div class="container service">
      <div class="section-title">
        <div class="title-concept">
          <h2>Event Management</h2>
        </div>
        <img src="{{asset('img/service/Event-Management.jpg')}}" alt="...">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda possimus quaerat dolore nostrum modi placeat doloremque magnam deleniti ab, corrupti error libero unde. Deserunt voluptas omnis fugit sit iste. Earum?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi doloremque officia ex, dolorum asperiores ullam iusto neque vitae sint itaque? Eveniet, inventore neque aut itaque dolores rerum odit culpa qui.</p>
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
</div>

</footer>
  <!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @endsection