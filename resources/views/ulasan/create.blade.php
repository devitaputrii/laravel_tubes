<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Ulasan</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Formulir Ulasan</h2>
        <form action="/ulasan/store" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Nama -->
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <!-- Alamat -->
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>

            <!-- Ulasan -->
            <div class="form-group">
                <label for="ulasan">Ulasan:</label>
                <textarea class="form-control" id="ulasan" name="ulasan" rows="5" required></textarea>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
        </form>
    </div>

    <!-- Tambahkan link Bootstrap JS (opsional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
