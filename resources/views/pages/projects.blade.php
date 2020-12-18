<!DOCTYPE html>
<html>
    <head>
        <title> HARMONY </title>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('css/slick-theme.css')}}">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="icon" href="{{ asset('images/harmony-logo.jpg')}}">
        <link rel="stylesheet" href="{{ asset('fonts/fonts/css/all.css')}}"> 
    </head>
    <body>

        <!-- scroll -->
        <div class="header">
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </div>

        <!-- header -->
        <header>
            <div class="banner">
                <img src="{{asset('images/harmony-banner.jpg')}}">
                <div class="text"> HARMONY </div>
            </div>
            <div class="harmony" id="navbar">
                <div class="logo">
                    <a href="{{ route('harmony')}}">
                    <img src="{{asset('images/harmony-logo.jpg')}}"  id="logo">
                </a>
                </div>
                <nav>
                    <a href="{{ route('home')}}"> HOME </a>
                    <a href="{{ route('about')}}"> ABOUT </a>
                    <a href="{{ route('service')}}"> SERVICE </a>
                    <a href="#" id="active"> PROJECTS </a>
                    <a href="{{ route('contacts')}}"> CONTACTS </a>
                </nav>
            </div>
        </header>

        <!-- rooms -->
        <h5 data-aos="fade-down-right"> ROOMS </h5>
        <hr data-aos="fade-right">
        <div class="rooms" data-aos="fade-left">
                <span>
                    <a href="{{ route('master')}}" class="room">
                        <img src="{{ asset('images/svg/master-room.svg')}}" width="200vw" height="200vw">
                        <h2> Master-Room </h2>
                    </a>    
                </span>
                <span>
                    <a href="{{ route('single')}}" class="room">
                        <img src="{{ asset('images/svg/single-room.svg')}}" width="200vw" height="200vw">
                        <h2> Single-Room </h2>
                    </a>
                </span>
                <span>
                    <a href="{{ route('living')}}" class="room">
                        <img src="{{ asset('images/svg/living-room.svg')}}" width="200vw" height="200vw">
                        <h2> Living-Room </h2>
                    </a>
                </span>
                <span>
                    <a href="{{ route('dinning')}}" class="room">
                        <img src="{{ asset('images/svg/dinning-room.svg')}}" width="200vw" height="200vw">
                        <h2> Dinning-Room </h2>
                    </a>
                </span>
                <span>
                    <a href="{{ route('kitchen')}}" class="room">
                        <img src="{{ asset('images/svg/kitchen.svg')}}" width="200vw" height="200vw">
                        <h2> Kitchen </h2>
                    </a>
                </span>
        </div>

        <!-- products -->
        <h5 data-aos="fade-down-right"> PRODUCTS </h5>
        <hr data-aos="fade-right">
        <div class="products" data-aos="fade-left">
            <span>
                <a href="{{ route('master-bed')}}" class="room">
                    <img src="{{ asset('images/svg/master-bed.svg')}}" width="200vw" height="200vw">
                    <h2> Master-Bed </h2>
                </a>
            </span>
            <span>
                <a href="{{ route('single-bed')}}" class="room">
                    <img src="{{ asset('images/svg/single-bed.svg')}}" width="200vw" height="200vw">
                    <h2> Single-Bed </h2>
                </a>
            </span>
            <span>
                <a href="{{ route('closet')}}" class="room">
                    <img src="{{ asset('images/svg/closet.svg')}}" width="200vw" height="200vw">
                    <h2> Closet </h2>
                </a>
            </span>
            <span>
                <a href="{{ route('mirror')}}" class="room">
                    <img src="{{ asset('images/svg/mirror.svg')}}" width="200vw" height="200vw">
                    <h2> Mirror </h2>
                </a>
            </span>
            <span>
                <a href="{{ route('sofa')}}" class="room">
                    <img src="{{ asset('images/svg/sofa.svg')}}" width="200vw" height="200vw">
                    <h2> Sofa </h2>
                </a>
            </span>
            <span>
                <a href="{{ route('chair')}}" class="room">
                    <img src="{{ asset('images/svg/chair.svg')}}" width="200vw" height="200vw">
                    <h2> Chair </h2>
                </a>
            </span>
            <span>
                <a href="{{ route('table')}}" class="room">
                    <img src="{{ asset('images/svg/table.svg')}}" width="200vw" height="200vw">
                    <h2> Table </h2>
                </a>
            </span>
            <span>
                <a href="{{ route('cupboard')}}" class="room">
                    <img src="{{ asset('images/svg/cupboard.svg')}}" width="200vw" height="200vw">
                    <h2> Cupboard </h2>
                </a>
            </span>
        </div>

        <!-- footer -->
        <footer>
            <div class="foot1">
                <img src="{{ asset('images/harmony-logo.jpg')}}">
            </div>
            <div class="foot2">
                <h3> Happiness Guarantee </h3>
                <p>
                    If you’re not happy, we’re not happy. We work 
                    tirelessly to make sure your Harmony experience is 
                    delightful. That’s why we offer the Harmony Happiness 
                    Guarantee.
                </p>
                <p> ©2020 Harmony. All rights reserved. </p>
            </div>
            <div class="foot3">
                <h3> Contact Us </h3>
                <p><strong> call </strong> 040 222 22 22 </p>
                <p><strong> email </strong> harmony@gmail.com </p>
                <div class="links">
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class="fab fa-facebook"></i>                
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <i class="fab fa-instagram"></i> 
                    </a>
                    <a href="https://www.pinterest.com/" target="_blank">
                        <i class="fab fa-pinterest"></i>   
                    </a>
                </div>
            </div>
        </footer>

        

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="{{ asset('js/jquery-3.5.1.js')}}"></script>
        <script src="{{ asset('js/slick.min.js')}}" ></script>
        <script src="{{ asset('js/slick.js')}}"></script>
        <script src="{{ asset('js/script.js')}}"></script>

    </body>
</html>