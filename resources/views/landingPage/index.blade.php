@extends('layouts.landingPage')

@section('title')
    JIT LANKA TOURS
@endsection

@section('content')
    {{-- -------------------------- navBar start -------------------------- --}}

    <nav id="MobileNavBar" class="navbar navbar-default navbar-doublerow navbar-trans navbar-fixed-top">
        <!-- top nav -->
        <div id="WebNavBar">
            <img src="jitImage/logo/jitLogo.png" alt="" id="jitLankLogo">
        </div>
        <nav class="navbar navbar-top hidden-xs " id="UpperNavBar">
            <div class="container ms-auto" id="socialLinksDiv">
                <!-- right nav top -->
                <ul class="nav navbar-nav pe-5 ms-auto" id="socialLinks">
                    <li><a class="text-white"><i class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp; ( +94 ) 77 162 2335
                        </a> </li>
                    <li><a href="#" class="text-white"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;(
                            +94 ) 76 478 0922 </a></li>
                    <li><a href="#" class="text-white"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;(
                            +94 ) 77 162 2335</a></li>
                    <li><a href="#"><span class="text-white fa fa-envelope"> info@jitlankatours.com</span></a></li>
                   
                </ul>
            </div>

            <div class="dividline light-grey" id="dividline2"></div>
        </nav>
        <!-- down nav -->
        <nav class="navbar navbar-down" id="MainNavBar">
            <div class="container">
                <div class="flex-container">
                    <div class="navbar-header flex-item" id="LogoName">
                        <div class="navbar-brand" href="#home" id="logoNameText">JIT Lanka Tours</div>
                        <div id="contactInfo">
                            <a class="text-white"><i class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp; +94 76 478 0922
                            </a>
                        </div>
                    </div>

                    <ul class="nav navbar-nav flex-item hidden-xs pull-right" id="DownMenu">
                        <li><a href="#home">Home</a></li>
                        <li><a onclick="redirectToPage();" style="cursor: pointer;">Day Tours</a></li>
                        <li><a onclick="RoundTours();" style="cursor: pointer;">Round Tours</a></li>
                        <li><a onclick="gallery();" style="cursor: pointer;">Gallery</a></li>
                        <li><a href="#testimonyNew">About Us</a></li>
                        <li><a href="#contactUsPage">Contact Us</a></li>


                    </ul>
                </div>
            </div>
        </nav>
        <!-- dropdown only moblie -->
        <div class="pull-right">
            <a onclick="dropDown();">
                <div class="hambrg" id="hamDiv">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </a>
        </div>
        <div id="MobileMenu">
            <p><a href="#home">Home</a></p>
            <p><a onclick="redirectToPage();" style="cursor: pointer;">Day Tours</a></p>
            <p><a onclick="RoundTours();" style="cursor: pointer;">Round Tours</a></p>
            <p><a onclick="gallery();" style="cursor: pointer;">Gallery</a></p>
            <p><a href="#testimonyNew">About Us</a></p>
            <p><a href="#contactUsPage">Contact Us</a></p>


        </div>
    </nav>

    {{-- ----------------------------- navBar End --------------------------------------- --}}


    <!-- preloader -->
    <div class="bg-preloader-white"></div>
    {{-- <div class="preloader-white"> <strong >Welcome to JIT Lanka Tours. Please wait... </strong><br>
        <div class="mainpreloader">
            <span></span>
        </div>
    </div> --}}
    <!-- preloader end -->




    <!-- content wraper -->
    <div class="content-wrapper">
        <!-- slider -->
        <div id="home">
            <!-- revolution slider -->
            <section class="fullwidthbanner-container no-bottom no-top" aria-label="section-slider">
                {{-- <div>
                    <img src="jitImage/logo/tripadv.jpg" alt="" id="tripAdvisorLogo">
                    <a type="button" id="tripAdvisorBtn" href="https://www.tripadvisor.com/">Click Here</a>
                </div> --}}
                <div id="revolution-slider" class="slider-container">
                    <ul>
                      <li class="SliderLI" data-transition="parallaxtobottom" data-slotamount="10" data-masterspeed="1200"
            data-delay="5000">
            <img src="jitImage/swiper/swiper3.png" alt="" class="img-responsive sliderImages" data-start="0"
                data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone"
                data-bgfit="120" data-bgfitend="100" data-bgpositionend="center center" />
            <div class="tp-caption slide-big-heading sft slider-title" data-x="left" data-y="500" data-speed="800"
                data-start="400" data-easing="easeInOutExpo" data-endspeed="450" style="color: rgb(61, 61, 61)">
                Relax on Tropical Beaches
            </div>
            <div class="tp-caption slide-sub-heading sft" data-x="left" data-y="550" data-speed="1000"
                data-start="800" data-easing="easeOutExpo" data-endspeed="400">
                <p style="color: rgb(61, 61, 61); font-weight:500">The Sri Lanka beaches are well known for their idyllic
                    looks and beautiful scenery.</p>
            </div>
        </li>
                        <li class="SliderLI" data-transition="parallaxtobottom" data-slotamount="10"
                            data-masterspeed="1200" data-delay="5000">
                            <!--  BACKGROUND IMAGE --> <img src="jitImage/swiper/swiper5.jpg" class="sliderImages"
                                alt="" data-start="0" data-bgposition="center center" data-kenburns="on"
                                data-duration="10000" data-ease="Linear.easeNone" data-bgfit="120" data-bgfitend="100"
                                data-bgpositionend="center center" />
                            <div class="tp-caption slide-big-heading sft slider-title" data-x="left" data-y="500"
                                data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="450"
                                style="color: rgb(255, 255, 255)">Scenic
                                Central Highlands
                            </div>
                            <div class="tp-caption slide-sub-heading sft" data-x="left" data-y="550"
                                data-speed="1000" data-start="800" data-easing="easeOutExpo" data-endspeed="400"
                                style="color: rgb(255, 255, 255)">
                                <p style="color: rgb(255, 255, 255)">Explore and enjoy the natural beauty of Sri Lankan
                                    landscapes
                                </p>
                            </div>
                        </li>
                        <li class="SliderLI" data-transition="parallaxtobottom" data-slotamount="10"
                            data-masterspeed="1200" data-delay="5000">
                            <!--  BACKGROUND IMAGE --> <img src="jitImage/swiper/swiper4.png" class="sliderImages"
                                alt="" data-start="0" data-bgposition="center center" data-kenburns="on"
                                data-duration="10000" data-ease="Linear.easeNone" data-bgfit="120" data-bgfitend="100"
                                data-bgpositionend="center center" />
                            <div class="tp-caption slide-big-heading sft slider-title" data-x="left" data-y="500"
                                data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="450"
                                style="color: rgb(255, 255, 255)">
                                Cultural Heritage of Sri Lanka </div>
                            <div class="tp-caption slide-sub-heading sft" data-x="left" data-y="550"
                                data-speed="1000" data-start="800" data-easing="easeOutExpo" data-endspeed="400">
                                <p style="color: rgb(255, 255, 255)">Eight sites of Sri Lanka have been inscribed in the
                                    UNESCO World Heritage</p>
                            </div>
                        </li>

                </div>
        </div>
        </section> <!-- revolution slider end -->
    </div>
    <!-- slider end -->


    <!------------------------------------- Welcome section ------------------------------->



    <section>
        <div class="container">
            <div class="">
                <div class="col-md-12">
                    <div class="section-header">
                        <div class="" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="big-heading welcometext">Welcome to <span>Sri Lanka</span></h2>
                            <span class="sub-heading-content welcomeNotePadding "></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">



                <div class="col col-md-6 col-sm-12 col-lg-6" data-aos="fade-up" data-aos-duration="1500">
                    <p class="text-justify " style="color: black ;">
                        Sri Lanka or "Lanka" the resplendent island like no other in the Planet boasts of a rich
                        cultural heritage dating back to 2500 years of recorded history under Royal Dynasties and later
                        alongside Colonial Rule from 15th Century. It is also widely believed that the Historical
                        significance dates back 6000 years to Emperor Ravana who ruled from Lanka. Ceylon as the Island
                        was well known around the globe changed the name to Sri Lanka after it gained Republican status
                        in 1972. <br><br>
                        Presently Sri Lanka is considered a multi religious/cultural state with diverse communities
                        living in harmony. Its 9 provinces are spread across the island of 65000 sq km with a population
                        of 22 million people. <br><br>
                        Most Major Cities are of historical and religious importance as in Anuradhapura, Polonnaruwa
                        ancient kingdoms with its ancient man made reservoirs, irrigation systems and Buddhist Dagabas.
                        Sigiriya the Rock fortress is a must visit destination for its wonderful ancient engineering,
                        architectural and artistic values. The hill capital Kandy is famous for the sacred Temple of
                        tooth Relic of the Buddha. <br><br>
                        Sri Lanka rich in Bio diversity is considered an Agricultural Nation with a satisfactory
                        rainfall spread throughout the year. Its staple diet Rice is widely grown in mid/low wet dry
                        zones. The Plantation crops introduced by the British rulers in the 19th century consist of
                        "Ceylon Tea" grown in vast stretches of land called tea estates whilst Rubber and Coconut are
                        the other Main Plantation crops. Sri Lanka is also famous for its variety of high quality of
                        Spices such as Cinnamon, Black Pepper, Cloves, Nutmeg, Cardamom and Gems as Blue Sapphire, Ruby
                        and Emeralds.<br><br>No country could ever match the scenic
                        beauty starting from the deep blue ocean lined with
                        Golden beaches fringed with coconut and Palmyra palms, the abundance of wildlife as Elephant,
                        Leopard, Sloth Bear, Sambar Deer, diverse array of birds in National Parks Yala, Wilpattu,
                        Minneriya, Kumana among many others. <br><br>
                        High up in Hill Country 7000 feet above sea level is Nuwaraeliya discovered in 1819 AD and
                        termed "Little England" by Dr John Davy of British origin. This region too is famous for Tea
                        Plantations where many Plantation towns as Bandarawela, Haputale and Hatton are located whilst
                        Horton Plains a vast flat landmass of Grass Patna is famous for the " World's End " from where
                        you could view into the deep abyss falling into a different agro climatic Region.
                        Yet so many unmentioned destinations within Sri Lanka remains to be explored by the Visitor all
                        such locations are accessible within few hours by Road. <br><br>
                        Everything what Sri Lanka Claims to attract a Visitor could be summed up with what Marco Polo
                        the famous traveller had to say after his visit in 1293 AD “Ceylon for its size, is better
                        circumstanced than any other island in the World". <br><br>
                        <strong style="color: black ;"> Visit Sri Lanka, "The Land of Friendly Smiles" and “Explore the
                            Wonders”…</strong>
                    </p>
                </div>
                <div class="col col-md-6 col-sm-12 col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                    <div class="col-12 col-md-12 col-lg-6">
                        <img alt="" class="img-responsive-desktop" style="width: 100%;" src="jitImage/welcome/1.jpg">
                        <p style="color: black;"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------------------------- Welcome section end ------------------------------->


    <!--------------------- tours AND services section Starts --------------------------->


    <section class="Features section-padding ">

        <div class=" servicesANDtourContainer pt-5">
            <div class="">
                <div class="col-md-12">
                    <div class="section-header">
                        <div class="" data-aos="fade-up">
                            <h2 class="big-heading welcometext">Here is our <span>Day Tours </span> & <span>Round
                                    Tours..</span> </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" daAndRound" style="background: rgb(230, 230, 230); background-image: url(''); background-size: cover;">
                
                <div class="container">
                    <div class="tours">
                        <li class="card" data-aos="fade-up" data-aos-duration="1500">
                            <a class="card-image" onclick="redirectToPage();"
                                style="background-image: url(jitImage/img/day1.png);"
                                data-image-full="jitImage/img/day1.png">
                                <img src="jitImage/img/day1.png" alt="let's go" />
                            </a>
                            <a class="card-description" onclick="redirectToPage();" style="cursor: pointer;">
                                <div class="content">
                                    <h2 style="color: rgb(36, 36, 36)">Day Tours</h2>
                                    <p style="color: rgb(68, 68, 68)">Read More</p>
                                </div>
                            </a>
                        </li>
                        <li class="card" data-aos="fade-up" data-aos-duration="2000">
                            <a class="card-image" onclick="RoundTours();"
                                style="background-image: url(jitImage/img/round1.jpg);"
                                data-image-full="jitImage/img/round1.jpg">
                                <img src="jitImage/img/round1.jpg" alt="let's go" />
                            </a>
                            <a class="card-description" onclick="RoundTours();" style="cursor: pointer;">
                                <div class="content">
                                    <h2 style="color: rgb(36, 36, 36)">Round Tours</h2>
                                    <p style="color: rgb(68, 68, 68)">Read More</p>
                                </div>
                            </a>
                        </li>
                    </div>

                    </p>
                </div>
            </div>
        </div>

    </section>


    <!-------------------------------------- tours AND services section Ends ---------------------------------->

    <!--  Tour Packages Section -->
    {{-- <section aria-label="gallery" class="tour-package-section no-bottom no-top">
        <div class="container">
            <h2 class="big-heading onStepHeading " data-aos="fade-up">Summary</span>
            </h2>

        </div>
        
        <div class="container">
        <div id="DayAndRoundSummery">
            <div class="onStep" data-animation="fadeInUp" data-time="">
                <div id="owl-tour" class="owl-carousel">

                    <div class="item DayAndRoundSummeryItem" data-aos="fade-up" data-aos-duration="1000">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Nuwara Eliya" class="img-responsive" src="jitImage/slider/nuwaraeliya.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4>Kandy to Nuwara Eliya</h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
                 
                                        </div>
                                    </div>
                                    <a href="{{ url('/NuwaraeliyaNanuoyaTour') }}"
                                        onclick="NuwaraeliyaNanuoyaTour();"><span class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item DayAndRoundSummeryItem" data-aos="fade-up" data-aos-duration="1200">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Dambulla/Sigiriya" class="img-responsive" src="jitImage/slider/sigiriya.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4> Kandy to Sigiriya/ Pidurangala</h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
                 
                                        </div>
                                    </div>
                                    <a href="{{ url('/SigiriyaPidurangalaTour') }}"
                                        onclick="SigiriyaPidurangalaTour();"><span class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item DayAndRoundSummeryItem" data-aos="fade-up" data-aos-duration="1400">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Kaudulla or Minneriya National Park Safari" class="img-responsive"
                                    src="jitImage/slider/kaudulla.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4>Kandy to Kaudulla or Minneriya Na...</h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
                            
                                        </div>
                                    </div>
                                    <a href="{{ url('/MinneriyaNationalParkKaudullaNationalParkHuruluEcoPark') }}"
                                        onclick="MinneriyaNationalParkKaudullaNationalParkHuruluEcoPark();"><span
                                            class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item DayAndRoundSummeryItem" data-aos="fade-up" data-aos-duration="1600">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Anuradhapura Archaeological Site" class="img-responsive"
                                    src="jitImage/slider/polonnaruwa.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4>Kandy to Polonnaruwa </h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
                            
                                        </div>
                                    </div>
                                    <a href="{{ url('/PolonnaruwaTour') }}" onclick="PolonnaruwaTour();"><span
                                            class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item DayAndRoundSummeryItem" data-aos="fade-up" data-aos-duration="1800">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Polonnaruwa Archaeological Site" class="img-responsive"
                                    src="jitImage/slider/ambuluwawa.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4>Kandy to Ambuluwawa</h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
                  
                                        </div>
                                    </div>
                                    <a href="{{ url('/AmbuluwawaTour') }}" onclick="AmbuluwawaTour();"><span
                                            class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item DayAndRoundSummeryItem">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Knuckles " class="img-responsive" src="jitImage/slider/knuckles.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4>Kandy to Knuckles </h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
               
                                        </div>
                                    </div>
                                    <a href="{{ url('/knucklesTour') }}" onclick="redirectToPage();"><span
                                            class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item DayAndRoundSummeryItem" data-aos="fade-up" data-aos-duration="1000">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Pinnawala" class="img-responsive" src="jitImage/slider/pinnawala.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4>Kandy to Pinnawala</h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
          
                                        </div>
                                    </div>
                                    <a href="{{ url('/PinnawalaElephantOrphanageTour') }}"
                                        onclick="redirectToPage();"><span class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </section> --}}
    <!--  Tour Packages Section end -->
    
    <section aria-label="gallery" class="tour-package-section no-bottom no-top">
        <div class="container">
            <h2 class="big-heading onStepHeading " style="text-align: center;" data-aos="fade-up">Pick Your Tour</span>
            </h2>

        </div>
        
        <div class="container">
        <div id="DayAndRoundSummery">
            <div class="onStep" data-animation="fadeInUp" data-time="">
                <div id="owl-tour" class="owl-carousel">

                    <div class="item DayAndRoundSummeryItem" data-aos="fade-up" data-aos-duration="1000">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Nuwara Eliya" class="img-responsive" src="jitImage/slider/nuwaraeliya.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4>Kandy to Nuwara Eliya</h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
                 
                                        </div>
                                    </div>
                                    <a href="{{ url('/NuwaraeliyaNanuoyaTour') }}"
                                        onclick="NuwaraeliyaNanuoyaTour();"><span class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item DayAndRoundSummeryItem" data-aos="fade-up" data-aos-duration="1200">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Dambulla/Sigiriya" class="img-responsive" src="jitImage/slider/sigiriya.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4> Kandy to Sigiriya/ Pidurangala</h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
                 
                                        </div>
                                    </div>
                                    <a href="{{ url('/SigiriyaPidurangalaTour') }}"
                                        onclick="SigiriyaPidurangalaTour();"><span class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item DayAndRoundSummeryItem" data-aos="fade-up" data-aos-duration="1400">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Kaudulla or Minneriya National Park Safari" class="img-responsive"
                                    src="jitImage/slider/kaudulla.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4>Kandy to Kaudulla or Minneriya Na...</h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
                            
                                        </div>
                                    </div>
                                    <a href="{{ url('/MinneriyaNationalParkKaudullaNationalParkHuruluEcoPark') }}"
                                        onclick="MinneriyaNationalParkKaudullaNationalParkHuruluEcoPark();"><span
                                            class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item DayAndRoundSummeryItem" data-aos="fade-up" data-aos-duration="1600">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Anuradhapura Archaeological Site" class="img-responsive"
                                    src="jitImage/slider/polonnaruwa.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4>Kandy to Polonnaruwa </h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
                            
                                        </div>
                                    </div>
                                    <a href="{{ url('/PolonnaruwaTour') }}" onclick="PolonnaruwaTour();"><span
                                            class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item DayAndRoundSummeryItem" data-aos="fade-up" data-aos-duration="1800">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Polonnaruwa Archaeological Site" class="img-responsive"
                                    src="jitImage/slider/ambuluwawa.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4>Kandy to Ambuluwawa</h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
                  
                                        </div>
                                    </div>
                                    <a href="{{ url('/AmbuluwawaTour') }}" onclick="AmbuluwawaTour();"><span
                                            class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item DayAndRoundSummeryItem">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Knuckles " class="img-responsive" src="jitImage/slider/knuckles.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4>Kandy to Knuckles </h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
               
                                        </div>
                                    </div>
                                    <a href="{{ url('/knucklesTour') }}" onclick="redirectToPage();"><span
                                            class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item DayAndRoundSummeryItem" data-aos="fade-up" data-aos-duration="1000">
                        <div class="gal-home">
                            <div class="hovereffect">
                                <img alt="Pinnawala" class="img-responsive" src="jitImage/slider/pinnawala.png">
                            </div>
                            <div class="gal-home-content">
                                <div class="row package">
                                    <div class="col-md-12">
                                        <h4>Kandy to Pinnawala</h4>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <div class="star-content">
          
                                        </div>
                                    </div>
                                    <a href="{{ url('/PinnawalaElephantOrphanageTour') }}"
                                        onclick="redirectToPage();"><span class="shine"></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </section>


    <section class="Features section-padding " id="testimonyNew">
        <div class="container">
            <div class=" servicesANDtourContainer pt-5">
                <div class="row">
                    <div class="col-md-12" data-aos="fade-up">
                        <div class="section-header">
                            <div class="row">
                                <div class="col-lg-12 pt-5">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="servicesANDtours">

                        <div class="col-12 col-md-12 col-lg-6" data-aos="fade-up" data-aos-duration="1500">
                            {{-- img-responsive imagemain3  id="contactUsImg" --}}
                            <img alt="" class="" style="width: 100%" src="jitImage/testimonial/3.jpg">
                            <p style="color: black ;"> </p>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 " id="" data-aos="fade-up"
                            data-aos-duration="2000">

                            <div>
                                <h2 class="big-heading" style="text-align: center; position: relative; top:5px;">About <span>us</span></h2>
                                <span class="sub-heading-content"></span>
                                <p class="text-justify welcomeNote" style="color: black; font-size:15px; position: relative; top:-10px;">
                                    JIT Lanka Tours is a company comprising of qualified, licensed Tourist Guide Lecturers
                                    and
                                    Drivers who are registered with the Tourism Development Authority (SLTDA) Of Sri Lanka.
                                    We
                                    are based in Kandy the Central Province of Sri Lanka and are committed to assist you to
                                    make
                                    your dream Tour to Sri Lanka come true whilst ensuring the safety and security of our
                                    Guests
                                    at all times. <br><br>
                                    Our services include transfers from the Airport, Hotel reservations, selection of Sites
                                    and
                                    Activities. We offer you Adventure Tours, City Tours, Honeymoon Tours, Nature Tours,
                                    Pilgrimage Tours, Sightseeing Tours, Waterfall Tours and many more which would be
                                    arranged
                                    in accordance to your requirements. We have our own fleet of vehicles which are air
                                    conditioned, comfortable and luxurious which could be selected at your choice. <br><br>
                                    With all above we ensure the total the satisfaction of our Guests who would certainly
                                    carry
                                    with them pleasant memories and unforgettable experience of Sri Lanka the “Wonder of
                                    Asia”.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class="text-justify welcomeNote2" style="color: black ;">
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- --------------------------- contact us start ------------------------- --}}

    <section class="Features section-padding " id="contactUsPage">
        <div class="container">
            <div class=" servicesANDtourContainer pt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header">
                            <div class="" data-aos="fade-up" data-aos-duration="1000">
                                {{-- <h1 class="textfive2">Contact us<strong class="textSix"></strong> --}}
                                <h2 class="big-heading">Contact <span>us</span></h2>
                                <span class="sub-heading-content"></span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">
                    <div class="servicesANDtours">
                        {{-- col-12 col-md-12 col-lg-6 --}}
                        <div class="container">

                            <form id="contact-form" method="post" role="form">
                                <div class="messages"></div>

                                <div class="controls">
                                    <p style="color: rgb(187, 29, 29);font-size:18px" id="erorMessage"> </p>
                                    <p style="font-size:16px;color:rgb(39, 39, 39)" id="successMessage" class="fade-out">
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name" class="formLabel">Firstname *</label>
                                                <input id="form_name" type="text" name="name"
                                                    class="form-control border-primary"
                                                    placeholder="Please enter your firstname *" required="required"
                                                    data-error="Firstname is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname" class="formLabel">Lastname *</label>
                                                <input id="form_lastname" type="text" name="surname"
                                                    class="form-control" placeholder="Please enter your lastname *"
                                                    required="required" data-error="Lastname is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_email" class="formLabel">Email *</label>
                                                <input id="form_email" type="email" name="email"
                                                    class="form-control" placeholder="Please enter your email *"
                                                    required="required" data-error="Valid email is required.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_phone" class="formLabel">Phone</label>
                                                <input id="form_phone" type="tel" name="phone"
                                                    class="form-control" placeholder="Please enter your phone">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message" class="formLabel">Message *</label>
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Message *" rows="4"
                                                    required="required" data-error="Please,leave us a message."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="button" id="submitBtn" class="btn btn-success btn-send"
                                                value="Send message">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ------------------------- contact us end ------------------------ --}}


    <!-- footer -->
    <section aria-label="subfooter" class="subfooter no-bottom">
        <div class="container-fluid m-5-hor">
            <div class="row">
                <div class="col-md-4">
                    <div class="wrap-subfooter">
                        {{-- <h4>JIT Lanka Tours</h4> --}}
                        {{-- <div class="subfooter-content-left">JIT Lanka Tours have more than ten years well experienced
                            guides, tour drivers and luxury vehicles. We offer the unique mix of tour packages under the
                            reasonable rates in Sri Lanka.</div> --}}
                        <span class="logo">
                            <div id="footerLogoDiv">
                                <img src="jitImage/logo/jitLogo.png" alt="" id="footerLogo">
                            </div>
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <div class="wrap-subfooter">
                        <h4 style="color: rgb(255, 255, 255)">Services</h4>
                        <div class="footer-packages-list">
                            <a onclick="redirectToPage();" class="list-packages" style="color: rgb(55, 55, 55)">
                                Day Tours </a>
                            <br>
                            <a onclick="RoundTours();" class="list-packages" style="color: rgb(55, 55, 55)">
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
                <div class="col-md-3 col-md-offset-1">
                    <div class="wrap-subfooter">
                        <h4 style="color: rgb(255, 255, 255)">Contact Info</h4>
                        <div class="subfooter-content-right" style="color: rgb(55, 55, 55)">No 5/1 Polwattha, Kundasale,
                            Kandy. 20000.</div>
                        <div class="subfooter-content-right" style="color: rgb(55, 55, 55)">Phone: ( +94 ) 76 478 0922
                        </div>
                        <div class="subfooter-content-right" style="color: rgb(55, 55, 55)">Phone: ( +94 ) 77 162 2335
                        </div>
                        <div class="subfooter-content-right" style="color: rgb(55, 55, 55)"><a href="#">Email:
                                info@jitlankatours.com</a></div>

                        <div class="subfooter-content-right">
                            <div class="social-icons-subnav">
                                {{-- <div class="row">
                                    <div class="col-md-2 col-sm-4 col-lg-4">
                                        <a href="#"><img src="jitImage/socialMedia/trip.png" alt=""
                                                style="width:50px;height50px"></a>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-lg-4">
                                        <a href="#"><img src="jitImage/socialMedia/facebook.png" alt=""
                                                style="width:50px;height50px"></a>
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-lg-4">
                                        <a href="#"><img src="jitImage/socialMedia/instagram.png" alt=""
                                                style="width:50px;height50px"></a>
                                    </div>

                                </div> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="alt">
        <div class="container-fluid m-5-hor">
            <div class="row">
                <div class="col-md-12 text-left" id="designDev">
                    <span>&copy; Copyright - 2023 JIT Lanka Tours. All Right Reserved. </span><br>
                    <span class=""> Designed By <a href="#" target="blank_">OpenCodeLabs (pvt)
                            Ltd</a>.</span>
                </div>
            </div>
        </div>
    </footer>


    <!-- footer end -->


    <!-- ScrolltoTop -->
    <div id="totop" class="init">
        <span class="ti-angle-up"></span>
    </div>
    </div>
    <!-- content wraper end -->
@endsection

@section('scripts')
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149950000-1"></script>

    <script>
    function dropDown(){document.getElementById("MobileMenu").classList.toggle("show")}const MobileMenu=document.getElementById("MobileMenu"),navbarLinks=MobileMenu.getElementsByTagName("a");for(let i=0;i<navbarLinks.length;i++)navbarLinks[i].addEventListener("click",function(){MobileMenu.classList.remove("show")});
    </script>

    <script>
       function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","UA-149950000-1");
    </script>
    {{-- nav bar --}}
    <script>
        // toggle class scroll 
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar-trans').addClass('afterscroll');
            } else {
                $('.navbar-trans').removeClass('afterscroll');
            }

        });

        // demo only 
        // open link in new tab without ugly target="_blank"
        $("a[href^='http']").attr("target", "_blank");
    </script>
    {{-- navbar end --}}



    <script>
        function redirectToPage() {
            window.location.href = '/daytours';
        }
    </script>
    <script>
        function RoundTours() {
            window.location.href = '/RoundTours';
        }
    </script>
    <script>
        function NuwaraeliyaNanuoyaTour() {
            window.location.href = '/NuwaraeliyaNanuoyaTour';
        }
    </script>
    <script>
        function SigiriyaPidurangalaTour() {
            window.location.href = '/SigiriyaPidurangalaTour';
        }
    </script>
    <script>
        function MinneriyaNationalParkKaudullaNationalParkHuruluEcoPark() {
            window.location.href = '/MinneriyaNationalParkKaudullaNationalParkHuruluEcoPark';
        }
    </script>
    <script>
        function PolonnaruwaTour() {
            window.location.href = '/PolonnaruwaTour';
        }
    </script>
    <script>
        function AmbuluwawaTour() {
            window.location.href = '/AmbuluwawaTour';
        }
    </script>
    <script>
        function knucklesTour() {
            window.location.href = '/knucklesTour';
        }
    </script>
    <script>
        function KithulgalaTour() {
            window.location.href = '/KithulgalaTour';
        }
    </script>
    <script>
        function PinnawalaElephantOrphanageTour() {
            window.location.href = '/PinnawalaElephantOrphanageTour';
        }
    </script>
    <script>
        function fiveDays4Nights() {
            window.location.href = '/5Days4Nights';
        }
    </script>
    <script>
        function sevenDays6Nights() {
            window.location.href = '/7Days6Nights';
        }
    </script>
    <script>
        function gallery() {
            window.location.href = '/gallery';
        }
    </script>




    <script>
       $(document).ready(function(){$(document).on("click","#submitBtn",function(e){e.preventDefault();var a={firstName:$("#form_name").val(),lastName:$("#form_lastname").val(),Email:$("#form_email").val(),Phone:$("#form_phone").val(),Message:$("#form_message").val()};""==a.firstName||""==a.lastName||""==a.Email||""==a.Phone||""==a.Message?$("#erorMessage").text("Fill all fields"):($.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$.ajax({type:"post",url:"/sendMail",data:a,success:function(e){console.log(e),$("#form_name").val(""),$("#form_lastname").val(""),$("#form_email").val(""),$("#form_phone").val(""),$("#form_message").val(""),$("#erorMessage").text(""),$("#successMessage").text("Thank you for contacting us,We will get back to you shortly."),setTimeout(function(){document.getElementById("successMessage").innerHTML=""},5e3)}}))})});
    </script>

    {{-- AOS class start --}}
    <script>
        AOS.init({
            duration: 800,
        });
    </script>
    {{-- AOS class end --}}

    <script>
        // This is "probably" IE9 compatible but will need some fallbacks for IE8
        // - (event listeners, forEach loop)

        // wait for the entire page to finish loading
        window.addEventListener("load",function(){setTimeout(lazyLoad,1e3)});function lazyLoad(){document.querySelectorAll(".card-image").forEach(function(a){var e=a.getAttribute("data-image-full"),t=a.querySelector("img");t.src=e,t.addEventListener("load",function(){a.style.backgroundImage="url("+e+")",a.className=a.className+" is-loaded"})})}
    </script>
@endsection
