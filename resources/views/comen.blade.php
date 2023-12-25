<!DOCTYPE html>
<html>
<head>
    <title>Komentar</title>
    <style>
        body {
            background-color: #f7f6f6;
        }

        .card {
            border: none;
            box-shadow: 5px 6px 6px 2px #e9ecef;
            border-radius: 4px;
        }

        .dots {
            height: 4px;
            width: 4px;
            margin-bottom: 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }

        .badge {
            padding: 7px;
            padding-right: 9px;
            padding-left: 16px;
            box-shadow: 5px 6px 6px 2px #e9ecef;
        }

        .user-img {
            margin-top: 4px;
        }

        .check-icon {
            font-size: 17px;
            color: #c3bfbf;
            top: 1px;
            position: relative;
            margin-left: 3px;
        }

        .form-check-input {
            margin-top: 6px;
            margin-left: -24px !important;
            cursor: pointer;
        }

        .form-check-input:focus {
            box-shadow: none;
        }

        .icons i {
            margin-left: 8px;
        }

        .reply {
            margin-left: 12px;
        }

        .reply small {
            color: #b7b4b4;
        }

        .reply small:hover {
            color: green;
            cursor: pointer;
        }

        .container {
            position: relative;
        }

        .centered-btn {
            margin-top: 20px;
        }
    </style>
    <!-- Tautan ke file CSS Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Tautan ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Konten HTML -->
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="headings d-flex justify-content-between align-items-center mb-3">
                    @php
                        $desiredId =  request()->route('id'); // Ganti dengan ID yang diinginkan
                        $filteredComments = $comments->where('blog_id', $desiredId);
                    @endphp
                    <h5>Total Comment({{ $filteredComments->count() }})</h5>
                    <div class="buttons">
                        <span class="badge bg-white d-flex flex-row align-items-center">
                            <span class="text-primary">Comments</span>
                            <div class="form-check form-switch"></div>
                        </span>
                    </div>
                </div>
                @foreach ($filteredComments as $comment)
    @php
        // Ubah format waktu menjadi format yang sesuai
        $commentTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at);
        $currentTime = \Carbon\Carbon::now();

        // Perhitungan jarak waktu
        $timeDiff = $commentTime->diffInSeconds($currentTime);

        // Logika untuk menampilkan waktu yang sesuai
        if ($timeDiff >= 86400) { // 86400 detik = 1 hari
            $timeAgo = $commentTime->diffInDays($currentTime) . ' days ago';
        } elseif ($timeDiff >= 3600) { // 3600 detik = 1 jam
            $timeAgo = $commentTime->diffInHours($currentTime) . ' hours ago';
        } elseif ($timeDiff >= 60) { // 60 detik = 1 menit
            $timeAgo = $commentTime->diffInMinutes($currentTime) . ' minutes ago';
        } else {
            $timeAgo = $timeDiff . ' seconds ago';
        }
    @endphp
                <div class="card p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="user d-flex flex-column align-items-center">
    <span>
        <small class="font-weight-bold text-primary">{{ $comment->name }}</small>
    </span>
    <span>
        <small class="font-weight-bold">{{ $comment->content }}</small>
    </span>
</div>
                        <small>{{ $timeAgo }}</small>
                    </div>
                    <div class="action d-flex justify-content-between mt-2 align-items-center">
                        <div class="icons align-items-center">
                           
                        </div>
                    </div>
                </div>
                @endforeach
                <a href="{{ route('blog') }}" class="btn btn-primary centered-btn">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
    </div>
    <!-- Tautan ke file JavaScript jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Tautan ke file JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>