@extends('layouts.app')

@section('content')

    <!--? Hero Start -->
    <div class="slider-area2 section-bg2 hero-overly" data-background="{{ asset('/img/hero/hero2.png' )}}">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2">
                            <h2>Galeri</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row">
                    @forelse ($posts as $index => $post)
                        <div class="col-md-4">
                            <div class="single-defination">
                                <img src="{{ $post->img }}" alt="" style="width: 100%; height: auto; height: 250px;" class="img-fluid mb-20">
                                <h3 class="mb-10">{{ $post->judul }}</h3>
                                <p>{{ $post->deskripsi }}</p>
                            </div>
                        </div>
                    @empty
                        <p>No posts available.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

@endsection