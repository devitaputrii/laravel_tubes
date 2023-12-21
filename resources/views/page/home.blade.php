@extends('Layout.index')

@section('konten')
  
    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
          <div class="col-lg-6 px-0">
            <h1 class="fw-light"><b>Jasa Laundry Express Terbaik di Telkom </b></h1>
            <p class="lead my-3">Selamat datang di Key's Laundry, kebersihan pakaian Anda! Di sini, kami menghadirkan solusi laundry yang tidak hanya efisien, 
              tetapi juga terjangkau. Dengan teknologi modern dan layanan pelanggan yang ramah, kami memastikan setiap helai pakaian Anda diperlakukan dengan cermat. 
              Temukan kenyamanan dan kepraktisan laundry tanpa repot, hanya di sini</p>
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
                <br> 
                <p class="card-text">Dengan jaminan kebersihan tanpa menunggu lama, laundry kilat kami hadir untuk memenuhi kebutuhan Anda yang serba cepat. 
                  Proses pengerjaan kami tidak hanya efisien, tetapi juga memastikan pakaian Anda keluar dari mesin dengan kesegaran yang maksimal. 
                  Setiap detik berharga, dan di sini kami menghadirkan solusi laundry yang memberikan hasil kilat tanpa mengorbankan kualitas.
                   Percayakan kami untuk memberikan sentuhan cepat dan berkualitas pada pakaian Anda!</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>

            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Laundry Berkualitas</h5>
                <br>
                <p class="card-text">Key’s Laundry Telkom University selalu mengecek ulang kualitas yang dikeriakan oleh karyawan kami. Bahan-bahan yang digunakan merupakan bahan-bahan
                     kualitas dan di olah sendiri oleh laundry kami. Dari pengerjaan yang selalu double check, bahan pencucian yang digunakan terjamin, hingga proses penyetrikaan karyawan 
                     selalu menjaga kulaitas agar menghasilkan hasil laundry yang baik.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Harga Terjangkau</h5>
                <br>
                <p class="card-text">Key's Laundry menawarkan layanan berkualitas tinggi dengan harga yang sangat terjangkau. Kami percaya bahwa kebersihan pakaian Anda tidak harus mahal. 
                  Dengan perpaduan antara teknologi canggih dan perhatian penuh kepada detail, kami memberikan hasil terbaik tanpa menguras dompet Anda. Percayakan pakaian Anda kepada kami, 
                  dan nikmati pengalaman laundry yang efisien dan terjangka </p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


@endsection

