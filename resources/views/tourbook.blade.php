<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tour booking</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="home/css/style.css">
   <script>
      function func() {
      var input = document.getElementById("sight");
      console.log( input);
      document.getElementById("main").innerHTML ="{{$tourtable->price}}";
      

  }</script>

</head>
<body>

<!-- header section starts  -->

@include('home.header')

<!-- header section ends -->
@if(session()->has('message'))
<h1>{{session()->get('message')}}</h1>
@endif
<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your Tour!</h1>

   <form action="{{url('addtourbook')}}" method="post" class="book-form">
@csrf     
<input type="text" name="tour_table_id" value="{{$tourtable['id']}}" readonly hidden>
 <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter the reservation name" name="name" value="{{Auth::user()->name}}" readonly>
         </div>

         <input type="text" name="userid" value="{{Auth::user()->id}}" hidden readonly >

         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone" value="{{Auth::user()->phone}}" readonly>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" value="{{Auth::user()->address}}" readonly>
         </div>
        
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of Visitors" name="number">
         </div>

         

         
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
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
           <a href="#"> <i class="fas fa-envelope"></i> AwelSafaria@gmail.com </a>
           <a href="#"> <i class="fas fa-map"></i> Aswan, Egypt - 400104 </a>
       </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>



</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
