@extends('layouts.app')

@section('content')

<section class="py-5 text-center container">
    <div class="row py-lg">
        <div class="col-lg-12 col-md-8 mx-auto">
            <h1 class="layanan">Galeri</h1>
            <br>
        </div>
    </div>
</section>

<div class="container">
    <div class="card-group">
        <div class="card">
            <img src="/gambar/mesin cuci.jpeg" class="card-img-top" alt="Mesin Cuci">
            <div class="card-body">
                <h5 class="card-title">Mesin Cuci Berkualitas</h5>
                <p class="card-text">Mesin cuci kami memiliki kualitas kapasitas yang cukup besar untuk menampung jumlah cucian yang signifikan. Hal ini memungkinkan untuk mencuci sejumlah besar pakaian sekaligus, mengurangi frekuensi mencuci.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="/gambar/lokasi laundry.jpeg" class="card-img-top" alt="Lokasi Laundry">
            <div class="card-body">
                <h5 class="card-title">Lokasi Strategis</h5>
                <p class="card-text">Lokasi laundry yang strategis mudah diakses oleh customer, Terletak di daerah Sukabirus dekat dengan Kampus Telkom.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="/gambar/rak penyimpanan.jpeg" class="card-img-top" alt="Tempat Penyimpanan">
            <div class="card-body">
                <h5 class="card-title">Tempat Penyimpanan</h5>
                <p class="card-text">Memiliki tempat penyimpanan dengan ruangan yang bersih dan aman untuk menjaga pakaian pelanggan tetap terjaga kualitasnya. Kebersihan dan keamanan lingkungan penyimpanan sangat penting untuk memastikan bahwa pakaian tetap dalam kondisi terbaik.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>

@endsection