@extends('frontend.layouts.app')  

@section('title', 'home')

@section('content')
	<div class="side-mobile-menu bg-white pt-30 pb-30 pl-30 pr-30">
		<div class="close-icon float-right pt-10">
			<a href="javascript:void(0);"><span class="icon-clear"></span></a>
		</div>
		<div class="header-search-content pt-110">
			<h4 class="pb-10 text-center">Searching</h4>
			<ul class="">
				<li><a class="active" href="shop.html">All categories</a></li>
				<li><a href="shop.html">Bedroom</a></li>
				<li><a href="shop.html">Decor</a></li>
				<li><a href="shop.html">Decoration</a></li>
				<li><a href="shop.html">Kitchen</a></li>
				<li><a href="shop.html">Lamp</a></li>
			</ul>
			<form action="#"
				class="position-relative pt-10 pb-15">
				<input type="text" placeholder="Search Products...">
				<a class="position-absolute" href="javascript:void(0)"><span class="icon-search"></span></a>
			</form>
		</div>
		<div class="mobile-menu"></div>
		<div class="menu-login pt-50 pb-200">
			<ul class="header-login d-flex justify-content-between border-bottom-gray">
				<li><a href="login.html">Login / register</a></li>
				<li><a href="login.html"><span class="icon-users"></span></a></li>
			</ul>
			<ul class="header-heart d-flex justify-content-between border-bottom-gray">
				<li><a href="wishlist.html">Wishlist</a></li>
				<li><a href="wishlist.html"><span class="icon-heart"></span></a></li>
			</ul>
		</div>
	</div>
	<div class="body-overlay"></div>

	<div class="header-search-details text-center white-bg pt-60 pl-230 pr-230">
		<div class="close-icon float-right">
			<a href="javascript:void(0);"><span class="icon-clear"></span></a>
		</div>
		<div class="header-search-content pt-200 ml-150 mr-150">
			<h4 class="mb-25">Searching</h4>
			<ul class="d-flex justify-content-center">
				<li><a class="active" href="shop.html">All categories</a></li>
				<li><a href="shop.html">Bedroom</a></li>
				<li><a href="shop.html">Decor</a></li>
				<li><a href="shop.html">Decoration</a></li>
				<li><a href="shop.html">Kitchen</a></li>
				<li><a href="shop.html">Lamp</a></li>
			</ul>
			<form action="#" class="position-relative pt-10">
				<input type="text" placeholder="Search Products...">
				<a class="position-absolute" href="#"><span class="icon-search"></span></a>
			</form>
		</div>
	</div>


	<div class="header-shopping-cart-details white-bg pt-20 pb-40 pl-50 pr-40">
		<div class="close-icon float-right">
			<a href="javascript:void(0);"><span class="icon-clear"></span></a>
		</div>
		<div class="h-shop-cart-contetn over-x-heddne over-y-scroll mt-60">
			<ul class="d-flex pb-20">
				<li class="h-shop-cart-img pl-0 pr-3">
					<a class="d-block border" href="product-details.html"><img src="{{ url('frontend/assets/images/product/9-1.jpg') }}" alt=""></a>
				</li>
				<li>
					<ul class="d-flex">
						<li>
							<h6 class="single-product-name"><a href="product-details.html">best chair for office
									Lid</a></h6>
							<span>1<span>x</span>$320.00</span>
						</li>
						<li class="s-p-remove text-right pl-2">
							<span class="d-inline-block"><i class="far fa-trash-alt"></i></span>
						</li>
					</ul>
				</li>

			</ul>
			<ul class="d-flex pb-20">
				<li class="h-shop-cart-img pl-0 pr-3">
					<a class="d-block border" href="product-details.html"><img src="{{ url('frontend/assets/images/product/13-old.jpg') }}"
							alt=""></a>
				</li>
				<li>
					<ul class="d-flex">
						<li>
							<h6 class="single-product-name"><a href="product-details.html">Sofa Chair set for Office</a>
							</h6>
							<span>1<span>x</span>$120.00</span>
						</li>
						<li class="s-p-remove pl-2">
							<span class="d-inline-block"><i class="far fa-trash-alt"></i></span>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="s-sub-t mt-3 mb-20">
			<span class="theme-color">Subtotal:</span>
			<span class="theme-color float-right"> $440.00</span>
		</div>
		<a href="{{ route ('cart')}}" class="btn p-add-cart p-add-cart2 pt-15 pb-15 mb-15 text-uppercase mt-15 mr-2 w-100">view
			cart</a>
		<a href="{{ route ('checkout')}}"
			class="btn p-add-cart p-add-cart2 pt-15 pb-15 mb-15 text-uppercase mt-15 mr-2 w-100">checkout</a>
	</div>



	<main>


		<div class="slider-area slider-3 over-hidden">
			<div class="slider-active">
				<div class="single-slider slider-height-3 d-flex align-items-center"
					data-background="{{ url('frontend/assets/images/slider/couse.png') }}">

					<div class="container">
						<div class="row">
							<div
								class="col-xl-12  col-lg-6  col-md-12  col-sm-12 col-12  d-flex align-items-center position-static">
								<div class="slider-content">
									<span data-animation="fadeInLeft" data-delay=".7s"
										class="position-relative primary-color pl-60">Inspired Living</span>
									<h1 data-animation="fadeInDown" data-delay="1s" class="pt-20 pb-10">FurniNest</h1>
									<p data-animation="fadeInLeft" data-delay="1.3s" class="text-brown">Discover premium
										furniture tailored to elevate your style, comfort, and <br> the essence of your
										perfect home</p>
									<a data-animation="fadeInUp" data-delay="1.7s" href="{{ route('shop')}}"
										class="btn mt-70">Explore</a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="single-slider slider-height-3 d-flex align-items-center"
					data-background="{{ url('frontend/assets/images/slider/main2.jpeg') }}">
					<div class="container">
						<div class="row">
							<div
								class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12  d-flex align-items-center position-static">
								<div class="slider-content">
									<span data-animation="fadeInLeft" data-delay=".7s"
										class="position-relative primary-color pl-60">Timeless Elegance</span>
									<h1 data-animation="fadeInLeft" data-delay="1s" class="pt-20 pb-10">Collections</h1>
									<p data-animation="fadeInLeft" data-delay="1.3s" class="text-white">Explore expertly
										curated designs crafted to enhance every corner <br> of your home with beauty
										and functionality.</p>
									<a data-animation="fadeInLeft" data-delay="1.7s" href="{{ route('shop')}}"
										class="btn mt-70">Explore</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="single-slider slider-height-3 d-flex align-items-center"
					data-background="{{ url('frontend/assets/images/slider/main3.jpeg') }}">
					<div class="container">
						<div class="row">
							<div
								class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12  d-flex align-items-center position-static">
								<div class="slider-content">
									<span data-animation="fadeInLeft" data-delay=".7s"
										class="position-relative primary-color pl-60">Unbeatable Deals</span>
									<h1 data-animation="fadeInLeft" data-delay="1s" class="pt-20 pb-10">Savings</h1>
									<p data-animation="fadeInLeft" data-delay="1.3s" class="text-white">Take advantage
										of our exclusive discounts to create a stunning and <br>cozy home without
										breaking the bank.</p>
									<a data-animation="fadeInLeft" data-delay="1.7s" href="{{ route('shop')}}"
										class="btn mt-70">Explore</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="feature-area feature-position feature-position-3 over-hidden pt-85">
			<div class="container-wrapper">
				<div class="feature-bg bg-white mlr-15 pl-30 pr-30 pt-30 mb-10">
					<div class="row">
						<div class="col-xl-4  col-lg-4  col-md-4  col-sm-12 col-12">
							<div class="single-feature single-feature-3 position-relative over-hidden">
								<img class="img-zoom" src="{{ url('frontend/assets/images/feature/feature2-h3.jpg') }}" alt="">
								<div class="section-content section-content-position position-absolute pl-40 pt-35">
									<span class="text-white">Featured Item</span>
									<h3 class="text-white pt-15 pb-30">Lifestyle</h3>
									<a href="single-product.html"
										class="btn2 text-white position-relative d-inline-block pt-10 pb-6">Explore
										Items</a>
								</div>
							</div>
						</div>
						<div class="col-xl-4  col-lg-4  col-md-4  col-sm-12 col-12">
							<div class="single-feature single-feature-3 position-relative">
								<img src="{{ url('frontend/assets/images/feature/feature1-h3.jpg') }}" alt="">
								<div class="section-content section-content-position position-absolute pl-40 pt-35">
									<span class="text-white">Special Decor</span>
									<h3 class="text-white pt-15 pb-30">Outdoor</h3>
									<a href="single-product.html"
										class="btn2 text-white position-relative d-inline-block pt-10 pb-6">Explore
										Items</a>
								</div>
							</div>
						</div>
						<div class="col-xl-4  col-lg-4  col-md-4  col-sm-12 col-12">
							<div class="single-feature single-feature-3 position-relative over-hidden">
								<img class="img-zoom" src="{{ url('frontend/assets/images/feature/feature3-h3.jpg') }}" alt="">
								<div class="section-content section-content-position position-absolute pl-40 pt-35">
									<span class="text-white">Top Table</span>
									<h3 class="text-white pt-15 pb-30">Unique Life</h3>
									<a href="single-product.html"
										class="btn2 text-white position-relative d-inline-block pt-10 pb-6">Explore
										Items</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="Bestsellers Products-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
						<div class="section-title text-center pt-90 pb-30">
							<h2>Bestsellers Products</h2>
							<p>Shop our best sellers, where timeless designs meet unmatched comfort and exceptional
								quality.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 mb-40">
						<div class="single-product bg-white position-relative pb-30">
							<div class="single-product-img position-relative">
								<a href="single-product.html"><img class="height100"
										src="{{ url('frontend/assets/images/product/image1.jpg') }}" alt=""></a>
								<div class="single-product-hover-img position-absolute">
									<a href="single-product.html"><img class="height100"
											src="{{ url('frontend/assets/images/product/image1.jpg') }}" alt=""></a>
								</div>
								<ul class="single-product-button d-flex position-absolute">
									<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
										title="Add to cart"><a href="#"><span class="icon-shopping-bag"></span></a></li>
									<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
										title="Form Armchair Walnut Base">
										<a href="#" data-toggle="modal" data-target="#product-modal"><span
												class="icon-eye"></span></a>
									</li>
									<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
										title="Browse wishlist"><a href="#"><span class="icon-heart"></span></a>
									</li>
								</ul>

								<div class="countdown-time d-flex border-gray position-absolute">
									<div class="timer">
										<div class="d-flex" data-countdown="2024/12/29"></div>
									</div>
								</div>
							</div>
							<h5 class="product-name pt-20 pl-20"><a href="single-product.html">Form Armchair Walnut
									Base</a></h5>
							<div class="product-price pl-20">
								<span class="black-color"><ins>$799.00</ins></span>
								<span class="old-price"><del>$829.00</del></span>
							</div>
							<a href="#"
								class="sale-tag position-absolute text-white text-uppercase d-inline-block">sale</a>
						</div>
					</div>
					<div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 mb-40">
						<div class="single-product bg-white position-relative pb-30">
							<div class="single-product-img position-relative">
								<a href="single-product.html"><img class="height100"
										src="{{ url('frontend/assets/images/product/image2.png') }}" alt=""></a>
								<div class="single-product-hover-img position-absolute">
									<a href="single-product.html"><img class="height100"
											src="{{ url('frontend/assets/images/product/image2.png') }}" alt=""></a>
									<ul class="single-product-button d-flex position-absolute">
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Add to option"><a href="#"><span
													class="icon-shopping-bag"></span></a></li>
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Utopia Towels Kitchen"><a href="#" data-toggle="modal"
												data-target="#product-modal"><span class="icon-eye"></span></a></li>
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Add to wishlist"><a href="#"><span class="icon-heart"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5 class="product-name pt-20 pl-20"><a href="single-product.html">Sofa Chair set for
									Office</a></h5>
							<div class="product-price pl-20 d-inline-block">
								<span class="black-color">$862.00</span>
							</div>
							<div class="product-dot d-inline-block float-right pr-20">
								<span class="darkblue-bg"></span>
								<span class="lower-blue-bg"></span>
								<span class="pink-bg"></span>
							</div>
						</div>
					</div>
					<div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 mb-40">
						<div class="single-product bg-white position-relative pb-30">
							<div class="single-product-img position-relative">
								<a href="single-product.html"><img class="height100"
										src="{{ url('frontend/assets/images/product/image4.png') }}" alt=""></a>
								<div class="single-product-hover-img position-absolute">
									<a href="single-product.html"><img class="height100"
											src="{{ url('frontend/assets/images/product/image4.png') }}" alt=""></a>
									<ul class="single-product-button d-flex position-absolute">
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Add to cart"><a href="#"><span class="icon-shopping-bag"></span></a>
										</li>
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Organic Chair High black"><a href="#" data-toggle="modal"
												data-target="#product-modal"><span class="icon-eye"></span></a></li>
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Add to wishlist"><a href="#"><span class="icon-heart"></span></a>
										</li>
									</ul>
								</div>
							</div>

							<h5 class="product-name pt-20 pl-20"><a href="single-product.html">Organic  Wooden Table 
									</a></h5>
							<div class="product-price pl-20">
								<span class="black-color">$1,098.00</span>
							</div>
						</div>
					</div>
					
					<div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 mb-40">
						<div class="single-product bg-white position-relative pb-30">
							<div class="single-product-img position-relative">
								<a href="single-product.html"><img class="height100"
										src="{{ url('frontend/assets/images/product/home-product5.png') }}" alt=""></a>
								<div class="single-product-hover-img position-absolute">
									<a href="single-product.html"><img class="height100"
											src="{{ url('frontend/assets/images/product/home-product-hover-5.png') }}" alt=""></a>
									<ul class="single-product-button d-flex position-absolute">
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Add to option"><a href="#"><span
													class="icon-shopping-bag"></span></a></li>
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Bottle Grinder with Steel Lid"><a href="#" data-toggle="modal"
												data-target="#product-modal"><span class="icon-eye"></span></a></li>
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Add to wishlist"><a href="#"><span class="icon-heart"></span></a>
										</li>
									</ul>
								</div>
							</div>

							<h5 class="product-name pt-20 pl-20"><a href="single-product.html">Manager Chair for
									Office</a></h5>
							<div class="product-price pl-20 d-inline-block">
								<span class="black-color">$396.00</span>
							</div>
							<div class="product-dot d-inline-block float-right pr-20">
								<span class="green-bg"></span>
								<span class="black-bg"></span>
								<span class="yellow-bg"></span>
							</div>
						</div>
					</div>
					<div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 mb-40">
						<div class="single-product bg-white position-relative pb-30">
							<div class="single-product-img position-relative">
								<a href="single-product.html"><img class="height100"
										src="{{ url('frontend/assets/images/product/image7.png') }}" style="width: 80%; height: 100%; margin-top: 6;"  alt=""></a>
								<div class="single-product-hover-img position-absolute">
									<a href="single-product.html"><img 
											src="{{ url('frontend/assets/images/product/image7.png') }}" style="width: 80%; height: 100%; margin-top: 6;" alt=""></a>
									<ul class="single-product-button d-flex position-absolute">
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Add to cart"><a href="#"><span class="icon-shopping-bag"></span></a>
										</li>
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Antique Chinese Armchairs"><a href="#" data-toggle="modal"
												data-target="#product-modal"><span class="icon-eye"></span></a></li>
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Add to wishlist"><a href="#"><span class="icon-heart"></span></a>
										</li>
									</ul>
								</div>
							</div>

							<h5 class="product-name pt-20 pl-20"><a href="single-product.html">Antique Chinese
									chair</a></h5>
							<div class="product-price pl-20">
								<span class="black-color">$196.00</span>
							</div>
						</div>
					</div>
					<div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 mb-40">
						<div class="single-product bg-white position-relative pb-30">
							<div class="single-product-img position-relative">
								<a href="single-product.html"><img class="height100"
										src="{{ url('frontend/assets/images/product/image6.jpg') }}"alt=""></a>
								<div class="single-product-hover-img position-absolute">
									<a href="single-product.html"><img class="height100"
											src="{{ url('frontend/assets/images/product/image6.jpg') }}" alt=""></a>
									<ul class="single-product-button d-flex position-absolute">
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Add to option"><a href="#"><span
													class="icon-shopping-bag"></span></a></li>
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Login / RegisterLiving Room Lighting"><a href="#" data-toggle="modal"
												data-target="#product-modal"><span class="icon-eye"></span></a></li>
										<li data-toggle="tooltip" data-selector="true" data-placement="bottom"
											title="Add to wishlist"><a href="#"><span class="icon-heart"></span></a>
										</li>
									</ul>
								</div>
							</div>
							<h5 class="product-name pt-20 pl-20"><a href="single-product.html">Living Room Table</a>
							</h5>
							<div class="product-price pl-20 d-inline-block">
								<span class="black-color">$262.00</span>
							</div>
							<div class="product-dot d-inline-block float-right pr-20">
								<span class="darkblue-bg"></span>
								<span class="gray-bg"></span>
								<span class="yellow-bg"></span>
							</div>
						</div>
					</div>
				
				</div>
				<div class="row">
					<div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
						<div class="section-button text-center pt-10">
							<a href="{{ route('shop')}}" class="btn black-color border-black">All Product</a>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="welcome-area welcome-bg mt-100 d-flex align-items-center" data-background="{{('frontend/assets/images/bg/banner.jpg')}}">
			<div class="container">
				<div class="row">
					<div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
						<div class="welcome-content section-content text-center">
							<img src="{{ url('frontend/assets/images/bg/text.png') }}" alt="">
							<p class="text-white pt-15 pb-30">Welcome to FurniNest, where premium furniture meets
								unmatched style and comfort, creating homes you’ll love to live in.</p>
							<a href="{{ route('shop')}}"class="btn pt-10 pb-6">Explore Items</a>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="service-feature-area service-feature-bg pt-90 pb-65">
			<div class="container">
				<div class="row">
					<div class="col-xl-4  col-lg-4  col-md-4  col-sm-12 col-12">
						<div class="single-service-feature text-center mb-30">
							<div class="ser-feature-icon mb-10">
								<span class="text-white"><i class="ser-f-icon flaticon-worldwide"></i></span>
							</div>
							<h4 class="text-white pb-10">Fast Delivery</h4>
							<p class="text-white">Enjoy lightning-fast delivery to your doorstep, ensuring your
								furniture arrives safely and on time.</p>
						</div>
					</div>
					<div class="col-xl-4  col-lg-4  col-md-4  col-sm-12 col-12">
						<div class="single-service-feature text-center mb-30">
							<div class="ser-feature-icon mb-10">
								<span class="text-white"><i class="ser-f-icon flaticon-24-hours-support"></i></span>
							</div>
							<h4 class="text-white pb-10">Online Support</h4>
							<p class="text-white">Our dedicated team is available 24/7 to answer your questions and
								guide you through every step.</p>
						</div>
					</div>
					<div class="col-xl-4  col-lg-4  col-md-4  col-sm-12 col-12">
						<div class="single-service-feature text-center">
							<div class="ser-feature-icon mb-10">
								<span class="text-white"><i class="ser-f-icon flaticon-money"></i></span>
							</div>
							<h4 class="text-white pb-10">Free Return</h4>
							<p class="text-white">Shop confidently with our hassle-free return policy, ensuring
								satisfaction with every piece you bring home.</p>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="blog-area over-hidden">
			<div class="container-wrapper">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="section-title text-center pt-40 pb-30">
							<h2>Our Blog Posts</h2>
							<p>Discover expert tips and inspiring ideas to elevate your home with furniture that blends style, comfort, and functionality.</p>
						</div>
					</div>
				</div>
		
				<div class="mlr-15">
					<div class="blog-active border-bottom-gray pb-65">
						<div class="row pl-15 pr-15">
							@if($blogs->count())
								@foreach ($blogs as $blog)
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="single-blog pb-40">
											<div class="blog-img over-hidden">
												<img class="height100 width100" src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}">
											</div>
											<div class="single-blog-content pt-25">
												<ul class="d-flex pb-6">
													<li><span>Post date:</span></li>
													<li><a class="date pl-1" href="#">{{ \Carbon\Carbon::parse($blog->post_date)->format('d M, Y') }}</a></li>
												</ul>
												<h4><a href="{{ route('show-blog', $blog->id) }}">{{ $blog->title }}</a></h4>
												<p class="pt-10">{{ Str::limit($blog->content, 150) }}</p>
												<a href="{{ route('show-blog', $blog->id) }}" class="btn black-color border-black mt-15">Continue Reading</a>
											</div>
										</div>
									</div>
								@endforeach
							@else
								<div class="col-12">
									<p>No blog posts available at the moment.</p>
								</div>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Pagination Links -->
		<div class="pagination">
			{{ $blogs->links() }}
		</div>
		
		
		



		<div class="instagram-img-area over-hidden">
			<div class="row">
				<div class="col-xl-2  col-lg-2  col-md-2  col-sm-2 col-6 p-0">
					<div class="instagram-img">
						<img src="{{ url('frontend/assets/images/instragram/instragram-img1.jpg') }}" alt="">
					</div>
				</div>
				<div class="col-xl-2  col-lg-2  col-md-2  col-sm-2 col-6 p-0">
					<div class="instagram-img">
						<img src="{{ url('frontend/assets/images/instragram/instragram-img2.jpg') }}" alt="">
					</div>
				</div>
				<div class="col-xl-2  col-lg-2  col-md-2 col-sm-2 col-6 p-0">
					<div class="instagram-img">
						<img src="{{ url('frontend/assets/images/instragram/instragram-img3.jpg') }}" alt="">
					</div>
				</div>
				<div class="col-xl-2  col-lg-2  col-md-2  col-sm-2 col-6 p-0">
					<div class="instagram-img">
						<img src="{{ url('frontend/assets/images/instragram/instragram-img4.jpg') }}" alt="">
					</div>
				</div>
				<div class="col-xl-2  col-lg-2  col-md-2  col-sm-2 col-6 p-0">
					<div class="instagram-img">
						<img src="{{ url('frontend/assets/images/instragram/instragram-img5.jpg') }}" alt="">
					</div>
				</div>
				<div class="col-xl-2  col-lg-2  col-md-2  col-sm-2 col-6 p-0">
					<div class="instagram-img">
						<img src="{{ url('frontend/assets/images/instragram/instragram-img1.jpg') }}" alt="">
					</div>
				</div>
			</div>
		</div>



		<div class="modal fade" id="product-modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered product-modal " role="document">
				<div class="modal-content product-modal pt-30 pb-30">
					<div class="modal-body pt-0 pl-0">
						<div class="modal-close mt-10">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="row">
							<div class="col-xl-6  col-lg-6  col-md-6  col-sm-12 col-12">
								<div class="product-modal-right d-flex">
									<div class="nav product-tabs flex-column nav-pills" id="v-pills-tab" role="tablist"
										aria-orientation="vertical">
										<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
											href="#v-pills-home" role="tab" aria-controls="v-pills-home"
											aria-selected="true">
											<img class="product-thumbnail" src="{{ url('frontend/assets/images/product/home-product1.png') }}"
												alt="">
										</a>
										<a class="nav-link " id="v-pills-profile-tab" data-toggle="pill"
											href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
											aria-selected="false">
											<img class="product-thumbnail" src="{{ url('frontend/assets/images/product/home-product-hover-1.png') }}"
												alt="">
										</a>
									</div>
									<div class="tab-content" id="v-pills-tabContent">
										<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
											aria-labelledby="v-pills-home-tab">
											<div class="product-img">
												<img src="{{ url('frontend/assets/images/product/home-product1.png') }}" alt="">
											</div>
										</div>
										<div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
											aria-labelledby="v-pills-profile-tab">
											<div class="product-img">
												<img class="product-thumbnail"
													src="{{ url('frontend/assets/images/product/home-product-hover-1.png') }}" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6  col-lg-6  col-md-6  col-sm-12 col-12">
								<div class="product-modal-left pt-20">
									<h4><a href="single-product.html">Form Armchair Walnut Base</a></h4>
									<div class="price pb-15"><span>$396.00</span> <span class="modal-old-price">
											<del>$400 </del> </span> </div>
									<div class="available">
										<p> Availability: <span class="blue-color">In Stock</span></p>
									</div>
									<div class="sku pb-10">
										<p>Sku: <span class="blue-color"> 0028KE21</span> </p>
									</div>
									<p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum
										claritatem. Investigationes demonstraverunt lectores legere me lius quod legunt
										saepius.…</p>
									<div class="quick-add-to-cart d-lg-flex align-items-center pt-20">
										<div class="quantity mr-10 mb-20">Quantity :</div>
										<div class="quantity-field position-relative d-inline-block pr-10 mb-20">
											<input type="text" name="select1" value="0" class="quantity-input-arrow"
												id="quantity-input">
										</div>
										<a href="#" class="add-cart-btn">Add to cart</a>
									</div>
									<div class="mega-product mb-20">
										<p class="mb-1"><span>Categories:</span>
											<a href="#">Bedroom,</a>
											<a href="#">Kitchen</a>
										</p>
										<p class="mb-1"><span>Tags:</span>
											<a href="#">FurniNest,</a>
											<a href="#">Furniture,</a>
											<a href="#">Living room,</a>
											<a href="#">Table</a>
										</p>
									</div>
									<div class="social-sharing-wrapper d-lg-flex align-items-center">
										<span class="share mr-20 d-inline-block mb-20">Share this product:</span>
										<ul class="social-sharing mb-20">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
											<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>
@endsection

	







