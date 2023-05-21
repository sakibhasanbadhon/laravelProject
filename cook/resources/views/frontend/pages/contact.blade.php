@extends('layouts.frontend')
@section('title')
 Contact
@endsection



@section('content')


    <section style="margin-top:50px" class="heading">
        <h3>contact us</h3>
        <p> <a href="{{ url('/') }}">home</a> / <span>contact</span> </p>
    </section>

<div class="contact">

    <form action="">
        <h3>get in touch</h3>
        <span>your name</span>
        <input type="text" class="box">
        <span>your number</span>
        <input type="number" class="box">
        <span>your email</span>
        <input type="email" class="box">
        <span>your message</span>
        <textarea class="box" name="" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d454.525722827635!2d89.32632263835498!3d24.921023101315658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shouse%20!5e1!3m2!1sen!2sbd!4v1644212498156!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div>




@endsection
