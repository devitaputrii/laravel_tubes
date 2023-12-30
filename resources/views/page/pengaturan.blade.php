@extends('layouts.app')

@section('content')
    <!--? Hero Start -->
    <div class="slider-area2 section-bg2 hero-overly" data-background="{{ asset('/img/hero/hero2.png' )}}">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2">
                            <h2>Pengaturan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Data User -->
    <section class="services-area mb-40">
        <div class="container border-bottom pb-20">
            <div class="row justify-content-center pt-50 pb-10">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-30">
                        <h2>Data User</h2>
                    </div>
                </div>
            </div>
            <div class="whole-wrap">
                <div class="container box_1170">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Foto</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Waktu Daftar</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $index => $user)
                                <tr>
                                    @if (Str::contains($user->img, 'foto_user'))
                                        <td><img src="{{ asset('storage/' . $user->img) }}" alt="User Photo" width="50" height="50"></td>
                                    @else
                                        <td><img src="{{ $user->img }}" alt="User Photo" width="50" height="50"></td>
                                    @endif

                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td class="d-flex justify-content-center">
                                        <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#editModalUser{{ $user->id }}">Edit</button>
                                        
                                        <form action="{{ route('soft-delete-user', ['id' => $user->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="genric-btn danger circle arrow small" onclick="return confirm('Apakah kamu yakin mau menghapus user ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="editModalUser{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $user->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="editModalLabel{{ $user->id }}">Edit User</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Add your form fields here for editing user details -->
                                            <form id="editForm" enctype="multipart/form-data" action="{{ route('update-user', ['id' => $user->id]) }}" method="post">
                                                <div class="modal-body">
                                                        @csrf <!-- Laravel CSRF token -->
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Foto</h3>
                                                            <input type="file" class="form-control-file" id="editFoto" name="editFoto">
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Nama</h3>
                                                            <input type="text" id="editName" name="editName" placeholder="Nama User" class="single-input" value="{{ $user->name }}" required>
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Email</h3>
                                                            <input type="email" id="editEmail" name="editEmail" placeholder="Email User" class="single-input" value="{{ $user->email }}" required>
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

    <!-- Banner -->
    <section class="services-area mb-40">
        <div class="container border-bottom pb-20">
            <div class="row justify-content-center pt-50 pb-10">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-30">
                        <h2>Banner</h2>
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
                            @forelse ($homes as $index => $home)
                                <tr>
                                    @if (Str::contains($home->img_banner, 'banner'))
                                        <td><img src="{{ asset('storage/' . $home->img_banner) }}" alt="User Photo" width="100" height="50"></td>
                                    @else
                                        <td><img src="{{ $home->img_banner }}" alt="User Photo" width="100" height="50"></td>
                                    @endif

                                    <td>{{ $home->judul }}</td>
                                    <td>{{ $home->deskirpsi }}</td>
                                    <td class="d-flex justify-content-center">
                                        <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#editModalBanner{{ $home->id }}">Edit</button>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="editModalBanner{{ $home->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalBannerLabel{{ $home->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="editModalBannerLabel{{ $home->id }}">Edit Banner</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Add your form fields here for editing user details -->
                                            <form id="editForm" enctype="multipart/form-data" action="{{ route('update-banner', ['id' => $home->id]) }}" method="post">
                                                <div class="modal-body">
                                                        @csrf <!-- Laravel CSRF token -->
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Banner</h3>
                                                            <input type="file" class="form-control-file" id="editFoto" name="editFoto">
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Judul</h3>
                                                            <input type="text" id="editJudul" name="editJudul" placeholder="Nama User" class="single-input" value="{{ $home->judul }}" required>
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Deskripsi</h3>
                                                            <input type="text" id="editDeskripsi" name="editDeskripsi" class="single-input" value="{{ $home->deskirpsi }}" required>
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

    <!-- Proses -->
    <section class="services-area mb-40">
        <div class="container border-bottom pb-20">
            <div class="row justify-content-center pt-50 pb-10">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-30">
                        <h2>Proses</h2>
                    </div>
                </div>
            </div>
            <div class="whole-wrap mb-40">
                <div class="container box_1170">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Tema</th>
                                <th scope="col">Sub Tema</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prosess_uniques as $prosess_unique)
                                <tr>
                                    <td>{{ $prosess_unique->tema }}</td>
                                    <td>{{ $prosess_unique->sub_tema }}</td>
                                    <td class="d-flex justify-content-center">
                                        <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#editModalTema">Edit</button>
                                        <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#tambahModalProses">Tambah Proses</button>
                                    </td>
                                </tr>

                                <!-- Modal Tema-->
                                <div class="modal fade" id="editModalTema" tabindex="-1" role="dialog" aria-labelledby="eeditModalTemaLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="eeditModalTemaLabel">Edit Tema</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Add your form fields here for editing user details -->
                                            <form id="editForm" enctype="multipart/form-data" action="{{ route('update-proses-tema') }}" method="post">
                                                <div class="modal-body">
                                                    @csrf <!-- Laravel CSRF token -->
                                                    <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                        <h3 class="mb-10">Tema</h3>
                                                        <input type="text" id="editTema" name="tema" placeholder="Tema" class="single-input" value="{{ $prosess_unique->tema }}" required>
                                                    </div>
                                                    <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                        <h3 class="mb-10">Sub Tema</h3>
                                                        <input type="text" id="editSubTema" name="sub_tema" placeholder="Sub Tema" class="single-input" value="{{ $prosess_unique->sub_tema }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="genric-btn primary circle arrow small" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="genric-btn primary circle arrow small">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Tambah Proses -->
                                <div class="modal fade" id="tambahModalProses" tabindex="-1" role="dialog" aria-labelledby="tambahModalProsesLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="tambahModalProsesLabel">Tambah Proses</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Add your form fields here for editing user details -->
                                            <form id="editForm" enctype="multipart/form-data" action="{{ route('tambah-proses') }}" method="post">
                                                <div class="modal-body">
                                                        @csrf <!-- Laravel CSRF token -->
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Icon</h3>
                                                            <input type="file" class="form-control-file" id="editFoto" name="editFoto">
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Judul</h3>
                                                            <input type="text" id="Judul" name="Judul" placeholder="Judul Proses" class="single-input" required>
                                                            <input type="text" id="Tema" name="Tema" placeholder="Judul Proses" class="single-input" value="{{ $prosess_unique->tema }}" hidden>
                                                            <input type="text" id="SubTema" name="SubTema" placeholder="Judul Proses" class="single-input" value="{{ $prosess_unique->sub_tema }}" hidden>
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="whole-wrap">
                <div class="container box_1170">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Icon</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($prosess as $index => $proses)
                                <tr>
                                    @if (Str::contains($proses->icon, 'proses'))
                                        <td><img src="{{ asset('storage/' . $proses->icon) }}" alt="User Photo" width="50" height="50"></td>
                                    @else
                                        <td><img src="{{ $proses->icon }}" alt="User Photo" width="50" height="50"></td>
                                    @endif

                                    <td>{{ $proses->judul }}</td>
                                    <td>{{ $proses->deskripsi }}</td>
                                    <td class="d-flex justify-content-center">
                                        <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#editModalProses{{ $proses->id }}">Edit</button>

                                        <form action="{{ route('soft-delete-proses', ['id' => $proses->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="genric-btn danger circle arrow small" onclick="return confirm('Apakah kamu yakin mau menghapus proses ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="editModalProses{{ $proses->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalProsesLabel{{ $proses->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="editModalProsesLabel{{ $proses->id }}">Edit Proses</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Add your form fields here for editing user details -->
                                            <form id="editForm" enctype="multipart/form-data" action="{{ route('update-proses', ['id' => $proses->id]) }}" method="post">
                                                <div class="modal-body">
                                                        @csrf <!-- Laravel CSRF token -->
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Icon</h3>
                                                            <input type="file" class="form-control-file" id="editFoto" name="editFoto">
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Judul</h3>
                                                            <input type="text" id="editJudul" name="editJudul" placeholder="Nama User" class="single-input" value="{{ $proses->judul }}" required>
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Deskripsi</h3>
                                                            <textarea id="editDeskripsi" name="editDeskripsi" class="single-textarea" required>{{ $proses->deskripsi }}</textarea>
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

    <!-- Layanan -->
    <section class="services-area mb-40">
        <div class="container border-bottom pb-20">
            <div class="row justify-content-center pt-50 pb-10">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-30">
                        <h2>Layanan</h2>
                    </div>
                </div>
            </div>
            <div class="whole-wrap mb-40">
                <div class="container box_1170">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Tema</th>
                                <th scope="col">Sub Tema</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prosess_layanans as $prosess_layanan)
                                <tr>
                                    <td>{{ $prosess_layanan->tema }}</td>
                                    <td>{{ $prosess_layanan->sub_tema }}</td>
                                    <td class="d-flex justify-content-center">
                                        <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#editModalTemaLayanan">Edit</button>
                                        <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#tambahModalLayanan">Tambah Proses</button>
                                    </td>
                                </tr>

                                <!-- Modal Tema-->
                                <div class="modal fade" id="editModalTemaLayanan" tabindex="-1" role="dialog" aria-labelledby="editModalTemaLayananLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="editModalTemaLayananLabel">Edit Layanan</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Add your form fields here for editing user details -->
                                            <form id="editForm" enctype="multipart/form-data" action="{{ route('update-layanan-tema') }}" method="post">
                                                <div class="modal-body">
                                                    @csrf <!-- Laravel CSRF token -->
                                                    <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                        <h3 class="mb-10">Tema</h3>
                                                        <input type="text" id="editTema" name="tema" placeholder="Tema" class="single-input" value="{{ $prosess_layanan->tema }}" required>
                                                    </div>
                                                    <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                        <h3 class="mb-10">Sub Tema</h3>
                                                        <input type="text" id="editSubTema" name="sub_tema" placeholder="Sub Tema" class="single-input" value="{{ $prosess_layanan->sub_tema }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="genric-btn primary circle arrow small" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="genric-btn primary circle arrow small">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Tambah Layanan -->
                                <div class="modal fade" id="tambahModalLayanan" tabindex="-1" role="dialog" aria-labelledby="tambahModalLayananLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="tambahModalLayananLabel">Edit Proses</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Add your form fields here for editing user details -->
                                            <form id="editForm" enctype="multipart/form-data" action="{{ route('tambah-layanan') }}" method="post">
                                                <div class="modal-body">
                                                        @csrf <!-- Laravel CSRF token -->
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Gambar 1</h3>
                                                            <input type="file" class="form-control-file" id="Gambar1" name="Gambar1">
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Gambar 2</h3>
                                                            <input type="file" class="form-control-file" id="Gambar2" name="Gambar2">
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Icon</h3>
                                                            <input type="file" class="form-control-file" id="Icon" name="Icon">
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Judul</h3>
                                                            <input type="text" id="editJudul" name="editJudul" placeholder="Nama User" class="single-input" required>
                                                            <input type="text" id="Tema" name="Tema" placeholder="Judul Proses" class="single-input" value="{{ $prosess_layanan->tema }}" hidden>
                                                            <input type="text" id="SubTema" name="SubTema" placeholder="Judul Proses" class="single-input" value="{{ $prosess_layanan->sub_tema }}" hidden>
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Deskripsi</h3>
                                                            <textarea id="editDeskripsi" name="editDeskripsi" class="single-textarea" required></textarea>
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="whole-wrap">
                <div class="container box_1170">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Gambar 1</th>
                                <th scope="col">Gambar 2</th>
                                <th scope="col">Icon</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($layanans as $index => $layanan)
                                <tr>
                                    @if (Str::contains($layanan->img1, 'layanan'))
                                        <td><img src="{{ asset('storage/' . $layanan->img1) }}" alt="User Photo" width="100" height="100"></td>
                                    @else
                                        <td><img src="{{ $layanan->img1 }}" alt="User Photo" width="100" height="100"></td>
                                    @endif
                                    @if (Str::contains($layanan->img2, 'layanan'))
                                        <td><img src="{{ asset('storage/' . $layanan->img2) }}" alt="User Photo" width="100" height="100"></td>
                                    @else
                                        <td><img src="{{ $layanan->img2 }}" alt="User Photo" width="100" height="100"></td>
                                    @endif
                                    @if (Str::contains($layanan->img_icon, 'layanan'))
                                        <td><img src="{{ asset('storage/' . $layanan->img_icon) }}" alt="User Photo" width="50" height="50"></td>
                                    @else
                                        <td><img src="{{ $layanan->img_icon }}" alt="User Photo" width="50" height="50"></td>
                                    @endif

                                    <td>{{ $layanan->judul }}</td>
                                    <td>{{ $layanan->deskripsi }}</td>
                                    <td class="d-flex justify-content-center">
                                        <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#editModalLayanan{{ $layanan->id }}">Edit</button>

                                        <form action="{{ route('soft-delete-layanan', ['id' => $layanan->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="genric-btn danger circle arrow small" onclick="return confirm('Apakah kamu yakin mau menghapus layanan ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="editModalLayanan{{ $layanan->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLayananLabel{{ $layanan->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="editModalLayananLabel{{ $layanan->id }}">Edit Proses</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Add your form fields here for editing user details -->
                                            <form id="editForm" enctype="multipart/form-data" action="{{ route('update-layanan', ['id' => $layanan->id]) }}" method="post">
                                                <div class="modal-body">
                                                        @csrf <!-- Laravel CSRF token -->
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Gambar 1</h3>
                                                            <input type="file" class="form-control-file" id="Gambar1" name="Gambar1">
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Gambar 2</h3>
                                                            <input type="file" class="form-control-file" id="Gambar2" name="Gambar2">
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Icon</h3>
                                                            <input type="file" class="form-control-file" id="Icon" name="Icon">
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Judul</h3>
                                                            <input type="text" id="editJudul" name="editJudul" placeholder="Nama User" class="single-input" value="{{ $layanan->judul }}" required>
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Deskripsi</h3>
                                                            <textarea id="editDeskripsi" name="editDeskripsi" class="single-textarea" required>{{ $layanan->deskripsi }}</textarea>
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

    <!-- Kontak -->
    <section class="services-area mb-40">
        <div class="container border-bottom pb-20">
            <div class="row justify-content-center pt-50 pb-10">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-30">
                        <h2>Kontak</h2>
                    </div>
                </div>
            </div>
            <div class="whole-wrap">
                <div class="container box_1170">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Judul</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Nomor HP</th>
                                <th scope="col">Alamat</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kontaks as $index => $kontak)
                                <tr>
                                    <td>{{ $kontak->judul }}</td>
                                    <td>{{ $kontak->deskripsi }}</td>
                                    <td>{{ $kontak->no_hp }}</td>
                                    <td>{{ $kontak->alamat }}</td>
                                    <td class="d-flex justify-content-center">
                                        <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#editModalKontak{{ $kontak->id }}">Edit</button>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="editModalKontak{{ $kontak->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalKontakLabel{{ $kontak->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="editModalKontakLabel{{ $kontak->id }}">Edit Kontak</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Add your form fields here for editing user details -->
                                            <form id="editForm" enctype="multipart/form-data" action="{{ route('update-kontak', ['id' => $kontak->id]) }}" method="post">
                                                <div class="modal-body">
                                                        @csrf <!-- Laravel CSRF token -->
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Judul</h3>
                                                            <input type="text" id="editJudul" name="editJudul" placeholder="Nama User" class="single-input" value="{{ $kontak->judul }}" required>
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Deskripsi</h3>
                                                            <input type="text" id="editDeskripsi" name="editDeskripsi" class="single-input" value="{{ $kontak->deskripsi }}" required>
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Nomor HP</h3>
                                                            <input type="number" id="editHp" name="editHp" placeholder="Nama User" class="single-input" value="{{ $kontak->no_hp }}" required>
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Alamat</h3>
                                                            <input type="text" id="editAlamat" name="editAlamat" class="single-input" value="{{ $kontak->alamat }}" required>
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

    <!-- Tentang Kami -->
    <section class="services-area mb-40">
        <div class="container border-bottom pb-20">
            <div class="row justify-content-center pt-50 pb-10">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-tittle text-center mb-30">
                        <h2>Tentang Kami</h2>
                    </div>
                </div>
            </div>
            <div class="whole-wrap">
                <div class="container box_1170">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tentang_kamis as $index => $tentang_kami)
                                <tr>
                                    @if (Str::contains($tentang_kami->img, 'tentang'))
                                        <td><img src="{{ asset('storage/' . $tentang_kami->img) }}" alt="User Photo" width="100" height="100"></td>
                                    @else
                                        <td><img src="{{ $tentang_kami->img }}" alt="User Photo" width="100" height="100"></td>
                                    @endif

                                    <td>{{ $tentang_kami->judul }}</td>
                                    <td>{{ $tentang_kami->deskripsi }}</td>
                                    <td class="d-flex justify-content-center">
                                        <button type="button" class="genric-btn info circle arrow small mr-2" data-toggle="modal" data-target="#editModalTentang{{ $tentang_kami->id }}">Edit</button>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="editModalTentang{{ $tentang_kami->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalTentangLabel{{ $tentang_kami->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="editModalTentangLabel{{ $tentang_kami->id }}">Edit Tentang Kami</h2>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- Add your form fields here for editing user details -->
                                            <form id="editForm" enctype="multipart/form-data" action="{{ route('update-tentang', ['id' => $tentang_kami->id]) }}" method="post">
                                                <div class="modal-body">
                                                        @csrf <!-- Laravel CSRF token -->
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Gambar</h3>
                                                            <input type="file" class="form-control-file" id="editFoto" name="editFoto">
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Judul</h3>
                                                            <input type="text" id="editJudul" name="editJudul" placeholder="Nama User" class="single-input" value="{{ $tentang_kami->judul }}" required>
                                                        </div>
                                                        <div class="form-group" style="padding-left: 20px; padding-right: 20px;">
                                                            <h3 class="mb-10">Deskripsi</h3>
                                                            <textarea id="editDeskripsi" name="editDeskripsi" class="single-textarea" required>{{ $tentang_kami->deskripsi }}</textarea>
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
@endsection

