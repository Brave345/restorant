<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    .blog-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        grid-gap: 30px;
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
				<a href="contact" class="txt19">Contact</a>
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

	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/slide1-01.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Welcome to
							   @if(session('error'))
         <div class="alert alert-danger" id="errorAlert" style="margin-bottom: 15px;">
            {{ session('error') }}
        </div>
    @endif
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Pato Place
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
							<a href="{{ route('menu') }}" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Look Menu
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/master-slides-02.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							Pato Place
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
							<!-- Button1 -->
							<a href="{{ route('menu') }}" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Look Menu
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(images/master-slides-01.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							Pato Place
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
							<!-- Button1 -->
							<a href="{{ route('menu') }}" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Look Menu
							</a>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	<!-- Welcome -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
							Italian Restaurant
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							Welcome
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							Selamat datang di  Restaurant kami yang penuh cita rasa Italia! Kami dengan bangga mengundang Anda untuk menikmati pengalaman kuliner yang autentik dan memikat di tempat kami. Sambut aroma harum rempah-rempah dan hidangan lezat yang disajikan dengan cinta oleh koki kami yang berbakat. Selamat menikmati perjalanan kuliner Anda di  Restaurant Italia kami yang penuh kehangatan dan kelezatan!
						</p>

						<a href="{{ route('about') }}" class="txt4">
							Our Story
							<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
						</a>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="images/our-story-01.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Intro -->
	<section class="section-intro">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/bg-intro-01.jpg);">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Pato Place
			</h3>
		</div>

		<div class="content-intro bg-white p-t-77 p-b-133">
			<div class="container">
				<div class="row">
					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a ><img src="images/intro-01.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Romantic Restaurant
								</h4></a>

								<p class="m-b-20" style="text-align: justify;">
									
									Di restoran romantis kami, cahaya gemerlap lilin menari di atas meja, menciptakan suasana yang penuh kehangatan dan keintiman. Setiap hidangan disiapkan dengan penuh cinta, menggoda lidah Anda dengan sentuhan rasa yang memikat.
								</p>


							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a ><img src="images/intro-02.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Delicious Food
								</h4>

								<p class="m-b-20" style="text-align: justify;">
									Nikmati kelezatan tiada tara di setiap hidangan yang kami sajikan. Dari setiap suap, rasa yang meledak-ledak akan memanjakan lidah Anda, membawa Anda dalam petualangan cita rasa yang luar biasa. 
								</p>

								
							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<a ><img src="images/intro-04.jpg" alt="IMG-INTRO"></a>
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a ><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Red Wines You Love
								</h4></a>

								<p class="m-b-20" style="text-align: justify;">
									
									Nikmati keindahan dan kehangatan red wine yang Anda cintai dalam setiap tegukan. Dari merlot yang lembut hingga cabernet yang berani, koleksi wine kami dirancang untuk memenuhi selera para penggemar anggur merah
								</p>

								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- Our menu -->
	<section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					Discover
				</span>

				<h3 class="tit5 t-center m-t-2">
					Our Menu
				</h3>
			</div>

			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-01.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a  class="btn2 flex-c-m txt5 ab-c-m size4">
									Lunch
								</a>
							</div>
						</div>

						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-05.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a  class="btn2 flex-c-m txt5 ab-c-m size5">
									Dinner
								</a>
							</div>
						</div>

						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-13.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a  class="btn2 flex-c-m txt5 ab-c-m size6">
									Happy Hour
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-08.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a  class="btn2 flex-c-m txt5 ab-c-m size7">
									Drink
								</a>
							</div>
						</div>

						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-10.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a  class="btn2 flex-c-m txt5 ab-c-m size8">
									Starters
								</a>
							</div>
						</div>

						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/our-menu-16.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a  class="btn2 flex-c-m txt5 ab-c-m size9">
									Dessert
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>


	<!-- Event -->
	<section class="section-event">
		<div class="wrap-slick2">
			<div class="slick2">
				<div class="item-slick2 item1-slick2" style="background-image: url(images/bg-event-01.jpg);">
					<div class="wrap-content-slide2 p-t-115 p-b-208">
						<div class="container">
							<!-- - -->
							<div class="title-event t-center m-b-52">
								<span class="tit2 p-l-15 p-r-15">
									Upcomming
								</span>

								<h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
									Events
								</h3>
							</div>

							<!-- Block2 -->
							<div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="zoomIn">
								<!-- Pic block2 -->
								<a href="#" class="wrap-pic-blo2 bg1-blo2" style="background-image: url(images/event-02.jpg);">
									<div class="time-event size10 txt6 effect1">
										<span class="txt-effect1 flex-c-m t-center">
											08:00 PM Tuesday - 23 Desember 2023
										</span>
									</div>
								</a>

								<!-- Text block2 -->
								<div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
									<h4 class="tit7 t-center m-b-10">
										Wines during specific nights
									</h4>

									<p class="t-center">
										. Nikmati malam yang penuh dengan kelezatan dan aroma menggoda, di mana kami menampilkan koleksi wine eksklusif yang dipilih khusus untuk merayakan keindahan ragam anggur. Dalam suasana yang hangat dan ramah, Anda dapat menjelajahi beragam varietas anggur yang dipasangkan dengan hidangan lezat, menciptakan harmoni cita rasa yang memanjakan selera Anda. 
									</p>

									<div class="flex-sa-m flex-w w-full m-t-40">
										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 days">
												12
											</span>

											<span class="dis-block t-center txt8">
												Days
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 hours">
												12
											</span>

											<span class="dis-block t-center txt8">
												Hours
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 minutes">
												59
											</span>

											<span class="dis-block t-center txt8">
												Minutes
											</span>
										</div>

										<div class="size11 flex-col-c-m">
											<span class="dis-block t-center txt7 m-b-2 seconds">
												56
											</span>

											<span class="dis-block t-center txt8">
												Seconds
											</span>
										</div>
									</div>

									<a href="#" class="txt4 m-t-40">
										View Details
										<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				

			</div>

			<div class="wrap-slick2-dots"></div>
		</div>
	</section>

	<!-- Booking -->
	<section class="section-booking bg1-pattern p-t-100 p-b-110">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Reservation
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Book table
						</h3>
					</div>

					<form name="bookingForm" class="wrap-form-booking" action="/transaksi" method="POST" onsubmit="return validateForm()">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<!-- Date -->
								<span class="txt9">
									Date
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
        <input class="datepicker bo-rad-10 sizefull txt10 p-l-20" type="date" name="date" id="date" placeholder="Date" >
        <i class=" ab-r-m hov-pointer m-r-18" aria-hidden="true" onclick="showCalendar()"></i>
    </div>

								<!-- Time -->
								<span class="txt9">
									Time
								</span>

								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="time">
										<option>9:00</option>
										<option>9:30</option>
										<option>10:00</option>
										<option>10:30</option>
										<option>11:00</option>
										<option>11:30</option>
										<option>12:00</option>
										<option>12:30</option>
										<option>13:00</option>
										<option>13:30</option>
										<option>14:00</option>
										<option>14:30</option>
										<option>15:00</option>
										<option>15:30</option>
										<option>16:00</option>
										<option>16:30</option>
										<option>17:00</option>
										<option>17:30</option>
										<option>18:00</option>
									</select>
								</div>

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
								<span class="txt9">
									Type Acara
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="total_pembayaran">
										<option value="500000">Family - Rp 500.000</option>
        								<option value="200000">Regular - Rp 200.000</option>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<!-- Name -->
								<span class="txt9">
									Name
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="name" name="name" placeholder="Name">
								</div>

								<!-- Phone -->
								<span class="txt9">
									Phone
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="number" name="phone" placeholder="Phone">
								</div>

								<!-- Email -->
								<span class="txt9">
									Email
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="email" name="email" placeholder="Email">
								</div>
								
							</div>
						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
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
					</form>
				</div>

				<div class="col-lg-6 p-b-30 p-t-18">
					<div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="images/booking-01.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Review -->
	


	<!-- Video -->
	<section class="section-video parallax100" style="background-image: url(images/bg-cover-video-02.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Our Video
			</h3>

			<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
				<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>


	<!-- Blog -->
	<section class="section-blog bg-white p-t-115 p-b-123">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					Latest News
				</span>

				<h3 class="tit5 t-center m-t-2">
					The Blog
				</h3>
			</div>

			<div class="blog-grid">
    @foreach ($blogs as $blog)
    <!-- Block1 -->
    <div class="blo1">
        <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
            <a><img src="{{ asset('assets/images/' . $blog->gambar) }}" alt="IMG-INTRO"></a>

            <div class="time-blog">
                {{ $blog->tanggal }}
            </div>
        </div>

        <div class="wrap-text-blo1 p-t-35">
            <a><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                {{ $blog->judul }}
            </h4></a>

            <p class="m-b-20">
    <?php
    $text = $blog->isi;
    $maxLength = 120;

    if (strlen($text) > $maxLength) {
        $trimmedText = substr($text, 0, $maxLength);
        $lastCommaPosition = strpos($trimmedText, ',');
        $lastDotPosition = strpos($trimmedText, '.');

        $lastPosition = false;
        if ($lastCommaPosition !== false && $lastDotPosition !== false) {
            $lastPosition = min($lastCommaPosition, $lastDotPosition);
        } elseif ($lastCommaPosition !== false) {
            $lastPosition = $lastCommaPosition;
        } elseif ($lastDotPosition !== false) {
            $lastPosition = $lastDotPosition;
        }

        if ($lastPosition !== false) {
            $trimmedText = substr($trimmedText, 0, $lastPosition);
        }

        echo $trimmedText . '.......';
    } else {
        echo $text;
    }
    ?>
