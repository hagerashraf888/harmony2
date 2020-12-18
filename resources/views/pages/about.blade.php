<!DOCTYPE html>
<html>
    <head>
        <title> HARMONY </title>
        <meta charset="UTF-8">
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
                    <a href="#" id="active"> ABOUT </a>
                    <a href="{{ route('service')}}"> SERVICE </a>
                    <a href="{{ route('projects')}}"> PROJECTS </a>
                    <a href="{{ route('contacts')}}"> CONTACTS </a>
                </nav>
            </div>
        </header>

        <!-- about -->
        <div class="about" data-aos="fade-down">
            <div class="vision" data-aos="fade-up">
                <h1> Our Vision </h1>
                <p>
                    To Be The Global Leader Of Smart Furnishing Solutions.
                </p>
            </div>
            <div class="Mission" data-aos="fade-down">
                <h1> Our Mission </h1>
                <p>
                    We Timely Furnish Your Place With Innovative, Trendy And 
                    Well Designed Solutions Achieving The Highest Quality Yet 
                    Affordable.
                </p>
            </div>
        </div>

        <!-- who -->
        <div class="who">
            <div class="who1" data-aos="zoom-in">
                <img src="{{ asset('images/about.jpg')}}">
            </div>
            <div class="who2" data-aos="zoom-out-right">
                <h1> Who we are </h1>
                <p>
                    We are Specialized In Indoor Modern Furniture And 
                    Provides A Wide Range Of Furnishing Solutions For 
                    Hotels Resorts Industry As Well As Stylish Modern 
                    Residential Furniture.
                </p>
            </div>
        </div>

        <!-- everyone -->
        <section id="everyone">
            <h1 class="every"> Interior design is for everyone. </h1>

            <div class="place" data-aos="zoom-in-right">
                <i class="fas fa-home" id="every"></i>
                <h3> Find your happy place </h3>
                <p> 
                    You deserve a home that is functional and stylish, today. 
                    Don’t put it off until the kids are older or you have more 
                    time. We can create a beautiful space that fits your needs 
                    so you don’t have to be embarrassed to host book club next 
                    month. 
                </p>
            </div>

            <div class="affordable" data-aos="zoom-in-right">
                <i class="fas fa-money-bill" id="every"></i>                
                <h3> Delightfully affordable </h3>
                <p> 
                    We believe that interior design should be accessible to 
                    everyone. That’s why Harmony packages are designed to be 
                    affordable, and our designers are trained to work within 
                    your budget. 
                </p>
            </div>

            <div class="relationship" data-aos="zoom-in-right">
                <i class="fas fa-handshake" id="every"></i>
                <h3> Create a lasting relationship </h3>
                <p> 
                    Your Harmony pro is your friend, your guide, and your 
                    partner in home design. They’ll take care of your needs, 
                    help you create a custom space that grows with you, and 
                    they’re only a message away. 
                </p>
            </div>
        </section>

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