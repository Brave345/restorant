<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-body">
                        <h1 class="text-center mb-4">Edit Blog</h1>
                        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="user">User</label>
                                <input type="text" class="form-control" id="user" name="user" value="{{ $blog->user }}">
                            </div>

                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <textarea class="form-control" id="judul" name="judul" rows="5">{{ $blog->judul }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="isi">Isi</label>
                                <input type="text" class="form-control" id="isi" name="isi" value="{{ $blog->isi }}">
                            </div>

                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $blog->tanggal }}">
                            </div>

                            <div class="form-group">
                                <label for="gambar">Gambar Blog</label>
                                <input type="file" class="form-control-file" id="gambar" name="gambar">
                                <img src="{{ asset('assets/images/' . $blog->gambar) }}" alt="Gambar CHEF" class="img-fluid mt-2" style="max-width: 300px;">
                            </div>
                            <div class="form-group">
                                <label for="tema_cooking">Tema Cooking</label>
                                <input type="text" class="form-control" id="tema_cooking" name="tema_cooking" value="{{ $blog->tema_cooking }}">
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Kembali</a>
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