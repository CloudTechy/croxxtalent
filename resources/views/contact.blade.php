<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Croxx Talent</title>
    <link rel="shortcut icon" href="{{ mix('images/logoicon.png') }}" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet"> 
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
    <section class="about-banner">
        <div class="header-container header-bg hide-menu">
            <div class="container">
                <div class="row">
                    <div class="col-3 header-logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ mix('images/logo.png') }}" alt="Croxx Talent" width="220">
                        </a>
                    </div>
                    <div class="col-6 nav-menu">
                        <ul>
                            <li><a href="{{ route('home') }}" >Home</a></li>
                            <li><a href="{{ route('about') }}" >About</a></li>
                            <li><a href="#" >Blog</a></li>
                            {{-- <li><a href="#" >Jobs </a><sup><span class="badge badge-primary primary-bg">3</span></sup></li> --}}
                            <li class="active"><a href="{{ route('contact') }}" >Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-3 header-btn">
                        <div class="row">
                            <div class="col p-2">
                                <a class="btn button-direct btn-md" href="{{ route('login') }}">Login</a>
                            </div>
                            <div class="col p-2">
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
                    <li><a href="{{ route('home') }}" >Home</a></li>
                    <li><a href="{{ route('about') }}" >About</a></li>
                    <li><a href="#" >Blog</a></li>
                    {{-- <li><a href="#" >Jobs </a><sup><span class="badge badge-primary primary-bg">3</span></sup></li> --}}
                    <li class="active-mobile"><a href="{{ route('contact') }}" >Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row  slide">
                    <div class="slide-content-left">
                        <h1 class="text-center">Contact Us</h1>
                    </div>
            </div>
        </div>
    </section>
    <div class="row p-5">
        <div class="contact-form col-lg-7 col-sm-12 mt-5 p-5">
            <form action="">
                <h3>Get in Touch</h3>
                <p>We'd love to hear from you. Please use the form below to get in touch with your questions, comments, or feedback.</p>
                <div class="row mt-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input
                          id="firstName3"
                          type="text"
                          placeholder="First Name"
                          name="firstName"
                        />
                      </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="form-group">
                          <input
                            id="emailAddress5"
                            type="email"
                            placeholder="Email"
                            name="emailAddress"
                          />
                        </div>
                      </div>
                  </div>
    
                  <div class="row mt-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input
                          id="phoneNumeber"
                          type="text"
                          placeholder="Phone Number"
                          name="phoneNumber"
                        />
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <input
                            id="subject"
                            type="text"
                            placeholder="Subject"
                            name="subject"
                          />
                        </div>
                      </div>
                  </div>
    
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea
                          id="address"
                          name="address"
                          placeholder="Message"
                          rows="7"
                          class="form-control"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                <button type="submit" class="btn btn-block btn-lg button-inverse">Submit</button>
            </form>
        </div>
    </div>
    <div class="container description">
        <div class="row card-container contact-cotainer">
                <div class="col content-card contact-card">
                    <img src="{{ mix('images/location.png') }}" class="mt-5" width="80" alt="Acountability Icon">
                    <h3 class="">Address</h3>
                    <p class="text-muted text-left">
                        <i class="fas fa-map-marker-alt"></i>
                        315a Oscar, opposite Lopalace, Aghase Way, Lekki, Lagos State, Nigeria.
                    </p>
                </div>
                <div class="col content-card contact-card">
                    <img src="{{ mix('images/phone.png') }}" class="mt-5" width="80" alt="Acountability Icon">
                    <h3 class="">Phone</h3>
                    <p class="text-muted">
                        <i class="fas fa-phone"></i>
                        +234 813 456 2234 <br>
                        <i class="fas fa-mobile"></i>
                        +234 813 456 2534 
                    </p>
                </div>
                <div class="col content-card contact-card">
                    <img src="{{ mix('images/mail.png') }}" class="mt-5" width="80" alt="Acountability Icon">
                    <h3 class="">Email</h3>
                    <p class="text-muted">
                        <i class="fas fa-envelope"></i>
                        Hello@croxxtalent.com </i><br>
                        <i class="fas fa-envelope"></i>
                        Support@croxxtalent.com 
                    </p>
                </div>
        </div>
        <div class="row contact-cotainer2">
                <div class="col-md-4">
                    <h3 class="mt-4">Address</h3>
                    <p class="text-muted text-left mb-4">
                        <i class="fas fa-map-marker-alt"></i>
                        315a Oscar, opposite Lopalace, Aghase Way, Lekki, Lagos State, Nigeria.
                    </p>
                </div>
                <div class="col-md-4">
                    <h3 class="mt-4 mb-4">Phone</h3>
                    <p class="text-muted mb-4">
                        <i class="fas fa-phone"></i>
                        +234 813 456 2234 <br>
                        <i class="fas fa-mobile"></i>
                        +234 813 456 2534 
                    </p>
                </div>
                <div class="col-md-4">
                    <h3 class="mt-4 mb-4">Email</h3>
                    <p class="text-muted mb-4">
                        <i class="fas fa-envelope"></i>
                        Hello@croxxtalent.com </i><br>
                        <i class="fas fa-envelope"></i>
                        Support@croxxtalent.com 
                    </p>
                </div>
        </div>
    </div>
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
    {{-- Footer Section  --}}
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