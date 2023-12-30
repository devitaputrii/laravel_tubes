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
<<<<<<< HEAD
                                @if (Str::contains($post->img, 'galeris'))
                                    <img src="{{ asset('storage/' . $post->img) }}" alt="" style="width: 100%; height: auto; height: 250px;" class="img-fluid mb-20">
                                @else
                                    <img src="{{ $post->img }}" alt="" style="width: 100%; height: auto; height: 250px;" class="img-fluid mb-20">
                                @endif
=======
                                <img src="{{ $post->img }}" alt="" style="width: 100%; height: auto; height: 250px;" class="img-fluid mb-20">
>>>>>>> 5b41fb7b0812f434c9a8249eda3e900ab1524d3b
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

<<<<<<< HEAD
    <!-- Pengaturan Galeri -->
    @auth
        @if(auth()->user()->role == 'admin')
            <section class="services-area mb-40">
                <div class="container border-bottom pb-20">
                    <div class="row justify-content-center pt-50 pb-10">
                        <div class="col-xl-7 col-lg-8">
                            <div class="section-tittle text-center mb-30">
                                <h2>Pengaturan Galeri</h2>
                                <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#tambahModalGaleri">Tambah Galeri</button>
                            </div>
                        </div>

                        <!-- Modal Tambah Proses -->
                        <div class="modal fade" id="tambahModalGaleri" tabindex="-1" role="dialog" aria-labelledby="tambahModalGaleriLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title" id="tambahModalGaleriLabel">Tambah Galeri</h2>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <!-- Add your form fields here for editing user details -->
                                    <form id="editForm" enctype="multipart/form-data" action="{{ route('tambah-galeri') }}" method="post">
                                        <div class="modal-body">
                                                @csrf <!-- Laravel CSRF token -->
                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                    <h3 class="mb-10">Gambar</h3>
                                                    <input type="file" class="form-control-file" id="tambahGambar" name="tambahGambar">
                                                </div>
                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                    <h3 class="mb-10">Judul</h3>
                                                    <input type="text" id="Judul" name="Judul" placeholder="Judul Proses" class="single-input" required>
                                                </div>
                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                    <h3 class="mb-10">Deskripsi</h3>
                                                    <textarea id="Deskripsi" name="Deskripsi" class="single-textarea" required></textarea>
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
                    <div class="whole-wrap">
                        <div class="container box_1170">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($posts as $index => $post)
                                        <tr>
                                            @if (Str::contains($post->img, 'galeris'))
                                                <td><img src="{{ asset('storage/' . $post->img) }}" alt="User Photo" width="100" height="50"></td>
                                            @else
                                                <td><img src="{{ $post->img }}" alt="User Photo" width="100" height="50"></td>
                                            @endif

                                            <td>{{ $post->judul }}</td>
                                            <td>{{ $post->deskripsi }}</td>
                                            <td class="d-flex justify-content-center">
                                                <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#editModalBanner{{ $post->id }}">Edit</button>
                                                <form action="{{ route('soft-delete-galeri', ['id' => $post->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="genric-btn danger circle arrow small" onclick="return confirm('Apakah kamu yakin mau menghapus gambar ini?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editModalBanner{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalBannerLabel{{ $post->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title" id="editModalBannerLabel{{ $post->id }}">Edit Gambar</h2>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <!-- Add your form fields here for editing user details -->
                                                    <form id="editForm" enctype="multipart/form-data" action="{{ route('update-galeri', ['id' => $post->id]) }}" method="post">
                                                        <div class="modal-body">
                                                                @csrf <!-- Laravel CSRF token -->
                                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                                    <h3 class="mb-10">Gambar</h3>
                                                                    <input type="file" class="form-control-file" id="editFoto" name="editFoto">
                                                                </div>
                                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                                    <h3 class="mb-10">Judul</h3>
                                                                    <input type="text" id="editJudul" name="editJudul" placeholder="Nama User" class="single-input" value="{{ $post->judul }}" required>
                                                                </div>
                                                                <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                                    <h3 class="mb-10">Deskripsi</h3>
                                                                    <textarea id="editDeskripsi" name="editDeskripsi" class="single-textarea" required>{{ $post->deskripsi }}</textarea>
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
                                    @empty
                                        <th scope="row">Data Kosong</th>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section> 
        @endif
    @endauth

=======
>>>>>>> 5b41fb7b0812f434c9a8249eda3e900ab1524d3b
@endsection