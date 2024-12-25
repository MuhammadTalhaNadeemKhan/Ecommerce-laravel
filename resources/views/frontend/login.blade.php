@extends('frontend.layouts.app')  

@section('title', 'login')

@section('content') 
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
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
          <li><a class="active" href="{{ route('shop') }}">All categories</a></li>
          <li><a href="{{ route('shop') }}">Bedroom</a></li>
          <li><a href="{{ route('shop') }}">Decor</a></li>
          <li><a href="{{ route('shop') }}">Decoration</a></li>
          <li><a href="{{ route('shop') }}">Kitchen</a></li>
          <li><a href="{{ route('shop') }}">Lamp</a></li>
        </ul>
        <form
          action="https://wphix.com/template/atoga-prv-1/agota/contact.html"
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
          <li><a href="{{ route('login-re') }}">Login / register</a></li>
          <li>
            <a href="{{ route('login-re') }}"><span class="icon-users"></span></a>
          </li>
        </ul>
        <ul
          class="header-heart d-flex justify-content-between border-bottom-gray"
        >
          <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
          <li>
            <a href="{{ route('wishlist') }}"><span class="icon-heart"></span></a>
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
          <li><a class="active" href="{{ route('shop') }}">All categories</a></li>
          <li><a href="{{ route('shop') }}">Bedroom</a></li>
          <li><a href="{{ route('shop') }}">Decor</a></li>
          <li><a href="{{ route('shop') }}">Decoration</a></li>
          <li><a href="{{ route('shop') }}">Kitchen</a></li>
          <li><a href="{{ route('shop') }}">Lamp</a></li>
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
            <a class="d-block border" href="{{ route('product-details') }}"
              ><img src="frontend/assets/images/product/9-1.jpg" alt=""
            /></a>
          </li>
          <li>
            <ul class="d-flex">
              <li>
                <h6 class="single-product-name">
                  <a href="{{ route('product-details') }}"
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
            <a class="d-block border" href="{{ route('product-details') }}"
              ><img src="frontend/assets/images/product/13-1.jpg" alt=""
            /></a>
          </li>
          <li>
            <ul class="d-flex">
              <li>
                <h6 class="single-product-name">
                  <a href="{{ route('product-details') }}">Utopia Towels Kitchen</a>
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
        href="{{ route('cart') }}"
        class="btn p-add-cart p-add-cart2 pt-15 pb-15 mb-15 text-uppercase mt-15 mr-2 w-100"
        >view cart</a
      >
      <a
        href="{{ route('checkout') }}"
        class="btn p-add-cart p-add-cart2 pt-15 pb-15 mb-15 text-uppercase mt-15 mr-2 w-100"
        >checkout</a
      >
    </div>

    <main>
      <div class="slider-area over-hidden">
        <div class="single-page cart-height d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div
                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-center"
              >
                <div class="page-title pt-135 pb-100">
                  <h2 class="text-capitalize text-dark mb-15">My Account</h2>
                  <nav aria-label="breadcrumb">
                    <ol
                      class="breadcrumb justify-content-center bg-transparent"
                    >
                      <li class="breadcrumb-item">
                        <a class="secondary-color" href="{{ route('home') }}">Home</a>
                      </li>
                      <li
                        class="breadcrumb-item active text-capitalize text-dark"
                        aria-current="page"
                      >
                        My Account
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="login-register-area mb-60">
        <div class="container">
          <div class="row">
            <div
              class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-center justify-content-md-end"
            >
              <div class="login-area mb-60">
                <h4>Login Form</h4>
                <div class="login-form mt-40 pl-55 pr-55 pt-60 pb-60">
                    <form action="{{ url('login') }}" method="POST">
                        @csrf
                        <div class="log-email">
                            <label class="d-block pb-2">Username or email address
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="email" id="l-name" required />
                        </div>
                        <div class="log-pass">
                            <label class="d-block pt-10 pb-2">Password
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control" name="password" id="l-pass" required />
                        </div>
                        <div class="save-info login-check d-flex align-items-sm-center mt-15">
                            <input class="p-0" type="checkbox" name="remember" id="remember" />
                            <p class="mb-0 pl-10">Remember me</p>
                        </div>
                        <button type="submit" class="btn text-white bg-dark transition-3 form-control mt-20">
                            Log In
                        </button>
                        <div class="f-get-pass text-right">
                            <a href="{{ url('password/reset') }}" class="black-color d-inline-block mt-10">Lost your password?</a>
                        </div>
                    </form>
                </div>
                
                
                </div>
              </div>
            </div>
            <div
              class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-center justify-content-md-start"
            >
              <div class="register-area mb-60">
                <h4>Register Form</h4>
                <div class="register-form border mt-40 pl-55 pr-55 pt-60 pb-70">
                  {{-- <form action="#">
                    <div class="register-email mb-20">
                      <label class="d-block pb-2"
                        >Email address<span class="text-danger">*</span></label
                      >
                      <input
                        type="email"
                        class="form-control"
                        name="r-name"
                        id="r-name"
                        required
                      />
                    </div>
                  </form> --}}
                  @if(session('success'))
                  <div class="alert alert-success" role="alert">
                      {{ session('success') }}
                  </div>
              @endif
              
              <form action="{{ url('register') }}" method="POST">
                  @csrf
                  <div class="register-email mb-20">
                      <label class="d-block pb-2">Email address
                          <span class="text-danger">*</span>
                      </label>
                      <input type="email" class="form-control" name="email" id="r-email" required />
                  </div>
                  
                  <div class="register-name mb-20">
                      <label class="d-block pb-2">Full Name
                          <span class="text-danger">*</span>
                      </label>
                      <input type="text" class="form-control" name="name" id="r-name" required />
                  </div>
                  
                  <div class="register-password mb-20">
                      <label class="d-block pb-2">Password
                          <span class="text-danger">*</span>
                      </label>
                      <input type="password" class="form-control" name="password" id="r-password" required />
                  </div>
                  
                  <div class="register-password-confirm mb-20">
                      <label class="d-block pb-2">Confirm Password
                          <span class="text-danger">*</span>
                      </label>
                      <input type="password" class="form-control" name="password_confirmation" id="r-password-confirm" required />
                  </div>
                  
                  <div class="register-info mb-20">
                      <input class="p-0" type="checkbox" name="terms" id="r-terms" />
                      <label for="r-terms" class="pl-10">I agree to the terms and conditions</label>
                  </div>
                  
                  <button type="submit" class="btn text-white bg-dark transition-3 form-control mt-20">
                      Sign Up
                  </button>
              </form>
              
                
                  {{-- <h6>A password will be sent to your email address.</h6> --}}
                  <p class="pt-15 pb-1">
                    Your personal data will be used to support your experience
                    throughout this website, to manage access to your account,
                    and for other purposes described in our
                    <a href="#" class="blue-color">privacy policy</a>
                  </p>
                  <a
                    href="#"
                    class="btn text-white bg-dark transition-3 form-control"
                    >Register</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection
