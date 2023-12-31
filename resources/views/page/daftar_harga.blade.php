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
            <div class="row justify-content-center pt-50 pb-10">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center">
                        @auth
                            @if(auth()->user()->role == 'admin')
                                <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#tambahModalKelompok">Tambah Kelompok</button>
                            @endif
                        @endauth
                    </div>

                    <!-- Modal Tambah Kelompok -->
                    <div class="modal fade" id="tambahModalKelompok" tabindex="-1" role="dialog" aria-labelledby="tambahModalKelompokLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="tambahModalKelompokLabel">Tambah Kelompok</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- Add your form fields here for editing user details -->
                                <form id="editForm" enctype="multipart/form-data" action="{{ route('tambah-kelompok-daftar-harga') }}" method="post">
                                    <div class="modal-body">
                                            @csrf <!-- Laravel CSRF token -->
                                            <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                <h3 class="mb-10">Kelompok</h3>
                                                <input type="text" id="Judul" name="Judul" placeholder="Nama Kelompok" class="single-input" required>
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
                </div>
            </div>
            @forelse ($uniques as $unique)
                <div class="row justify-content-center pt-50 pb-10">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-30">
                            <h2>{{ $unique }}</h2>
                            @auth
                                @if(auth()->user()->role == 'admin')
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="genric-btn primary circle arrow small mr-2" data-toggle="modal" data-target="#tambahModalDaftarHarga{{ str_replace(' ', '_', $unique) }}">Tambah Layanan</button>
                                        <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#editModalKelompok{{ str_replace(' ', '_', $unique) }}">Edit Kelompok</button>
                                        <form action="{{ route('soft-delete-daftar-harga-kelompok', ['kelompok' => $unique]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="genric-btn danger circle arrow small" onclick="return confirm('Apakah kamu yakin mau menghapus kelompok ini?')">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            @endauth
                        </div>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="tambahModalDaftarHarga{{ str_replace(' ', '_', $unique) }}" tabindex="-1" role="dialog" aria-labelledby="tambahModalDaftarHargaLabel{{ str_replace(' ', '_', $unique) }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="tambahModalDaftarHargaLabel{{ str_replace(' ', '_', $unique) }}">Tambah Daftar Layanan</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!-- Add your form fields here for editing user details -->
                                    <form id="editForm" enctype="multipart/form-data" action="{{ route('tambah-daftar-harga', ['kelompok' => $unique]) }}" method="post">
                                        <div class="modal-body">
                                                @csrf <!-- Laravel CSRF token -->
                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                    <h3 class="mb-10">Gambar</h3>
                                                    <input type="file" class="form-control-file" id="editFoto" name="editFoto">
                                                </div>
                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                    <h3 class="mb-10">Nama</h3>
                                                    <input type="text" id="editNama" name="editNama" placeholder="Nama Daftar" class="single-input" required>
                                                </div>
                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                    <h3 class="mb-10">Minimal (Kg)</h3>
                                                    <input type="number" id="editMinimal" name="editMinimal" placeholder="Minimal Berat" class="single-input" required>
                                                </div>
                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                    <h3 class="mb-10">Estimasi (Hari)</h3>
                                                    <input type="number" id="editEstimasi" name="editEstimasi" placeholder="Estimasi Pengerjaan" class="single-input" required>
                                                </div>
                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                    <h3 class="mb-10">Harga (Rupiah)</h3>
                                                    <input type="number" id="editHarga" name="editHarga" placeholder="Harga" class="single-input" required>
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

                        <!-- Modal Edit Kelompok -->
                        <div class="modal fade" id="editModalKelompok{{ str_replace(' ', '_', $unique) }}" tabindex="-1" role="dialog" aria-labelledby="editModalKelompokLabel{{ str_replace(' ', '_', $unique) }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="editModalKelompokLabel{{ str_replace(' ', '_', $unique) }}">Edit Kelompok</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!-- Add your form fields here for editing user details -->
                                    <form id="editForm" enctype="multipart/form-data" action="{{ route('update-kelompok-daftar-harga', ['kelompok' => $unique]) }}" method="post">
                                        <div class="modal-body">
                                            @csrf <!-- Laravel CSRF token -->
                                            <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                <h3 class="mb-10">Kelompok</h3>
                                                <input type="text" id="Kelompok" name="Kelompok" placeholder="Nama Kelompok" class="single-input" value="{{ $unique }}" required>
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
                                    @auth
                                        @if(auth()->user()->role == 'admin')
                                            <div class="country" style="text-align: center;">Action</div>
                                        @endif
                                    @endauth
                                </div>
                                @forelse ($services as $index => $service)
                                    @if ($service->kelompok === $unique)
                                        <div class="table-row">
                                            <div class="serial">{{ $index + 1 }}</div>
                                            @if (Str::contains($service->img, 'daftar_harga_images'))
                                                <div class="country"><img src="{{ asset('storage/' . $service->img) }}" width="50" height="50"></div>
                                            @else
                                                <div class="country"><img src="{{ $service->img }}" width="50" height="50"></div>
                                            @endif
                                            <div class="percentage">{{ $service->name}}</div>
                                            <div class="country" style="text-align: center; display: block;">{{ $service->minimal }} Kg</div>
                                            <div class="country" style="text-align: center; display: block;">{{ $service->estimasi }} Hari</div>
                                            <div class="country" style="text-align: center; display: block;">Rp. {{ $service->harga }}</div>
                                            @auth
                                                @if(auth()->user()->role == 'admin')
                                                    <div class="country" style="text-align: center; display: block;">
                                                        <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#editModalDaftarHarga{{ $service->id }}">Edit</button>
                                                        <form action="{{ route('soft-delete-daftar-harga', ['id' => $service->id]) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="genric-btn danger circle arrow small" onclick="return confirm('Apakah kamu yakin mau menghapus daftar ini?')">Delete</button>
                                                        </form>
                                                    </div>
                                                @endif
                                            @endauth
                                        </div>

                                         <!-- Modal -->
                                         <div class="modal fade" id="editModalDaftarHarga{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalDaftarLabel{{ $service->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title" id="editModalDaftarLabel{{ $service->id }}">Edit Daftar Harga</h2>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <!-- Add your form fields here for editing user details -->
                                                    <form id="editForm" enctype="multipart/form-data" action="{{ route('update-daftar-harga', ['id' => $service->id]) }}" method="post">
                                                        <div class="modal-body">
                                                                @csrf <!-- Laravel CSRF token -->
                                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                                    <h3 class="mb-10">Gambar</h3>
                                                                    <input type="file" class="form-control-file" id="editFoto" name="editFoto">
                                                                </div>
                                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                                    <h3 class="mb-10">Nama</h3>
                                                                    <input type="text" id="editNama" name="editNama" placeholder="Nama Daftar" class="single-input" value="{{ $service->name }}" required>
                                                                </div>
                                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                                    <h3 class="mb-10">Minimal (Kg)</h3>
                                                                    <input type="number" id="editMinimal" name="editMinimal" placeholder="Minimal Berat" class="single-input" value="{{ $service->minimal }}" required>
                                                                </div>
                                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                                    <h3 class="mb-10">Estimasi (Hari)</h3>
                                                                    <input type="number" id="editEstimasi" name="editEstimasi" placeholder="Estimasi Pengerjaan" class="single-input" value="{{ $service->estimasi }}" required>
                                                                </div>
                                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                                    <h3 class="mb-10">Harga (Rupiah)</h3>
                                                                    <input type="number" id="editHarga" name="editHarga" placeholder="Harga" class="single-input" value="{{ $service->harga }}" required>
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

