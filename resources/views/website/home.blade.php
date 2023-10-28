@extends('layouts.website')
@section('content')
    <section class="header animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="main-slider  owl-carousel owl-theme animateddiv">
                        <div class="item">
                            <div class="text ">
                                <div class="fadeInUp">
                                    <h1 class="title">Welcome To Hotelsxml</h1>
                                    <p>Hotels online network  Special price, instant confirmation of bookings, and 24/7 support to stay comfortable with us!</p>
                                </div>
                                <div class="buttons fadeInUp">
                                    <a href="#" class="btn MainBtn btn-primary contact-us">Contact Us</a>
                                </div>
                            </div>
                            <div class="image fadeInDown">
                                <img src="{{ asset('website/images/new-img/slider-item-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="text ">
                                <div class="fadeInUp">
                                    <h1 class="title">Welcome To Hotelsxml</h1>
                                    <p> Our partners are present everywhere to serve you, more than 2000+ destinations, and 50+ partners in tourism services with one click.</p>

                                </div>
                                <div class="buttons fadeInUp">
                                    <a href="#" class="btn MainBtn btn-primary contact-us">Contact Us</a>
                                </div>
                            </div>
                            <div class="image fadeInDown">
                                <img src="{{ asset('website/images/new-img/slider-item-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="text ">
                                <div class="fadeInUp">
                                    <h1 class="title">Welcome To Hotelsxml</h1>
                                    <p>Modern and sophisticated system, Extensive database with lots of hotels around the world. and Secure login and reliable system</p>
                                </div>
                                <div class="buttons fadeInUp">

                                    <a href="#" class="btn MainBtn btn-primary contact-us">Contact Us</a>

                                </div>
                            </div>
                            <div class="image fadeInDown">
                                <img src="{{ asset('website/images/new-img/slider-item-3.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <div class="clearfix"></div>
    <!-- About Start -->
    <div class="about-us py-5 ">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <h1 class="mb-0">Our Hotel <span class="text-primary text-uppercase">Network</span></h1>
                    <p class="mb-0">A hotel booking network designed for travel agents and hotel suppliers, to enable our partners to book rooms by Hotelsxml.com</p>
                    <p> Our vision is to build a business with suppliers, agents, and hotels to provide the best prices and services. And maintain a long-term relationship with them to develop partnerships together.</p>
                    <div class="row g-3 pb-4">
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-2 box-nem">
                                    <i class="fas fa-hotel  fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up"> </h2>
                                    <p class="mb-0">More 1 million Hotels, Resort and Apartments</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-2 box-nem">
                                    <i class="fas fa-globe  fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">2000+ </h2>
                                    <p class="mb-0">Destinations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-2 box-nem">
                                    <i class="fas fa-building fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">45+</h2>
                                    <p class="mb-0">Office & Partners</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-2 box-nem">
                                    <i class="fas fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">100+ </h2>
                                    <p class="mb-0">suppliers&Dmc</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Hotel Booking Engine</a>
                </div>
                <div class="col-lg-5 ">
                    <img class="img-fluid  wow zoomIn" data-wow-delay="0.1s" src="{{ asset('website/images/about-us/logos-hotels.jpeg') }}" >
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="clearfix"></div>
    <!-- Hotel Booking Services Start -->
    <div id="services" class="our-services py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Hotel Booking Services</h6>
                <h1 class="mb-5 title-new">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-bed text-primary mb-4"></i>
                            <h5>Hotel Selection</h5>
                            <p>Explore a wide range of hotels and accommodations to find your perfect stay.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-calendar-check text-primary mb-4"></i>
                            <h5>Booking Reservations</h5>
                            <p>Effortlessly make reservations for your chosen hotel and secure your stay.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Hotel Details</h5>
                            <p>Get access to hotel guides and essential info about your choice on one page.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-credit-card text-primary mb-4"></i>
                            <h5>Payment Options</h5>
                            <p>Choose from various secure payment methods to complete your booking.</p>
                        </div>
                    </div>
                </div>
                <!-- Additional Service Items -->
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-user-tie text-primary mb-4"></i>
                            <h5>We are with you</h5>
                            <p>A personal account manager who carefully follows up on your bookings and requests.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-star text-primary mb-4"></i>
                            <h5> More features</h5>
                            <p>No prepayment, get your reports and awards. best prices Incl All and more features in our platform</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-plane text-primary mb-4"></i>
                            <h5>Holiday Design</h5>
                            <p>Use the wide range of travel services to combine the dream journey. Holiday Packages are available through the contact team</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fas fa-3x fa-headset text-primary mb-4"></i>
                            <h5>Customer Support</h5>
                            <p>Contact our 24/7 customer support for assistance with your booking.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hotel Booking Services End -->

    <div class="clearfix"></div>
    <div id="technology" class="technology">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <h3 class="small-title">Explore Our</h3>
                    <h1 class="big-title">Technology</h1>
                </div>
                <div class="col-md-6">
                    <p class="descrp">
                        <span>We</span> aspire to provide an advanced and modern technological service to facilitate work and support our partners in providing and following up on the service through an integrated system for faster growth.
                    </p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="box-tec">
                        <div class="icon">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h4>In-house team to Support & and follow up for faster growth in one spirit                    </h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-tec">
                        <div class="icon">
                            <i class="fas fa-calendar-check fa-2x"></i>
                        </div>
                        <h4>Booking platform A simple and fast, 3 steps to confirm your booking 100%                   </h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-tec">
                        <div class="icon">
                            <i class="fas fa-user-cog fa-2x"></i>
                        </div>
                        <h4>Full control user and easy admin use to manage more than one profile                    </h4>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box-tec">
                        <div class="icon">
                            <i class="fas fa-code fa-2x"></i>
                        </div>
                        <h4>Easy API integration with modern tools to fast response                    </h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-tec">
                        <div class="icon">
                            <i class="fas fa-cogs fa-2x"></i>
                        </div>
                        <h4>Advanced technology for reservation service and technical support                    </h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-tec">
                        <div class="icon">
                            <i class="fa-solid fa-desktop fa-2x"></i>
                        </div>
                        <h4>The system is easy to use and supports most languages and currencies</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="clearfix"></div>
    <!-- Booking Process Start -->
    <div class="booking-process py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Booking Process</h6>
                <h1 class="mb-5 title-new">3 Simple Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="custom-box">
                        <div class="box-icon">
                            <i class="fas fa-hotel fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose a Hotel</h5>
                        <p class="mb-0">Browse through our selection of hotels and choose the one that suits your preferences.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="custom-box">
                        <div class="box-icon">
                            <i class="fas fa-credit-card fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Make a Reservation</h5>
                        <p class="mb-0">Securely book your stay online and pay with your preferred payment method.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="custom-box">
                        <div class="box-icon">
                            <i class="fas fa-calendar-check fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Confirm Your Stay</h5>
                        <p class="mb-0">Receive a confirmation for your booking and get ready for a great stay!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Process Start -->

    <!-- Why Choose Start -->
    <section class="why-choose">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Why Choose us</h6>
                <h1 class="mb-5 title-new">Booking with Confidence</h1>
            </div>
        </div>
        <div class="container-choose">
            <div class="choices">
                <div class="left-top">
                    <div class="left-top-circle">
                        <i class="ti-face-smile"></i>
                    </div>

                    <div class="left-top-text">
                        <h3>Competitive Prices and Continuous Support"</h3>
                        <p> Booking safely and reassuringly. Prepare yourself for a pleasant travel through us. Competative prices service at. Continuous follow-up, continuous discounts.</p>
                    </div>

                </div>


                <div class="right-top">
                    <div class="right-top-circle">
                        <i class="ti-money"></i>
                    </div>

                    <div class="right-top-text">
                        <h3>"Smart Savings: Competitive Prices and Inclusive Discounts Await You!"</h3>
                        <p>Save your money. Get competative prices in your bookings through us. Included taxes and discount prices, value for money. </p>
                    </div>
                </div>



                <div class="right-bottom">
                    <div class="right-bottom-circle">
                        <i class="ti-check"></i>
                    </div>

                    <div class="right-bottom-text">
                        <h3>"Effortless Hotel and Travel Search: Find the Best Deals with One Click"</h3>
                        <p>Most Extensive search results online with a one click search, compare hotels from different suppliers, also get best results and best rates for hotels, Transfers and Sightseeings around the world.</p>
                    </div>
                </div>



                <div class="left-bottom">
                    <div class="left-bottom-circle">
                        <i class="ti-lock"></i>
                    </div>

                    <div class="left-bottom-text">
                        <h3>"Enhanced Security: Your Peace of Mind for Login and Payment"  </h3>
                        <p>Safe and Secure Login and Payment. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose End -->

    <div class="clearfix"></div>

    <!-- Top-->
    <section class="top-destinations">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Top Destinations</h6>
            <h1 class="mb-5 title-new">Explore our amazing top destinations</h1>
        </div>

        <div class="country-buttons">

        <!--  <button class="country-button" data-country="all">All Continents</button>-->
            <button class="country-button" data-country="Europe">Europe</button>
            <button class="country-button" data-country="Asia">Asia </button>
            <button class="country-button" data-country="Mena Region">Mena Region </button>
            <button class="country-button" data-country="North America">North America</button>
            <button class="country-button" data-country="South America">South America</button>
        </div>

        <div class="container-en-des">
            <div class="card-en" data-country="Europe">
                <div class="card__img">
                <img src="https://images.unsplash.com/photo-1486299267070-83823f5448dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="Big Ben">
                <div class="card__overlay">
                    <h2>London</h2>
                    <p>Big Ben</p>
                </div>
                </div>
            </div>
            <div class="card-en "  data-country="North America">
                <div class="card__img">
                <img src="https://images.unsplash.com/photo-1581010864468-c972b8705439?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="Eiffel Tower">
                <div class="card__overlay">
                    <h2>Paris</h2>
                    <p>Eiffel Tower</p>
                </div>
                </div>
            </div>
            <div class="card-en ">
                <div class="card__img">
                <img src="https://images.unsplash.com/photo-1552832230-c0197dd311b5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1096&q=80" alt="Colosseum">
                <div class="card__overlay">
                    <h2>Rome</h2>
                    <p>Colosseum</p>
                </div>
                </div>
            </div>
            <div class="card-en ">
                <div class="card__img">
                <img src="https://images.unsplash.com/photo-1581473483413-313a5afffb08?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=714&q=80" alt="Pisa Tower">
                <div class="card__overlay">
                    <h2>Pisa</h2>
                    <p>Pisa Tower</p>
                </div>
                </div>
            </div>
            <div class="card-en ">
                <div class="card__img">
                <img src="https://images.unsplash.com/photo-1585155967849-91c736589c84?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80" alt="">
                <div class="card__overlay">
                    <h2>New York</h2>
                    <p>Statue of Liberty</p>
                </div>
                </div>
            </div>
            <div class="card-en ">
                <div class="card__img">
                <img src="https://images.unsplash.com/photo-1527915676329-fd5ec8a12d4b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="Sydney Opera House">
                <div class="card__overlay">
                    <h2>Sydney</h2>
                    <p>Sydney Opera House</p>
                </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <div class="blogs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">Latest Blogs</h6>
                        <h1 class="mb-5 title-new">Discover Hotel Tips & Our Stories</h1>
                    </div>
                    <div class="blog-grid-container">
                        <div class="flexslider blogs-slider">
                            <ul class="slides">
                                <li>
                                    <div class="projcard projcard-blue">
                                        <div class="projcard-innerbox">
                                        <img class="projcard-img" src="https://picsum.photos/800/600?image=1041" />
                                        <div class="projcard-textbox">
                                            <div class="projcard-title">Hotel Blog 1</div>
                                            <!--<div class="projcard-subtitle">Explore the Best Hotels</div>-->
                                            <div class="projcard-bar"></div>
                                            <div class="projcard-description">Discover top hotels around the world and find the perfect one for your next vacation.</div>
                                            <div class="projcard-tagbox">
                                            <a href="#" class="btn ">Show more</a>

                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="projcard projcard-red">
                                        <div class="projcard-innerbox">
                                        <img class="projcard-img" src="https://picsum.photos/800/600?image=1080" />
                                        <div class="projcard-textbox">
                                            <div class="projcard-title">Hotel Blog 2</div>
                                            <!--<div class="projcard-subtitle">Tips for Booking </div>-->
                                            <div class="projcard-bar"></div>
                                            <div class="projcard-description">Learn valuable tips and tricks for getting the best hotel deals and accommodations for your trip.</div>
                                            <div class="projcard-tagbox">
                                            <a href="#" class="btn ">Show more</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="projcard projcard-green">
                                        <div class="projcard-innerbox">
                                        <img class="projcard-img" src="https://picsum.photos/800/600?image=1039" />
                                        <div class="projcard-textbox">
                                            <div class="projcard-title">Hotel Blog 3</div>
                                            <div class="projcard-bar"></div>
                                            <div class="projcard-description">Explore the world of luxury hotels and indulge in unforgettable travel experiences.</div>
                                            <div class="projcard-tagbox">
                                            <a href="#" class="btn ">Show more</a>

                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="projcard projcard-customcolor" style="--projcard-color: #F5AF41;">
                                        <div class="projcard-innerbox">
                                        <img class="projcard-img" src="https://picsum.photos/800/600?image=943" />
                                        <div class="projcard-textbox">
                                            <div class="projcard-title">Hotel Blog 4</div>
                                            <div class="projcard-bar"></div>
                                            <div class="projcard-description">Read inspiring travel stories and embark on new adventures with our blog posts.</div>
                                            <div class="projcard-tagbox">
                                            <a href="#" class="btn ">Show more</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
@endsection
