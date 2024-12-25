@extends('frontend.layouts.app')  

@section('title', 'contact')

@section('content')



  @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif


  @if($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

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
          action="#"
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
          data-background="frontend/assets/images/slider/img-contact.jpg"
        >
          <div class="container">
            <div class="row">
              <div
                class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-center"
              >
                <div class="page-title pt-35">
                  <h2 class="text-capitalize text-white pb-25">contact us</h2>
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
                        contact us
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="contact-form-area over-hidden">
        <div
          class="container-wrapper pl-15 pr-15 pl-80 pr-80 pt-100 pb-70 bg-white"
        >
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="contact-form-left mb-30 pr-100">
                <div class="section-title text-left pb-30">
                  <span class="secondary-color pb-2 d-block">Contact us</span>
                  <h2>Please contact us quickly if you need help.</h2>
                </div>
                <div class="contact-address pb-2">
                  <span class="blue-color">Islamabad</span>
                  <p>
                    Add: S9 Defense Housing Authority, Sector F DHA Phase II,
                    Islamabad.<br />
                    Open: 9:30 am – 9:00 pm
                  </p>
                </div>
                <div class="contact-address pb-2">
                  <span class="blue-color">Lahore</span>
                  <p>
                    Add: S9 No 40, Mall Road, Lahore.<br />
                    Open: 9:30 am – 9:00 pm
                  </p>
                </div>
                <div class="contact-address">
                  <span class="blue-color">Contacts</span>
                  <p class="m-0">
                    Email:
                    <a
                      href="https://wphix.com/cdn-cgi/l/email-protection"
                      class="__cf_email__"
                      data-cfemail="08696c656166486a697b616b7c606d656d266b6765"
                      >[support@furninest.com]</a
                    >
                  </p>
                  <p class="m-0">Phone: +9234- 567 890</p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="contact-form-right mb-30">
                <form action="{{ url('contact') }}" method="POST">
                  @csrf
                  <span class="secondary-color pb-10 d-block">Write to us</span>
              
                  <!-- Name Field -->
                  <div class="name mb-30">
                      <input
                          type="text"
                          class="form-control"
                          name="name"
                          id="name"
                          placeholder="Name*"
                          value="{{ old('name') }}" 
                          required
                      />
                      @error('name')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
              
                  <!-- Email Field -->
                  <div class="email mb-30">
                      <input
                          type="email"
                          class="form-control"
                          name="email"
                          id="c-email"
                          placeholder="Email*"
                          value="{{ old('email') }}"
                          required
                      />
                      @error('email')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
              
                  <!-- Message Field -->
                  <div class="comment mb-30">
                      <textarea
                          name="message"
                          class="form-control"
                          id="message"
                          placeholder="Comments"
                          required>{{ old('message') }}</textarea>
                      @error('message')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
              
                  <!-- Submit Button -->
                  <button type="submit" class="btn form-control text-white transition">
                      Send
                  </button>
              </form>
              
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="contact-map position-relative">
        <div class="container-fluid px-0">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5406050415095!2d-0.12174238460793235!3d51.50329727963452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2sbd!4v1605927392577!5m2!1sen!2sbd"
          ></iframe>
        </div>
      </div>
    </main>
@endsection