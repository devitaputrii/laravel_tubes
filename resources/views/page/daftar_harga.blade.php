@extends('layouts.app')

@section('content')
    <!--? Hero Start -->
    <div class="slider-area2 section-bg2 hero-overly" data-background="{{ asset('/img/hero/hero2.png' )}}">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Daftar Harga</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Harga</span>
                            <h2>Daftar harga layanan kami</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="section-top-border">
                        <h3 class="mb-30">Table</h3>
                        <div class="progress-table-wrap">
                            <div class="progress-table">
                                <div class="table-head">
                                    <div class="serial">#</div>
                                    <div class="country">Countries</div>
                                    <div class="visit">Visits</div>
                                    <div class="percentage">Percentages</div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">01</div>
                                    <div class="country"> <img src="assets/img/elements/f1.jpg" alt="flag">Canada</div>
                                    <div class="visit">645032</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-1" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">02</div>
                                    <div class="country"> <img src="assets/img/elements/f2.jpg" alt="flag">Canada</div>
                                    <div class="visit">645032</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-2" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">03</div>
                                    <div class="country"> <img src="assets/img/elements/f3.jpg" alt="flag">Canada</div>
                                    <div class="visit">645032</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-3" role="progressbar" style="width: 55%"
                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">04</div>
                                    <div class="country"> <img src="assets/img/elements/f4.jpg" alt="flag">Canada</div>
                                    <div class="visit">645032</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-4" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">05</div>
                                    <div class="country"> <img src="assets/img/elements/f5.jpg" alt="flag">Canada</div>
                                    <div class="visit">645032</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-5" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">06</div>
                                    <div class="country"> <img src="assets/img/elements/f6.jpg" alt="flag">Canada</div>
                                    <div class="visit">645032</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-6" role="progressbar" style="width: 70%"
                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">07</div>
                                    <div class="country"> <img src="assets/img/elements/f7.jpg" alt="flag">Canada</div>
                                    <div class="visit">645032</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-7" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">08</div>
                                    <div class="country"> <img src="assets/img/elements/f8.jpg" alt="flag">Canada</div>
                                    <div class="visit">645032</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-8" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{ asset('/img/icon/services-icon1.svg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">We collect your clothes</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{ asset('/img/icon/services-icon2.svg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Wash your clothes</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="{{ asset('/img/icon/services-icon3.svg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Get delivery</a></h5>
                                <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? Offer-services Start  -->
        <section class="offer-services pb-bottom2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <span class="element">Services</span>
                            <h2>Services we offer</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{ asset('/img/gallery/offers1.png' )}}" alt="" class=" w-100">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{ asset('/img/gallery/offers2.png' )}}" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="{{ asset('/img/icon/offers-icon1.png' )}}" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Cloth laundry</a></h5>
                                    <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{ asset('/img/gallery/offers2.png' )}}" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="{{ asset('/img/icon/offers-icon1.png' )}}" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Cloth ironing</a></h5>
                                    <p>The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="{{ asset('/img/gallery/offers4.png' )}}" alt="" class=" w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offer-services End  -->
        <!--? Want To work -->
        <section class="container">
            <section class="wantToWork-area" data-background="{{ asset('/img/gallery/section_bg01.png' )}}">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Call us for a service</h2>
                                <p>We deliver the goods to the most complicated places on earth</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="#" class="btn wantToWork-btn"><img src="{{ asset('/img/icon/call2.png' )}}" alt=""> Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- Want To work End -->
    
@endsection

