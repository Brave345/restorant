<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Chef</title>
    <!-- Menghubungkan dengan Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Formulir Chef</h1>
        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="form-group">
                <label for="judul">Nama</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
                <div class="invalid-feedback">Harap masukkan nama.</div>
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <input type="text" class="form-control" id="isi" name="isi" required>
                <div class="invalid-feedback">Harap masukkan isi.</div>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="kategori" name="kategori" value="CHEF">
            </div>
            <div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*">
    <small class="form-text text-muted">Harap pilih file gambar (format: JPEG, PNG, atau GIF)</small>
</div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Menghubungkan dengan Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Menambahkan validasi form menggunakan JavaScript
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html>