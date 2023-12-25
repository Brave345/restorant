
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog Detail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-widthinitial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>
    .error-message {
        color: red;
        font-size: 12px;
    }
</style>
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="{{ route('home') }}">
							<img src="images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="{{ route('home') }}">Home</a>
								</li>

								<li>
									<a href="{{ route('menu') }}">Menu</a>
								</li>

								<li>
									<a href="{{ route('reservation') }}">Reservation</a>
								</li>

								<li>
									<a href="{{ route('gallery') }}">Gallery</a>
								</li>

								<li>
									<a href="{{ route('about') }}">About</a>
								</li>

								<li>
									<a href="{{ route('blog') }}">Blog</a>
								</li>

								<li>
									<a href="{{ route('contact') }}">Contact</a>
								</li>
							</ul>
						</nav>
					</div>

				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="{{ route('home') }}" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('menu') }}" class="txt19">Menu</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('gallery') }}" class="txt19">Gallery</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('about') }}" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('blog') }}" class="txt19">Blog</a>
			</li>

			<li class="t-center m-b-33">
				<a href="{{ route('contact') }}" class="txt19">Contact</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="{{ route('reservation') }}" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Reservation
				</a>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Gallery
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
					<img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY">
				</a>
			</div>
		</div>
	</aside>


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-03.jpg);">
		<h2 class="tit6 t-center">
			Blog Komentar
		</h2>
	</section>


	<!-- Content page -->
	<section>
		<div class="bread-crumb bo5-b p-t-17 p-b-17">
			<div class="container">
				<a href="{{ route('home') }}" class="txt27">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

				<a href="{{ route('blog') }}" class="txt27">
					Blog KOMENTAR
				</a>

				
			</div>
		</div>

		<div class="container">
			<div class="row ">
				<div class="col-md-8 col-lg-9">
					<div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
						@php
        				$desiredId =  request()->route('id'); // Ganti dengan ID yang diinginkan
    					@endphp
    
    @foreach ($blogs as $blog)
        @if ($blog->id == $desiredId)
		<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a >
									<img src="{{ asset('assets/images/' . $blog->gambar) }}" alt="Gambar Artikel" class="img-fluid">
									
								</a>

								
							</div>
            

                <!-- - -->
                <div class="text-blo4 p-t-33">
                    <h4 class="p-b-16">
                        <a href="{{ route('blogdetail', ['id' => $blog->id]) }}" class="tit9">{{ $blog->judul }}</a>
                    </h4>

                    <div class="txt32 flex-w p-b-24">
                        <span>
							@php
    $comments = App\Models\Comment::all(); // Ubah sesuai dengan model dan logika Anda untuk mendapatkan data komentar
    $filteredComments = $comments->where('blog_id', $blog->id);
    $totalComments = $filteredComments->count();
@endphp

<a href="{{ route('comen', ['id' => $blog->id]) }}">Comment ({{ $totalComments }})</a>
                        </span>
                    </div>

                    <p>
                        {{ $blog->isi }}
                    </p>
                </div>
        
				@endif
    				@endforeach
					<br>
					<br>
<form class="leave-comment p-t-10" action="{{ route('comments.store') }}" method="POST" id="commentForm">
    @csrf
    <h4 class="txt33 p-b-14">
        Leave a Comment
    </h4>


    <textarea class="bo-rad-10 size29 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-40" name="comment" id="commentInput" placeholder="Comment..."></textarea>
    <span id="commentError" class="error-message"></span>

    <div class="size30 bo2 bo-rad-10 m-t-3 m-b-20">
        <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" id="nameInput" placeholder="Name *">
        <span id="nameError" class="error-message"></span>
    </div>

    @php
        $desiredId = request()->route('id');
    @endphp

    @foreach ($blogs as $blog)
        @if ($blog->id == $desiredId)
            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
        @endif
    @endforeach

    <!-- Button3 -->
    <button type="submit" class="btn3 flex-c-m size31 txt11 trans-0-4" id="submitButton" disabled>
        Post Comment
    </button>
</form>

					</div>
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
						<!-- Categories -->
						<div class="categories">
							<h4 class="txt33 bo5-b p-b-35 p-t-58">
								Categories
							</h4>

							<ul>
								<li class="bo5-b p-t-8 p-b-8">
									<a  class="txt27">
										Cooking recipe
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a  class="txt27">
										Delicious foods
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a  class="txt27">
										Events Design
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a  class="txt27">
										Restaurant Place
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a  class="txt27">
										WordPress
									</a>
								</li>
							</ul>
						</div>

						<!-- Most Popular -->
						<div class="popular">
							<h4 class="txt33 p-b-35 p-t-58">
								Most popular
							</h4>

							<ul>
								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a >
											<img src="images/blog-11.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a  class="dis-block txt28 m-b-8">
											Best Places for Wine
										</a>

										<span class="txt14">
											3 days ago
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a >
											<img src="images/blog-12.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a  class="dis-block txt28 m-b-8">
											Eggs and Cheese
										</a>

										<span class="txt14">
											Dec 15, 2023
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a >
											<img src="images/blog-13.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a  class="dis-block txt28 m-b-8">
											Style the Wedding Party
										</a>

										<span class="txt14">
											Dec 15, 2023
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a >
											<img src="images/blog-14.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a  class="dis-block txt28 m-b-8">
											Cooking recipe Delicious
										</a>

										<span class="txt14">
											Dec 10, 2023
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a >
											<img src="images/blog-15.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a  class="dis-block txt28 m-b-8">
											Pizza is prepared fresh
										</a>

										<span class="txt14">
											Dec 10, 2023
										</span>
									</div>
								</li>
							</ul>
						</div>


						
					</div>
				</div>
		</div>
	</section>


