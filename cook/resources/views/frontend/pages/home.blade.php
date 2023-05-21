@extends('layouts.frontend')
@section('title')
Home
@endsection

@section('content')

    {{-- Slider start --}}

    @include('frontend.include.slider')

    {{-- Slider END --}}


    {{-- junk food start --}}

    <section class="blog">

        <h1 class="title"> <span>Junk Food</span> <a href="junk.php">view all >></a> </h1>

        <div class="box-container">

            @foreach ($products2 as $item)
                <div class="box">
                    <div class="image">
                        <img src="{{ $item->image != null ? asset('images/products/'.$item->image)  : 'https://via.placeholder.com/80' }}" alt="">
                    </div>
                    <div class="content">
                        <h3>{{ $item->product_name }}</h3>
                        <p>{{ $item->product_des }}</p>
                        <a href="#" class="btn">read more</a>
                        <div class="icons">
                            <a href="#"> <i class="fas fa-calendar"></i> {{ date('d.m.Y', strtotime($item->created_at)) }} </a>
                            <a href="#"> <i class="fas fa-user"></i> by admin </a>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>

    </section>


{{-- junk food End --}}


    <section class="blog">

        <h1 class="title"> <span>Diet Recipe</span> <a href="diet.php">view all >></a> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="{{ asset('/') }}web-style/image/a.png" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here...</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, harum.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('/') }}web-style/image/b.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here...</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, harum.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('/') }}web-style/image/c.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here...</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, harum.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('/') }}web-style/image/d.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here...</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, harum.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('/') }}web-style/image/ee.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here...</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, harum.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('/') }}web-style/image/d.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here...</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, harum.</p>
                    <a href="#" class="btn">read more</a>
                    <div class="icons">
                        <a href="#"> <i class="fas fa-calendar"></i> 21st may, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by admin </a>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection
