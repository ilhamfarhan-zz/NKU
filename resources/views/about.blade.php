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
          <li><a class="nav-link scrollto active" href="#">About</a></li>
          <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('EventConcept') }}">Event Concept</a></li>
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
          <li><a class="nav-link scrollto" href="{{route('contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!-- end nav-bar -->

<main id="main">
    <!-- about -->
    <section id="about" class="about page-section">
        <h3 class="title">About Nasaa Kreasi Utama</h3>
        <div class="container">
            <div class="row">
            <p class="fst-italic">
            Founded as Professional Conference Organizer in order to Strive to render the best services management for events business such as government and corporate meetings, worldwide incentive travel, conferences and special events ranging from consultancy up to program planning & design proposal, staffing & logistic budget estimation as well as event management execution.
            </p>
            <br>
            <p class="fst-italic">
            Providing strategic and sustainable solutions for your marketing & communications problems and needs.
            </p>
            <br>
            <p class="fst-italic">
            Business Category :
            MICE, Event Organizer, Communication Consultant, Advertising, Telecommunications Equipments
            </p>
            </div>
        </div>
    </section>
    <!-- End About -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="page-section counts bg-light">
      <div class="container">
        <h3 id="about" class="title">Mission and Commitment to client</h3>
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="title">Mission</h5>
                  <p class="card-text">Eget pellentesque nisi tempus porta. Vel tincidunt molestie eu malesuada sagittis, platea lectus. Orci duis nulla nibh porta quisque ornare. Scelerisque diam eget est sit pharetra est venenatis. Lorem gravida elementum eget ut odio mauris augue libero ipsum. In massa et ac, et bibendum. Sagittis elementum convallis egestas euismod volutpat mauris. Neque eget diam, facilisis eu varius urna nulla. Egestas eget facilisis nibh turpis netus purus nibh. Volutpat vel cursus non leo turpis vitae maecenas. Maecenas viverra a nec feugiat eros ornare. Proin tristique arcu risus ac risus in nibh. Malesuada turpis faucibus lacus lorem.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="title">Commitment</h5>
                  <p class="card-text">Eget pellentesque nisi tempus porta. Vel tincidunt molestie eu malesuada sagittis, platea lectus. Orci duis nulla nibh porta quisque ornare. Scelerisque diam eget est sit pharetra est venenatis. Lorem gravida elementum eget ut odio mauris augue libero ipsum. In massa et ac, et bibendum. Sagittis elementum convallis egestas euismod volutpat mauris. Neque eget diam, facilisis eu varius urna nulla. Egestas eget facilisis nibh turpis netus purus nibh. Volutpat vel cursus non leo turpis vitae maecenas. Maecenas viverra a nec feugiat eros ornare. Proin tristique arcu risus ac risus in nibh. Malesuada turpis faucibus lacus lorem.</p>
                </div>
             </div>
            </div>
          </div>
      </div>
    </section>
    
    <!-- End Counts Section -->
</main>
<!-- end main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection