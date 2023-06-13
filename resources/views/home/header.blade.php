<style>.img{width:16%; padding:0px;}
</style>
<section class="header">

<a class="img" href="/"><img  src="images/logo.png" alt=""> </a> 
<!--<a href="index.php" class="logo">Awel Safaria</a>-->

    <nav class="navbar">
        <a href="/">Home</a>
        <a href="about">About</a>
        <a href="package">Tours</a>
        <a href="book">Hotels</a>
        <a href="contact">Contact Us</a>
       @auth <a href="cart">Cart</a>@endauth

        @if (Route::has('login'))
        @auth
        <x-app-layout>
        </x-app-layout>
        @else
        <a class="" href="{{ route('login')}}">Login</a>
        <a class="" href="{{ route('register')}}">Register</a>
        @endauth
        @endif
    </nav>


   <div id="menu-btn" class="fas fa-bars"></div>

</section>
