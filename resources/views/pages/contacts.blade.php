<!DOCTYPE html>
<html>
    <head>
        <title> HARMONY </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('css/slick-theme.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
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
                    <a href="{{ route('projects')}}"> PROJECTS </a>
                    <a href="#" id="active"> CONTACTS </a>
                </nav>
            </div>
        </header>

        <!-- contacts -->
        <div class="contacts">
            <div class="contact1" data-aos="zoom-in">
                <img src="{{ asset('images/contacts.jpg')}}">
            </div>

            <!-- form -->
            <div class="contact2">
                <form data-aos="fade-down-right">
                    <h3 id="contact" data-aos="fade-left"> Get In Touch With Us </h3>
                    <div class="form-group" data-aos="fade-right">
                      <label for="formGroupExampleInput" class="lbl"> Name </label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Full Name" pattern="^[a-zA-Z ]+$" title="Your name must be in characters only" autocomplete="on">
                    </div>
                    <div class="form-group" data-aos="fade-down">
                        <label for="formGroupExampleInput2" class="lbl"> Phone </label>
                        <input type="tel" class="form-control" id="formGroupExampleInput2" placeholder="Phone Number" pattern="^\+?\d{10,}$" title="Your phone must be at least 11 digits" autocomplete="on">
                      </div>
                    <div class="form-group" data-aos="fade-right">
                      <label for="exampleInputEmail1" class="lbl"> Email </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" title="Your email must be like that name@domain-name.com" autocomplete="on">
                    </div>
                    <div class="form-group" data-aos="fade-down">
                        <label for="exampleFormControlTextarea1" class="lbl"> Message </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Leave your message" title="Please leave your message" autocomplete="on" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" data-aos="fade-right">Submit</button>
                  </form>
            </div>
        </div>

        <!-- footer -->
        <footer class="c-foot">
            <div class="foot1-c">
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
        <script src="{{ asset('js/bootstrap.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/script.js')}}"></script>

    </body>
</html>