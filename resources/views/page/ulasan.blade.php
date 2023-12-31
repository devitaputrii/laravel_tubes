
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
                                                <div class="country" style="text-align: center;">Actions</div>
                                            </div>
                                            @forelse ($ulasans as $index => $ulasan)
                                                @if(auth()->check() && auth()->user()->id === $ulasan->user_id)
                                                    <div class="table-row">
                                                        <div class="serial">{{ $index + 1 }}</div>
                                                        <div class="country">{{ $ulasan->user->name}}</div>
                                                        <div class="country"><img src="{{ asset('gambar/rating(' . $ulasan->rating . ').png') }}" alt="Rating Image" style="width: 50%;"></div>
                                                        <div class="country" style="text-align: center;">{{ $ulasan->judul }}</div>
                                                        <div class="percentage" >{{ $ulasan->ulasan }}</div>
                                                        <div class="country d-flex justify-content-center">
                                                            <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#editModalUlasan{{ $ulasan->id }}">Edit</button>
                                                            
                                                            <form action="{{ route('soft-delete-ulasan', ['id' => $ulasan->id]) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="genric-btn danger circle arrow small" onclick="return confirm('Apakah kamu yakin mau menghapus ulasan ini?')">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="editModalUlasan{{ $ulasan->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalUlasanLabel{{ $ulasan->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h2 class="modal-title" id="editModalUlasanLabel{{ $ulasan->id }}">Edit Ulasan</h2>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- Add your form fields here for editing user details -->
                                                                <form id="editForm" enctype="multipart/form-data" action="{{ route('update-ulasan', ['id' => $ulasan->id]) }}" method="post">
                                                                    <div class="modal-body">
                                                                            @csrf <!-- Laravel CSRF token -->
                                                                            <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                                                <h3 class="mb-10">Rating</h3>
                                                                                <input type="number" name="Rating" id="Rating" placeholder="Rating" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rating'" required class="single-input" min="1" max="5" value="{{ $ulasan->rating }}">
                                                                            </div>
                                                                            <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                                                <h3 class="mb-10">Judul Ulasan</h3>
                                                                                <input type="text" name="JudulUlasan" id="JudulUlasan" placeholder="JudulUlasan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul Ulasan'" required class="single-input" value="{{ $ulasan->judul }}">
                                                                            </div>
                                                                            <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                                                <h3 class="mb-10">Ulasan</h3>
                                                                                <textarea class="single-textarea" name="Ulasan" id="Ulasan" placeholder="Ulasan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pesan Keluhan'" required>{{ $ulasan->ulasan }}</textarea>
                                                                            </div>
                                                                            <!-- Add other form fields as needed -->
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="genric-btn primary circle arrow small" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="genric-btn primary circle arrow small">Simpan</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
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