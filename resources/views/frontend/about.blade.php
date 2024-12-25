@extends('frontend.layouts.app')

@section('title', 'About')

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
        <form
          action="https://wphix.com/template/atoga-prv-1/FurniNest/contact.html"
          class="position-relative pt-10 pb-15"
        >
          <input type="text" placeholder="Search Products..." />
          <a class="position-absolute" href="javascript:void(0)"
            ><span class="icon-search"></span
          ></a>
        </form>
      </div>
      <div class="mobile-menu"></div>
      <div class="menu-login pt-50 pb-200">
        <ul
          class="header-login d-flex justify-content-between border-bottom-gray"
        >
          <li><a href="login.html">Login / register</a></li>
          <li>
            <a href="login.html"><span class="icon-users"></span></a>
          </li>
        </ul>
        <ul
          class="header-heart d-flex justify-content-between border-bottom-gray"
        >
          <li><a href="wishlist.html">Wishlist</a></li>
          <li>
            <a href="wishlist.html"><span class="icon-heart"></span></a>
          </li>
        </ul>
      </div>
    </div>

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
          <input type="text" placeholder="Search Products..." />
          <a class="position-absolute" href="#"
            ><span class="icon-search"></span
          ></a>
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
            <a class="d-block border" href="product-details.html"
              ><img src="frontend/assets/images/product/9-1.jpg" alt=""
            /></a>
          </li>
          <li>
            <ul class="d-flex">
              <li>
                <h6 class="single-product-name">
                  <a href="product-details.html"
                    >Bottle Grinder with Steel Lid</a
                  >
                </h6>
                <span>1<span>x</span>$320.00</span>
              </li>
              <li class="s-p-remove text-right pl-2">
                <span class="d-inline-block"
                  ><i class="far fa-trash-alt"></i
                ></span>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="d-flex pb-20">
          <li class="h-shop-cart-img pl-0 pr-3">
            <a class="d-block border" href="product-details.html"
              ><img src="frontend/assets/images/product/13-1.jpg" alt=""
            /></a>
          </li>
          <li>
            <ul class="d-flex">
              <li>
                <h6 class="single-product-name">
                  <a href="product-details.html">Utopia Towels Kitchen</a>
                </h6>
                <span>1<span>x</span>$120.00</span>
              </li>
              <li class="s-p-remove pl-2">
                <span class="d-inline-block"
                  ><i class="far fa-trash-alt"></i
                ></span>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="s-sub-t mt-3 mb-20">
        <span class="theme-color">Subtotal:</span>
        <span class="theme-color float-right"> $440.00</span>
      </div>
      <a
        href="cart.html"
        class="btn p-add-cart p-add-cart2 pt-15 pb-15 mb-15 text-uppercase mt-15 mr-2 w-100"
        >view cart</a
      >
      <a
        href="checkout.html"
        class="btn p-add-cart p-add-cart2 pt-15 pb-15 mb-15 text-uppercase mt-15 mr-2 w-100"
        >checkout</a
      >
    </div>

    <main>
      <div class="slider-area over-hidden">
        <div
          class="single-page page-height d-flex align-items-center"
          data-background="frontend/assets/images/about/img-about-1.jpg"
        >
          <div class="container">
            <div class="row">
              <div
                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-center position-static"
              >
                <div class="page-title text-center">
                  <h2 class="text-capitalize text-white mb-25 pt-35">
                    About Us
                  </h2>
                  <nav aria-label="breadcrumb">
                    <ol
                      class="breadcrumb justify-content-center bg-transparent"
                    >
                      <li class="breadcrumb-item">
                        <a class="secondary-color" href="index.html">Home</a>
                      </li>
                      <li
                        class="breadcrumb-item active text-capitalize text-white"
                        aria-current="page"
                      >
                        About Us
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="history-area pt-120 pb-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="container-inner pl-35 pr-35">
                <div class="history-title section-title pl-140 pb-50">
                  <span class="secondary-color position-relative"
                    >Our History</span
                  >
                  <h2 class="pt-10">We Are A Lifestyle Brand</h2>
                </div>
                <div class="history-content">
                  <p class="pb-30">
                    At FurniNest, we believe that your home should be a
                    reflection of your unique style and personality. With over a
                    decade of experience in providing high-quality furniture, we
                    strive to offer our customers a diverse range of carefully
                    curated pieces that combine comfort, functionality, and
                    aesthetic appeal. Whether you’re furnishing a cozy
                    apartment, a spacious family home, or a stylish office, we
                    have the perfect selection to meet your needs. Our
                    commitment to excellence in design and craftsmanship ensures
                    that each piece not only enhances your space but also
                    provides long-lasting comfort and durability.
                  </p>
                  <p class="pb-30">
                    Our mission is to make furniture shopping a seamless and
                    enjoyable experience for everyone. From the moment you land
                    on our website to the delivery of your new furniture, we are
                    dedicated to offering exceptional customer service. We
                    prioritize sustainability by sourcing eco-friendly materials
                    and supporting manufacturers who share our vision of
                    creating beautiful, environmentally responsible products. At
                    <b>FurniNest</b>, we are passionate about delivering more
                    than just furniture—we’re dedicated to helping you build a
                    home that you love, one piece at a time.
                  </p>
                  <p>
                    We understand that choosing the right furniture is more than
                    just a purchase; it's an investment in your home and
                    lifestyle. That’s why we go the extra mile to provide expert
                    advice, personalized recommendations, and hassle-free
                    delivery options. With a growing collection of exclusive
                    designs, a focus on quality, and a commitment to customer
                    satisfaction, FurniNest is your go-to destination for
                    creating the home of your dreams. Join us in making your
                    space a true haven.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="portfolio-area over-hidden">
        <div class="container-wrapper pl-15 pr-15">
          <div class="row grid">
            <div
              class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 grid-item pl-10 pr-10"
            >
              <div class="single-portfolio mb-20 over-hidden">
                <div class="portfolio-img">
                  <img
                    class="img-zoom"
                    src="frontend/assets/images/about/image1-about.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div
              class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 grid-item pl-10 pr-10"
            >
              <div class="single-portfolio mb-20 over-hidden">
                <div class="portfolio-img">
                  <img
                    class="img-zoom"
                    src="frontend/assets/images/about/image4-about.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div
              class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 grid-item pl-10 pr-10"
            >
              <div class="single-portfolio mb-20 over-hidden">
                <div class="portfolio-img">
                  <img
                    class="img-zoom"
                    src="frontend/assets/images/about/image5-about.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div
              class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 grid-item pl-10 pr-10"
            >
              <div class="single-portfolio mb-20 over-hidden">
                <div class="portfolio-img">
                  <img
                    class="img-zoom"
                    src="frontend/assets/images/about/image2-about.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div
              class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 grid-item pl-10 pr-10"
            >
              <div class="single-portfolio mb-20 over-hidden">
                <div class="portfolio-img">
                  <img
                    class="img-zoom"
                    src="frontend/assets/images/about/image3-about.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="our-service mt-55 pb-85">
        <div class="container">
          <div class="container-inner pl-50 pr-50">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-md-0">
                <div
                  class="our-single-service text-center pb-35 mt-35 pl-10 pr-20 border-bottom border-right"
                >
                  <div class="our-icon">
                    <span class="flaticon-football-cup"></span>
                  </div>
                  <h5 class="pt-30 pb-10">19 Years of Experience</h5>
                  <p>
                    With nearly two decades of expertise in the furniture
                    industry, we provide exceptional craftsmanship, timeless
                    designs, and unmatched customer service to transform your
                    home.
                  </p>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-md-0">
                <div
                  class="our-single-service text-center pb-35 mt-35 pl-20 pr-10 border-bottom"
                >
                  <div class="our-icon">
                    <span class="flaticon-target"></span>
                  </div>
                  <h5 class="pt-30 pb-10">60,000+ Happy Customer</h5>
                  <p>
                    Thousands of satisfied customers trust us to furnish their
                    homes with high-quality, stylish furniture. We prioritize
                    your satisfaction, delivering quality pieces that enhance
                    every space.
                  </p>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-md-0">
                <div
                  class="our-single-service text-center mb-35 pt-35 pl-10 pr-20 border-right"
                >
                  <div class="our-icon">
                    <span class="flaticon-like"></span>
                  </div>
                  <h5 class="pt-30 pb-10">Sustainable Practices</h5>
                  <p>
                    We’re committed to sustainability by offering eco-friendly
                    furniture made from responsibly sourced materials. Our goal
                    is to create beautiful, lasting pieces that support a
                    greener future.
                  </p>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-md-0">
                <div
                  class="our-single-service text-center mb-35 pt-35 pl-20 pr-10"
                >
                  <div class="our-icon">
                    <span class="flaticon-recommend"></span>
                  </div>
                  <h5 class="pt-30 pb-10">Free, Fast Delivery</h5>
                  <p>
                    Enjoy fast, reliable delivery to your doorstep at no extra
                    cost. We ensure your furniture arrives on time, carefully
                    packaged, and ready for you to enjoy.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="shipping-area shipping-height"
        data-background="frontend/assets/images/about/banner-about-footer.jpg"
      >
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="shipping-content text-center pt-200">
                <div class="ship-icon mt-20">
                  <span class="text-white flaticon-ship"></span>
                </div>
                <h2 class="pt-15 pb-10 text-white">
                  Get Free Shipping on Every Order
                </h2>
                <p class="text-white">
                  At FurniNest, we want to make your shopping experience as easy
                  as possible. That’s why we offer free shipping on all orders,
                  ensuring your furniture arrives quickly and safely at your
                  doorstep, with no hidden fees or additional costs.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br />
      <br />

      <div class="testimonial-area testimonial-bg pt-180">
        <div class="container">
          <div class="testimonial-active">
            <div class="row align-items-center pb-100">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="user-comment text-center">
                  <div class="quit mb-40">
                    <a href="#" class="text-white"
                      ><i class="fas fa-quote-left"></i
                    ></a>
                  </div>
                  <blockquote class="testimonials-text text-white">
                    "I recently purchased a sofa and coffee table set from this website, and I couldn’t be happier. <br>The quality is outstanding, and it really adds a touch of elegance to my living room. The ordering process was seamless, and it was delivered right on time. <br>I’ll definitely be shopping here again!"
                  </blockquote>
                  <div class="client text-center pt-40">
                    <img
                      class="pb-15"
                      src="frontend/assets/images/about/testimonial1.png"
                      alt=""
                    />
                    <h5><a class="text-white" href="#">Fahad Abbas</a></h5>
                    <span>Customer</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center pb-100">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="user-comment text-center">
                  <div class="quit mb-40">
                    <a href="#" class="text-white"
                      ><i class="fas fa-quote-left"></i
                    ></a>
                  </div>
                  <blockquote class="testimonials-text text-white">
                    "I bought an ergonomic office chair and a modern desk from this site, and they’ve completely transformed my workspace. <br>The chair is incredibly comfortable, and the desk has a sleek design that fits perfectly in my home office. <br>I’m so pleased with the craftsmanship and would highly recommend this site for quality furniture!"
                  </blockquote>
                  <div class="client text-center pt-40">
                    <img
                      class="pb-15"
                      src="frontend/assets/images/about/testimonial2.png"
                      alt=""
                    />
                    <h5><a class="text-white" href="#">Hamza Ali</a></h5>
                    <span>Customer</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row align-items-center pb-100">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="user-comment text-center">
                  <div class="quit mb-40">
                    <a href="#" class="text-white"
                      ><i class="fas fa-quote-left"></i
                    ></a>
                  </div>
                  <blockquote class="testimonials-text text-white">
                    "I purchased a dining table and set of chairs for my new home, and they exceeded all my expectations. <br> The quality is top-notch, and they were very easy to assemble. The style fits perfectly with my décor, and I get compliments on them all the time. <br> Very happy with my purchase!"

                  </blockquote>
                  <div class="client text-center pt-40">
                    <img
                      class="pb-15"
                      src="frontend/assets/images/about/testimonial3.png"
                      alt=""
                    />
                    <h5><a class="text-white" href="#">Adnan Raza</a></h5>
                    <span>Customer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="brand-logo-area">
        <div class="container-wrapper pl-15 pr-15">
          <div class="brand-active border-gray-top">
            <div
              class="single-brand pt-85 pb-85 pl-15 pr-15 d-flex justify-content-center"
            >
              <img src="frontend/assets/images/brand/brand-logo1.png" alt="" />
            </div>
            <div
              class="single-brand pt-85 pb-85 pl-15 pr-15 d-flex justify-content-center"
            >
              <img src="frontend/assets/images/brand/brand-logo2.png" alt="" />
            </div>
            <div
              class="single-brand pt-85 pb-85 pl-15 pr-15 d-flex justify-content-center"
            >
              <img src="frontend/assets/images/brand/brand-logo3.png" alt="" />
            </div>
            <div
              class="single-brand pt-85 pb-85 pl-15 pr-15 d-flex justify-content-center"
            >
              <img src="frontend/assets/images/brand/brand-logo5.png" alt="" />
            </div>
            <div
              class="single-brand pt-85 pb-85 pl-15 pr-15 d-flex justify-content-center"
            >
              <img src="frontend/assets/images/brand/brand-logo4.png" alt="" />
            </div>
            <div
              class="single-brand pt-85 pb-85 pl-15 pr-15 d-flex justify-content-center"
            >
              <img src="frontend/assets/images/brand/brand-logo1.png" alt="" />
            </div>
            <div
              class="single-brand pt-85 pb-85 pl-15 pr-15 d-flex justify-content-center"
            >
              <img src="frontend/assets/images/brand/brand-logo2.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection
