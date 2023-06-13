<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>



<!-- header section starts  -->

<section class="header">

    <a href="index.php" class="logo">Awel Safaria</a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Tours</a>
        <a href="book.php">Booking</a>
    </nav>


   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/aswan.jpg) no-repeat">

   <h1>packages</h1>
</div>
<!-- Search-->

<div class="wrapper">
    <div id="search-container">
        <input
                type="search"
                id="search-input"
                placeholder="Search product name here.."
        />
        <button id="search">Search</button>
    </div>
    <div id="buttons">
        <button class="button-value" onclick="filterProduct('all')">All</button>
        <button class="button-value" onclick="filterProduct('Tours')">
            Tours
        </button>
        <button class="button-value" onclick="filterProduct('Tourguide')">
            Tourguide
        </button>
        <button class="button-value" onclick="filterProduct('Transport')">
            Transport
        </button>
        <button class="button-value" onclick="filterProduct('Booking')">
            Booking
        </button>
    </div>
    <div id="products"></div>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/temp.png" alt="">
         </div>
         <div class="content">
            <h3>Abu Simbel</h3>
            <p>Built by Ramses II, and saved from destruction by a remarkable UNESCO rescue project in the 1970s, Abu Simbel is not only a triumph of ancient architecture, but also of modern engineering.
                The mammoth scale of the Great Temple of Ramses II and the Temple of Hathor sitting on the banks of Lake Nasser trumps everything else in Egypt and has to be seen to be believed.</p>
            <a href="abu.php" class="btn">Read More</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/sight.png" alt="">
         </div>
         <div class="content">
            <h3>Philae Temple</h3>
            <p>The sacred Temple of Isis (more commonly known as Philae Temple) is one of Upper Egypt's most beguiling monuments both for the exquisite artistry of its reliefs and for the gorgeous symmetry of its architecture,
                which made it a favorite subject of Victorian painters.</p>
            <a href="philea.php" class="btn">Read More</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/book.png" alt="">
         </div>
         <div class="content">
            <h3>The Unfinished Obelisk</h3>
            <p>Aswan's Northern Quarry is home to the famous Unfinished Obelisk – a 41-meter-long and four-meter-wide chunk of stone that was probably abandoned because of a crack in the rock.
                It's estimated that if completed, the obelisk would have weighed 1,168 tons and would have been the largest ever hewn.</p>
            <a href="oblisk.php" class="btn">Read More</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/sail.png" alt="">
         </div>
         <div class="content">
            <h3>Sail on a Felucca</h3>
            <p>The quintessential way to sightsee in Aswan is by taking to the river on a felucca (traditional lateen-sail boat).
                You'll have no problems finding a captain willing to take you on a river tour. Felucca captains hang out along Aswan's Nile-side corniche all day, touting for customers.</p>
            <a href="fluca.php" class="btn">Read More</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/nub.png" alt="">
         </div>
         <div class="content">
            <h3>Nubian Museum</h3>
            <p>Aswan's rather fantastic Nubian Museum is one of Egypt's best and a must for anyone interested in the history and culture of both ancient and modern Nubia.
                It documents the riches of a culture that was all but washed away with the building of the Aswan Dam and creation of Lake Nasser.</p>
            <a href="nub.php" class="btn">Read More</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/dam.png" alt="">
         </div>
         <div class="content">
            <h3>Aswan High Dam</h3>
            <p>Aswan's High Dam is modern Egypt's most lauded and yet controversial building project.Begun in 1960 and taking 11 years to complete,
                the dam was President Nasser's pet project and greatest achievement and was achieved through funding and technical help from the Soviet Union.</p>
            <a href="dam.php" class="btn">Read More</a>
         </div>
      </div>



</section>

<!-- packages section ends -->
















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

<script src="script2.js"></script>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
