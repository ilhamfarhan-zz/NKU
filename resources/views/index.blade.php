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
              <li><a href="#services">Event Conferencet</a></li>
              <li><a href="#services">Event Entertainment</a></li>
              <li><a href="#services">Event Exhibitions</a></li>
              <li><a href="#services">Event Incentives</a></li>
              <li><a href="#services">Event Meetings</a></li>
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
          <h2>Products & Services</h2>
        </div>

        <div class="row">
          <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                    <img src="{{asset('img/service/meetings.png')}}"style="width:140px;height:140px; margin:20px" alt="...">
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <h5 class="card-title" style="margin-top:20px">Meetings</h5>
                    <p class="card-text">Whether planning a multi-city nationwide series of dinner.......</p>
                    <a href="{{route('meetings') }}" class="btn btn-outline-primary">Read More</a>
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
                    <img src="{{asset('img/service/Incentives.png')}}" style="width:140px;height:140px; margin:20px" alt="...">
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <h5 class="card-title" style="margin-top:20px">Incentives</h5>
                    <p class="card-text">Drive to provide outstanding solutions to all traveling.....</p>
                    <a href="{{route('incentives') }}" class="btn btn-outline-primary">Read More</a>
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
                    <h5 class="card-title" style="margin-top:20px">Entertainment & Cultural Events</h5>
                    <p class="card-text">Bridging your event to a higher profile and wider.....</p>
                    <a href="{{route('entertainment') }}" class="btn btn-outline-primary">Read More</a>
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
                    <img src="{{asset('img/service/conference.png')}}"style="width:140px;height:140px; margin:20px" alt="...">
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <h5 class="card-title" style="margin-top:20px">conference</h5>
                    <p class="card-text">Provide a full solution in conference management services...........</p>
                    <a href="{{route('conference') }}" class="btn btn-outline-primary">Read More</a>
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
                    <img src="{{asset('img/service/Exhibitions.png')}}"style="width:140px;height:140px; margin:20px" alt="...">
                  </div>
                  <div class="form-group col-md-6 mt-3 mt-md-0">
                    <h5 class="card-title" style="margin-top:20px">Exhibitions</h5>
                    <p class="card-text">We offer a full range package from conceptualization.....</p>
                    <a href="{{route('exhibitions') }}" class="btn btn-outline-primary">Read More</a>
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
  </main>
  <!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @endsection