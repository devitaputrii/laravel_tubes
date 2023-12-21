<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{url('front/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Galeri</title>
</head>
<body>
    
@include('page.navbar')


<section class="py-5 text-center container">
            <div class="row py-lg">
              <div class="col-lg-50 col-md-8 mx-auto">
                <h1 class="layanan">Galeri</h1>
                <br>
</section>

<div class="card-group">
  <div class="card">
    <img src="/gambar/mesin cuci.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mesin Cuci Berkulitas</h5>
      <p class="card-text">Mesin cuci kami memiliki kualitas kapasitas yang cukup besar untuk menampung jumlah cucian yang signifikan. Hal ini memungkinkan ntuk mencuci sejumlah besar pakaian sekaligus, mengurangi frekuensi mencuci.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="/gambar/lokasi laundry.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Lokasi Strategis</h5>
      <p class="card-text">Lokasi laundry yang strategis mudah diakses oleh customer, Terlertak di daerah Sukabirus dekat dengan Kampus Telkom .</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="/gambar/rak penyimpanan.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Tempat Penyimpanan</h5>
      <p class="card-text">Memiliki tempat penyimpanan dengan ruangan yang bersih dan aman untuk menjaga pakaian pelanggan tetap terjaga kualitasnya. Kebersihan dan keamanan lingkungan penyimpanan sangat penting untuk memastikan bahwa pakaian tetap dalam kondisi terbaik.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>

    </div>
  </div>
</div>

@include('page.footer')
</body>
</html>