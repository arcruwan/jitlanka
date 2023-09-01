<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSSnew/dayTours.css">
    <link rel="stylesheet" href="CSSnew/tours.css">
    <link rel="stylesheet" href="CSSnew/footerAndNav.css">
    <link rel="stylesheet" href="CSSnew/navBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
    
    <meta name="description" content="JIT Lanka Tours is a company comprising of qualified, licensed Tourist Guide Lecturers and Drivers who are registered with the Tourism Development Authority (SLTDA) Of Sri Lanka. We are based in Kandy the Central Province of Sri Lanka and are committed to assist you to make your dream Tour to Sri Lanka come true whilst ensuring the safety and security of our Guests at all times.">
    <meta name="keywords" content="Kandy, Sri Dalada Maligawa, Temple of the Sacred Tooth,Kandy View Point, Bahirawakanda Temple, Udawattakele Commonwealth War Cemetery,
        Peradeniya Royal Botanical Gardens, Sigiriya, Pidurangala Temple, The Golden Caves Temple in Dambulla, Sri Muthumari Amman Kovil, 
        Nalanda Gedige, Polonnaruwa,Knuckles Conservation Forest, Ambuluwawa, Minneriya National Park, Kaudulla National Park,Hurulu Eco Park,
        Pinnawala Elephant Orphanage, Gadaladeniya Temple, Lankathilaka Temple, Embekke Dewalaya, Nuwaraeliya, Ramboda Falls, Royal Golf Club, 
        Nuwaraeliya Post Office, Victoria Park, Lake Gregory, Ella, Kithulagala,  Kandy Lake, Traditional Dance, Strawberry Farm, Colombo, Gangaramaya Temple,
        Street Foods, Dutch Hospital, Souvenir Shopping, Little Adams Peak, Nine Arch Bridge, Mirissa Beach, Madu River, Negombo, Train Ride To Ella,
        Yala National Park, Galle, Tangalle, Tangalle Beach, Galle Fort, Stilt Fishermen, Trincomalee, Pigeon Island, Old Dutch Fort in Trincomalee, 
        Turtle Hatchery, Mask Museum, Coconut Tree Hill, Udawalawe National Park, Negombo Fish Market, Sacred City Of Anuradhapura, Wilpattu National Park ,
        Knuckles Conservation Forest, Peradeniya Royal Botanical Gardens, Horton Plains National Park, Negombo fish market, Royal Golf Club, 
        Whale Watching, Leisure at the Beach, Sri Lanka Round Tours, Sri Lanka holiday tour , Round tour Sri Lanka, Sri Lanka Tours, Tour Sri Lanka, Travel Sri Lanka, Sri Lanka Tour Packages, Sri Lanka Travel Packages, Sri Lanka Holiday Packages, Sri Lanka Airport Taxi, Sri Lanka Airport Transfer, Sri Lanka Privat Drivers, Sri Lanka Drivers, Tour operator in Sri Lanka , Travel agents in Sri Lanka , Travel company in Sri Lanka , Tour company in Sri Lanka , Airport transport Sri Lanka , Airport taxi Sri Lanka">


        <link rel="stylesheet" href="CSSnew/galleryCSS.css">
    <link href=" https://cdn.jsdelivr.net/npm/icomoon@1.0.0/style.min.css " rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->


            <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="jitImage/logo/1jitLogo.png"/>



    <title>@yield('title')</title>
</head>

