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
<link href="css/bootstrap.min.css" rel="stylesheet">
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
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">











<!-- ????????????? -->
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css2.css">

</head>
<body>

<!-- header section starts  -->

<section class="header">
   <a href="index.php" class="logo">Awel Safaria</a>

   <nav class="navbar">
       <a href="index.php">Home</a>
       <a href="about">About</a>
       <a href="package">Tours</a>
       <a href="book">Booking</a>
       <a href="contact">Contact Us</a>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->



<!-- ??????????????? -->
        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                    <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Aswan Room</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                    <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-150 wow zoomIn" data-wow-delay="0.1s" src="https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/237648627.jpg?k=fd3be72ea174ffd318041daa0807ddd111005bcfc9dfd0cd76b9b8f475705019&o=&hp=1" style="margin-top: 25%;">
                            </div>

                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src="https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/370395270.jpg?k=cbde4cb7dd0722a64bb05a06ce12df66d168782d19d5a7e64702efd0304f0320&o=&hp=1">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-400 wow zoomIn" data-wow-delay="0.7s" src="https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/326740621.jpg?k=5e664d5b9bc5b841ec86682212f2ed3bb1b309af2724159ec79892a66afc6ff4&o=&hp=1">
                            </div>
                        </div>
                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form id="form"  method="post" action="{{route('store_book')}}">
                            @csrf
                                     <div class="col-md-6">
                                         <div class="form-floating">
                                            <input type="text" class="form-control" id="name" value="{{Auth::user()->name}}" name="name">
                                     <label for="name">Your Name</label>
                                        </div>

                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkin"  name="check_in" placeholder="Check In" data-target="#date3" data-toggle="datetimepicker" />
                                            <label for="checkin">Check In</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" id="checkout" name="check_out" placeholder="Check Out" data-target="#date4" data-toggle="datetimepicker" />
                                            <label for="checkout">Check Out</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select1">
                                              <option value="1">Adult 1</option>
                                              <option value="2">Adult 2</option>
                                              <option value="3">Adult 3</option>
                                            </select>
                                            <label for="select1">Select Adult</label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="select2">
                                              <option value="1">Child 1</option>
                                              <option value="2">Child 2</option>
                                              <option value="3">Child 3</option>
                                            </select>
                                            <label for="select2">Select Child</label>
                                          </div>
                                    </div> -->


                                    <form id="product_form">
                                        <div class="row" id="row1">
                                            <div class="col-12">
                                        <div class="form-floating">
                                            <select class="form-select" id="select3" name="room_type">
                                                @foreach  ($hotel->rooms as $item)
                                              <option value={{$item['id']}}> {{$item['type']}}</option>

                                              @endforeach
                                            </select>
                                            <label for="select3"> Room type</label>
                                          </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="form-floating">
                                            <select class="form-select" id="select3" name="select_room">
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3"> 3</option>
                                              <option value="3">4</option>
                                              <option value="3"> 5</option>
                                              <option value="3"> 6</option>
                                              <option value="3"> 7</option>
                                            </select>
                                            <label for="select3">Select A Room</label>
                                          </div>
                                    </div>
                                        </div>
                                    <!-- <button class="btn btn-dark float-right mt-2" onclick="add_more_field()" >add more +</button> -->
                                    <!-- <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                            <label for="message">Special Request</label>
                                        </div>
                                    </div> -->
                                    {{-- <button  id="btn" type="button"  >add more +</button> --}}
                                    <!-- /// -->

                                    <!-- //// -->
                                     <div class="col-12">
                                         <button class="btn btn-primary w-100 py-3" type="submit" target="_blank">Book Now</a> </button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Booking End -->


 <!-- ??????????????????????? -->































 <!-- swiper js link  -->
 <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

 <!-- custom js file link  -->
 <script src="js/script.js"></script>
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
     <script src="js/main.js"></script>
     <script src="js/lol.js"></script>
 <!-- ?????????? -->
 </body>
 </html>
