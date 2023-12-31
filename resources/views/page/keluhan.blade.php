@extends('layouts.app')

@section('content')

    <!--? Hero Start -->
    <div class="slider-area2 section-bg2 hero-overly" data-background="{{ asset('/img/hero/hero2.png' )}}">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2">
                            <h2>Komplain</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Form Start -->
    @auth
        @if(auth()->user()->role === 'admin')
            <div class="section-top-border">
                <div class="col-lg-12 col-md-12">
                    <div class="whole-wrap">
                        <div class="container box_1170" style="max-width: 1600px;">
                            <div class="progress-table-wrap">
                                <div class="progress-table">
                                    <div class="table-head">
                                        <div class="serial" style="width: 5%;">#</div>
                                        <div class="country" style="width: 20%;">Nama User</div>
                                        <div class="country" style="width: 20%;">Email</div>
                                        <div class="percentage" style="width: 45%;">Keluhan</div>
                                        <div class="country text-center" style="width: 25%;">Nota</div>
                                        <div class="country text-center" style="width: 12%;">Status</div>
                                        <div class="country text-center" style="width: 12%;">Action</div>
                                    </div>
                                    @forelse ($komplains as $index => $komplain)
                                        <div class="table-row">
                                            <div class="serial" style="width: 5%;">{{ $index + 1 }}</div>
                                            <div class="country" style="width: 20%;">{{ $komplain->nama}}</div>
                                            <div class="country" style="width: 20%;">{{ $komplain->email }}</div>
                                            <div class="percentage" style="width: 45%; padding-left: 0px;">{{ $komplain->deskripsi }}</div>
                                            @if (Str::contains($komplain->img_nota, 'nota_pesanans'))
                                                <div class="country d-flex justify-content-center align-items-center" style="width: 25%;"><img src="{{ asset('storage/' . $komplain->img_nota) }}" alt="User Photo" width="200" height="200"></div>
                                            @else
                                                <div class="country d-flex justify-content-center align-items-center" style="width: 25%;" ><img src="{{ $komplain->img_nota }}" alt="User Photo"  width="200" height="200"></div>
                                            @endif
                                            
                                            @if($komplain->status === 'Selesai')
                                                <div class="country text-center" style="width: 12%; padding-left: 0px;"><a href="#" class="genric-btn success radius">{{$komplain->status}}</a></div>
                                            @else
                                                <div class="country text-center" style="width: 12%; padding-left: 0px;"><a href="#" class="genric-btn danger radius">{{$komplain->status}}</a></div>
                                            @endif
                                                
                                            <div class="country d-flex flex-column justify-content-center align-items-center" style="width: 12%;">
                                                <form action="{{ route('update-komplain', ['id' => $komplain->id]) }}" method="POST" class="mb-2">
                                                    @csrf
                                                    <button type="submit" class="genric-btn info circle arrow small" onclick="return confirm('Apakah kamu yakin mau merubah status keluhan ini?')">Update</button>
                                                </form>
                                                
                                                <form action="{{ route('soft-delete-komplain', ['id' => $komplain->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="genric-btn danger circle arrow small" onclick="return confirm('Apakah kamu yakin mau menghapus keluhan ini?')">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    @empty
                                        <p>No services available.</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="whole-wrap">
                <div class="container">
                    <div class="section-top-border">
                        <div class="row mx-0 justify-content-center">
                            <div class="col-lg-8 col-md-8">
                                <form action="{{ route('tambah-komplain') }}" method="post" enctype="multipart/form-data" class="w-100 rounded-1 p-4 border bg-white">
                                    @csrf
                                    <div class="mt-20">
                                        <h3 class="mb-10">Nama</h3>
                                        <input type="text" name="Nama" id="Nama" placeholder="Nama Kamu"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Kamu'" required
                                        class="single-input">
                                    </div>
                                    <div class="mt-20">
                                        <h3 class="mb-10">Email</h3>
                                        <input type="email"  name="Email" id="Email" placeholder="Email Kamu"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Kamu'" required
                                        class="single-input">
                                    </div>    
                                    <div class="mt-20">
                                        <h3 class="mb-10">Nota Pesanan</h3>
                                        <input type="file"  name="Nota" id="Nota" placeholder="Nota Pesanan"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nota Pesanan'" required
                                        class="single-input">
                                    </div>                               
                                    <div class="mt-20">
                                        <h3 class="mb-10">Keluhan</h3>
                                        <textarea class="single-textarea"  name="Keluhan" id="Keluhan" placeholder="Pesan Keluhan" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Pesan Keluhan'" required></textarea>
                                    </div>
                                    <div class="mt-30">
                                        <button type="submit" class="genric-btn primary circle">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div class="whole-wrap">
            <div class="container">
                <div class="section-top-border">
                    <div class="row mx-0 justify-content-center">
                        <div class="col-lg-8 col-md-8">
                            <form action="{{ route('tambah-komplain') }}" method="post" enctype="multipart/form-data" class="w-100 rounded-1 p-4 border bg-white">
                                @csrf
                                <div class="mt-20">
                                    <h3 class="mb-10">Nama</h3>
                                    <input type="text" name="Nama" id="Nama" placeholder="Nama Kamu"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Kamu'" required
                                    class="single-input">
                                </div>
                                <div class="mt-20">
                                    <h3 class="mb-10">Email</h3>
                                    <input type="email"  name="Email" id="Email" placeholder="Email Kamu"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Kamu'" required
                                    class="single-input">
                                </div>    
                                <div class="mt-20">
                                    <h3 class="mb-10">Nota Pesanan</h3>
                                    <input type="file"  name="Nota" id="Nota" placeholder="Nota Pesanan"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nota Pesanan'" required
                                    class="single-input">
                                </div>                               
                                <div class="mt-20">
                                    <h3 class="mb-10">Keluhan</h3>
                                    <textarea class="single-textarea"  name="Keluhan" id="Keluhan" placeholder="Pesan Keluhan" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Pesan Keluhan'" required></textarea>
                                </div>
                                <div class="mt-30">
                                    <button type="submit" class="genric-btn primary circle">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
    <!-- Form End -->
@endsection