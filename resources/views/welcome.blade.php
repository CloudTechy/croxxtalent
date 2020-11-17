<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Croxx Talent</title>
    <link rel="shortcut icon" href="{{ mix('images/logoicon.png') }}" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Germania+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tauri&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Changa&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <style>
        body{
            font-family: 'Nunito Sans', sans-serif;
        }
    </style>
</head>
<body>
    <section class="home-banner">
        <div class="header-container header-contain hide-menu">
            <div class="container">
                <div class="row">
                    <div class="col-3 header-logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ mix('images/logo.png') }}" alt="Croxx Talent" width="220">
                        </a>
                    </div>
                    <div class="col-6 nav-menu">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}" >Home</a></li>
                            <li><a href="{{ route('about') }}" >About</a></li>
                            <li><a href="#" >Blog</a></li>
                            {{-- <li><a href="#" >Jobs </a><sup><span class="badge badge-primary primary-bg">3</span></sup></li> --}}
                            <li><a href="{{ route('contact') }}" >Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-3 header-btn">
                        <div class="row">
                            <div class="col p-1 ">
                                <a class="btn button-direct btn-md" href="{{ route('login') }}">Login</a>
                            </div>
                            <div class="col p-1 mr-2">
                                <a class="btn button-inverse btn-md" href="{{ route('register') }}">Register</a>
                            </div>
                            <div class="col p-2 show-mobile"><i class="fas fa-bars"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container show-menu hide">
            <div class="container">
                <div class="row">
                    <div class="col-3 header-logo">
                        <img src="{{ mix('images/logo.png') }}" alt="Croxx Talent" width="220">
                    </div>
                    <div class="col-3 header-btn">
                        <div class="row">
                            <div class="col p-2">
                                <a class="btn button-direct btn-md" href="{{ route('login') }}">Login</a>
                            </div>
                            <div class="col p-2">
                                <a class="btn button-inverse btn-md" href="{{ route('register') }}">Register</a>
                            </div>
                            <div class="col p-2 hide-mobile"><i class="fas fa-times"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mobile-menu">
                <ul>
                    <li class="active-mobile"><a href="{{ route('home') }}" >Home</a></li>
                    <li><a href="{{ route('about') }}" >About</a></li>
                    <li><a href="#" >Blog</a></li>
                    {{-- <li><a href="#" >Jobs </a><sup><span class="badge badge-primary primary-bg">3</span></sup></li> --}}
                    <li><a href="{{ route('contact') }}" >Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row carousel slide" id="myCarousel" data-ride="carousel">
                        <!-- Indicators -->
                <!-- <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ul> -->
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ mix('images/test.jpg') }}" alt="Image1" class="imgslide1" width="100%" height="100%">
                        <div class="slide-content-left">
                            <h1>Get hired by top oil companies with a few steps...</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum scelerisque neque, 
                                maximus maximus orci commodo sit amet. Maecenas varius vestibulum felis a tincidunt. 
                            </p>
                            <button class="btn btn-lg btn-green block mt-4">Get Started</button>
                            <button class="btn btn-lg btn-blue block mt-4">Contact Us</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ mix('images/test2.jpg') }}" alt="Image2" class="imgslide2" width="100%" height="100%">
                        <div class="slide-content-right">
                            <h1>Get hired by top oil companies with a few steps...</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum scelerisque neque, 
                                maximus maximus orci commodo sit amet. Maecenas varius vestibulum felis a tincidunt. 
                            </p>
                            <button class="btn btn-lg btn-green block mt-4">Get Started</button>
                            <button class="btn btn-lg btn-blue block mt-4">Contact Us</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ mix('images/test3.jpg') }}" alt="Image33" class="imgslide3" width="100%" height="100%">
                        <div class="slide-content-left">
                            <h1>Get hired by top oil companies with a few steps...</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum scelerisque neque, 
                                maximus maximus orci commodo sit amet. Maecenas varius vestibulum felis a tincidunt. 
                            </p>
                            <button class="btn btn-lg btn-green block mt-4">Get Started</button>
                            <button class="btn btn-lg btn-blue block mt-4">Contact Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container p-5 about-content">
        <h2 class="mb-4 text-center"> We’re on a mission </h2>
        <div class="row">
            <div class="col-md-6 info-img  order-sm-12 pl-5 mb-3">
                    <img src="{{ mix('images/about.png') }}" alt="About Us" width="400">
            </div>
            <div class="col-md-6  order-sm-1 about-conten-paragraph">
                <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum scelerisque neque, 
                    maximus maximus orci commodo sit amet. Maecenas varius vestibulum felis a tincidunt. 
                    Aenean sollicitudin accumsan dictum. Fusce ut nisi lacus. Quisque malesuada faucibus sagittis. <br> <br>
                    Cras nec est feugiat, fermentum leo nec, auctor ante. Integer a lorem ex. 
                    Vestibulum vitae neque nec massa efficitur pharetra in id sapien. 
                    Proin gravida nisl nec elit fringilla, a cursus nibh vulputate. 
                    Aliquam finibus finibus nisi at tincidunt. Fusce metus augue,<br>
                    <button class="btn button-inverse btn-lg mt-4">Get Started</button> <br>
                    <p class="text-muted">Already a member?<a href=""> Sign In</a></p>
                </p>
            </div>
        </div>
    </div>
    <section class="p-0 portfolio-section">
        <div class="container">
            <div class="row card-container">
                <div class="col-md image-card mr-3 mt-2 mb-4">
                    <img src="{{ mix('images/engineers.jpg') }}" alt="employer_search" width="100%">
                    <div class="image-card-caption">
                        <h4>Loreem Ipsolum</h4>
                        <p>this is a test to see how it works</p>
                    </div>
                </div>
                <div class="col-md image-card mr-3 mt-2 mb-4">
                    <img src="{{ mix('images/engineers2.jpg') }}" alt="employer_search" width="100%">
                    <div class="image-card-caption">
                        <h4>Loreem Ipsolum</h4>
                        <p>this is a test to see how it works</p>
                    </div>
                </div>
                <div class="col-md image-card mr-3 mt-2 mb-4">
                    <img src="{{ mix('images/engineers3.jpg') }}" alt="employer_search" width="100%">
                    <div class="image-card-caption">
                        <h4>Loreem Ipsolum</h4>
                        <p>this is a test to see how it works</p>
                    </div>
                </div>
                <div class="col-md image-card mt-2 mb-4">
                    <img src="{{ mix('images/engineers4.jpg') }}" alt="employer_search" width="100%">
                    <div class="image-card-caption">
                        <h4>Loreem Ipsolum</h4>
                        <p>this is a test to see how it works</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info-section">
        <div class="container">
            <div class="row info-sub-section">
                <div class="info-img col-sm-6">
                    <img src="{{ mix('images/employee_search.png') }}" alt="employee_search"  width="300">
                </div>
                <div class="col-sm-6 info-content">
                    <h3>Looking For An Employee?</h3>
                    <p class="text-muted">
                        Lorem Ipsum is simply dummy 
                        text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry’s standard 
                        dummy text ever since the 1500s, when an unknown 
                        printer took a galley of type and scrambled it to make
                        a type specimen book. 
                    </p>
                </div>
            </div>
            <div class="row pt-5 info-sub-section">
                <div class="info-img col-md-6 order-sm-12">
                    <img src="{{ mix('images/employer_search.png') }}" alt="employer_search" width="350">
                </div>
                <div class="col-md-6  order-sm-1 info-content">
                    <h3>Meet A Great Employer!</h3>
                    <p class="text-muted">
                    Lorem Ipsum is simply dummy 
                    text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry’s standard 
                    dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make
                    a type specimen book. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="container description">
        <h1 class="text-center text-muted mt-4">How it works</h1>
        <div class="row card-container">
                <div class="col-md content-card" style="margin: 0px;">
                    <img src="{{ mix('images/service.png') }}" class="mt-5" width="80" alt="Acountability Icon">
                    <h3 class="mt-4 mb-4">Registration</h3>
                    <p class="text-muted mb-4">
                        Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit 
                        Lorem ipsum dolor sit amet, 
                    </p>
                    <a class="btn button-direct btn-md" href="{{ route('register') }}">Register Now</a>
                </div>
                <div class="col-md content-card">
                    <img src="{{ mix('images/settings.jpg') }}" class="mt-5" width="80" alt="Acountability Icon">
                    <h3 class="mt-4 mb-4">Setup</h3>
                    <p class="text-muted mb-4">
                        Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit 
                        Lorem ipsum dolor sit amet, 
                    </p>
                    <a class="btn button-direct btn-md" href="{{ route('register') }}">Register Now</a>
                </div>
                <div class="col-md content-card">
                    <img src="{{ mix('images/layers.png') }}" class="mt-5" width="80" alt="Acountability Icon">
                    <h3 class="mt-4 mb-4">CV Builder</h3>
                    <p class="text-muted mb-4">
                        Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit 
                        Lorem ipsum dolor sit amet,  
                    </p>
                    <a class="btn button-direct btn-md" href="{{ route('register') }}">Register Now</a>
                </div>
                <div class="col-md content-card">
                    <img src="{{ mix('images/appointment.png') }}" class="mt-5" width="80" alt="Acountability Icon">
                    <h3 class="mt-4 mb-4">Appointment</h3>
                    <p class="text-muted mb-4">
                        Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit 
                        Lorem ipsum dolor sit amet, 
                    </p>
                    <a class="btn button-direct btn-md" href="{{ route('register') }}">Register Now</a>
                </div>
        </div>
    </div>
    <!-- <section class="video-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <iframe width="100%" height="570" src="https://www.youtube.com/embed/U0gVbw2Ynwo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            </div>
        </div>
    </section> -->
    <section class="our-vision p-3">
        <div class="container about-content">
            <h2 class="mb-5 text-center">We Have a Vision </h2>
            <div class="row">
                <div class="col-md-6 info-img order-sm-12 pl-5 mb-3">
                        <img src="{{ mix('images/about.png') }}" alt="About Us" width="400">
                </div>
                <div class="col-md-6  order-sm-12 about-conten-paragraph">
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse bibendum scelerisque neque, 
                        maximus maximus orci commodo sit amet. Maecenas varius vestibulum felis a tincidunt. 
                        Aenean sollicitudin accumsan dictum. Fusce ut nisi lacus. Quisque malesuada faucibus sagittis. <br> <br>
                        <br>
                        <button class="btn button-inverse btn-lg mt-4">Get Started</button> <br>
                        <p class="text-muted">Already a member?<a href=""> Sign In</a></p>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="subscribe-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Ready to see what we’re building?</h3>
                    <div class="input-group mb-3 subscribe-input">
                        <input type="text" class="form-control" placeholder="Your Email">
                        <div class="input-group-prepend">
                            <button class="btn btn-lg btn-subscribe" type="button">Subscribe</button>
                        </div>
                    </div>
                    <p>We care about protecting your data. Here’s our <a href="">Privacy Policy.</a></p>
                </div>
            </div>
        </div>
    </section>
    {{-- Footer section  --}}
    <section class="footer-section">
        <div class="container">
            <div class="row mt-3 mb-4">
                <div class="col-md-3">
                    <div class="row ml-1">
                        <img src="{{ mix('images/mainlogo.png') }}" alt="Croxx Talent" style="max-width: 250px;" class="mb-4 img-fluid">
                    </div>
                    <div class="row ml-1">
                        <p> &copy; Copyright 2020 Croxx Talent <br> All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-3 footer-links">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-links">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Chat Us</a></li>
                        <li><a href="#">Legal Notice</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-md-3 social-icons">
                    <h4>Connect</h4>
                    <a href="">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>