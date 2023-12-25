<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reservation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
		    /* Tampilan datepicker */
    .ui-datepicker {
        font-family: 'Montserrat', sans-serif; /* Menggunakan font Montserrat */
        font-size: 14px;
    }
    .ui-datepicker-header {
        background-color: #f6f6f6;
        border: none;
    }
    .ui-datepicker-title {
        color: #333;
        font-weight: 700;
    }
    .ui-datepicker-prev, .ui-datepicker-next {
        color: #333;
    }
    .ui-datepicker-calendar th {
        background-color: #f6f6f6;
        color: #333;
    }
    .ui-datepicker-calendar td {
        background-color: #fff;
    }
    .ui-datepicker-calendar .ui-state-default {
        color: #333;
    }
    .ui-datepicker-calendar .ui-state-hover {
        background-color: #e6e6e6;
    }
    .disabled-button {
        background-color: #CCCCCC !important;
        cursor: not-allowed;
    }

    .disabled-button:hover {
        animation: none !important;
        color: inherit !important;
        transition: none !important;
		cursor: not-allowed;
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
						<a href="index.html">
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

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
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
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">

    <h2 class="tit6 t-center" style="margin-top: 15px;">
        Reservation
    </h2>
</section>

<!-- Menampilkan pesan kesalahan -->
    @if(session('error'))
        <div class="alert alert-danger" style="margin-bottom: 15px;">
            {{ session('error') }}
        </div>
    @endif

    <!-- Menampilkan pesan keberhasilan -->
    @if(session('success'))
        <div class="alert alert-success" style="margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif
	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		 
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Reservation
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Book table
						</h3>
					</div>

					<form class="wrap-form-reservation size22 m-l-r-auto" action="/transaksi" method="POST">
    @csrf
    <div class="row">
		<div class="col-md-4">
    <!-- Date -->
    <span class="txt9">
        Date
    </span>

    <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
        <input class="datepicker bo-rad-10 sizefull txt10 p-l-20" type="date" name="date" id="date" placeholder="Date" >
        <i class=" ab-r-m hov-pointer m-r-18" aria-hidden="true" onclick="showCalendar()"></i>
    </div>
</div>


        <div class="col-md-4">
            <!-- Time -->
            <span class="txt9">
                Time
            </span>

            <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <!-- Select2 -->
                <select class="selection-1" name="time">
                    <option value="9:00">9:00</option>
                    <option value="9:30">9:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                    <option value="14:00">14:00</option>
                    <option value="14:30">14:30</option>
                    <option value="15:00">15:00</option>
                    <option value="15:30">15:30</option>
                    <option value="16:00">16:00</option>
                    <option value="16:30">16:30</option>
                    <option value="17:00">17:00</option>
                    <option value="17:30">17:30</option>
                    <option value="18:00">18:00</option>
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <!-- People -->
            <span class="txt9">
                People
            </span>

            <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <!-- Select2 -->
                <select class="selection-1" name="people">
                    <option value="2">2 people</option>
                    <option value="3">3 people</option>
                    <option value="4">4 people</option>
                    <option value="5">5 people</option>
                    <option value="6">6 people</option>
                    <option value="7">7 people</option>
                    <option value="8">8 people</option>
                    <option value="9">9 people</option>
                    <option value="10">10 people</option>
                    <option value="11">11 people</option>
                    <option value="12">12 people</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <!-- Name -->
            <span class="txt9">
                Name
            </span>

            <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <input class="bo-rad-10 sizefull txt10 p-l-20" type="name" name="name" placeholder="Name">
            </div>
        </div>

        <div class="col-md-4">
            <!-- Phone -->
            <span class="txt9">
                Phone
            </span>

            <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="phone" placeholder="Phone">
            </div>
        </div>

        <div class="col-md-4">
            <!-- Email -->
            <span class="txt9">
                Email
            </span>

            <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                <input class="bo-rad-10 sizefull txt10 p-l-20" type="email" name="email" placeholder="Email">
            </div>
        </div>
		<div class="col-md-12">
			<!-- People -->
            <span class="txt9">
                Type Acara
            </span>
		<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
    <!-- Select2 -->
    <select class="selection-1" name="total_pembayaran">
        <option value="500000">Family - Rp 500.000</option>
        <option value="200000">Regular - Rp 200.000</option>
    </select>
</div>
</div>

    </div>
	<div id="bookingForm" style="display: none;">
    <!-- Isi form booking di sini -->
</div>
<br>
    <div class="wrap-btn-booking flex-c-m m-t-6">
  
    <!-- Button3 - Book Table -->
    <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4" >
        Book Table
    </button>

    
</div>
	<br>
<!-- Check Booking Table -->
<div class="wrap-btn-booking flex-c-m m-t-5">
    <a href="" class="btn3 flex-c-m size13 txt11 trans-0-4" onclick="showBookingForm()">
        Check Booking
    </a>
</div>
<br>

<div id="checkBookingForm" style="display: none; background-color: #4d0303; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
    <!-- Formulir Pemeriksaan Pemesanan -->
    <form>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="color: white;">Date</th>
                        <th style="color: white;">Time</th>
                    </tr>
                </thead>
                <tbody id="reservationData">
                    <!-- Data reservasi akan ditampilkan di sini -->
                </tbody>
            </table>
        </div>
    </form>
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
						<a href="#" class="txt15">
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
						<a href="#" class="txt15">
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

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>


<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
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
	<script src="js/main.js"></script>
	    <script>
       
        function validateForm() {
        
            var errorMessage = "{{ session('error') }}";
            if (errorMessage) {
                alert(errorMessage);
                return false;
            }

            return true;
        }
    </script>
	
<script>
    function showBookingForm() {
        event.preventDefault(); // Menghentikan perilaku default dari tautan
        var checkBookingForm = document.getElementById("checkBookingForm");
        var isFormVisible = checkBookingForm.style.display === "block";

        if (isFormVisible) {
            checkBookingForm.style.display = "none";
        } else {
            checkBookingForm.style.display = "block";
        }

        // Mengambil data reservasi dari PHP dan menambahkannya ke formulir
        var checkbook = @json($checkbook);
        var reservationData = document.getElementById("reservationData");

        reservationData.innerHTML = ""; // Mengosongkan data sebelumnya

        // Mengurutkan data reservasi berdasarkan tanggal yang terkecil
        checkbook.sort(function(a, b) {
            var dateA = new Date(a.date);
            var dateB = new Date(b.date);
            return dateA - dateB;
        });

        var currentDate = new Date(); // Tanggal sekarang

        checkbook.forEach(function(reservations) {
            var reservationDate = new Date(reservations.date);

            // Memeriksa apakah tanggal reservasi sama atau lebih besar dari tanggal sekarang
            if (reservationDate >= currentDate) {
                var row = document.createElement("tr");

                var dateCell = document.createElement("td");
                dateCell.textContent = reservations.date;
                dateCell.style.color = "white";
                row.appendChild(dateCell);

                var timeCell = document.createElement("td");
                timeCell.textContent = reservations.time;
                timeCell.style.color = "white";
                row.appendChild(timeCell);

                reservationData.appendChild(row);
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Mengambil referensi elemen formulir
        const form = document.querySelector('.wrap-form-reservation');
        const inputs = form.querySelectorAll('input, select');
        const button = form.querySelector('button[type="submit"]');

        // Menonaktifkan tombol saat halaman dimuat
        button.disabled = true;
        button.classList.add('disabled-button');

        // Fungsi untuk memeriksa apakah semua input telah diisi
        function checkInputs() {
            let allFilled = true;

            inputs.forEach(function(input) {
                if (input.value.trim() === '') {
                    allFilled = false;
                }
            });

            if (allFilled) {
                button.disabled = false;
                button.classList.remove('disabled-button');
            } else {
                button.disabled = true;
                button.classList.add('disabled-button');
            }
        }

        // Memanggil fungsi checkInputs saat input berubah
        inputs.forEach(function(input) {
            input.addEventListener('input', checkInputs);
        });

        // Menghilangkan pesan setelah 3 detik
        setTimeout(function() {
            var alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                alert.style.display = 'none';
            });
        }, 8000);
    });
</script>

<script>
    function showCalendar() {
        $(".datepicker").focus();
    }

    // Mengatur tanggal minimum
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //Januari dimulai dari 0
    var yyyy = today.getFullYear();
    var minDate = yyyy + '-' + mm + '-' + dd;
    $(".datepicker").attr("min", minDate);
</script>


</body>
</html>
