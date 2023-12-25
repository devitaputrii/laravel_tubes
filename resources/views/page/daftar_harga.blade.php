
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{url('front/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Daftar Harga</title>
</head>
<body>
    
@include('page.navbar')

<section class="py-5 text-center container">
    <div class="row py-lg">
        <div class="col-lg-50 col-md-8 mx-auto">
            <h1 class="layanan">Daftar Harga</h1>
            <br>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Laundry Item 1</h5>
                          <p class="card-text">Harga: Rp. 10.000
                          <ul>
                            <li>Selesai sesuai waktu nota diterima*</li>
                            <li>Jaminan pakaian luntur 35.000/pcs*</li>
                          </ul>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Laundry Item 2</h5>
                          <p class="card-text">Harga: Rp. 15.000</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Laundry Item 3</h5>
                          <p class="card-text">Harga: Rp. 20.000</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Laundry Item 4</h5>
                          <p class="card-text">Harga: Rp. 25.000</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Laundry Item 5</h5>
                          <p class="card-text">Harga: Rp. 30.000</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></script>


@include('page.footer')
</body>
</html>
