@extends('layouts.app')

@section('content')
  
    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
          <div class="col-lg-6 px-0">
            <h1 class="fw-light"><b>Jasa Laundry Express Terbaik di Bandung</b></h1>
            <p class="lead my-3">Selamat datang di Key's Laundry, destinasi terbaik untuk kebutuhan laundry Anda! Kami memahami betapa berharganya waktu Anda, 
              dan itulah mengapa kami hadir untuk membuat hidup Anda lebih mudah dengan layanan laundry berkualitas tinggi.</p>
              <img  src="{{ asset('/gambar/logo laundry.png')}}"  class="posisilogo" alt="..." > 
          </div>
        </div>

        <section class="py-5 text-center container ">
            <div class="row py-lg">
              <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="layanan"><b>Layanan Kami</b></h1>
          </section>
    
          <div class="card-group ">
            <div class="card  ">
              <div class="card-body bg-b">
                <h5 class="card-title">Proses Pengerjaan Kilat</h5>
                <p class="card-text">KEY’S Laundry Telkom University memiliki salah satu keunggulan yang - sangat unggul yaitu proses pengerjaan KILAT terhadap laundry pelanggan.
                     KEY’S Laundry  memiliki beberapa pilihan layanan proses pengerjaan laundry yaitu LAUNDRY EXPRESS 1 HARI, 
                    LAUNDRY EXPRESS 2 HARI, DANLAUNDRY EXPRESS 3 HARI, sesuai dengan kebutuhan Anda.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>

            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Laundry Berkualitas</h5>
                <p class="card-text">KEY’S Laundry Telkom University selalu mengecek ulang kualitas yang dikeriakan oleh karyawan kami. Bahan-bahan yang digunakan merupakan bahan-bahan
                     kualitas dan di olah sendiri oleh laundry kami. Dari pengerjaan yang selalu double check, bahan pencucian yang digunakan terjamin, hingga proses penyetrikaan karyawan 
                     selalu menjaga kulaitas agar menghasilkan hasil laundry yang baik.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Harga Terjangkau</h5>
                <p class="card-text">KEY’S Laundry Telkom University memiliki harga yang terjangkau untuk anak anak mahasiswa Telkom dengan enam ribu rupiah </p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


@endsection