<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Contact Us
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							Gedung Fairgrounds No.Kav 52-53, Jl. Scbd No.Lot 14, RT.5/RW.3, Senayan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(+62)8221 5532 931
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							rajuabdullah263@gmail.com
						</li>
					</ul>

					<!-- - -->
					<h4 class="txt13 m-b-32">
						Opening Times
					</h4>

					<ul>
						<li class="txt14">
							09:30 AM – 11:00 PM
						</li>

						<li class="txt14">
							Every Day
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Latest twitter
					</h4>

					<div class="m-b-25">
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a  class="txt15">
							@colorlib
						</a>

						<p class="txt14 m-b-18">
							Activello is a good option. It has a slider built into that displays the featured image in the slider.
							
						</p>

						<span class="txt16">
							21 Dec 2023
						</span>
					</div>

					<div>
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a  class="txt15">
							@colorlib
						</a>

						<p class="txt14 m-b-18">
							Activello is a good option. It has a slider built into that displays
							
						</p>

						<span class="txt16">
							21 Dec 2023
						</span>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Gallery
					</h4>

					<!-- Gallery footer -->
					<div class="wrap-gallery-footer flex-w">
						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-01.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-02.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-03.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-04.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-04.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-05.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-06.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-07.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-08.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-08.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-09.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-10.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-11.jpg" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="images/photo-gallery-12.jpg" data-lightbox="gallery-footer">
							<img src="images/photo-gallery-thumb-12.jpg" alt="GALLERY">
						</a>
					</div>

				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Menangkap elemen-elemen yang diperlukan
        var commentForm = document.getElementById('commentForm');
        var commentInput = document.getElementById('commentInput');
        var nameInput = document.getElementById('nameInput');
        var submitButton = document.getElementById('submitButton');
        var commentError = document.getElementById('commentError');
        var nameError = document.getElementById('nameError');

        // Membuat fungsi untuk memeriksa validitas formulir
        function validateForm() {
            var commentValue = commentInput.value.trim();
            var nameValue = nameInput.value.trim();

            if (commentValue !== '' && nameValue !== '') {
                submitButton.disabled = false; // Mengaktifkan tombol jika semua bidang telah diisi
                commentError.textContent = ''; // Menghapus pesan error pada teks komentar
                nameError.textContent = ''; // Menghapus pesan error pada teks nama
            } else {
                submitButton.disabled = true; // Menonaktifkan tombol jika ada bidang yang kosong
                commentError.textContent = commentValue === '' ? 'Please enter your comment.' : ''; // Menampilkan pesan error jika bidang komentar kosong
                nameError.textContent = nameValue === '' ? 'Please enter your name.' : ''; // Menampilkan pesan error jika bidang nama kosong
            }
        }

        // Menambahkan event listener untuk memeriksa validitas formulir saat pengguna mengisi bidang
        commentInput.addEventListener('input', validateForm);
        nameInput.addEventListener('input', validateForm);

        // Menambahkan event listener untuk menampilkan pesan pop-up jika komentar berhasil diposting
        commentForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman formulir secara default

            // Memeriksa apakah formulir valid sebelum mengirimkan komentar
            if (commentInput.value.trim() !== '' && nameInput.value.trim() !== '') {
                // Mengirimkan formulir secara asinkron menggunakan AJAX atau fetch API ke endpoint yang sesuai
                fetch(commentForm.action, {
                    method: commentForm.method,
                    body: new FormData(commentForm)
                })
                .then(function(response) {
                    // Memeriksa status respons
                    if (response.ok) {
                        // Tampilkan pesan pop-up
                        alert('Comment posted successfully.');
                        // Reset formulir
                        commentForm.reset();
                        // Nonaktifkan tombol "Post Comment"
                        submitButton.disabled = true;
                    } else {
                        // Menampilkan pesan error jika ada masalah dengan pengiriman komentar
                        alert('Failed to post comment. Please try again.');
                    }
                })
                .catch(function(error) {
                    // Menampilkan pesan error jika terjadi kesalahan saat mengirimkan komentar
                    console.error('Error:', error);
                });
            }
        });
    });
</script>



</body>
</html>
