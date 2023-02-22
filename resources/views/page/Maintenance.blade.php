<!DOCTYPE html>
<html lang="en">
<head>
	<title>Maintenance</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
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
							<img src="{{asset('fontend/images/logo.jpeg')}}" alt="IMG-LOGO" data-logofixed="{{asset('fontend/images/logo.jpeg')}}">
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
										   <li><a href="{{ route('page.brand')}}">New cars</a></li>
										   <li><a href="{{ route('page.brand')}}"> Used cars</a></li>
										   
										  
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
					<img class="im" src="{{asset('fontend/images/Oil-1.png ')}}" alt="GALLERY">
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
					<img class="im" src="{{asset('fontend/images/tyres.jp')}}g" alt="GALLERY">
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


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/topcar2.jpg);">
		<h2 class="tit6 t-center">
			Check Car
		</h2>
	</section>


	<!-- Content page -->
	<section>
		

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
						<!-- Block4 -->
						<div class="blo4 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="blog-detail_for_app.html">
									<img src="{{asset('fontend/images/checkcar.jpg')}}" alt="IMG-BLOG">
								</a>

								
							</div>

							
						</div>

						

						


					

						<!-- Pagination -->
						
					</div>
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
						

						<!-- Categories -->
						<div class="categories">
							<h4 class="txt33 bo5-b p-b-35 p-t-58">
								Maintenance
							</h4>

							<ul>
								<li class="bo5-b p-t-8 p-b-8">
									
									<a class="nav-link dropdown-toggle" href="cars.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label" style="color: black;">Oil <span class="caret"></span></a>
									<ul class="dropdown-menu">
									   <li><a href=" newcars.html">Brake Oil</a></li>
									   <li><a href="usedcars.html"> Transmision Oil</a></li>
									   <li><a href="info_for_car.html"> Motor Oil</a></li>
									   
									  
									</ul>
								 </li>
									
									
								

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27"> <!--وصف و يدخل الموديل و البراند و السنة-->
										Battery
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27"> <!--وصف و يدخل الموديل و البراند و السنة-->
										Couches
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27"> <!--وصف و يدخل الموديل و البراند و السنة-->
										Spark Plug
									</a>
								</li>

								

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27"> <!--وصف و يدخل الموديل و البراند و السنة-->
										Assistants
									</a>
								</li>
								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27"> <!--وصف و يدخل الموديل و البراند و السنة-->
										Belts Set
									</a>
								</li>
							</ul>
						</div>

						


						
					</div>
				</div>
			</div>
		</div>
	</section>



	


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



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
