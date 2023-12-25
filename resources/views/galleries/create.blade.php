<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Gallery</title>
    <!-- Menghubungkan dengan Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Formulir Blog</h1>
        <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
    @csrf
    <div class="form-group">
        <label for="interior">Interior</label>
        <input type="file" class="form-control-file" id="interior" name="interior" required accept="image/*">
        <small class="form-text text-muted">Harap pilih file gambar (format: JPEG, PNG, atau GIF)</small>
        <div class="invalid-feedback">Harap pilih gambar.</div>
    </div>
    <div class="form-group">
        <label for="food">Food</label>
        <input type="file" class="form-control-file" id="food" name="food" required accept="image/*">
        <small class="form-text text-muted">Harap pilih file gambar (format: JPEG, PNG, atau GIF)</small>
        <div class="invalid-feedback">Harap pilih gambar.</div>
    </div>
    <div class="form-group">
        <label for="event">Event</label>
        <input type="file" class="form-control-file" id="event" name="event" required accept="image/*">
        <small class="form-text text-muted">Harap pilih file gambar (format: JPEG, PNG, atau GIF)</small>
        <div class="invalid-feedback">Harap pilih gambar.</div>
    </div>
    <div class="form-group">
        <label for="vip">VIP</label>
        <input type="file" class="form-control-file" id="vip" name="vip" required accept="image/*">
        <small class="form-text text-muted">Harap pilih file gambar (format: JPEG, PNG, atau GIF)</small>
        <div class="invalid-feedback">Harap pilih gambar.</div>
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