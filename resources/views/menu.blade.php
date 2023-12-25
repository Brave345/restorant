<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-01.jpg);">
		<h2 class="tit6 t-center">
			Pato Menu
		</h2>
	</section>


	<!-- Main menu -->
	<section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							STARTERS
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Bruschetta al Pomodoro e Basilico
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 60.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Roti bakar yang renyah disajikan dengan potongan tomat segar, daun basil, dan balsamic glaze untuk memberikan sentuhan rasa segar dan asam.
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Arancini di Riso
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 70.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Bola-bola nasi yang digoreng dengan keju mozzarella di dalamnya, menciptakan kombinasi lembut dan gurih yang sempurna. Disajikan dengan saus tomat atau saus ragu untuk tambahan cita rasa.
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Carpaccio di Manzo
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									 Rp 100.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Irisan tipis daging sapi mentah yang disajikan dengan saus lemon, minyak zaitun, kapers, dan keju parmesan parut. Hidangan yang ringan namun penuh cita rasa.
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Insalata Caprese
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 80.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;"> 
								Salad klasik Italia yang terdiri dari lapisan tomat segar, mozzarella bufala, dan daun basil. Disiram dengan minyak zaitun extra virgin dan balsamic reduction, menciptakan hidangan yang menyegarkan dan lezat.
							</span>
						</div>
					</div>

					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Drinks
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Espresso
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 30.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Minuman khas Italia yang terkenal di seluruh dunia. Ini adalah minuman kopi hitam pekat yang diseduh dengan mengekstraksi air panas melalui bubuk kopi yang sangat halus. 
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Cappuccino
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 40.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Kombinasi sempurna antara espresso, susu, dan busa susu. Minuman ini memiliki rasio yang seimbang antara espresso, susu panas, dan busa susu yang lembut di atasnya. 
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Aperol Spritz
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 80.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Minuman ringan dan segar yang populer di Italia. Minuman ini terbuat dari campuran Aperol (minuman berbasis ramuan), prosecco (anggur putih berbuih), dan soda.
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Limoncello
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									 Rp 50.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Minuman beralkohol yang terbuat dari kulit lemon yang direndam dalam alkohol murni dan dicampur dengan sirup sederhana. 
							</span>
						</div>
					</div>
				</div>

				<div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Main
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Pizza Margherita
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 70.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								 Pizza klasik Italia yang terdiri dari adonan pizza yang tipis, saus tomat, keju mozzarella, dan daun basil segar.
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Spaghetti Carbonara
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 80.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								 Hidangan pasta yang terbuat dari spaghetti yang dimasak al dente, saus carbonara (telur, keju parmesan, pancetta atau bacon, dan lada hitam), dan taburan parsley. 
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Lasagna
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									 Rp 100.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Hidangan pasta yang terdiri dari lapisan pasta lasagna, saus daging, saus tomat, keju mozzarella, dan keju parmesan. 
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Risotto ai Funghi
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 90.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Hidangan nasi Italia yang dimasak dengan kaldu, bawang, dan jamur, serta diberi tambahan keju parmesan. 
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Ossobuco alla Milanese
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 150.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								hidangan daging Italia yang terdiri dari potongan daging sapi yang dimasak perlahan dengan kaldu, sayuran, dan rempah-rempah, disajikan dengan gremolata (campuran lemon zest, parsley, dan bawang putih). 
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Pollo alla Cacciatora 
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 100.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								hidangan ayam panggang yang dimasak dengan saus tomat, bawang, paprika, dan rempah Italia. Hidangan ini biasanya disajikan dengan spaghetti atau polenta.
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Bistecca alla Fiorentina
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 300.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Hidangan bistik yang terbuat dari daging sapi T-bone yang dipanggang dengan sedikit minyak zaitun, garam, dan lada. Hidangan ini biasanya disajikan dengan sedikit irisan lemon. 
							</span>
						</div>
					</div>

					<div class="wrap-item-mainmenu p-b-22">
						<h3 class="tit-mainmenu tit10 p-b-25">
							Dessert
						</h3>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Tiramisu 
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 60.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Hidangan penutup klasik Italia yang terbuat dari lapisan ladyfinger yang direndam dalam kopi, kemudian ditumpuk dengan krim keju mascarpone yang lembut dan diberi taburan bubuk kakao di atasnya.
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Gelato
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 30.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Es krim Italia yang terbuat dari bahan-bahan segar seperti susu, krim, gula, dan berbagai rasa seperti cokelat, vanila, stroberi, pistachio, dan banyak lagi.
							</span>
						</div>

						<!-- Item mainmenu -->
						<div class="item-mainmenu m-b-36">
							<div class="flex-w flex-b m-b-3">
								<a  class="name-item-mainmenu txt21">
									Panna Cotta
								</a>

								<div class="line-item-mainmenu bg3-pattern"></div>

								<div class="price-item-mainmenu txt22">
									Rp 50.000
								</div>
							</div>

							<span class="info-item-mainmenu txt23" style="text-align: justify;">
								Hidangan penutup yang terbuat dari susu, krim, gula, dan ditetapkan dengan menggunakan agar-agar atau gelatin.
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Lunch -->
	<section class="section-lunch bgwhite">
		<div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Lunch
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a ><img src="images/PANINI CAPRESE.jpeg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a  class="txt21 m-b-3">
								Panini Caprese
							</a>

							<span class="txt23" style="text-align: justify;">
								Sandwich Italia yang terdiri dari roti ciabatta yang dipanggang, dilapisi dengan irisan tomat segar, mozzarella, daun basil, dan diberi tambahan sedikit minyak zaitun dan balsamic glaze. 
							</span>

							<span class="txt22 m-t-20">
								 Rp 70.000
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a ><img src="images/INSALATA DI POLLO.jpeg" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a  class="txt21 m-b-3">
								Insalata di Pollo
							</a>

							<span class="txt23" style="text-align: justify;">
								Salad Italia yang menggabungkan potongan daging ayam panggang, daun selada segar, tomat, mentimun, paprika, dan keju parmesan, kemudian disajikan dengan dressing Italia seperti dressing balsamic atau dressing lemon.
							</span>

							<span class="txt22 m-t-20">
								Rp 80.000
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a ><img src="images/Pasta Aglio.png" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a  class="txt21 m-b-3">
								Pasta Aglio e Olio
							</a>

							<span class="txt23" style="text-align: justify;">
								Hidangan pasta yang sederhana namun lezat, terdiri dari spaghetti yang dimasak al dente dan disajikan dengan saus yang terbuat dari minyak zaitun, bawang putih cincang, cabai, dan parsley. 
							</span>

							<span class="txt22 m-t-20">
								Rp 70.000
							</span>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a ><img src="images/Minestrone Soup.png" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a  class="txt21 m-b-3">
								Minestrone Soup
							</a>

							<span class="txt23" style="text-align: justify;">
								Sup khas Italia yang terdiri dari campuran sayuran seperti kubis, wortel, kentang, bawang, tomat, dan kacang-kacangan, dimasak dengan kaldu lezat.
							</span>

							<span class="txt22 m-t-20">
								 Rp 60.000
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a ><img src="images/Caprese Salad.png" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a  class="txt21 m-b-3">
								Caprese Salad
							</a>

							<span class="txt23" style="text-align: justify;">
								Salad segar yang terdiri dari irisan tomat segar, mozzarella, dan daun basil, yang disajikan dengan sedikit minyak zaitun, garam, dan lada hitam.
							</span>

							<span class="txt22 m-t-20">
								Rp 80.000
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a ><img src="images/Fettuccine Alfr.png" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a  class="txt21 m-b-3">
								Fettuccine Alfredo
							</a>

							<span class="txt23" style="text-align: justify;"> 
								Hidangan pasta yang terbuat dari fettuccine yang dimasak al dente, dilapisi dengan saus krim kaya yang terbuat dari mentega, keju parmesan, dan lada hitam.
							</span>

							<span class="txt22 m-t-20">
								Rp 90.000
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Dinner -->
	<section class="section-dinner bgwhite">
		<div class="header-dinner parallax0 parallax100" style="background-image: url(images/header-menu-02.jpg);">
			<div class="bg1-overlay t-center p-t-170 p-b-165">
				<h2 class="tit4 t-center">
					Dinner
				</h2>
			</div>
		</div>

		<div class="container">
			<div class="row p-t-108 p-b-70">
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a ><img src="images/Osso Buco adala.png" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a  class="txt21 m-b-3">
								Osso Buco 
							</a>

							<span class="txt23" style="text-align: justify;">
								Hidangan daging Italia yang terdiri dari potongan daging sapi yang dimasak perlahan dengan kaldu, sayuran, dan rempah-rempah. Hidangan ini biasanya disajikan dengan gremolata (campuran lemon zest, parsley, dan bawang putih) dan polenta.
							</span>

							<span class="txt22 m-t-20">
								Rp 180.000
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a ><img src="images/Gnocchi al Pomo.png" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a  class="txt21 m-b-3">
								Gnocchi al Pomodoro
							</a>

							<span class="txt23" style="text-align: justify;">
								Hidangan pasta Italia yang terbuat dari adonan kentang yang digulingkan menjadi bola-bola kecil dan dimasak dengan saus tomat dan basil segar.
							</span>

							<span class="txt22 m-t-20">
								Rp 100.000
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a ><img src="images/Saltimbocca all .png" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a  class="txt21 m-b-3">
								Saltimbocca alla Romana
							</a>

							<span class="txt23" style="text-align: justify;">
								Hidangan daging Italia yang terdiri dari irisan daging sapi tipis yang dilapisi dengan daun sage, dilapisi dengan prosciutto, dan dimasak dengan sedikit mentega dan kaldu.
							</span>

							<span class="txt22 m-t-20">
								Rp 150.000
							</span>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a ><img src="images/Ravioli al Tart.png" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a  class="txt21 m-b-3">
								Ravioli al Tartufo
							</a>

							<span class="txt23" style="text-align: justify;">
								Hidangan pasta Italia yang terdiri dari ravioli yang diisi dengan keju ricotta atau daging, disajikan dengan saus tartufo (truffle) yang kaya dan aromatik.
							</span>

							<span class="txt22 m-t-20">
								Rp 180.000
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a ><img src="images/Pollo Marsala.png" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a  class="txt21 m-b-3">
								Pollo Marsala
							</a>

							<span class="txt23" style="text-align: justify;">
								Hidangan ayam yang dimasak dengan saus Marsala, yaitu saus berbasis anggur Marsala yang memberikan cita rasa manis dan kaya.
							</span>

							<span class="txt22 m-t-20">
								Rp 120.000
							</span>
						</div>
					</div>

					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<a ><img src="images/Tuna Steak .png" alt="IMG-MENU"></a>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a  class="txt21 m-b-3">
								Tuna Steak
							</a>

							<span class="txt23" style="text-align: justify;">
								 Hidangan ikan tuna panggang atau goreng dengan bumbu rempah-rempah Italia, seperti rosemary dan thyme. 
							</span>

							<span class="txt22 m-t-20">
								 Rp 200.000 
							</span>
						</div>
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

</body>
</html>
