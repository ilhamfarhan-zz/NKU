@extends('layout.Layout')

@section('content')
  <!-- ======= NAV-BAR ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">eNno</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#" class="logo"><img src="{{ asset('img/sample/logo.png') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto " href="#keyPerson">Key Person</a></li>
          <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#services">Event Concept</a></li>
              <li><a href="#services">MICE</a></li>
              <li><a href="#services">Media Exposure</a></li>
              <li><a href="#services">Event Entertainment</a></li>
              <li><a href="#services">Event Management</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#event">List Event</a></li>
              <li><a href="#event">Image</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <!-- end nav-bar -->
  <!-- ======= Hero Section ======= -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/sample/1.jpg') }}" class="d-block carousel" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <br><br>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/sample/1.jpg') }}" class="d-block carousel" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <br><br>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/sample/1.jpg') }}" class="d-block carousel" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <br><br>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about page-section">
    <h3 class="title">About Nasaa Kreasi Utama</h3>
      <div class="container"> 
        <div class="row">
          <div class="col-lg-6">
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
          <div class="col-lg-6 abouts">
            <img src="{{ asset('img/sample/logo.png') }}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

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
          <div class="btn-about">
            <a href="{{route('about') }}" class="btn btn-outline-primary">Learn More</a>
          </div>
      </div>
    </section>
    
    <!-- End Counts Section -->

    <!-- keyPerson Grid-->
    <section class="page-section" id="keyPerson">
      <div class="container">
        <div class="section-title">
          <h2>KEY PERSON</h2>
          <h3><span>KEY PERSON</span></h3>
        </div>

        <div class="box-container">
              <div class="box">
                  <!-- keyPerson item 1-->
                  <div class="card card-keyperson">
                    <img src="{{asset('img/team/team-1.jpg')}}"class="img-fluid" alt="...">
                      <div class="card-keyperson">
                        <h5 class="card-title">Name</h5>
                           <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Learn More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 id="exampleModalLabel">Key Person</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <img src="{{asset('img/team/team-1.jpg')}}"class="img-fluid" alt="...">
                              <h5 class="card-title">Name</h5>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus placeat ullam nihil. Quidem ipsa eveniet temporibus quia saepe. Nemo, perferendis eius. Dolorum tenetur voluptatibus quisquam expedita odio dolore perspiciatis culpa.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end modal -->
                      </div>
                  </div>
              </div>
              <div class="box">
                  <!-- keyPerson item 2-->
                  <div class="card card-keyperson">
                    <img src="{{asset('img/team/team-1.jpg')}}"class="img-fluid" alt="...">
                      <div class="card-keyperson">
                        <h5 class="card-title">Name</h5>
                          <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Learn More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 id="exampleModalLabel">Key Person</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <img src="{{asset('img/team/team-1.jpg')}}"class="img-fluid" alt="...">
                              <h5 class="card-title">Name</h5>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus placeat ullam nihil. Quidem ipsa eveniet temporibus quia saepe. Nemo, perferendis eius. Dolorum tenetur voluptatibus quisquam expedita odio dolore perspiciatis culpa.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end modal -->
                      </div>
                  </div>
              </div>
              <div class="box">
                  <!-- keyPerson item 3-->
                  <div class="card card-keyperson">
                    <img src="{{asset('img/team/team-1.jpg')}}"class="img-fluid" alt="...">
                      <div class="card-keyperson">
                        <h5 class="card-title">Name</h5>
                           <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Learn More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 id="exampleModalLabel">Key Person</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <img src="{{asset('img/team/team-1.jpg')}}"class="img-fluid" alt="...">
                              <h5 class="card-title">Name</h5>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus placeat ullam nihil. Quidem ipsa eveniet temporibus quia saepe. Nemo, perferendis eius. Dolorum tenetur voluptatibus quisquam expedita odio dolore perspiciatis culpa.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end modal -->
                      </div>
                  </div>
              </div>
              <div class="box">
                  <!-- keyPerson item 4-->
                  <div class="card card-keyperson">
                    <img src="{{asset('img/team/team-1.jpg')}}"class="img-fluid" alt="...">
                      <div class="card-keyperson">
                        <h5 class="card-title">Name</h5>
                           <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Learn More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 id="exampleModalLabel">Key Person</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <img src="{{asset('img/team/team-1.jpg')}}"class="img-fluid" alt="...">
                              <h5 class="card-title">Name</h5>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus placeat ullam nihil. Quidem ipsa eveniet temporibus quia saepe. Nemo, perferendis eius. Dolorum tenetur voluptatibus quisquam expedita odio dolore perspiciatis culpa.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end modal -->
                      </div>
                  </div>
              </div>
              <div class="box">
                  <!-- keyPerson item 5-->
                  <div class="card card-keyperson">
                    <img src="{{asset('img/team/team-1.jpg')}}"class="img-fluid" alt="...">
                      <div class="card-keyperson">
                        <h5 class="card-title">Name</h5>
                           <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Learn More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 id="exampleModalLabel">Key Person</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <img src="{{asset('img/team/team-1.jpg')}}"class="img-fluid" alt="...">
                              <h5 class="card-title">Name</h5>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus placeat ullam nihil. Quidem ipsa eveniet temporibus quia saepe. Nemo, perferendis eius. Dolorum tenetur voluptatibus quisquam expedita odio dolore perspiciatis culpa.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end modal -->
                      </div>
                  </div>
              </div>
              <div class="box">
                  <!-- keyPerson item 6-->
                  <div class="card card-keyperson">
                    <img src="{{asset('img/team/team-1.jpg')}}"class="img-fluid" alt="...">
                      <div class="card-keyperson">
                        <h5 class="card-title">Name</h5>
                           <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Learn More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 id="exampleModalLabel">Key Person</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              <img src="{{asset('img/team/team-1.jpg')}}"class="img-fluid" alt="...">
                              <h5 class="card-title">Name</h5>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus placeat ullam nihil. Quidem ipsa eveniet temporibus quia saepe. Nemo, perferendis eius. Dolorum tenetur voluptatibus quisquam expedita odio dolore perspiciatis culpa.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end modal -->
                      </div>
                  </div>
              </div>
        </div>
        <div id="load-more">
          <button class="btn btn-primary btn-keyperson">Load More</button>
        </div>
      </div>
    </section>

    <!-- End KeyPerson  -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <h3>We do offer awesome </h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                    <img src="{{asset('img/service/concert.png')}}"style="width:140px;height:140px; margin:20px" alt="...">
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <h5 class="card-title" style="margin-top:20px">Event concept</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{route('EventConcept') }}" class="btn btn-outline-primary">Go somewhere</a>
                  </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                    <img src="{{asset('img/service/board-meeting.png')}}" style="width:140px;height:140px; margin:20px" alt="...">
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <h5 class="card-title" style="margin-top:20px">MICE</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{route('Mice') }}" class="btn btn-outline-primary">Go somewhere</a>
                  </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                    <img src="{{asset('img/service/bullhorn.png')}}"style="width:140px;height:140px; margin:20px" alt="...">
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <h5 class="card-title" style="margin-top:20px">Media Exposure</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{route('MediaExposure') }}" class="btn btn-outline-primary">Go somewhere</a>
                  </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                    <img src="{{asset('img/service/event.png')}}"style="width:140px;height:140px; margin:20px" alt="...">
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <h5 class="card-title" style="margin-top:20px">Event Entertainment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{route('EventEntertainment') }}" class="btn btn-outline-primary">Go somewhere</a>
                  </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                    <img src="{{asset('img/service/schedule.png')}}"style="width:140px;height:140px; margin:20px" alt="...">
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <h5 class="card-title" style="margin-top:20px">Event Management</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{route('EventManagement') }}" class="btn btn-outline-primary">Go somewhere</a>
                  </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div id="load-more2">
          <button class="btn btn-primary btn-keyperson">Load More</button>
        </div>
      </div>
    </section>
    <!-- End Services Section -->
    <!-- Event Section -->
    <section id="event" class="event">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <h3>We do offer awesome </h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
      </div>
    </section>
        <!-- END Event Section -->
  </main>
  <!-- End #main -->

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