<body>

    {{-- ----------------------- nav start ---------------------------- --}}

        <div class="topnav">
            <div id="myLinks">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('daytours') }}">Day Tours</a>
                <a href="{{ route('RoundTours') }}">Round Tours</a>
                <a href="{{url('/gallery')}}">Gallery</a>
                <!--<a href="{{ route('home') }}">Services</a>-->
                <a href="/#aboutusJIT">About</a>
                <a href="/#contactUsPage">Contact</a>
            </div>
            </a>
        </div>

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="fa fa-envelope js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <div class="site-navbar-wrap" id="mainNav">
            <div class="site-navbar-top">
                <div class="container py-3">
                    <div class="row">

                        <div class="NavLogo2">
                            <a href="{{ route('home') }}"> <img src="jitImage/logo/jitLogo.png" id="navlogo2IMG" class="logo"alt=""></a>
                        </div>
                        <div class="pull-right text-end phoneNumber" id="ContactLinks">

                            <i class="fa fa-whatsapp text-white" aria-hidden="true"></i>
                            <span class="me-5 liHv" style="color: aliceblue;">( +94 ) 77 162 2335</span>
                            <i class="fa fa-mobile text-white" aria-hidden="true"></i>
                            <span class="me-5 liHv" style="color: aliceblue;">( +94 ) 76 478 0922</span>
                            <i class="fa fa-mobile text-white" aria-hidden="true"></i>
                            <span class="me-5 liHv" style="color: aliceblue;">( +94 ) 77 162 2335</span>
                            <i class="fa fa-envelope text-white" aria-hidden="true"></i>
                            <span class="me-5 liHv" style="color: aliceblue;">info@jitlankatours.com</span>
                            {{-- <a href="#" target="_blank"><span class="fa fa-facebook liHv" >&nbsp;&nbsp;</span></a>
                            <a href="#" target="_blank"><span class="fa fa-tripadvisor liHv">&nbsp;&nbsp;</span></a>
                            <a href="#" target="_blank"><span class="fa fa-instagram liHv" >&nbsp;&nbsp;</span></a> --}}

                            <hr class="hr">

                        </div>
                    </div>
                </div>
            </div>

            <div class="site-navbar site-navbar-target js-sticky-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="navbar-header flex-item" id="LogoName">
                                <div class="navbar-brand text-white" href="#home" id="logoNameText">JIT Lanka Tours</div>
                            </div>
                        </div>
                        <div class="col-8">
                            <nav class="site-navigation text-right text-end" role="navigation">
                                <div class="container" id="">
                                    <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                        <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                        <li><a href="{{ route('daytours') }}" class="nav-link">Day Tours</a></li>
                                        <li><a href="{{ route('RoundTours') }}" class="nav-link">Round Tours</a></li>
                                        <li><a href="{{url('/gallery')}}">Gallery</a></li>
                                        <li><a href="/#testimonyNew" class="nav-link">About us</a></li>
                                        <li><a href="/#contactUsPage" class="nav-link">Contact us</a></li>

                                    </ul>
                                </div>
                                    <a onclick="dropDown();"><div class="hambrg icon" id="hamDiv">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div></a>
                            </nav>
                        </div>

                        <div id="otherPagesDropDown">
                            <ul>
                                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                                <li><a href="{{ route('daytours') }}" class="nav-link">Day Tours</a></li>
                                <li><a href="{{ route('RoundTours') }}" class="nav-link">Round Tours</a></li>
                                <li><a href="{{url('/gallery')}}" class="nav-link">Gallery</a></li>
                                <li><a href="/#contactUsPage" class="nav-link">Contact us</a></li>
                                <li><a href="/#testimonyNew" class="nav-link">About us</a></li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    {{-- ----------------------- nav end ------------------------------ --}}



       



    <div class="p-4"></div>
    @yield('content')

    <!-- footer -->
    <section aria-label="subfooter" class="subfooter no-bottom" style="padding-top: 50px">
        <div class="container">
            <div class="container-fluid m-5-hor">
                <div class="row">
                    <div class="col-md-4">
                        <div class="wrap-subfooter">
                            {{-- <h4>JIT Lanka Tours</h4>
                            <div class="subfooter-content-left">JIT Lanka Tours have more than ten years well
                                experienced
                                guides, tour drivers and luxury vehicles. We offer the unique mix of tour packages under
                                the
                                reasonable rates in Sri Lanka.
                            </div> --}}
                            <span class="footerLogoo">
                                <div>
                                    <img src="jitImage/logo/jitLogo.png" alt="" id="footerLogo">
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-1">
                        <div class="wrap-subfooter">
                            <h4>Services</h4>
                            <div class="footer-packages-list">
                                <a href="#" class="list-packages" style="color: rgb(55, 55, 55)">
                                    Day Tours </a>
                                <br>
                                <a href="#" class="list-packages" style="color: rgb(55, 55, 55)">
                                    Round Tours </a>
                                <br>
                                <a href="#" class="list-packages" style="color: rgb(55, 55, 55)">
                                    Airport Pickup & Drop from Kandy </a>
                                <br>
                                {{-- <a href="#" class="list-packages">
                                    Adventure and Camping Sri Lanka </a> --}}
                                {{-- <br> --}}
                                {{-- <a href="#" class="list-packages">
                                    Taxi Services </a> --}}
                                {{-- <br> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <div class="wrap-subfooter" id="contactInfoFooter">
                            <h4>Contact Info</h4>
                            <div class="subfooter-content-right" style="color: rgb(55, 55, 55)">No 5/1 Polwattha, Kundasale, Kandy. 20000.</div>
                            <div class="subfooter-content-right" style="color: rgb(55, 55, 55)">Phone: ( +94 ) 76 478 0922</div>
                            <div class="subfooter-content-right" style="color: rgb(55, 55, 55)">Phone: ( +94 ) 77 162 2335</div>
                            <div class="subfooter-content-right" style="color: rgb(55, 55, 55)">Email: info@jitlankatours.com</div>

                                {{-- <div class="logo" id="footerSocialMedia">
                                    <a href="#"><img src="jitImage/socialMedia/trip.png" alt="" class="socialImage"></a>
                                    <a href="#"><img src="jitImage/socialMedia/facebook.png" alt="" class="socialImage"></a>
                                    <a href="#"><img src="jitImage/socialMedia/instagram.png" alt="" class="socialImage"></a>
                                </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <footer class="alt">
        <div class="container-fluid m-5-hor">
            <div class="row">
                <div class="col-md-12 text-left">
                    <span class="">&copy; Copyright - 2023 JIT Lanka Tours. All Right Reserved. </span><br>
                    <span class=""> Designed By <a href="#" target="blank_">OpenCodeLabs (pvt) Ltd</a>.</span>
                </div>
            </div>
        </div>
    </footer>




    {{-- ------------------------ footer end ----------------------- --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
        AOS.init({
            duration: 1000,
        });
        </script>

    {{-- ------------ whatsApp ----------- --}}

<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-66f5c742-5136-4ab0-91d3-3b35aaf1bbec"></div>

    {{-- ------------ whatsApp ----------- --}}


    <script>
        function dropDown() {
            const MobileMenu = document.getElementById("otherPagesDropDown");
                MobileMenu.classList.toggle('show');
        }

         const MobileMenu = document.getElementById("otherPagesDropDown");
         const navbarLinks = MobileMenu.getElementsByTagName('a');

            for (let i = 0; i < navbarLinks.length; i++) {
                navbarLinks[i].addEventListener('click', function() {
                    MobileMenu.classList.remove('show');
            });
        }

    </script>


    @yield('scripts')
</body>

</html>
