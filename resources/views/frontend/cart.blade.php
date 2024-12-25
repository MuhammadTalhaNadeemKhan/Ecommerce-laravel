@extends('frontend.layouts.app')  

@section('title', 'cart')

@section('content')

         
            
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
                    <form action="https://wphix.com/template/atoga-prv-1/agota/contact.html" class="position-relative pt-10 pb-15">
                        <input type="text" placeholder="Search Products...">
                        <a class="position-absolute" href="javascript:void(0)"><span class="icon-search"></span></a>
                    </form>
                </div>
                <div class="mobile-menu"></div>
                <div class="menu-login pt-50 pb-200">
                    <ul class="header-login d-flex justify-content-between border-bottom-gray">
                        <li><a href="{{ route('login') }}">Login / register</a></li>
                        <li><a href="{{ route('login') }}"><span class="icon-users"></span></a></li>
                    </ul>
                    <ul class="header-heart d-flex justify-content-between border-bottom-gray">
                        <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                        <li><a href="{{ route('wishlist') }}"><span class="icon-heart"></span></a></li>
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
                        <input type="text" placeholder="Search Products...">
                        <a class="position-absolute" href="#"><span class="icon-search"></span></a>
                    </form>
                </div>
            </div>

          

        <main>

             
            <div class="slider-area over-hidden">
                <div class="single-page cart-height d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12  d-flex align-items-center justify-content-center">
                                    <div class="page-title page-title1 pt-135 pb-100">
                                        <h2 class="text-capitalize text-dark mb-15">My Cart</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb justify-content-center bg-transparent">
                                            <li class="breadcrumb-item"><a class="secondary-color" href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active text-capitalize text-dark" aria-current="page">Cart</li>
                                            </ol>
                                        </nav> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
             
        
         
        <div class="cart-area">
            <div class="container-wrapper pl-15 pr-15 border-b-light-gray pb-100">
                <div class="cart-table text-center table-responsive-md">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Price images</th>
                            <th scope="col">Product name </th>
                            <th scope="col">Unit price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <a href="#" class="cart-img d-block">
                                    <img src={{ url('frontend/assets/images/product/home-product3.jpg') }} alt="">
                                </a>
                            </td>
                            <td>
                                <a href="#" class="p-name dark-black-color">
                                    Wood design bedroom clock
                                </a>
                            </td>
                            <td>
                                <div class="cart-price">$440.00</div></td>
                            <td>
                                <div class="quantity-field position-relative d-inline-block pl-40 pr-10 pb-2 pb-lg-0">
                                    <input type="text" name="select1" value="0" class="quantity-input-arrow quantity-input-2 border-light-gray2"> 
                                </div>
                            </td>
                            <td>
                                <div class="cart-price">$440.00</div>
                            </td>
                            <td>
                                <a href="#" class="p-remove theme-color"><span class="icon-clear"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="cart-img d-block">
                                    <img src={{ url('frontend/assets/images/product/home-product8.jpg') }} alt="">
                                </a>
                            </td>
                            <td>
                                <a href="#" class="p-name dark-black-color">
                                    Wood design bedroom clock
                                </a>
                            </td>
                            <td>
                                <div class="cart-price">$440.00</div></td>
                            <td>
                                <div class="quantity-field position-relative d-inline-block pl-40 pr-10 pb-2 pb-lg-0">
                                    <input type="text" name="select1" value="0" class="quantity-input-arrow quantity-input-2 border-light-gray2"> 
                                </div>
                            </td>
                            <td>
                                <div class="cart-price">$440.00</div>
                            </td>
                            <td>
                                <a href="#" class="p-remove theme-color"><span class="icon-clear"></span></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="coupon-and-update-area pt-30">
                    <div class="row">
                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                            <div class="coupon-code-area pt-15">
                                <form action="#" class="d-sm-flex align-content-center">
                                    <input type="text" placeholder="Coupon code" class="pl-15 mr-12 pt-0 mb-15 d-inline-block width50">
                                    <a href="#" class="btn p-add-cart p-add-cart2 pt-15 pb-15 mb-15 text-uppercase">Apply coupon</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                            <div class="update-area text-lg-right">
                                <a href="#" class="btn p-add-cart p-add-cart2 pt-15 pb-15 mb-15 text-uppercase mt-15 mr-2">CLEAR CART</a>
                                <a href="#" class="btn p-add-cart p-add-cart2 pt-15 pb-15 mb-15 text-uppercase mt-15">UPDATE CART</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12 offset-xl-6 offset-lg-6">
                        <div class="total-price-area mt-80">
                            <h2 class="font600">Cart totals</h2>
                            <ul class="pt-15 pb-25">
                                <li class="d-flex justify-content-between align-items-center border-gray mb-1 pl-25 pr-25 pt-15 pb-15">
                                    <span>Subtotal</span><span>$480</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center border-gray pl-25 pr-25 pt-15 pb-15">
                                    <span>Total </span><span>$480</span>
                                </li>
                            </ul>
                            <a href="#" class="btn p-add-cart p-add-cart2 pt-15 pb-15 mb-15 text-uppercase mt-15 px-5">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            

        </main>
@endsection