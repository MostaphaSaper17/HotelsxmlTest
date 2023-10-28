@extends('layouts.agent')
@section('content')
    <div class="clearfix"></div>
    <section id="featured" class="wide-fat">
        <div id="st-content-wrapper" class="padding-bottom-nil">
            <div class="featured-inner">
                <div class="slider">
                    <div id="top-slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('website/images/slider/slide-1.jpg') }}" loading="lazy" alt="slide-1" />
                                <div class="content">
                                    <h2>Find your perfect place to stay</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#"> <img src="{{ asset('website/images/play.png') }}" alt="">Watch video</a>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('website/images/slider/slide-2.jpg') }}" loading="lazy" alt="slide-2" />
                                <div class="content">
                                    <h2>Find your perfect place to stay</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#"> <img src="{{ asset('website/images/play.png') }}" alt="">Watch video</a>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('website/images/slider/slide-3.jpg') }}" loading="lazy" alt="slide-3" />
                                <div class="content">
                                    <h2>Find your perfect place to stay</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#"> <img src="{{ asset('website/images/play.png') }}" alt="">Watch video</a>
                                </div>
                            </li>

                        </ul>
                        <div class="opener-area"><a  href="#" class="open-btn open-close-btn"><i><img src="{{ asset('website/images/arrow_right-white.png') }}" alt="arrow right"></i></a></div>
                        <div class="featured-overlay">
                            <a id="close-form" href="#" class="button close open-close-btn"><i><img src="{{ asset('website/images/close-icon-white.png') }}" alt=" close"></i></a>
                            <div class="featured-overlay-inner">
                                <div class="featured-teaser-text index-bottom-text-slider">
                                    <h1>Let’s Search</h1>
                                    <h2> for the Best Prices and Much much more!</h2>
                                </div>
                                <div class="search-result-page">
                                <div class="search-form-wrapper index-slider-form horizontal-search-area ">
                        <div class="search-form hotel-service">
                            <div class="search-title hidden-lg hidden-md">Search Hotels </div>
                            <!--Address-->
                            <form action="{{ route('agent.hotels') }}" class="form" method="">
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-extra-field dropdown clearfix field-detination has-icon">
                                            <i class="fas fa-map-marker-alt input-icon field-icon" style=" margin-left: 5px;"></i>
                                            <div class="dropdown">
                                                <label>Destination / Property Name</label>
                                                <input type="text" id="" name="" value="" class="inputg" placeholder="Search By City Or Hotel" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4  border-right">
                                        <div class="form-group form-date-field form-date-search clearfix  has-icon "
                                            data-format="DD/MM/YYYY">
                                            <i class="far fa-calendar-alt input-icon field-icon"></i>
                                            <div class="date-wrapper clearfix">
                                                <div class="check-in-wrapper">
                                                    <label>Check In</label>
                                                    <div class="inputg check-in-render">01/07/2019</div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="check-in-input" value="01/07/2019" name="start">
                                            <input type="text" class="check-in-out" value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-right">
                                        <div class="form-group form-date-field form-date-search clearfix  has-icon " data-format="DD/MM/YYYY">
                                            <i class="far fa-calendar-alt input-icon field-icon"></i>
                                            <div class="date-wrapper clearfix">
                                                <div class="check-in-wrapper">
                                                    <label>Check Out</label>
                                                    <div class="inputg check-out-render">02/07/2019</div>
                                                </div>
                                            </div>
                                            <input type="hidden" class="check-out-input" value="02/07/2019" name="end">
                                            <input type="text" class="check-in-out" value="01/07/2019 10:11 am-02/07/2019 10:11 am" name="date">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group form-extra-field dropdown clearfix field-detination has-icon">
                                            <i class="fas fa-bed input-icon field-icon"></i>
                                            <div class="dropdown">
                                                <label>Nights</label>
                                                <input type="text" id="" name="" value="" class="inputg" placeholder="1 night" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="col-md-12 mobile-hide-hr"><hr></div>
                                    <div class="clearfix"></div>

                                    <div class="col-md-2 border-right">
                                        <div class="form-group form-extra-field dropdown clearfix field-detination">
                                            <div class="dropdown">
                                                <label>Rooms</label>
                                                <select name="" id="" class="inputg" required="">
                                                <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2 border-right">
                                        <div class="form-group form-extra-field dropdown clearfix field-detination">
                                            <div class="dropdown">
                                                <label>Adult</label>
                                                <select name="" id="" class="inputg" required="">
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 border-right">
                                        <div class="form-group form-extra-field dropdown clearfix field-detination">
                                            <div class="dropdown">
                                                <label>Child</label>
                                                <select name="" id="" class="inputg" required="">
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="clearfix"></div>
                                    <div class="col-md-12 mobile-hide-hr"><hr></div>
                                    <div class="clearfix"></div>

                                    <div class="col-md-4 border-right">
                                        <div class="form-group form-extra-field dropdown clearfix field-detination">
                                            <div class="dropdown">
                                                <label>Hotel Name <span>(optional)</span></label>
                                                <input type="text" id="" name="" value="" class="inputg" placeholder="Place hotel name" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-right">
                                        <div class="form-group form-extra-field dropdown clearfix field-detination">
                                            <div class="dropdown">
                                                <label>Nationality</label>
                                                <select name="" id="" class="inputg" required="">
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3" selected="">Algeria</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary btn-search full-width-btn mt20" type="submit">Search</button>
                                        </div>
                                <!--  <div class="col-md-4">
                                        <div class="form-group form-extra-field dropdown clearfix field-detination">
                                            <div class="dropdown">
                                                <label>Star Ratings</label>
                                                <div class="rate-list">
                                                <ul>
                                                    <li class="st-icheck-item"><label>3<i class="fa fa-star"></i> <input type="checkbox" name="review_score" data-type="hotel_rate" value="1" class="filter-item"><span class="checkmark fcheckbox"></span></label></li>
                                                    <li class="st-icheck-item"><label>4<i class="fa fa-star"></i> <input type="checkbox" name="review_score" data-type="hotel_rate" value="1" class="filter-item"><span class="checkmark fcheckbox"></span></label></li>
                                                    <li class="st-icheck-item"><label>5<i class="fa fa-star"></i> <input type="checkbox" name="review_score" data-type="hotel_rate" value="1" class="filter-item"><span class="checkmark fcheckbox"></span></label></li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="col-md-12 mobile-hide-hr"><hr></div>
                                    <div class="clearfix"></div>
                                    -->




                                <!--  <div class="col-md-4 border-right">
                                        <div class="form-group form-extra-field dropdown clearfix field-detination">
                                            <div class="dropdown">
                                                <label>Residence Country</label>
                                                <select name="" id="" class="inputg" required="">
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3" selected="">Algeria</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>-->







                            </div>
                        </form>

                        </div>
                    </div>
                                </div>
                                <div class="clearfix"></div>

                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <!-- Start Account By En -->
    <section class="account">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"><i class="fas fa-user"></i> Account Details</h2>
                        </div>
                        <div class="card-body body-en">
                            <div class="card bg-primary text-white">
                                <div class="card-body ">
                                    <i class="fas fa-wallet fa-2x"></i>
                                    <h5 class="card-title">Balance Available</h5>
                                    <h2 class="card-text">1000 USD</h2>
                                </div>
                            </div>
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <i class="fas fa-dollar-sign fa-2x"></i>
                                    <h5 class="card-title">Total paid</h5>
                                    <h2 class="card-text">500 USD</h2>
                                </div>
                            </div>
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <i class="fa-regular fa-clock fa-2x"></i>
                                    <h5 class="card-title">Unpaid Orders</h5>
                                    <h2 class="card-text">400 USD</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"><i class="fa-solid fa-list"></i> Orders</h2>
                        </div>
                        <div class="card-body body-en">
                            <div class="card bg-success text-white">
                                <div class="card-body" style="background-color: green">
                                    <i class="fa-solid fa-check fa-2x" style="color: white"></i>
                                    <h5 class="card-title" style="color: white">Complete Booking</h5>
                                    <h2 class="card-text" style="color: white">1000</h2>
                                </div>
                            </div>
                            <div class="card bg-danger text-white">
                                <div class="card-body" style="background-color: rgb(255, 0, 0)">
                                    <i class="fa-solid fa-xmark fa-2x" style="color: white"></i>
                                    <h5 class="card-title" style="color: white">Cancel Booking</h5>
                                    <h2 class="card-text" style="color: white">500</h2>
                                </div>
                            </div>
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <i class="fa-regular fa-clock fa-2x"></i>
                                    <h5 class="card-title">Unpaid Booking</h5>
                                    <h2 class="card-text">400</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Account By En -->

    <div class="clearfix"></div>
    <!-- Start slider offer By En -->
    <section class="offers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box">

                        <h2 class="title">Offers & News</h2>
                    </div>
                    <!-- Place somewhere in the <body> of your page -->
                    <div id="offers" class="flexslider carousel">
                        <ul class="slides">
                            <li>
                                <div class="card" >
                                    <img src="{{ asset('website/images/slider/slide-1.jpg') }}" class="card-img-top" loading="lazy" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Offer Discounted Hotel Prices with RateHawk’s Limited Edition Campaign</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card" >
                                    <img src="{{ asset('website/images/slider/slide-2.jpg') }}" class="card-img-top" loading="lazy" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Offer Discounted Hotel Prices with RateHawk’s Limited Edition Campaign</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card" >
                                    <img src="{{ asset('website/images/slider/slide-3.jpg') }}" class="card-img-top" loading="lazy" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Offer Discounted Hotel Prices with RateHawk’s Limited Edition Campaign</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card" >
                                    <img src="{{ asset('website/images/slider/slide-3.jpg') }}" class="card-img-top" loading="lazy" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Offer Discounted Hotel Prices with RateHawk’s Limited Edition Campaign</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card" >
                                    <img src="{{ asset('website/images/slider/slide-3.jpg') }}" class="card-img-top" loading="lazy" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Offer Discounted Hotel Prices with RateHawk’s Limited Edition Campaign</h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End slider By En -->

@endsection
