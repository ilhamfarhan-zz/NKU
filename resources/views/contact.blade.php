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
  <section id="contact" class="contact page-section">
        <h3 class="title">Contact</h3>
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15863.160266326819!2d106.7983534947254!3d-6.291299693394535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1e640da7db1%3A0x545f4026c4edf999!2sJl.%20Persatuan%20No.4%2C%20RT.6%2FRW.9%2C%20Cilandak%20Bar.%2C%20Kec.%20Cilandak%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012430!5e0!3m2!1sid!2sid!4v1645973371672!5m2!1sid!2sid" class="map" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-sm-6 location">
              <h4>Location</h4>
              <p>
              Jl. Persatuan No.4, RT.6/RW.9, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430
              </p>
            </div>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
    </section>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @endsection