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
    <section class="services-area mb-40">
        <div class="container border-bottom pb-20">
            @forelse ($uniques as $unique)
                <div class="row justify-content-center pt-50 pb-10">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-30">
                            <h2>{{ $unique }}</h2>
                        </div>
                    </div>
                </div>
                <div class="whole-wrap">
                    <div class="container box_1170">
                        <div class="progress-table-wrap">
                            <div class="progress-table">
                                <div class="table-head">
                                    <div class="serial">#</div>
                                    <div class="country">Gambar</div>
                                    <div class="percentage">Nama Layanan</div>
                                    <div class="country" style="text-align: center;">Minimal Berat</div>
                                    <div class="country" style="text-align: center;">Estimasi</div>
                                    <div class="country" style="text-align: center;">Harga</div>
                                </div>
                                @forelse ($services as $index => $service)
                                    @if ($service->kelompok === $unique)
                                        <div class="table-row">
                                            <div class="serial">{{ $index + 1 }}</div>
                                            <div class="country"><img src="{{ $service->img }}"></div>
                                            <div class="percentage">{{ $service->name}}</div>
                                            <div class="country" style="text-align: center; display: block;">{{ $service->minimal }} Kg</div>
                                            <div class="country" style="text-align: center; display: block;">{{ $service->estimasi }} Hari</div>
                                            <div class="country" style="text-align: center; display: block;">Rp. {{ $service->harga }}</div>
                                        </div>
                                    @endif
                                @empty
                                    <p>No services available.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>No services available.</p>
            @endforelse
        </div>
    </section>

    <!-- Services End -->
    <!--? Want To work -->
    <section class="container">
        <section class="wantToWork-area" data-background="{{ asset('/img/gallery/section_bg01.png' )}}">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-8 col-lg-9 col-md-7">
                        <div class="wantToWork-caption wantToWork-caption2">
                        @foreach($kontaks as $kontak)
                            <h2>{{ $kontak->judul }}</h2>
                            <p>{{ $kontak->deskripsi }}</p>
                        @endforeach
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5">
                        <a href="#" class="btn wantToWork-btn"><img src="{{ asset('/img/icon/call2.png' )}}" alt=""> Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- Want To work End -->
    
@endsection

