<!DOCTYPE html>
<html>
<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('fontend/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/vendor/lightbox2/css/lightbox.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fontend/css/main.css')}}">
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
						<a href="{{ route('page.home')}}">
							<img src="{{asset('fontend/images/logo.jpeg')}}" alt="IMG-LOGO" data-logofixed="images/logo.jpeg">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="{{ route('page.home')}}">Home</a>
								</li>

								<li>
									<a href="{{ route('page.Maintenance')}}">check car</a>
								</li>

								<li>
									<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="{{ route('page.ads')}}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">View <span class="caret"></span></a>
										<ul class="dropdown-menu">
										   <li><a href="{{ route('page.newcarads')}}">New cars ads</a></li>
										   <li><a href="{{ route('page.usedcarads')}}">Used cars ads</a></li>
										   <li><a href="{{ route('page.rentcarads')}}">Rent ads</a></li>
										   <li><a href="{{ route('page.tboaads')}}">Tyres, batteries, oils, & accessories ads</a></li>
										   <li><a href="{{ route('page.sparepartads')}}">Spareparts ads</a></li> 
										</ul>
									 </li>
								</li>

								<li>
									<a href="auctions.html">auctions</a>
								</li>

								<li>
									<a href="workshops.html">work shops</a>
								</li>

								<li>
									<a href="{{ route('page.categorysell')}}">Sell</a>
								</li>
								
							</ul>
						</nav>
					</div>

										<!-- Social -->
                                        <div class="social flex-w flex-l-m p-r-20">
                                            <a href="profile.html"><i class="fa fa-user" aria-hidden="true"></i>profile</a>
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
				<a href="{{ route('page.home')}}" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('page.Maintenance')}}" class="txt19">CHECK CAR</a>
			</li>

			<li class="t-center m-b-13">
				<a href="auctions.html" class="txt19">AUCTIONS</a>
			</li>

			<li class="t-center m-b-13">
				<a href="workshops.html" class="txt19">WORKSHOPS</a>
			</li>

			<li class="t-center m-b-13">
				<a href="{{ route('page.categorysell')}}" class="txt19">SELL</a>
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
				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('fontend/images/esy-054424167.jpg')}}" data-lightbox="gallery-footer">
					<img class="im" src="{{asset('fontend/images/esy-054424167.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('fontend/images/Oil-1.png')}}" data-lightbox="gallery-footer">
					<img class="im" src="{{asset('fontend/images/Oil-1.png')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('fontend/images/YsAxc5zK1615525562.jpg')}}" data-lightbox="gallery-footer">
					<img class="im" src="{{asset('fontend/images/YsAxc5zK1615525562.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('fontend/images/kn-vf1001_11.jpg')}}" data-lightbox="gallery-footer">
					<img class="im" src="{{asset('fontend/images/kn-vf1001_11.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('fontend/images/O1CN012bmtpB1IVKGi7x1mi_!!6000000000898-0-m_tb_svideo_preimg.jpg')}}" data-lightbox="gallery-footer">
					<img class="im" src="{{asset('fontend/images/O1CN012bmtpB1IVKGi7x1mi_!!6000000000898-0-m_tb_svideo_preimg.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('fontend/images/H6fd4dfdce23542328ffc2cea9429d321L.jpg')}}" data-lightbox="gallery-footer">
					<img class="im" src="{{asset('fontend/images/H6fd4dfdce23542328ffc2cea9429d321L.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('fontend/images/O1CN017CQmIY1XrVm01pWqZ_!!6000000002977-0-tbvideo.jpg')}}" data-lightbox="gallery-footer">
					<img class="im" src="{{asset('fontend/images/O1CN017CQmIY1XrVm01pWqZ_!!6000000002977-0-tbvideo.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('fontend/images/wiper.jpg')}}" data-lightbox="gallery-footer">
					<img class="im" src="{{asset('fontend/images/wiper.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('fontend/images/tyres.jpg')}}" data-lightbox="gallery-footer">
					<img class="im" src="{{asset('fontend/images/tyres.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('fontend/images/ac.jpg_.webp')}}" data-lightbox="gallery-footer">
					<img class="im" src="{{asset('fontend/images/ac.jpg_.webp')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('fontend/images/MWR-600007.jpg')}}" data-lightbox="gallery-footer">
					<img class="im" src="{{asset('fontend/images/MWR-600007.jpg')}}" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="{{asset('fontend/images/shock.jpg')}}" data-lightbox="gallery-footer">
					<img class="im" src="{{asset('fontend/images/shock.jpg')}}" alt="GALLERY">
				</a>
			</div>
		</div>
	</aside>
	
	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/muscular-car-service-worker-repairing-vehicle_146671-19605.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							Maintenance car
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/mechanic-hand-checking-fixing-broken-car-car-service-garage_146671-19718.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							Maintenance car
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
							<!-- Button1 -->
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(images/workshop-scanner-vehicles.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                            Maintenance car
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
							<!-- Button1 -->
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
							Maintenance car
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							About
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
                            Our system helps you to manage and reminds you about car maintenance tells the user a better Appointment for the maintenance car and advice you on what better spare part for your vehicle also can Book an appointment with the workshops and see the best rate given by people who work with it can also buy, sell, auction, for Rent cars, make your contact with showroom car 
                            and show the price of each car.
						</p>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="{{asset('fontend/images/discription.png')}}" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Intro -->
	<section class="section-intro">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/oil-motor-changing-the-oil-maintenance.jpg);">
			<span class="tit2 p-l-15 p-r-15">
				Discover about us
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
                Maintenance car
			</h3>
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
					Our services
				</h3>
			</div>

			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="{{asset('fontend/images/check.jpg')}}" alt="IMG-MENU" height="530">

								<!-- Button2 -->
								<a href="{{route('page.Maintenance')}}" class="btn2 flex-c-m txt5 ab-c-m size4">
									<h6>Check car</h6>
								</a>
							</div>
						</div>

						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="{{asset('fontend/images/auction.jpg')}}" alt="IMG-MENU" height="530">

								<!-- Button2 -->
								<a href="auction.html" class="btn2 flex-c-m txt5 ab-c-m size5">
									auctions
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
								<img src="{{asset('fontend/images/workshop-scanner-vehicles.jpg')}}" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="workshops.html" class="btn2 flex-c-m txt5 ab-c-m size7">
									 <h6>work shops</h6>
								</a>
							</div>
						</div>

						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="{{asset('fontend/images/spare.jpg')}}" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="{{route('page.infosparepart')}}" class="btn2 flex-c-m txt5 ab-c-m size8">
									spare parts
								</a>
							</div>
						</div>

						
					</div>
				</div>
			</div>

		</div>
	</section>
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
							8th floor, 379 Hudson St, New York, NY 10018
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(+1) 96 716 6879
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							contact@site.com
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
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							21 Dec 2017
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
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							21 Dec 2017
						</span>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Gallery
					</h4>
					<style>
						.im{
							height: 54px;
							width: 54px;
						}
						
					</style>

					<!-- Gallery footer -->
					<div class="wrap-gallery-footer flex-w">
						<a class="item-gallery-footer wrap-pic-w" href="{{asset('fontend/images/esy-054424167.jpg')}}" data-lightbox="gallery-footer">
							<img class="im" src="{{asset('fontend/images/esy-054424167.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('fontend/images/Oil-1.png')}}" data-lightbox="gallery-footer">
							<img class="im" src="{{asset('fontend/images/Oil-1.png')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('fontend/images/YsAxc5zK1615525562.jpg')}}" data-lightbox="gallery-footer">
							<img class="im" src="{{asset('fontend/images/YsAxc5zK1615525562.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('fontend/images/kn-vf1001_11.jpg')}}" data-lightbox="gallery-footer">
							<img class="im" src="{{asset('fontend/images/kn-vf1001_11.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('fontend/images/O1CN012bmtpB1IVKGi7x1mi_!!6000000000898-0-m_tb_svideo_preimg.jpg')}}" data-lightbox="gallery-footer">
							<img class="im" src="{{asset('fontend/images/O1CN012bmtpB1IVKGi7x1mi_!!6000000000898-0-m_tb_svideo_preimg.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('fontend/images/H6fd4dfdce23542328ffc2cea9429d321L.jpg')}}" data-lightbox="gallery-footer">
							<img class="im" src="{{asset('fontend/images/H6fd4dfdce23542328ffc2cea9429d321L.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('fontend/images/O1CN017CQmIY1XrVm01pWqZ_!!6000000002977-0-tbvideo.jpg')}}" data-lightbox="gallery-footer">
							<img class="im" src="{{asset('fontend/images/O1CN017CQmIY1XrVm01pWqZ_!!6000000002977-0-tbvideo.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('fontend/images/wiper.jpg')}}" data-lightbox="gallery-footer">
							<img class="im" src="{{asset('fontend/images/wiper.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('fontend/images/tyres.jpg')}}" data-lightbox="gallery-footer">
							<img class="im" src="{{asset('fontend/images/tyres.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('fontend/images/ac.jpg_.webp')}}" data-lightbox="gallery-footer">
							<img class="im" src="{{asset('fontend/images/ac.jpg_.webp')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('fontend/images/MWR-600007.jpg')}}" data-lightbox="gallery-footer">
							<img class="im" src="{{asset('fontend/images/MWR-600007.jpg')}}" alt="GALLERY">
						</a>

						<a class="item-gallery-footer wrap-pic-w" href="{{asset('fontend/images/shock.jpg')}}" data-lightbox="gallery-footer">
							<img class="im" src="{{asset('fontend/images/shock.jpg')}}" alt="GALLERY">
						</a>
					</div>

				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					
				</div>
			</div>
		</div>
	</footer>

				
	


	


<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('fontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/daterangepicker/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('fontend/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/slick/slick.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('fontend/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/parallax100/parallax100.js')}}"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
	
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('fontend/vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('fontend/js/main.js')}}"></script>

</body>
</html>