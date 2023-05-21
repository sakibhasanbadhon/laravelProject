@extends('layouts.frontend')
@section('title')
 About
@endsection



@section('content')

    <section style="margin-top:50px" class="heading">
        <h3>about us</h3>
        <p> <a href="{{ url('/') }}">home</a> / <span>about</span> </p>
    </section>

    <section class="about">

        <div class="image">
            <img src="{{ asset('/') }}web-style/image/nnn.png" alt="">
        </div>

        <div class="content">
            <span>welcome to our Website</span>
            <h3>May your daily food be delicious and fresh</h3>
            <p>May your first cooking be a delicious meal that everyone in the house members. in this website I will write articles about all types of food recipes. Our aim is to help the visitors of this website with all kinds of food recipes.</p>
            <p></p>
            <a href="contact.php" class="btn">Go To Contact</a>
        </div>

    </section>


@endsection
