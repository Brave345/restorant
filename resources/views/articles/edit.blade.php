<!DOCTYPE html>
<html>
<head>
    <title>Edit CHEF</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-body">
                        <h1 class="text-center mb-4">Edit CHEF</h1>
                        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="judul">Judul CHEF</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="{{ $article->judul }}">
                            </div>

                            <div class="form-group">
                                <label for="isi">Isi CHEF</label>
                                <textarea class="form-control" id="isi" name="isi" rows="5">{{ $article->isi }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="kategori">Kategori CHEF</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $article->kategori }}">
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar CHEF</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar">
                                <img src="{{ asset('assets/images/' . $article->gambar) }}" alt="Gambar CHEF" class="img-fluid mt-2" style="max-width: 300px;">
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>