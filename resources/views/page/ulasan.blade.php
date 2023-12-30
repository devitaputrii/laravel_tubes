
@extends('layouts.app')

@section('content')
    <!--? Hero Start -->
    <div class="slider-area2 section-bg2 hero-overly" data-background="{{ asset('/img/hero/hero2.png' )}}">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2">
                            <h2>Ulasan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Form Start -->
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <div class="row mx-0 justify-content-center">
                @auth
                    @if(auth()->user()->role != 'admin')
                        <div class="col-lg-8 col-md-8 mb-40">
                            <form action="{{ route('tambah-ulasan') }}" method="post" enctype="multipart/form-data" class="w-100 rounded-1 p-4 border bg-white">
                                @csrf
                                <div class="mt-20">
                                    <h3 class="mb-10">Rating</h3>
                                    <input type="number" name="Rating" id="Rating" placeholder="Rating" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rating'" required class="single-input" min="1" max="5">
                                    <input type="text" name="UserID" id="UserID" placeholder="Rating" value="{{ auth()->user()->id }}" hidden>
                                </div>
                                <div class="mt-20">
                                    <h3 class="mb-10">Judul Ulasan</h3>
                                    <input type="text" name="JudulUlasan" id="JudulUlasan" placeholder="JudulUlasan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul Ulasan'" required class="single-input">
                                </div>
                                <div class="mt-20">
                                    <h3 class="mb-10">Ulasan</h3>
                                    <textarea class="single-textarea" name="Ulasan" id="Ulasan" placeholder="Ulasan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pesan Keluhan'" required></textarea>
                                </div>
                                <div class="mt-30">
                                    <button type="submit" class="genric-btn primary circle">Submit</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="whole-wrap">
                                <div class="container box_1170">
                                    <div class="progress-table-wrap">
                                        <div class="progress-table">
                                            <div class="table-head">
                                                <div class="serial">#</div>
                                                <div class="country">Nama User</div>
                                                <div class="country" style="text-align: center;">Rating</div>
                                                <div class="percentage" style="text-align: center;">Judul Ulasan</div>
                                                <div class="percentage"style="text-align: center;">Ulasan</div>
                                            </div>
                                            @forelse ($ulasans as $index => $ulasan)
                                                <div class="table-row">
                                                    <div class="serial">{{ $index + 1 }}</div>
                                                    <div class="country">{{ $ulasan->user->name}}</div>
                                                    <div class="country"><img src="{{ asset('gambar/rating(' . $ulasan->rating . ').png') }}" alt="Rating Image" style="width: 50%;"></div>
                                                    <div class="country" style="text-align: center;">{{ $ulasan->judul }}</div>
                                                    <div class="percentage" >{{ $ulasan->ulasan }}</div>
                                                </div>
                                            @empty
                                                <p>No services available.</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12 col-md-12">
                            <div class="whole-wrap">
                                <div class="container box_1170">
                                    <div class="progress-table-wrap">
                                        <div class="progress-table">
                                            <div class="table-head">
                                                <div class="serial">#</div>
                                                <div class="country">Nama User</div>
                                                <div class="country" style="text-align: center;">Rating</div>
                                                <div class="percentage" style="text-align: center;">Judul Ulasan</div>
                                                <div class="percentage"style="text-align: center;">Ulasan</div>
                                            </div>
                                            @forelse ($ulasans as $index => $ulasan)
                                                <div class="table-row">
                                                    <div class="serial">{{ $index + 1 }}</div>
                                                    <div class="country">{{ $ulasan->user->name}}</div>
                                                    <div class="country"><img src="{{ asset('gambar/rating(' . $ulasan->rating . ').png') }}" alt="Rating Image" style="width: 50%;"></div>
                                                    <div class="country" style="text-align: center;">{{ $ulasan->judul }}</div>
                                                    <div class="percentage" >{{ $ulasan->ulasan }}</div>
                                                </div>
                                            @empty
                                                <p>No services available.</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <p >Silahkan <a href="{{ route('login') }}" style="color: black;">Login</a> terlebih dahulu untuk memberikan Ulasan.</p>

                    <div class="col-lg-12 col-md-12">
                            <div class="whole-wrap">
                                <div class="container box_1170">
                                    <div class="progress-table-wrap">
                                        <div class="progress-table">
                                            <div class="table-head">
                                                <div class="serial">#</div>
                                                <div class="country">Nama User</div>
                                                <div class="country" style="text-align: center;">Rating</div>
                                                <div class="percentage" style="text-align: center;">Judul Ulasan</div>
                                                <div class="percentage"style="text-align: center;">Ulasan</div>
                                            </div>
                                            @forelse ($ulasans as $index => $ulasan)
                                                <div class="table-row">
                                                    <div class="serial">{{ $index + 1 }}</div>
                                                    <div class="country">{{ $ulasan->user->name}}</div>
                                                    <div class="country"><img src="{{ asset('gambar/rating(' . $ulasan->rating . ').png') }}" alt="Rating Image" style="width: 50%;"></div>
                                                    <div class="country" style="text-align: center;">{{ $ulasan->judul }}</div>
                                                    <div class="percentage" >{{ $ulasan->ulasan }}</div>
                                                </div>
                                            @empty
                                                <p>No services available.</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endauth
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

@endsection