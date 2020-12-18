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
                    <a href="{{ route('about')}}"> ABOUT </a>
                    <a href="#" id="active"> SERVICE </a>
                    <a href="{{ route('projects')}}"> PROJECTS </a>
                    <a href="{{ route('contacts')}}"> CONTACTS </a>
                </nav>
            </div>
        </header>

        <!-- service -->
        <section id="service">
            <div class="service1" data-aos="zoom-in">
                <img src="{{ asset('images/service.jpg')}}" class="sticky">
            </div>
            <div class="service2">
                <div class="design" data-aos="zoom-out-right">
                    <div class="s1">
                        <h3> DESIGNING </h3>
                        <img src="{{ asset('images/design.jpg')}}">
                    </div>
                    <div class="s2">
                        <p>
                            Harmony provides tailored interior design solutions
                            & renovation services for residential, commercial & 
                            office projects. The well-defined design process 
                            ensures a blueprint customized to your preferences. 
                            Our scope of work includes but not limited to interior 
                            design, furniture design, landscape design & product design. 
                            Part of the design process includes procurement services.
                        </p>
                    </div>
                    
                </div>

                <div class="contract" data-aos="zoom-out-right">
                    <div class="s1">
                        <h3> CONTRACTING  </h3>
                        <img src="{{ asset('images/contract.jpg')}}">
                    </div>
                    <div class="s2">
                        <p>
                            We deliver turn-key project in accordance with high 
                            quality standards. Our certified sppliers and skilled 
                            subcontractors are devoted to deliver premium quality 
                            finishes. Our scope of work includes but not limited 
                            to Architectural remodeling, HVAC, MEP, tiling works 
                            suspended ceilings, cladding, painting works and wood 
                            works.
                        </p>
                    </div>
                    
                </div>

                <div class="manage" data-aos="zoom-out-right">
                    <div class="s1">
                        <h3> PROJECT MANAGGEMENT</h3>
                        <img src="{{ asset('images/manage.jpg')}}">
                    </div>
                    <div class="s2">
                        <p>
                            We manage projects from commmencement to completion 
                            providing an exceptional planning service. We are strongly 
                            committed to delivering projects within time plan and budget 
                            constraints. As an award-winning design practice, quality is 
                            a matter of dedication. Our scope of work includes but not 
                            limited to: Resources planning, developing schedules, time/
                            cost planning, monitoring/reporting and quality control.
                        </p>
                    </div>
        
                </div>
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