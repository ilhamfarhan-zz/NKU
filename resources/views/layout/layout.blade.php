<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nasaa Kreasi Utama</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('img/sample/logo.ico') }}"> 
  <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}"> 

  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"> 
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
</head>

<body>

  <!-- content nku -->

  @yield('content')

  <!-- end content -->
  <footer id="footer">

<div class="footer-top contact">

    <div class="container">

        <div class="row">
            <div class="col-sm-5">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Jl. Persatuan No.4, RT.6/RW.9, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430</p>
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
<!-- end footer -->
  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script> 
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script> 
  <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script> 
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script> 

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script> 

</body>

</html>