</p>

            <a href="{{ route('blog') }}" class="txt4">
                Continue Info Blog
                <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    @endforeach
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

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>



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
        $(document).ready(function() {
            setTimeout(function() {
                $('#errorAlert').fadeOut('slow');
            }, 4000);
        });
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

    checkbook.forEach(function(reservation) {
        var row = document.createElement("tr");

        var dateCell = document.createElement("td");
        dateCell.textContent = reservation.date;
        dateCell.style.color = "white"; // Ganti warna teks menjadi hitam agak abu-abu
        row.appendChild(dateCell);

        var timeCell = document.createElement("td");
        timeCell.textContent = reservation.time;
        timeCell.style.color = "white"; // Ganti warna teks menjadi hitam agak abu-abu
        row.appendChild(timeCell);

        reservationData.appendChild(row);
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
function validateForm() {
    var date = document.forms["bookingForm"]["date"].value;
    var time = document.forms["bookingForm"]["time"].value;
    var people = document.forms["bookingForm"]["people"].value;
    var name = document.forms["bookingForm"]["name"].value;
    var phone = document.forms["bookingForm"]["phone"].value;
    var email = document.forms["bookingForm"]["email"].value;

    if (date == "" || time == "" || people == "" || name == "" || phone == "" || email == "") {
        alert("Silakan isi semua form Reservation BOOK TABLE.");
        return false;
    }
}
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
