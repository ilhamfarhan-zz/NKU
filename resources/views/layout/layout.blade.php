<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nasaa Kreasi Utama</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('img/sample/logo.png') }}"> 
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
  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> 
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script> 
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script> 
  <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script> 
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script> 

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script> 
  <script>

let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.container .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   }
   currentItem += 3;

   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}
</script>
<script>
let loadMore2Btn = document.querySelector('#load-more2');
let currentItem2 = 2;

loadMore2Btn.onclick = () =>{
   let boxes2 = [...document.querySelectorAll('.container .row .col-sm-6')];
   for (var p = currentItem2; p < currentItem2 + 2; p++){
      boxes2[p].style.display = 'inline-block';
   }
   currentItem2 += 2;

   if(currentItem2 >= boxes2.length){
      loadMore2Btn.style.display = 'none';
   }
}

</script>

</body>

</html>