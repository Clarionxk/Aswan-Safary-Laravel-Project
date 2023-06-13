<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>
<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="home/css/bootstrap.min.css" rel="stylesheet">
<!-- ???????????? -->

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="home/css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="home/css/style5.css" rel="stylesheet">











<!-- ????????????? -->
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="home/css/css2.css">
   <link rel="stylesheet" href="css/css2.css">

</head>
<body>
   
<!-- header section starts  -->
@include('home.header')
<!-- header section ends -->

 <!-- Carousel Start -->
 <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/332758249.jpg?k=638d07e75e05bce5b98682afed388b950be26328cb40c41f3b612e9f1e0f2c3d&o=&hp=1" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">aswan Living</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">  Benben</h1>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/169324702.jpg?k=b0e25f84c600ace0b6eb24d87e5775b26deab64a15503918f934d16b735c1766&o=&hp=1" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">aswan Living</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">NUB INN</h1>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/326740577.jpg?k=63e115bc2d4d91a120e95b7e5d88828b845e6de685cec86ee04dec0f810d7653&o=&hp=1" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">aswan Living</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown"> Cataract</h1>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
        <!-- ?????????????????????? -->
        
        <!-- Booking Start -->
      
        <!-- Booking End -->
        <!-- ????????????????????/ -->
          <!-- About Start -->
          <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">Hotelier</span></h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-150 wow zoomIn" data-wow-delay="0.1s" src="https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/237648627.jpg?k=fd3be72ea174ffd318041daa0807ddd111005bcfc9dfd0cd76b9b8f475705019&o=&hp=1" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/237648803.jpg?k=fb9f14e0153cf666660b0795822fd01075585fa8f301cbfdeb4ab41e41082230&o=&hp=1">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src="https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/370395270.jpg?k=cbde4cb7dd0722a64bb05a06ce12df66d168782d19d5a7e64702efd0304f0320&o=&hp=1">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-400 wow zoomIn" data-wow-delay="0.7s" src="https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/326740621.jpg?k=5e664d5b9bc5b841ec86682212f2ed3bb1b309af2724159ec79892a66afc6ff4&o=&hp=1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
          <!-- Room Start -->
         
        <!-- Room End -->
        



        <!-- ?????????????????? -->
<!-- booking section starts  -->










 <!-- <img src="images/header-bg-1.png" alt=""> --> 

 <!-- Package Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">hotels</h6>
                <h1 class="mb-5">Hotels</h1>
            </div>
            <div class="row g-4 justify-content-center">
            @foreach($hotel as $hotel)

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                    

                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/{{$hotel->image}}" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$hotel->address}}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i></small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i></small>
                        </div>
                        
                        <div class="text-center p-4">
                            <h3 class="mb-0">{{$hotel->name}}</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>{{$hotel->description}}</p>
                            <div class="d-flex justify-content-center mb-2">
                            <a href="{{$hotel->url}}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="{{route('view_booking',['hotel'=>$hotel])}}" target="_blank" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>

                            
                        </div>
                  

                    </div>
                    

                </div>
                @endforeach
               
                       




                <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/294520642.jpg?k=42fae5010e33721147e244ff99416ac0a58ae4a3ca88453e96d0a46c64780bcc&o=&hp=1" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>$50.00</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i></small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i></small>
                        </div> -->
                        <!-- <div class="text-center p-4">
                            <h3 class="mb-0">Kendaka Nubian House</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="aswan.php" target="_blank" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->
    <!-- FACILITES -->




    <!-- Reach us -->
<h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font" >RECH US</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded"  height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3642.234763007556!2d32.88936311446251!3d24.09323828151079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x143664b09fb86a91%3A0x61d0db0b73ea5fd0!2sM%C3%B6venpick%20Aswan!5e0!3m2!1sen!2seg!4v1657026715612!5m2!1sen!2seg"  loading="lazy" ></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4 ">
        <h5>Follow us</h5>
        <a href="#" class="d-inline-block mb-3 " >
        <span class="badge bg-light text-dark fs-6 p-2" >
          <i class="bi bi-twitter me-1"></i>  Twitter
        </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3 " >
        <span class="badge bg-light text-dark fs-6 p-2" >
          <i class="bi bi-facebook me-1"></i>  Facebook
        </span>
        </a>
        <br>
        <a href="#" class="d-inline-block  " >
        <span class="badge bg-light text-dark fs-6 p-2" >
          <i class="bi bi-instagram me-1"></i>  Instagram
        </span>
        </a>
        <br>
        <!-- <a href="tel: 01152145025" class="d-inline-block  text-decoration-none text-dark " >
          <i class="bi bi-telephone-fill"></i>  01004775551
        </a> -->
      </div>
      <div class="bg-white p-4 rounded mb-4 ">
        <h5>Call us</h5>
        <a href="tel: 01152145025" class="d-inline-block mb-2 text-decoration-none text-dark " >
          <i class="bi bi-telephone-fill"></i>  01152145025
        </a>
        <br>
        <a href="tel: 01152145025" class="d-inline-block  text-decoration-none text-dark " >
          <i class="bi bi-telephone-fill"></i>  01004775551
        </a>
      </div>

    </div>
  </div>
</div>
<br><br><br><br>
<br><br> <br><br>
<br><br><br><br>
<!-- ////////////// -->




        <!-- Booking End -->


<!-- ??????????????????????? -->

























<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="hotel.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="home/js/book2.js"></script>
<!-- ???????????? -->
  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="home/js/book.js"></script>
<!-- ?????????? -->
</body>
</html>