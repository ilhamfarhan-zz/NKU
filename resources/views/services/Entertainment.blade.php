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
              <li><a class="nav-link scrollto active">Event Entertainment</a></li>
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
          <li><a class="nav-link scrollto" href="{{route('contact') }}">Contact</a></li>
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
          <h2>Entertainment & Cultural Events</h2>
        </div>
        <img src="{{asset('img/service/people-festival.jpg')}}" alt="...">
        <p>Bridging your event to a higher profile and wider perspective by providing a wide range of profound and unique ideas to create sustainable values and benefits to our clients.</p>
      </div>
      
    </div>
    
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @endsection