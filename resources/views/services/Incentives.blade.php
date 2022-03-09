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
              <li><a class="nav-link scrollto active">Event Incentives</a></li>
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
          <h2>INCENTIVES</h2>
        </div>
        <img src="{{asset('img/service/INCENTIVES.jpg')}}" alt="...">
        <p>Drive to provide outstanding solutions to all traveling and building key relationship needs, whether for team building activity, motivating sales force, hosting social events or rewarding team and members. Also offering an integrated CSR activities with incentives program in order for companies to make a difference and give back to the communities.</p>
      </div>
      
    </div>
    
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @endsection