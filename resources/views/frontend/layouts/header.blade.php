<!doctype html>
<html class="no-js" lang="zxx">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield("title")</title>
	<meta name="description" content="Discover premium quality furniture at FurniNest. Shop stylish and affordable furniture for living rooms, bedrooms, dining rooms, and more. Transform your home today!">
	<meta name="keywords" content="FurniNest, furniture store, buy furniture online, affordable furniture, premium furniture, living room furniture, bedroom furniture, dining furniture, home decor, stylish furniture, furniture ecommerce">
	<meta name="author" content="FurniNest">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="index, follow">
	<meta property="og:title" content="FurniNest | Premium Furniture for Your Dream Home">
	<meta property="og:description" content="Shop premium quality furniture online at FurniNest. Stylish, durable, and affordable furniture to make your home perfect.">
	<meta property="og:image" content="https://www.furninest.com/og-image.jpg"> <!-- Replace with your website's image URL -->
	<meta property="og:url" content="https://www.furninest.com"> <!-- Replace with your website's URL -->
	<meta property="og:type" content="website">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="FurniNest | Premium Furniture for Your Dream Home">
	<meta name="twitter:description" content="Discover premium quality furniture at FurniNest. Shop stylish and affordable furniture for all your home needs.">
	<meta name="twitter:image" content="https://www.furninest.com/twitter-image.jpg"> <!-- Replace with your website's image URL -->
	<meta name="twitter:site" content="@FurniNest"> <!-- Replace with your Twitter handle -->
	<link rel="canonical" href="https://www.furninest.com"> <!-- Replace with your website's URL -->

	
	<link rel="apple-touch-icon" href="icon.html">

	<link rel="shortcut icon" href="{{ url ('frontend/assets/images/icon/favicons.png')}}" type="image/x-icon">


	<link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('frontend/assets/css/fontawesome-all.min.css') }}">
	<link rel="stylesheet" href="{{ url('frontend/assets/css/slick.css') }}">
	<link rel="stylesheet" href="{{ url('frontend/assets/css/magnific-popup.html') }}">
	<link rel="stylesheet" href="{{ url('frontend/assets/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ url('frontend/assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ url('frontend/assets/css/meanmenu.css') }}">
	<link rel="stylesheet" href="{{ url('frontend/assets/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ url('frontend/assets/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ url('frontend/assets/css/default.css') }}">
	<link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ url('frontend/assets/css/responsive.css') }}">
</head>

<body>


	<div id="preloader"></div>


	<header>
		<div id="header-sticky" class="header-area white-bg">
			<div class="header header-3 position-absolute pl-35 pr-35">
				<div class="container-fluid">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-xl-2  col-lg-7 col-md-7 col-sm-7 col-8">
							<div class="header-right header2-left">
								<ul class="header-search d-none d-xl-flex">
									<li><a href="javascript:void(0);"><span class="icon-search"></span></a></li>
									<li class="search pl-2"><a href="javascript:void(0);">Search</a></li>
								</ul>
							</div>
							<div class="">
								<div class="d-inline-block d-xl-none">
									<a class="mobile-menubar" href="javascript:void(0);"><i class="fas fa-bars"></i></a>
								</div>
								<div class="logo float-right d-xl-none">
									<a href="index.html"><img src="{{ url('frontend/assets/images/logo/logo2.svg') }}" alt="FurniNest"></a>
								</div>
							</div>
						</div>
						<div
							class="col-xl-7 col-lg-1 col-md-1 col-sm-1 col-1 d-none d-lg-flex align-items-lg-center justify-content-lg-center position-static pr-0">
							<div class="main-menu">
								<nav id="mobile-menu">
									<ul class="d-block">
										<li><a class="active" href="{{ route('home') }}">Home</a>

										</li>
										<li>
											<a href="{{ route('shop') }}">Collections</a>
											<ul class="mega-menu mega-dropdown-menu">
												<li class="position-relative">
													<a href="#">Interior
														<span class="pr-20 float-right"><i
																class="fas fa-angle-right"></i></span></a>
													<div class="mega-menu mega-sub-menu">
														<ul>
															<li><a href="{{ route('ShopSidebarRight') }}">Bedroom Room</a></li>
															<li>
																<a href="{{ route('ShopSidebarRight') }}">Living Room</a>
															</li>
															<li>
																<a href="{{ route('ShopSidebarRight') }}">Dining Room</a>
															</li>
															<li>
																<a href="{{ route('ShopSidebarRight') }}">Yard</a>
															</li>
														</ul>
													</div>

												</li>
												<li>
													<a href="{{ route('ShopSidebarRight') }}">Office</a>
												</li>
												<li><a href="{{ route('ShopSidebarRight') }}">Kids</a></li>
												<li>
													<a href="{{ route('ShopSidebarRight') }}">Decor</a>
												</li>
											</ul>
										</li>
										</li>
										<li><a href="{{ route('ShopSidebarRight') }}">New Arrivals</a></li>
										<li class="logo pl-10 pr-10 d-none d-xl-inline-block">
											<a href="index.html"><img src="{{ url('frontend/assets/images/logo/logo2.svg') }}"
													alt="FurniNest"></a>
										</li>
										<li><a href="{{ route('about') }}">About</a>

										</li>
										<li><a href="{{ route('contact') }}">contact</a></li>
										<li><a href="{{ route('blog') }}">Blog</a>

										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xl-3  col-lg-4 col-md-5 col-sm-5 col-4">
							<div class="header-right d-flex justify-content-end">
								<ul class="header-login d-none d-xl-block">
									<li><a href="{{ route('login-re') }}" data-toggle="tooltip" data-selector="true"
											data-placement="bottom" title="Login / Register">Login / register</a></li>
								</ul>
								<ul class="header-heart d-none d-xl-block">
									<li><a href="wishlist.html" data-toggle="tooltip" data-selector="true"
											data-placement="bottom" title="View wishlist"><span
												class="icon-heart"></span><sup class="s-count">0</sup></a></li>
								</ul>
								<ul>
									<li><a class="header-shopping-cart" href="#"><span
												class="icon-shopping-bag"></span><sup class="s-count">0</sup></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
