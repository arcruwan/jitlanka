@extends('layouts.otherLayouts')

@section('title')
   Day Tours
@endsection

@section('content')


    {{-- ------------------------------ Tour cards starts ---------------------- --}}

    <section class="Features   " id="Features">
        <div class="container">
            <div class="row cardsAll">
                <div class="col-md-12">
                    <div class="section-header  pb-5">
                        <div data-aos="fade-down" data-aos-duration="1000">
                            <h1 class="textfive" >DAY TOURS FROM <strong class="textSix">KANDY</strong> </h1>
                        </div>
                        <h6 class="textEight1" data-aos="fade-up" data-aos-duration="1000"></h6>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up">
                    <figure class="snip1369 green">
                        <img src="jitImage/kandy/kandy1.png"
                            alt="pr-sample15" />
                        <div class="image"><img
                                src="jitImage/kandy/kandy1.png"
                                alt="pr-sample15" /></div>
                        <figcaption>
                            <h3>Kandy City Tour</h3>
                        </figcaption>
                        <span class="read-more">
                            Read More <i class="fa fa-arrow-right" aria-hidden="true"></i>

                        </span>
                        <a href="{{ url('/KandyCityTours') }}"></a>
                    </figure>
                </div>

                <div class="col-12 col-md-12 col-lg-4 " data-aos="fade-up">
                    <figure class="snip1369 green">
                        <img src="jitImage/sigiriya/sigiriya1.jpg"
                            alt="pr-sample15" />
                        <div class="image"><img
                                src="jitImage/sigiriya/sigiriya1.jpg"
                                alt="pr-sample15" /></div>
                        <figcaption>
                            <h3> Kandy to Sigiriya/ <br> Pidurangala Tour</h3>
                        </figcaption><span class="read-more">
                            Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                        <a href="{{ url('/SigiriyaPidurangalaTour') }}"></a>
                    </figure>
                </div>
                <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up">
                    <figure class="snip1369 green">
                        <img src="jitImage/polonnaruwa/polonnaruwa1.png" 
                            alt="pr-sample15" />
                        <div class="image"><img
                                src="jitImage/polonnaruwa/polonnaruwa1.png"
                                alt="pr-sample15" /></div>
                        <figcaption>
                            <h3>Kandy to Polonnaruwa Tour</h3>
                        </figcaption>
                        <span class="read-more">
                            Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                        <a href="{{ url('/PolonnaruwaTour') }}"></a>
                    </figure>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up">
                    <figure class="snip1369 green">
                        <img src="jitImage/knuckles/knuckls1.png"
                            alt="pr-sample15" />
                        <div class="image"><img
                                src="jitImage/knuckles/knuckls1.png"
                                alt="pr-sample15" /></div>
                        <figcaption>
                            <h3>Kandy to Knuckles Tour</h3>
                        </figcaption><span class="read-more">
                            Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                        <a href="{{ url('/knucklesTour') }}"></a>
                    </figure>
                </div>
                <div class="col-12 col-md-12 col-lg-4 " data-aos="fade-up">
                    <figure class="snip1369 green">
                        <img src="jitImage/ambuluwawa/ambuluwawa1.png"
                            alt="pr-sample15" />
                        <div class="image"><img
                                src="jitImage/ambuluwawa/ambuluwawa1.png"
                                alt="pr-sample15" /></div>
                        <figcaption>
                            <h3>Kandy to Ambuluwawa Tour</h3>
                        </figcaption><span class="read-more">

                            Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                        <a href="{{ url('/AmbuluwawaTour') }}"></a>
                    </figure>
                </div>
                <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up">
                    <figure class="snip1369 green">
                        <img src="jitImage/kaudulla/kaudulla1.png"
                            alt="pr-sample15" />
                        <div class="image"><img
                                src="jitImage/kaudulla/kaudulla1.png"
                                alt="pr-sample15" /></div>
                        <figcaption>
                            <h3>Kandy to Minneriya/ Kaudulla/ Hurulu Eco Park Tour</h3>
                        </figcaption><span class="read-more">

                            Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                        <a href="{{ url('/MinneriyaNationalParkKaudullaNationalParkHuruluEcoPark') }}"></a>
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up">
                    <figure class="snip1369 green">
                        <img src="jitImage/pinnawala/pinnawala2.png"
                            alt="pr-sample15" />
                        <div class="image"><img
                                src="jitImage/pinnawala/pinnawala2.png"
                                alt="pr-sample15" /></div>
                        <figcaption>
                            <h3>Kandy to Pinnawala Elephant Orphanage Tour</h3>
                        </figcaption><span class="read-more">

                            Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                        <a href="{{ url('/PinnawalaElephantOrphanageTour') }}"></a>
                    </figure>
                </div>
                <div class="col-12 col-md-12 col-lg-4 " data-aos="fade-up">
                    <figure class="snip1369 green">
                        <img src="jitImage/kandy3/lankathilake1.png"
                            alt="pr-sample15" />
                        <div class="image"><img
                                src="jitImage/kandy3/lankathilake1.png"
                                alt="pr-sample15" /></div>
                        <figcaption>
                            <h3>Kandy 3 Temples Tour </h3>
                        </figcaption><span class="read-more">

                            Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                        <a href="{{ url('/Kandy3TempleTour') }}"></a>
                    </figure>
                </div>
                <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up">
                    <figure class="snip1369 green">
                        <img src="jitImage/nuwaraeliya/nuwaraeliya1.png"
                            alt="pr-sample15" />
                        <div class="image"><img
                                src="jitImage/nuwaraeliya/nuwaraeliya1.png"
                                alt="pr-sample15" /></div>
                        <figcaption>
                            <h3>Kandy to Nuwaraeliya/ <br> Nanuoya Tour</h3>
                        </figcaption><span class="read-more">
                            Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                        <a href="{{ url('/NuwaraeliyaNanuoyaTour') }}"></a>
                    </figure>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up">
                    <figure class="snip1369 green">
                        <img src="jitImage/ella/ella1.png"
                            alt="pr-sample15" />
                        <div class="image"><img
                                src="jitImage/ella/ella1.png"
                                alt="pr-sample15" /></div>
                        <figcaption>
                            <h3>Kandy to Ella Tour</h3>
                        </figcaption><span class="read-more">

                            Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                        <a href="{{ url('/EllaTour') }}"></a>
                    </figure>
                </div>
                <div class="col-12 col-md-12 col-lg-4 " data-aos="fade-up">
                    <figure class="snip1369 green">
                        <img src="jitImage/kithulgala/kithulgala1.png"
                            alt="pr-sample15" />
                        <div class="image"><img
                                src="jitImage/kithulgala/kithulgala1.png"
                                alt="pr-sample15" /></div>
                        <figcaption>
                            <h3>Kandy to Kithulgala Tour</h3>
                        </figcaption><span class="read-more">

                            Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                        <a href="{{ url('/KithulgalaTour') }}"></a>
                    </figure>
                </div>
                <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up">
                    <figure class="snip1369 green">
                        <img src="jitImage/airport/air1.png"
                            alt="pr-sample15" />
                        <div class="image"><img
                                src="jitImage/airport/air1.png"
                                alt="pr-sample15" /></div>
                        <figcaption>
                            <h3 style="font-size: 25px">Air Port Pickup/ Drop from Kandy and Any other Tours from
                                Kandy</h3>
                        </figcaption><span class="read-more">

                            Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                        <a href="{{ url('/airPort') }}"></a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    {{-- ------------------------------------ Tour cards end ----------------------------- --}}

@endsection

@section('scripts')
@endsection
