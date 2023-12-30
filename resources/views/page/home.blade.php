@extends('layouts.app')

@section('content')
    <!--? slider Area Start-->
    <section class="slider-area hero-overly">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay="0.2s">Key's Laundry</h1>
                                <p data-animation="fadeInLeft" data-delay="0.4s">Jasa Laundry Express terbaik di Bandung, kami hadir untuk penuhi kebutuhan laundry Anda</p>
                                <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Layanan Kami</a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </section>
    <!-- slider Area End-->

    <!--? Services Area Start -->
    <section class="services-area pt-top border-bottom pb-20 mb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <span class="element">Proses kami</span>
                        <h2>Bagaimana kami bekerja</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{ asset('/img/icon/time-fast-svgrepo-com.svg') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="/layanan">Proses Pengerjaan Kilat</a></h5>
                            <p>key’S Laundry Telkom University memiliki salah satu keunggulan, yaitu proses pengerjaan KILAT terhadap laundry pelanggan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{ asset('/img/icon/services-icon2.svg') }}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Laundry Berkualitas</a></h5>
                            <p>KEY’S Laundry Telkom University selalu menjaga kualitas pakaian anda dengan hanya menggunakan deterjen pilihan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{ asset('/img/icon/indonesian-rupiah-indonesia-svgrepo-com.svg')}}" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Harga Terjangkau</a></h5>
                            <p>KEY’S Laundry Telkom University memiliki harga yang terjangkau untuk mahasiswa Telkom hanya Rp6000</p>
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
                        <span class="element">Layanan</span>
                        <h2>Layanan yang kami tawarkan</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-6">
                    <div class="single-offers">
                        <img src="{{ asset('/img/gallery/offers4.png') }}" alt="" class=" w-100">
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
                                <h5><a href="services.html">Laundry Reguler</a></h5>
                                <p>Hanya dengan Rp6.000/Kg kami jamin pakaian Anda kembali bersih dan wangi!!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-offers">
                        <img src="{{ asset('/img/gallery/offers2.png') }}" alt="" class=" w-100">
                        <div class="offers-caption text-center">
                            <div class="cat-icon">
                                <img src="{{ asset('/img/icon/offers-icon1.png') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Laundry Kilat</a></h5>
                                <p>5 jam kami jamin sudah sampai ditangan Anda, mulai dari Rp10.000/Kg!!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-offers">
                        <img src="{{ asset('/img/gallery/offers1.png' )}}" alt="" class=" w-100">
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
                            <h2>Butuh jasa kami?</h2>
                            <p>Kami jamin pakaian Anda kembali seperti baru</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5">
                        <a href="#" class="btn wantToWork-btn"><img src="{{ asset('/img/icon/call2.png' )}}" alt=""> Hungi kami</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Want To work End -->
    
    <!-- Testimonials_start -->
    <section class="testimonials-area testimonials-overly  position-relative">
        <div class="container">
            <div class="border-bottom section-padding40 ">
                <div class="row">
                    <div class="col-xl-12 ">
                        <!-- testmonial-image -->
                        <div class="testmonial-nav text-center">
                            <div class="testmonial-thumb">
                                <img src="{{ asset('/img/gallery/testimonila1.png' )}}" alt="">
                            </div>
                            <div class="testmonial-thumb">
                                <img src="{{ asset('/img/gallery/testimonila2.png' )}}" alt="">
                            </div>
                            <div class="testmonial-thumb">
                                <img src="{{ asset('/img/gallery/testimonila3.png' )}}" alt="">
                            </div>
                            <div class="testmonial-thumb">
                                <img src="{{ asset('/img/gallery/testimonila2.png' )}}" alt="">
                            </div>
                        </div>
                        <div class="testmonial-item-active text-center">
                            <!-- testimonial-single-items -->
                            <div class="testmonial-item ">
                                <p class="pera">The automated process starts as soon as your clothes go into the<br> machine. The outcome is gleaming clothes!</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p> - Rupaya</p>
                            </div>
                            <!-- testimonial-single-items -->
                            <div class="testmonial-item ">
                                <p class="pera">The automated process starts as soon as your clothes go into the<br> machine. The outcome is gleaming clothes!</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p> - Rupaya</p>
                            </div>
                            <!-- testimonial-single-items -->
                            <div class="testmonial-item ">
                                <p class="pera">The automated process starts as soon as your clothes go into the<br> machine. The outcome is gleaming clothes!</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p> - Rupaya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials_end -->
    
    <!--? Company achievement Start -->
    <!-- <section class="services-area section-padding40 fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-55">
                        <span class="element">Fun Fact</span>
                        <h2>Company achievement</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-cap">
                            <span>4000</span>
                            <p>The automated process starts as soon as your clothes go into the machine.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-cap">
                            <span>300+</span>
                            <p>The automated process starts as soon as your clothes go into the machine.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center">
                        <div class="cat-cap">
                            <span>95%</span>
                            <p>The automated process starts as soon as your clothes go into the machine.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-bt">
                            <img src="{{ asset('/img/gallery/company-bg.png' )}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Company achievement End -->
    
    <!--? About Area  -->
    <section class="about-area2 pb-bottom mt-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="{{ asset('/gambar/lokasi laundry.jpeg' )}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-25">
                            <h2>Tentang kami</h2>
                        </div>
                        <p class="mb-20">
                        Key's Laundry adalah layanan laundry yang didedikasikan untuk memberikan pengalaman laundry yang cepat, bersih, dan handal. Kami memiliki tim profesional yang terlatih dengan baik dan menggunakan peralatan canggih untuk memastikan pakaian Anda dicuci dan dirawat dengan baik. 
                        </p>
                        <!-- <p class="mb-30">The automated process starts as soon as your clothes go into the machine. The outcome is gleaming clothes!</p> -->
                        <!-- <a href="about.html" class="btn">About Us</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->
    <!--?  Map Area start  -->
    <!-- <div class="Map-area">
        <img src="{{ asset('/img/gallery/Map.png' )}}" alt="" class="w-100">
    </div> -->
    <!-- Map Area End -->
@endsection

