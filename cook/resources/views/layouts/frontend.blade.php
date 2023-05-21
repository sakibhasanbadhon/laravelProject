<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') - {{ env('APP_NAME') }}</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="web-style/css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="{{ url('/') }}" class="logo"> <i class="fas fa-pepper-hot"></i> BDCooker </a>

    <form action="" class="search-form">
        <input type="search" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="login-btn" class="fas fa-user"></div>
    </div>

</header>


<!-- header section ends  -->

<!-- closer btn  -->

<div id="closer" class="fas fa-times"></div>

<!-- navbar  -->

<nav class="navbar">
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('about') }}">About</a>
    <a href="recipe.php">Recipes</a>
    <a href="junk.php">Junk Food</a>
    <a href="diet.php">Diet Food</a>
    <a href="{{ url('contact') }}">Contact</a>
    <a href="{{ url('privacy') }}">Privacy Policy</a>
</nav>


<div class="pcmenu">
    <a href="{{ url('') }}">Home</a>
    <a href="{{ url('about') }}">About</a>
    <a href="recipe.php">Recipes</a>
    <a href="junk.php">Junk Food</a>
    <a href="diet.php">Diet Food</a>
    <a href="{{ url('contact') }}">Contact</a>
    <a href="{{ url('privacy') }}">Privacy Policy</a>
 </div>



    <!-- MAIN CONTENT-->
        @yield('content')
    <!-- END MAIN CONTENT-->

    {{-- {{ $slot }} --}}



    @include('frontend.include.footer');
