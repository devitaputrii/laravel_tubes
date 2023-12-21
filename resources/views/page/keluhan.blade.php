<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{url('front/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Komplain</title>
</head>
<body>
    
@include('page.navbar')


<section class="py-5 text-center container">
            <div class="row py-lg">
              <div class="col-lg-50 col-md-8 mx-auto">
                <h1 class="layanan">Form Keluhan</h1>
                <br>
</section>
<div class="container">
  <div class="row mx-0 justify-content-center">
    <div class="col-md-9 col-lg-7 col-xl-6 px-xl-0 px-xxl-3">
      <form
        method="POST"
        class="w-100 rounded-1 p-4 border bg-white"
        enctype="multipart/form-data"
      >
        <label class="d-block mb-4">
          <span class="form-label d-block">Nama</span>
          <input
            name="name"
            type="text"
            class="form-control"
            placeholder="nama kamu"
          />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Email</span>
          <input
            name="email"
            type="email"
            class="form-control"
            placeholder="tripoli@example.com"
          />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Nota Pesanan</span>
          <input name="receipt" type="file" class="form-control" />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Deskripsi</span>
          <textarea
            name="message"
            class="form-control"
            rows="3"
            placeholder="Tulis keluhanmu disini"
          ></textarea>
        </label>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary px-3 rounded-3">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


@include('page.footer')
</body>
</html>