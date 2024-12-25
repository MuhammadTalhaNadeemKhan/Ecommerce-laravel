@extends('frontend.layouts.app')  

@section('title', 'shop')

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
          <li><a href="{{ route('login') }}">Login / register</a></li>
          <li>
            <a href="{{ route('login') }}"><span class="icon-users"></span></a>
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
    <div class="body-overlay"></div>

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
              ><img src="{{ url('frontend/assets/images/product/9-1.jpg') }}" alt=""
            /></a>
          </li>
          <li>
            <ul class="d-flex">
              <li>
                <h6 class="single-product-name">
                  <a href="{{ route('product-details') }}">Manager Chair for Office</a>
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
              ><img src="{{ url('frontend/assets/images/product/13-1.jpg') }}" alt=""
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
        <div
          class="single-page page-height3 d-flex align-items-center"
          data-background="frontend/assets/images/shop/banner-shop-1.jpg"
        >
          <div class="container">
            <div class="row">
              <div
                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-center"
              >
                <div class="page-title">
                  <h2 class="text-capitalize text-white mb-15">Shop</h2>
                  <nav aria-label="breadcrumb">
                    <ol
                      class="breadcrumb justify-content-center bg-transparent"
                    >
                      <li class="breadcrumb-item">
                        <a class="secondary-color" href="{{ route('home') }}">home</a>
                      </li>
                      <li
                        class="breadcrumb-item active text-capitalize text-white"
                        aria-current="page"
                      >
                        Shop
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="shop-header-area pt-110">
        <div class="container-wrapper pl-15 pr-15 position-relative">
          <div class="row position-static">
            <div class="col-xl-4 col-lg-4 col-md-3 d-none d-md-block">
              <div class="shop-title pb-50">
                <h5 class="mb-0 mt-10">Showing all 12 results</h5>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-12">
              <div
                class="view-mode d-flex align-items-center mt-2 pb-40 pb-sm-0"
              >
                <span>Views:</span>
                <ul
                  class="nav nav-tabs shop-product-tab border-bottom-0 pt-1"
                  id="myTab"
                  role="tablist"
                >
                  <li class="nav-item">
                    <a
                      class="nav-link py-0 pr-1"
                      id="col2-tab"
                      data-toggle="tab"
                      href="#col2"
                      role="tab"
                      aria-controls="col2"
                      aria-selected="true"
                    >
                      <img class="ser-icon" src="{{ url('frontend/assets/images/icon/2.svg') }}" alt="" />
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link py-0 pr-1"
                      id="col3tab"
                      data-toggle="tab"
                      href="#col3"
                      role="tab"
                      aria-controls="col3"
                      aria-selected="false"
                    >
                      <img class="ser-icon" src="{{ url('frontend/assets/images/icon/3.svg') }}" alt="" />
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link show active py-0 pr-1"
                      id="col4-tab"
                      data-toggle="tab"
                      href="#col4"
                      role="tab"
                      aria-controls="col4"
                      aria-selected="false"
                    >
                      <img class="ser-icon" src="{{ url('frontend/assets/images/icon/4.svg') }}" alt="" />
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link py-0 pr-1"
                      id="col5-tab"
                      data-toggle="tab"
                      href="#col5"
                      role="tab"
                      aria-controls="col5"
                      aria-selected="false"
                    >
                      <img class="ser-icon" src="{{ url('frontend/assets/images/icon/5.svg') }}" alt="" />
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link py-0 pr-1"
                      id="list-tab"
                      data-toggle="tab"
                      href="#list"
                      role="tab"
                      aria-controls="list"
                      aria-selected="false"
                    >
                      <img class="ser-icon" src="{{ url('frontend/assets/images/icon/list.svg') }}" alt="" />
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div
              class="col-xl-5 col-lg-5 col-md-5 col-sm-7 col-12 d-sm-flex justify-content-sm-end position-static"
            >
              <div class="product-selection pb-50 mt-2 mr-2">
                <select
                  class="border-0 py-0 pl-0"
                  name="select"
                  id="select"
                  style="display: none"
                >
                  <option value="">Sort by : Default sorting</option>
                  <option value="">Sort by popularity</option>
                  <option value="">Sort by average rating</option>
                  <option value="">Sort by latest</option>
                  <option value="">Sort by price: low to high</option>
                  <option value="">Sort by price: high to low</option>
                </select>
              </div>
              <div class="product-filter pb-50 text-sm-right">
                <a
                  href="javascript:void(0)"
                  class="product-filter-btn position-relative d-inline-block dark-black-bg text-white py-2 px-4"
                  >Filter <span>+</span></a
                >
              </div>
              <div
                class="product-filter-details position-absolute bg-white over-hidden"
              >
                <div class="container-wrapper pl-15 pr-15">
                  <div
                    class="product-filter-details-wrapper pt-35 pb-15 pl-30 pr-30"
                  >
                    <div class="row">
                      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="f-category">
                          <h4>Filter By Categories</h4>
                          <ul class="product-menubar mt-30 mb-15 over-scroll">
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">Bedroom</span></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"><span class="pl-15">Decor</span></a>
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">Decoration</span></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">Kitchen</span></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"><span class="pl-15">Lamp</span></a>
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">Lighting</span></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">Living Room</span></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">Outdoor</span></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"><span class="pl-15">Table</span></a>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="f-choose-color">
                          <h4>Filter By Choose Color</h4>
                          <ul class="product-menubar mt-30 mb-15 over-scroll">
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio p-blue"
                                  name="example"
                                />
                                <a href="#"><span class="pl-15">Blue</span></a>
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio p-d-blue"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">dark blue</span></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio p-l-black"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">Light black</span></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio p-gray"
                                  name="example"
                                />
                                <a href="#"><span class="pl-15">Gray</span></a>
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio p-green"
                                  name="example"
                                />
                                <a href="#"><span class="pl-15">Green</span></a>
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio p-orange"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">Orange</span></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio p-pink"
                                  name="example"
                                />
                                <a href="#"><span class="pl-15">Pink</span></a>
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio p-yellow"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">yellow-brown</span></a
                                >
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="f-choose-color mr-4">
                          <h4>Filter By Brand</h4>
                          <ul class="product-menubar mt-30 mb-15 over-scroll">
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15"
                                    >Clements Ribeiro</span
                                  ></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15"
                                    >Dominique Aurientis</span
                                  ></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">Georgine</span></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">Chrome Hearts</span></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15"
                                    >Jean-Paul Gaultier</span
                                  ></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15">John Galliano</span></a
                                >
                              </div>
                            </li>
                            <li>
                              <div class="d-flex align-items-center mb-3">
                                <input
                                  type="checkbox"
                                  class="option-input radio"
                                  name="example"
                                />
                                <a href="#"
                                  ><span class="pl-15"
                                    >Matthew Christopher</span
                                  ></a
                                >
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div
                        class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pl-xl-0"
                      >
                        <div class="product-menubar">
                          <h4>Filter by price</h4>
                          <div class="f-price-filter mt-45 mb-15">
                            <div
                              id="slider-range"
                              class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                            >
                              <div
                                class="ui-slider-range ui-corner-all ui-widget-header"
                                style="left: 15%; width: 45%"
                              ></div>
                              <span
                                tabindex="0"
                                class="ui-slider-handle ui-corner-all ui-state-default"
                                style="left: 15%"
                              ></span
                              ><span
                                tabindex="0"
                                class="ui-slider-handle ui-corner-all ui-state-default"
                                style="left: 60%"
                              ></span>
                            </div>
                            <div
                              class="fitler-input d-flex align-items-center justify-content-between mt-40"
                            >
                              <div class="pn">
                                <label class="">Price:</label>
                                <input
                                  type="text"
                                  id="amount"
                                  class="border-0"
                                />
                              </div>
                              <a href="#" class="border py-2 px-5">Filter</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="all-product-area pb-45">
        <div class="container-wrapper pl-15 pr-15">
          <div class="row">
            <!-- Loop through products dynamically -->
            <script>
              const products = [
                {
                  id: 1,
                  title: "Form Armchair Walnut Base",
                  description: "Stylish and comfortable chair.",
                  price: "$799.00",
                  oldPrice: "$829.00",
                  image: "frontend/assets/images/product/home-product1.jpg",
                  hoverImage: "frontend/assets/images/product/home-product-hover-1.jpg",
                },
                {
                  id: 2,
                  title: "Home Sofa Set",
                  description: "Elegant and durable sofa set.",
                  price: "$862.00",
                  image: "frontend/assets/images/product/home-product2.jpg",
                  hoverImage: "frontend/assets/images/product/home-product-hover-2.jpg",
                },
                {
                  id: 3,
                  title: "Organic Chair High Back",
                  description: "Ergonomic chair for long hours.",
                  price: "$1,098.00",
                  image: "frontend/assets/images/product/home-product3.jpg",
                  hoverImage: "frontend/assets/images/product/home-product-hover-3.jpg",
                },
                {
                  id: 4,
                  title: "Organic Chair High White",
                  description: "Modern and sleek chair design.",
                  price: "$96.00",
                  image: "frontend/assets/images/product/home-product4.jpg",
                  hoverImage: "frontend/assets/images/product/home-product-hover-4.jpg",
                },
              ];
      
              products.forEach((product) => {
                document.write(`
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-40">
                    <div class="single-product bg-white position-relative pb-30">
                      <div class="single-product-img position-relative">
                        <a href="product/${product.id}">
                          <img class="height100" src="${product.image}" alt="${product.title}" />
                        </a>
                        <div class="single-product-hover-img position-absolute">
                          <a href="product/${product.id}">
                            <img class="height100" src="${product.hoverImage}" alt="${product.title}" />
                          </a>
                        </div>
                        <ul class="single-product-button d-flex position-absolute">
                          <li data-toggle="tooltip" title="Add to Cart">
                            <a href="#"><span class="icon-shopping-bag"></span></a>
                          </li>
                          <li data-toggle="tooltip" title="View Product">
                            <a href="#" data-toggle="modal" data-target="#product-modal-${product.id}"><span class="icon-eye"></span></a>
                          </li>
                          <li data-toggle="tooltip" title="Add to Wishlist">
                            <a href="#"><span class="icon-heart"></span></a>
                          </li>
                        </ul>
                      </div>
                      <h5 class="product-name pt-20 pl-20">
                        <a href="product/${product.id}">${product.title}</a>
                      </h5>
                      <div class="product-price pl-20">
                        <span class="black-color"><ins>${product.price}</ins></span>
                        ${
                          product.oldPrice
                            ? `<span class="old-price"><del>${product.oldPrice}</del></span>`
                            : ""
                        }
                      </div>
                    </div>
                  </div>
      
                  <!-- Product Modal -->
                  <div class="modal fade" id="product-modal-${product.id}" tabindex="-1" role="dialog" aria-labelledby="product-modal-label-${product.id}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="product-modal-label-${product.id}">${product.title}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img class="img-fluid" src="${product.image}" alt="${product.title}" />
                          <p class="mt-3">${product.description}</p>
                          <p><strong>Price:</strong> ${product.price}</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                `);
              });
            </script>
          </div>
        </div>
      </div>
       --}}

       

      <div class="all-product-area pb-45">
        <div class="container-wrapper pl-15 pr-15">
          <div class="row">
            <div class="col-xl-12 col-lg- col-md- col-sm- col-">
              <div class="tab-content" id="myTabContent">
                <div
                  class="tab-pane fade"
                  id="col2"
                  role="tabpanel"
                  aria-labelledby="col2"
                >
                  <div id="col-2" class="Bestsellers Products-area">
                    <div class="container-wrapper pl-15 pr-15">
                      <div class="row">
                        <div
                          class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product1.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                                    alt=""
                                /></a>
                              </div>
                              <ul
                                class="single-product-button d-flex position-absolute"
                              >
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Add to cart"
                                >
                                  <a href="#"
                                    ><span class="icon-shopping-bag"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Form Armchair Walnut Base"
                                >
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#product-modal"
                                    ><span class="icon-eye"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Browse wishlist"
                                >
                                  <a href="#"
                                    ><span class="icon-heart"></span
                                  ></a>
                                </li>
                              </ul>
                              <div
                                class="countdown-time d-flex border-gray position-absolute"
                              >
                                <div class="timer">
                                  <div
                                    class="d-flex"
                                    data-countdown="2025/1/23"
                                  ></div>
                                </div>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Form Armchair Walnut Base</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color"
                                ><ins>$799.00</ins></span
                              >
                              <span class="old-price"><del>$829.00</del></span>
                            </div>
                            <a
                              href="#"
                              class="sale-tag position-absolute text-white text-uppercase d-inline-block"
                              >sale</a
                            >
                          </div>
                        </div>
                        <div
                          class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product2.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-2.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="#"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Utopia Towels Kitchen"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="#"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}">Home Sofa Set </a>
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$862.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="lower-blue-bg"></span>
                              <span class="pink-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product3.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-3.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to cart"
                                  >
                                    <a href="#"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Organic Chair High black"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="#"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High back</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color">$1,098.00</span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product4.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-4.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="#"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Organic Chair High White"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="#"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High White</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$96.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product5.png') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-5.png') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="#"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Manager Chair for Office"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="#"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Manager Chair for Office</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$396.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="green-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product6.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-6.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to cart"
                                  >
                                    <a href="#"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Antique Chinese Armchairs"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="#"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Antique Chinese Armchairs</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color">$196.00</span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product7.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-7.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="#"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Login / RegisterLiving Room Lighting"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="#"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>

                                <div
                                  class="modal fade pr-0"
                                  id="exampleModal48"
                                  tabindex="-1"
                                  role="dialog"
                                  aria-labelledby="exampleModal48"
                                  aria-hidden="true"
                                >
                                  <div
                                    class="modal-dialog dialog-modal-dialog bg-white"
                                    role="document"
                                  >
                                    <div class="modal-content product-modal">
                                      <div class="modal-body pt-0 pl-0">
                                        <div class="modal-close mt-10">
                                          <button
                                            type="button"
                                            class="close"
                                            data-dismiss="modal"
                                            aria-label="Close"
                                          >
                                            <span aria-hidden="true"
                                              >&times;</span
                                            >
                                          </button>
                                        </div>
                                        <div class="row">
                                          <div
                                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"
                                          >
                                            <div
                                              class="product-modal-right d-flex"
                                            >
                                              <div
                                                class="nav product-tabs flex-column nav-pills"
                                                id="v-pills-tab48"
                                                role="tablist"
                                                aria-orientation="vertical"
                                              >
                                                <a
                                                  class="nav-link active"
                                                  id="v-pills-home-tab48"
                                                  data-toggle="pill"
                                                  href="#v-pills-home48"
                                                  role="tab"
                                                  aria-controls="v-pills-home48"
                                                  aria-selected="true"
                                                >
                                                  <img
                                                    class="product-thumbnail"
                                                    src="{{ url('frontend/assets/images/product/home-product7.jpg') }}"
                                                    alt=""
                                                  />
                                                </a>
                                                <a
                                                  class="nav-link"
                                                  id="v-pills-profile-tab48"
                                                  data-toggle="pill"
                                                  href="#v-pills-profile48"
                                                  role="tab"
                                                  aria-controls="v-pills-profile48"
                                                  aria-selected="false"
                                                >
                                                  <img
                                                    class="product-thumbnail"
                                                    src="{{ url('frontend/assets/images/product/home-product-hover-7.jpg') }}"
                                                    alt=""
                                                  />
                                                </a>
                                              </div>
                                              <div
                                                class="tab-content"
                                                id="v-pills-tabContent48"
                                              >
                                                <div
                                                  class="tab-pane fade show active"
                                                  id="v-pills-home48"
                                                  role="tabpanel"
                                                  aria-labelledby="v-pills-home-tab48"
                                                >
                                                  <div class="product-img">
                                                    <img
                                                      src="{{ url('frontend/assets/images/product/home-product7.jpg') }}"
                                                      alt=""
                                                    />
                                                  </div>
                                                </div>
                                                <div
                                                  class="tab-pane fade"
                                                  id="v-pills-profile48"
                                                  role="tabpanel"
                                                  aria-labelledby="v-pills-profile-tab48"
                                                >
                                                  <div class="product-img">
                                                    <img
                                                      class="product-thumbnail"
                                                      src="{{ url('frontend/assets/images/product/home-product-hover-7.jpg') }}"
                                                      alt=""
                                                    />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div
                                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"
                                          >
                                            <div
                                              class="product-modal-left pt-75 mb-50"
                                            >
                                              <h4>
                                                <a href="#"
                                                  >Living Room Lighting</a
                                                >
                                              </h4>
                                              <div class="price pb-15">
                                                <span>$396.00</span>
                                              </div>
                                              <div class="available">
                                                <p>
                                                  Availability:
                                                  <span class="blue-color"
                                                    >In Stock</span
                                                  >
                                                </p>
                                              </div>
                                              <div class="sku pb-10">
                                                <p>Sku:</p>
                                              </div>
                                              <p>
                                                Typi non habent claritatem
                                                insitam, est usus legentis in
                                                iis qui facit eorum claritatem.
                                                Investigationes demonstraverunt
                                                lectores legere me lius quod
                                                legunt saepius.…
                                              </p>
                                              <div
                                                class="quick-add-to-cart d-flex pt-20"
                                              >
                                                <div class="quantity pt-20">
                                                  Quantity :
                                                </div>
                                                <div
                                                  class="quantity-field position-relative d-inline-block pl-40 pr-10"
                                                >
                                                  <input
                                                    type="text"
                                                    name="select6"
                                                    value="0"
                                                    class="quantity-input-arrow"
                                                    id="quantity-input48"
                                                  />
                                                </div>
                                                <a href="#" class="btn btn3"
                                                  >Add to cart</a
                                                >
                                              </div>
                                              <div class="mega-product pt-30">
                                                <p class="mb-1">
                                                  <span>Categories:</span>
                                                  <a href="#">Bedroom,</a>
                                                  <a href="#">Kitchen</a>
                                                </p>
                                                <p class="mb-1">
                                                  <span>Tags:</span>
                                                  <a href="#">FurniNest,</a>
                                                  <a href="#">Furniture,</a>
                                                  <a href="#">Living room,</a>
                                                  <a href="#">Table</a>
                                                </p>
                                              </div>
                                              <ul
                                                class="social-sharing d-flex align-items-center"
                                              >
                                                <li class="share">
                                                  Share this product
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-facebook-f"
                                                    ></i
                                                  ></a>
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-twitter"
                                                    ></i
                                                  ></a>
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-pinterest-p"
                                                    ></i
                                                  ></a>
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-google-plus"
                                                    ></i
                                                  ></a>
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-linkedin-in"
                                                    ></i
                                                  ></a>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Living Room Lighting</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$262.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="gray-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product1.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                                    alt=""
                                /></a>
                              </div>
                              <ul
                                class="single-product-button d-flex position-absolute"
                              >
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Add to cart"
                                >
                                  <a href="#"
                                    ><span class="icon-shopping-bag"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Organic Chair High back"
                                >
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#product-modal"
                                    ><span class="icon-eye"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Browse wishlist"
                                >
                                  <a href="#"
                                    ><span class="icon-heart"></span
                                  ></a>
                                </li>
                              </ul>
                              <div
                                class="countdown-time d-flex border-gray position-absolute"
                              >
                                <div class="timer">
                                  <div
                                    class="d-flex"
                                    data-countdown="2021/05/01"
                                  ></div>
                                </div>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High back</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color"
                                ><ins>$1,139.40</ins></span
                              >
                              <span class="old-price"
                                ><del>$1,366.00</del></span
                              >
                            </div>
                            <a
                              href="{{ route('shop') }}"
                              class="sale-tag position-absolute text-white text-uppercase d-inline-block"
                              >sale</a
                            >
                          </div>
                        </div>
                        <div
                          class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product5.png') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-5.png') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="#"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Manager Chair for Office"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="#"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Manager Chair for Office</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$396.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="green-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product6.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-6.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to cart"
                                  >
                                    <a href="#"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Antique Chinese Armchairs"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="#"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>

                                <div
                                  class="modal fade pr-0"
                                  id="exampleModal51"
                                  tabindex="-1"
                                  role="dialog"
                                  aria-labelledby="exampleModal51"
                                  aria-hidden="true"
                                >
                                  <div
                                    class="modal-dialog dialog-modal-dialog bg-white"
                                    role="document"
                                  >
                                    <div class="modal-content product-modal">
                                      <div class="modal-body pt-0 pl-0">
                                        <div class="modal-close mt-10">
                                          <button
                                            type="button"
                                            class="close"
                                            data-dismiss="modal"
                                            aria-label="Close"
                                          >
                                            <span aria-hidden="true"
                                              >&times;</span
                                            >
                                          </button>
                                        </div>
                                        <div class="row">
                                          <div
                                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"
                                          >
                                            <div
                                              class="product-modal-right d-flex"
                                            >
                                              <div
                                                class="nav product-tabs flex-column nav-pills"
                                                id="v-pills-tab51"
                                                role="tablist"
                                                aria-orientation="vertical"
                                              >
                                                <a
                                                  class="nav-link active"
                                                  id="v-pills-home-tab51"
                                                  data-toggle="pill"
                                                  href="#v-pills-home51"
                                                  role="tab"
                                                  aria-controls="v-pills-home51"
                                                  aria-selected="true"
                                                >
                                                  <img
                                                    class="product-thumbnail"
                                                    src="{{ url('frontend/assets/images/product/home-product6.jpg') }}"
                                                    alt=""
                                                  />
                                                </a>
                                                <a
                                                  class="nav-link"
                                                  id="v-pills-profile-tab51"
                                                  data-toggle="pill"
                                                  href="#v-pills-profile51"
                                                  role="tab"
                                                  aria-controls="v-pills-profile51"
                                                  aria-selected="false"
                                                >
                                                  <img
                                                    class="product-thumbnail"
                                                    src="{{ url('frontend/assets/images/product/home-product-hover-6.jpg') }}"
                                                    alt=""
                                                  />
                                                </a>
                                              </div>
                                              <div
                                                class="tab-content"
                                                id="v-pills-tabContent51"
                                              >
                                                <div
                                                  class="tab-pane fade show active"
                                                  id="v-pills-home51"
                                                  role="tabpanel"
                                                  aria-labelledby="v-pills-home-tab51"
                                                >
                                                  <div class="product-img">
                                                    <img
                                                      src="{{ url('frontend/assets/images/product/home-product6.jpg') }}"
                                                      alt=""
                                                    />
                                                  </div>
                                                </div>
                                                <div
                                                  class="tab-pane fade"
                                                  id="v-pills-profile51"
                                                  role="tabpanel"
                                                  aria-labelledby="v-pills-profile-tab51"
                                                >
                                                  <div class="product-img">
                                                    <img
                                                      class="product-thumbnail"
                                                      src="{{ url('frontend/assets/images/product/home-product-hover-6.jpg') }}"
                                                      alt=""
                                                    />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div
                                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"
                                          >
                                            <div
                                              class="product-modal-left pt-75 mb-50"
                                            >
                                              <h4>
                                                <a href="#"
                                                  >Antique Chinese Armchairs</a
                                                >
                                              </h4>
                                              <div class="price pb-15">
                                                <span>$396.00</span>
                                              </div>
                                              <div class="available">
                                                <p>
                                                  Availability:
                                                  <span class="blue-color"
                                                    >In Stock</span
                                                  >
                                                </p>
                                              </div>
                                              <div class="sku pb-10">
                                                <p>Sku:</p>
                                              </div>
                                              <p>
                                                Typi non habent claritatem
                                                insitam, est usus legentis in
                                                iis qui facit eorum claritatem.
                                                Investigationes demonstraverunt
                                                lectores legere me lius quod
                                                legunt saepius.…
                                              </p>
                                              <div
                                                class="quick-add-to-cart d-flex pt-20"
                                              >
                                                <div class="quantity pt-20">
                                                  Quantity :
                                                </div>
                                                <div
                                                  class="quantity-field position-relative d-inline-block pl-40 pr-10"
                                                >
                                                  <input
                                                    type="text"
                                                    name="select5"
                                                    value="0"
                                                    class="quantity-input-arrow"
                                                    id="quantity-input51"
                                                  />
                                                </div>
                                                <a href="#" class="btn btn3"
                                                  >Add to cart</a
                                                >
                                              </div>
                                              <div class="mega-product pt-30">
                                                <p class="mb-1">
                                                  <span>Categories:</span>
                                                  <a href="#">Bedroom,</a>
                                                  <a href="#">Kitchen</a>
                                                </p>
                                                <p class="mb-1">
                                                  <span>Tags:</span>
                                                  <a href="#">FurniNest,</a>
                                                  <a href="#">Furniture,</a>
                                                  <a href="#">Living room,</a>
                                                  <a href="#">Table</a>
                                                </p>
                                              </div>
                                              <ul
                                                class="social-sharing d-flex align-items-center"
                                              >
                                                <li class="share">
                                                  Share this product
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-facebook-f"
                                                    ></i
                                                  ></a>
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-twitter"
                                                    ></i
                                                  ></a>
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-pinterest-p"
                                                    ></i
                                                  ></a>
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-google-plus"
                                                    ></i
                                                  ></a>
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-linkedin-in"
                                                    ></i
                                                  ></a>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Antique Chinese Armchairs</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color">$196.00</span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product7.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-7.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="#"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Login / RegisterLiving Room Lighting"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="#"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Living Room Lighting</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$262.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="gray-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product1.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                                    alt=""
                                /></a>
                              </div>
                              <ul
                                class="single-product-button d-flex position-absolute"
                              >
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Add to cart"
                                >
                                  <a href="#"
                                    ><span class="icon-shopping-bag"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Organic Chair High back"
                                >
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#product-modal"
                                    ><span class="icon-eye"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Browse wishlist"
                                >
                                  <a href="#"
                                    ><span class="icon-heart"></span
                                  ></a>
                                </li>
                              </ul>
                              <div
                                class="countdown-time d-flex border-gray position-absolute"
                              >
                                <div class="timer">
                                  <div
                                    class="d-flex"
                                    data-countdown="2021/05/01"
                                  ></div>
                                </div>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High back</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color"
                                ><ins>$1,139.40</ins></span
                              >
                              <span class="old-price"
                                ><del>$1,366.00</del></span
                              >
                            </div>
                            <a
                              href="#"
                              class="sale-tag position-absolute text-white text-uppercase d-inline-block"
                              >sale</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="col3"
                  role="tabpanel"
                  aria-labelledby="col3"
                >
                  <div id="col-3" class="Bestsellers Products-area">
                    <div class="container-wrapper pl-15 pr-15">
                      <div class="row">
                        <div
                          class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product1.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                                    alt=""
                                /></a>
                              </div>
                              <ul
                                class="single-product-button d-flex position-absolute"
                              >
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Add to cart"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-shopping-bag"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Form Armchair Walnut Base"
                                >
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#product-modal"
                                    ><span class="icon-eye"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Browse wishlist"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-heart"></span
                                  ></a>
                                </li>
                              </ul>
                              <div
                                class="countdown-time d-flex border-gray position-absolute"
                              >
                                <div class="timer">
                                  <div
                                    class="d-flex"
                                    data-countdown="2021/12/01"
                                  ></div>
                                </div>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Form Armchair Walnut Base</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color"
                                ><ins>$799.00</ins></span
                              >
                              <span class="old-price"><del>$829.00</del></span>
                            </div>
                            <a
                              href="#"
                              class="sale-tag position-absolute text-white text-uppercase d-inline-block"
                              >sale</a
                            >
                          </div>
                        </div>
                        <div
                          class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product2.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-2.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Utopia Towels Kitchen"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Utopia Towels Kitchen</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$862.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="lower-blue-bg"></span>
                              <span class="pink-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product3.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-3.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to cart"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Organic Chair High black"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High black</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color">$1,098.00</span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product4.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-4.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Organic Chair High White"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High White</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$96.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product5.png') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-5.png') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Manager Chair for Office"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Manager Chair for Office</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$396.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="green-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product6.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-6.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to cart"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Antique Chinese Armchairs"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Antique Chinese Armchairs</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color">$196.00</span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product7.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-7.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Login / RegisterLiving Room Lighting"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Living Room Lighting</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$262.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="gray-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product1.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                                    alt=""
                                /></a>
                              </div>
                              <ul
                                class="single-product-button d-flex position-absolute"
                              >
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Add to cart"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-shopping-bag"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Organic Chair High back"
                                >
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#product-modal"
                                    ><span class="icon-eye"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Browse wishlist"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-heart"></span
                                  ></a>
                                </li>
                              </ul>
                              <div
                                class="countdown-time d-flex border-gray position-absolute"
                              >
                                <div class="timer">
                                  <div
                                    class="d-flex"
                                    data-countdown="2021/05/01"
                                  ></div>
                                </div>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}">Form</a>
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color"
                                ><ins>$1,139.40</ins></span
                              >
                              <span class="old-price"
                                ><del>$1,366.00</del></span
                              >
                            </div>
                            <a
                              href="#"
                              class="sale-tag position-absolute text-white text-uppercase d-inline-block"
                              >sale</a
                            >
                          </div>
                        </div>
                        <div
                          class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product-hover-5.png') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-5.png') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Manager Chair for Office"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Manager Chair for Office</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$396.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="green-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product-hover-5.png') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-5.png') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to cart"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Antique Chinese Armchairs"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Antique Chinese Armchairs</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color">$196.00</span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product7.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-7.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Login / RegisterLiving Room Lighting"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Living Room Lighting</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$262.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="gray-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product1.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                                    alt=""
                                /></a>
                              </div>
                              <ul
                                class="single-product-button d-flex position-absolute"
                              >
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Add to cart"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-shopping-bag"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Organic Chair High back"
                                >
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#product-modal"
                                    ><span class="icon-eye"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Browse wishlist"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-heart"></span
                                  ></a>
                                </li>
                              </ul>
                              <div
                                class="countdown-time d-flex border-gray position-absolute"
                              >
                                <div class="timer">
                                  <div
                                    class="d-flex"
                                    data-countdown="2021/05/01"
                                  ></div>
                                </div>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High back</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color"
                                ><ins>$1,139.40</ins></span
                              >
                              <span class="old-price"
                                ><del>$1,366.00</del></span
                              >
                            </div>
                            <a
                              href="#"
                              class="sale-tag position-absolute text-white text-uppercase d-inline-block"
                              >sale</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade show active"
                  id="col4"
                  role="tabpanel"
                  aria-labelledby="col4"
                >
                  <div id="col-4" class="Bestsellers Products-area">
                    <div class="container-wrapper pl-15 pr-15">
                      <div class="row">
                        <div
                          class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product1.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                                    alt=""
                                /></a>
                              </div>
                              <ul
                                class="single-product-button d-flex position-absolute"
                              >
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Add to cart"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-shopping-bag"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Form Armchair Walnut Base"
                                >
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#product-modal"
                                    ><span class="icon-eye"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Browse wishlist"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-heart"></span
                                  ></a>
                                </li>
                              </ul>
                              <div
                                class="countdown-time d-flex border-gray position-absolute"
                              >
                                <div class="timer">
                                  <div
                                    class="d-flex"
                                    data-countdown="2021/12/01"
                                  ></div>
                                </div>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Form Armchair Walnut Base</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color"
                                ><ins>$799.00</ins></span
                              >
                              <span class="old-price"><del>$829.00</del></span>
                            </div>
                            <a
                              href="#"
                              class="sale-tag position-absolute text-white text-uppercase d-inline-block"
                              >sale</a
                            >
                          </div>
                        </div>
                        <div
                          class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product2.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-2.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Utopia Towels Kitchen"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Utopia Towels Kitchen</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$862.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="lower-blue-bg"></span>
                              <span class="pink-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product3.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-3.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to cart"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Organic Chair High black"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High black</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color">$1,098.00</span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product4.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-4.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Organic Chair High White"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High White</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$96.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product5.png') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-5.png') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Manager Chair for Office"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Manager Chair for Office</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$396.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="green-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product6.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-6.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to cart"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Antique Chinese Armchairs"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Antique Chinese Armchairs</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color">$196.00</span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product7.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-7.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Login / RegisterLiving Room Lighting"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Living Room Lighting</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$262.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="gray-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product1.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                                    alt=""
                                /></a>
                              </div>
                              <ul
                                class="single-product-button d-flex position-absolute"
                              >
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Add to cart"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-shopping-bag"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Organic Chair High back"
                                >
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#product-modal"
                                    ><span class="icon-eye"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Browse wishlist"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-heart"></span
                                  ></a>
                                </li>
                              </ul>
                              <div
                                class="countdown-time d-flex border-gray position-absolute"
                              >
                                <div class="timer">
                                  <div
                                    class="d-flex"
                                    data-countdown="2021/05/01"
                                  ></div>
                                </div>
                              </div>
                            </div>
                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High back</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color"
                                ><ins>$1,139.40</ins></span
                              >
                              <span class="old-price"
                                ><del>$1,366.00</del></span
                              >
                            </div>
                            <a
                              href="#"
                              class="sale-tag position-absolute text-white text-uppercase d-inline-block"
                              >sale</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="col5"
                  role="tabpanel"
                  aria-labelledby="col5"
                >
                  <div id="col-5" class="Bestsellers Products-area">
                    <div class="container-wrapper pl-15 pr-15">
                      <div class="row">
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product1.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                                    alt=""
                                /></a>
                              </div>
                              <ul
                                class="single-product-button d-flex position-absolute"
                              >
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Add to cart"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-shopping-bag"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Form Armchair Walnut Base"
                                >
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#product-modal"
                                    ><span class="icon-eye"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Browse wishlist"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-heart"></span
                                  ></a>
                                </li>
                              </ul>
                              <div
                                class="countdown-time d-flex border-gray position-absolute"
                              >
                                <div class="timer">
                                  <div
                                    class="d-flex"
                                    data-countdown="2021/12/01"
                                  ></div>
                                </div>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Form Armchair Walnut Base</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color"
                                ><ins>$799.00</ins></span
                              >
                              <span class="old-price"><del>$829.00</del></span>
                            </div>
                            <a
                              href="#"
                              class="sale-tag position-absolute text-white text-uppercase d-inline-block"
                              >sale</a
                            >
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product2.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-2.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Utopia Towels Kitchen"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Utopia Towels Kitchen</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$862.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="lower-blue-bg"></span>
                              <span class="pink-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product3.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-3.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to cart"
                                  >
                                    <a href="#"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Organic Chair High black"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="#"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High black</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color">$1,098.00</span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product4.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-4.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Organic Chair High White"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>

                                <div
                                  class="modal fade pr-0"
                                  id="exampleModal28"
                                  tabindex="-1"
                                  role="dialog"
                                  aria-labelledby="exampleModal28"
                                  aria-hidden="true"
                                >
                                  <div
                                    class="modal-dialog dialog-modal-dialog bg-white"
                                    role="document"
                                  >
                                    <div class="modal-content product-modal">
                                      <div class="modal-body pt-0 pl-0">
                                        <div class="modal-close mt-10">
                                          <button
                                            type="button"
                                            class="close"
                                            data-dismiss="modal"
                                            aria-label="Close"
                                          >
                                            <span aria-hidden="true"
                                              >&times;</span
                                            >
                                          </button>
                                        </div>
                                        <div class="row">
                                          <div
                                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"
                                          >
                                            <div
                                              class="product-modal-right d-flex"
                                            >
                                              <div
                                                class="nav product-tabs flex-column nav-pills"
                                                id="v-pills-tab28"
                                                role="tablist"
                                                aria-orientation="vertical"
                                              >
                                                <a
                                                  class="nav-link active"
                                                  id="v-pills-home-tab28"
                                                  data-toggle="pill"
                                                  href="#v-pills-home28"
                                                  role="tab"
                                                  aria-controls="v-pills-home28"
                                                  aria-selected="true"
                                                >
                                                  <img
                                                    class="product-thumbnail"
                                                    src="{{ url('frontend/assets/images/product/home-product4.jpg') }}"
                                                    alt=""
                                                  />
                                                </a>
                                                <a
                                                  class="nav-link"
                                                  id="v-pills-profile-tab28"
                                                  data-toggle="pill"
                                                  href="#v-pills-profile28"
                                                  role="tab"
                                                  aria-controls="v-pills-profile28"
                                                  aria-selected="false"
                                                >
                                                  <img
                                                    class="product-thumbnail"
                                                    src="{{ url('frontend/assets/images/product/home-product-hover-4.jpg') }}"
                                                    alt=""
                                                  />
                                                </a>
                                              </div>
                                              <div
                                                class="tab-content"
                                                id="v-pills-tabContent28"
                                              >
                                                <div
                                                  class="tab-pane fade show active"
                                                  id="v-pills-home28"
                                                  role="tabpanel"
                                                  aria-labelledby="v-pills-home-tab28"
                                                >
                                                  <div class="product-img">
                                                    <img
                                                      src="{{ url('frontend/assets/images/product/home-product4.jpg') }}"
                                                      alt=""
                                                    />
                                                  </div>
                                                </div>
                                                <div
                                                  class="tab-pane fade"
                                                  id="v-pills-profile28"
                                                  role="tabpanel"
                                                  aria-labelledby="v-pills-profile-tab28"
                                                >
                                                  <div class="product-img">
                                                    <img
                                                      class="product-thumbnail"
                                                      src="{{ url('frontend/assets/images/product/home-product-hover-4.jpg') }}"
                                                      alt=""
                                                    />
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div
                                            class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"
                                          >
                                            <div
                                              class="product-modal-left pt-75 mb-50"
                                            >
                                              <h4>
                                                <a href="#"
                                                  >Organic Chair High White</a
                                                >
                                              </h4>
                                              <div class="price pb-15">
                                                <span>$396.00</span>
                                              </div>
                                              <div class="available">
                                                <p>
                                                  Availability:
                                                  <span class="blue-color"
                                                    >In Stock</span
                                                  >
                                                </p>
                                              </div>
                                              <div class="sku pb-10">
                                                <p>Sku:</p>
                                              </div>
                                              <p>
                                                Typi non habent claritatem
                                                insitam, est usus legentis in
                                                iis qui facit eorum claritatem.
                                                Investigationes demonstraverunt
                                                lectores legere me lius quod
                                                legunt saepius.…
                                              </p>
                                              <div
                                                class="quick-add-to-cart d-flex pt-20"
                                              >
                                                <div class="quantity pt-20">
                                                  Quantity :
                                                </div>
                                                <div
                                                  class="quantity-field position-relative d-inline-block pl-40 pr-10"
                                                >
                                                  <input
                                                    type="text"
                                                    name="select3"
                                                    value="0"
                                                    class="quantity-input-arrow"
                                                    id="quantity-input28"
                                                  />
                                                </div>
                                                <a href="#" class="btn btn3"
                                                  >Add to cart</a
                                                >
                                              </div>
                                              <div class="mega-product pt-30">
                                                <p class="mb-1">
                                                  <span>Categories:</span>
                                                  <a href="#">Bedroom,</a>
                                                  <a href="#">Kitchen</a>
                                                </p>
                                                <p class="mb-1">
                                                  <span>Tags:</span>
                                                  <a href="#">FurniNest,</a>
                                                  <a href="#">Furniture,</a>
                                                  <a href="#">Living room,</a>
                                                  <a href="#">Table</a>
                                                </p>
                                              </div>
                                              <ul
                                                class="social-sharing d-flex align-items-center"
                                              >
                                                <li class="share">
                                                  Share this product
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-facebook-f"
                                                    ></i
                                                  ></a>
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-twitter"
                                                    ></i
                                                  ></a>
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-pinterest-p"
                                                    ></i
                                                  ></a>
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-google-plus"
                                                    ></i
                                                  ></a>
                                                </li>
                                                <li>
                                                  <a href="#"
                                                    ><i
                                                      class="fab fa-linkedin-in"
                                                    ></i
                                                  ></a>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High White</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$96.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product5.png') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-5.png') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Manager Chair for Office"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Manager Chair for Office</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$396.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="green-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product6.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-6.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to cart"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Antique Chinese Armchairs"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Antique Chinese Armchairs</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color">$196.00</span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product7.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-7.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Login / RegisterLiving Room Lighting"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Living Room Lighting</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$262.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="gray-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product9.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                                    alt=""
                                /></a>
                              </div>
                              <ul
                                class="single-product-button d-flex position-absolute"
                              >
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Add to cart"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-shopping-bag"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Organic Chair High back"
                                >
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#product-modal"
                                    ><span class="icon-eye"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Browse wishlist"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-heart"></span
                                  ></a>
                                </li>
                              </ul>
                              <div
                                class="countdown-time d-flex border-gray position-absolute"
                              >
                                <div class="timer">
                                  <div
                                    class="d-flex"
                                    data-countdown="2021/05/01"
                                  ></div>
                                </div>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High back</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color"
                                ><ins>$1,139.40</ins></span
                              >
                              <span class="old-price"
                                ><del>$1,366.00</del></span
                              >
                            </div>
                            <a
                              href="#"
                              class="sale-tag position-absolute text-white text-uppercase d-inline-block"
                              >sale</a
                            >
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product5.png') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-5.png') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Manager Chair for Office"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Manager Chair for Office</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$396.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="green-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product7.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-7.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Login / RegisterLiving Room Lighting"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Living Room Lighting</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$262.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="gray-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product1.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                                    alt=""
                                /></a>
                              </div>
                              <ul
                                class="single-product-button d-flex position-absolute"
                              >
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Add to cart"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-shopping-bag"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Organic Chair High back"
                                >
                                  <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#product-modal"
                                    ><span class="icon-eye"></span
                                  ></a>
                                </li>
                                <li
                                  data-toggle="tooltip"
                                  data-selector="true"
                                  data-placement="bottom"
                                  title="Browse wishlist"
                                >
                                  <a href="{{ route('shop') }}"
                                    ><span class="icon-heart"></span
                                  ></a>
                                </li>
                              </ul>
                              <div
                                class="countdown-time d-flex border-gray position-absolute"
                              >
                                <div class="timer">
                                  <div
                                    class="d-flex"
                                    data-countdown="2021/05/01"
                                  ></div>
                                </div>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High back</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color"
                                ><ins>$1,139.40</ins></span
                              >
                              <span class="old-price"
                                ><del>$1,366.00</del></span
                              >
                            </div>
                            <a
                              href="#"
                              class="sale-tag position-absolute text-white text-uppercase d-inline-block"
                              >sale</a
                            >
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product4.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-4.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Organic Chair High White"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Organic Chair High White</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$96.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="darkblue-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product5.png') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-5.png') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to option"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Manager Chair for Office"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="{{ route('shop') }}"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Manager Chair for Office</a
                              >
                            </h5>
                            <div class="product-price pl-20 d-inline-block">
                              <span class="black-color">$396.00</span>
                            </div>
                            <div
                              class="product-dot d-inline-block float-right pr-20"
                            >
                              <span class="green-bg"></span>
                              <span class="black-bg"></span>
                              <span class="yellow-bg"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mb-40"
                        >
                          <div
                            class="single-product bg-white position-relative pb-30"
                          >
                            <div class="single-product-img position-relative">
                              <a href="{{ route('single-product') }}"
                                ><img
                                  class="height100"
                                  src="{{ url('frontend/assets/images/product/home-product6.jpg') }}"
                                  alt=""
                              /></a>
                              <div
                                class="single-product-hover-img position-absolute"
                              >
                                <a href="{{ route('single-product') }}"
                                  ><img
                                    class="height100"
                                    src="{{ url('frontend/assets/images/product/home-product-hover-6.jpg') }}"
                                    alt=""
                                /></a>
                                <ul
                                  class="single-product-button d-flex position-absolute"
                                >
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to cart"
                                  >
                                    <a href="#"
                                      ><span class="icon-shopping-bag"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Antique Chinese Armchairs"
                                  >
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#product-modal"
                                      ><span class="icon-eye"></span
                                    ></a>
                                  </li>
                                  <li
                                    data-toggle="tooltip"
                                    data-selector="true"
                                    data-placement="bottom"
                                    title="Add to wishlist"
                                  >
                                    <a href="#"
                                      ><span class="icon-heart"></span
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>

                            <h5 class="product-name pt-20 pl-20">
                              <a href="{{ route('single-product') }}"
                                >Antique Chinese Armchairs</a
                              >
                            </h5>
                            <div class="product-price pl-20">
                              <span class="black-color">$196.00</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="list"
                  role="tabpanel"
                  aria-labelledby="list"
                >
                  <div
                    id="column-list"
                    class="Bestsellers Products-area mt--50"
                  >
                    <div class="container-wrapper">
                      <ul>
                        <li
                          class="single-product-list d-flex align-items-center bg-white border-bottom mt-0"
                        >
                          <div class="single-product-img">
                            <a href="{{ route('single-product') }}"
                              ><img
                                src="{{ url('frontend/assets/images/product/home-product5.png') }}"
                                alt=""
                            /></a>
                          </div>
                          <div class="single-product-content">
                            <h5 class="product-name">
                              <a href="{{ route('single-product') }}"
                                >Manager Chair for Office</a
                              >
                            </h5>
                            <div class="product-price pb-10">
                              <span class="black-color">$396.00</span>
                            </div>
                            <p class="pb-25">
                              Typi non habent claritatem insitam, est usus
                              legentis in iis qui facit eorum claritatem.
                              Investigationes demonstraverunt lectores legere me
                              lius quod legunt saepius. Claritas est etiam
                              processus A Capitalize on low hanging fruit to
                              identify a ballpark value added activity to beta
                              test. Override the digital divide with additional
                              clickthroughs from DevOps.
                            </p>
                            <ul class="single-product-list-button d-flex">
                              <li>
                                <a href="#" class="btn bg-dark text-white py-3"
                                  >Add to cart</a
                                >
                              </li>
                              <li
                                class="tool text-dark p-3 ml-2"
                                data-toggle="tooltip"
                                data-selector="true"
                                data-placement="bottom"
                                title="Add to wishlist"
                              >
                                <a
                                  href="#"
                                  class="border-gray transition-3 text-dark d-block"
                                  ><span class="icon-heart"></span
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li
                          class="single-product-list d-flex align-items-center bg-white border-bottom"
                        >
                          <div class="single-product-img">
                            <a href="{{ route('single-product') }}"
                              ><img
                                src="{{ url('frontend/assets/images/product/home-product6.jpg') }}"
                                alt=""
                            /></a>
                          </div>
                          <div class="single-product-content">
                            <h5 class="product-name">
                              <a href="#">Utopia Towels Kitchen</a>
                            </h5>
                            <div class="product-price pb-10">
                              <span class="black-color">$396.00</span>
                            </div>
                            <p class="pb-25">
                              Typi non habent claritatem insitam, est usus
                              legentis in iis qui facit eorum claritatem.
                              Investigationes demonstraverunt lectores legere me
                              lius quod legunt saepius. Claritas est etiam
                              processus A Capitalize on low hanging fruit to
                              identify a ballpark value added activity to beta
                              test. Override the digital divide with additional
                              clickthroughs from DevOps.
                            </p>
                            <ul class="single-product-list-button d-flex">
                              <li>
                                <a href="#" class="btn bg-dark text-white py-3"
                                  >Add to cart</a
                                >
                              </li>
                              <li
                                class="tool text-dark p-3 ml-2"
                                data-toggle="tooltip"
                                data-selector="true"
                                data-placement="bottom"
                                title="Add to wishlist"
                              >
                                <a
                                  href="#"
                                  class="border-gray transition-3 text-dark d-block"
                                  ><span class="icon-heart"></span
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li
                          class="single-product-list d-flex align-items-center bg-white border-bottom"
                        >
                          <div class="single-product-img">
                            <a href="{{ route('single-product') }}"
                              ><img
                                src="{{ url('frontend/assets/images/product/home-product8.jpg') }}"
                                alt=""
                            /></a>
                          </div>
                          <div class="single-product-content">
                            <h5 class="product-name">
                              <a href="#">Living Room Lighting</a>
                            </h5>
                            <div class="product-price pb-10">
                              <span class="black-color">$396.00</span>
                            </div>
                            <p class="pb-25">
                              Typi non habent claritatem insitam, est usus
                              legentis in iis qui facit eorum claritatem.
                              Investigationes demonstraverunt lectores legere me
                              lius quod legunt saepius. Claritas est etiam
                              processus A Capitalize on low hanging fruit to
                              identify a ballpark value added activity to beta
                              test. Override the digital divide with additional
                              clickthroughs from DevOps.
                            </p>
                            <ul class="single-product-list-button d-flex">
                              <li>
                                <a href="#" class="btn bg-dark text-white py-3"
                                  >Add to cart</a
                                >
                              </li>
                              <li
                                class="tool text-dark p-3 ml-2"
                                data-toggle="tooltip"
                                data-selector="true"
                                data-placement="bottom"
                                title="Add to wishlist"
                              >
                                <a
                                  href="#"
                                  class="border-gray transition-3 text-dark d-block"
                                  ><span class="icon-heart"></span
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li
                          class="single-product-list d-flex align-items-center bg-white border-bottom"
                        >
                          <div class="single-product-img">
                            <a href="{{ route('single-product') }}"
                              ><img
                                src="{{ url('frontend/assets/images/product/home-product9.jpg') }}"
                                alt=""
                            /></a>
                          </div>
                          <div class="single-product-content">
                            <h5 class="product-name">
                              <a href="#">Organic Chair High black</a>
                            </h5>
                            <div class="product-price pb-10">
                              <span class="black-color">$396.00</span>
                            </div>
                            <p class="pb-25">
                              Typi non habent claritatem insitam, est usus
                              legentis in iis qui facit eorum claritatem.
                              Investigationes demonstraverunt lectores legere me
                              lius quod legunt saepius. Claritas est etiam
                              processus A Capitalize on low hanging fruit to
                              identify a ballpark value added activity to beta
                              test. Override the digital divide with additional
                              clickthroughs from DevOps.
                            </p>
                            <ul class="single-product-list-button d-flex">
                              <li>
                                <a href="#" class="btn bg-dark text-white py-3"
                                  >Add to cart</a
                                >
                              </li>
                              <li
                                class="tool text-dark p-3 ml-2"
                                data-toggle="tooltip"
                                data-selector="true"
                                data-placement="bottom"
                                title="Add to wishlist"
                              >
                                <a
                                  href="#"
                                  class="border-gray transition-3 text-dark d-block"
                                  ><span class="icon-heart"></span
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li
                          class="single-product-list d-flex align-items-center bg-white border-bottom"
                        >
                          <div class="single-product-img">
                            <a href="{{ route('single-product') }}"
                              ><img
                                src="{{ url('frontend/assets/images/product/home-product2.jpg') }}"
                                alt=""
                            /></a>
                          </div>
                          <div class="single-product-content">
                            <h5 class="product-name">
                              <a href="#">Organic Chair High black</a>
                            </h5>
                            <div class="product-price pb-10">
                              <span class="black-color">$396.00</span>
                            </div>
                            <p class="pb-25">
                              Typi non habent claritatem insitam, est usus
                              legentis in iis qui facit eorum claritatem.
                              Investigationes demonstraverunt lectores legere me
                              lius quod legunt saepius. Claritas est etiam
                              processus A Capitalize on low hanging fruit to
                              identify a ballpark value added activity to beta
                              test. Override the digital divide with additional
                              clickthroughs from DevOps.
                            </p>
                            <ul class="single-product-list-button d-flex">
                              <li>
                                <a href="#" class="btn bg-dark text-white py-3"
                                  >Add to cart</a
                                >
                              </li>
                              <li
                                class="tool text-dark p-3 ml-2"
                                data-toggle="tooltip"
                                data-selector="true"
                                data-placement="bottom"
                                title="Add to wishlist"
                              >
                                <a
                                  href="#"
                                  class="border-gray transition-3 text-dark d-block"
                                  ><span class="icon-heart"></span
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li
                          class="single-product-list d-flex align-items-center bg-white border-bottom"
                        >
                          <div class="single-product-img">
                            <a href="{{ route('single-product') }}"
                              ><img
                                src="{{ url('frontend/assets/images/product/home-product7.jpg') }}"
                                alt=""
                            /></a>
                          </div>
                          <div class="single-product-content">
                            <h5 class="product-name">
                              <a href="#">Living Room Lighting</a>
                            </h5>
                            <div class="product-price pb-10">
                              <span class="black-color">$396.00</span>
                            </div>
                            <p class="pb-25">
                              Typi non habent claritatem insitam, est usus
                              legentis in iis qui facit eorum claritatem.
                              Investigationes demonstraverunt lectores legere me
                              lius quod legunt saepius. Claritas est etiam
                              processus A Capitalize on low hanging fruit to
                              identify a ballpark value added activity to beta
                              test. Override the digital divide with additional
                              clickthroughs from DevOps.
                            </p>
                            <ul class="single-product-list-button d-flex">
                              <li>
                                <a href="#" class="btn bg-dark text-white py-3"
                                  >Add to cart</a
                                >
                              </li>
                              <li
                                class="tool text-dark p-3 ml-2"
                                data-toggle="tooltip"
                                data-selector="true"
                                data-placement="bottom"
                                title="Add to wishlist"
                              >
                                <a
                                  href="#"
                                  class="border-gray transition-3 text-dark d-block"
                                  ><span class="icon-heart"></span
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li
                          class="single-product-list d-flex align-items-center bg-white"
                        >
                          <div class="single-product-img">
                            <a href="{{ route('single-product') }}"
                              ><img
                                src="{{ url('frontend/assets/images/product/home-product6.jpg') }}"
                                alt=""
                            /></a>
                          </div>
                          <div class="single-product-content">
                            <h5 class="product-name">
                              <a href="#">Antique Chinese Armchairs</a>
                            </h5>
                            <div class="product-price pb-10">
                              <span class="black-color">$396.00</span>
                            </div>
                            <p class="pb-25">
                              Typi non habent claritatem insitam, est usus
                              legentis in iis qui facit eorum claritatem.
                              Investigationes demonstraverunt lectores legere me
                              lius quod legunt saepius. Claritas est etiam
                              processus A Capitalize on low hanging fruit to
                              identify a ballpark value added activity to beta
                              test. Override the digital divide with additional
                              clickthroughs from DevOps.
                            </p>
                            <ul class="single-product-list-button d-flex">
                              <li>
                                <a href="#" class="btn bg-dark text-white py-3"
                                  >Add to cart</a
                                >
                              </li>
                              <li
                                class="tool text-dark p-3 ml-2"
                                data-toggle="tooltip"
                                data-selector="true"
                                data-placement="bottom"
                                title="Add to wishlist"
                              >
                                <a
                                  href="#"
                                  class="border-gray transition-3 text-dark d-block"
                                  ><span class="icon-heart"></span
                                ></a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="modal fade"
        id="product-modal"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-dialog-centered product-modal"
          role="document"
        >
          <div class="modal-content product-modal pt-30 pb-30">
            <div class="modal-body pt-0 pl-0">
              <div class="modal-close mt-10">
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="product-modal-right d-flex">
                    <div
                      class="nav product-tabs flex-column nav-pills"
                      id="v-pills-tab"
                      role="tablist"
                      aria-orientation="vertical"
                    >
                      <a
                        class="nav-link active"
                        id="v-pills-home-tab"
                        data-toggle="pill"
                        href="#v-pills-home"
                        role="tab"
                        aria-controls="v-pills-home"
                        aria-selected="true"
                      >
                        <img
                          class="product-thumbnail"
                          src="{{ url('frontend/assets/images/product/home-product1.jpg') }}"
                          alt=""
                        />
                      </a>
                      <a
                        class="nav-link"
                        id="v-pills-profile-tab"
                        data-toggle="pill"
                        href="#v-pills-profile"
                        role="tab"
                        aria-controls="v-pills-profile"
                        aria-selected="false"
                      >
                        <img
                          class="product-thumbnail"
                          src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                      <div
                        class="tab-pane fade show active"
                        id="v-pills-home"
                        role="tabpanel"
                        aria-labelledby="v-pills-home-tab"
                      >
                        <div class="product-img">
                          <img src="{{ url('frontend/assets/images/product/home-product1.jpg') }}" alt="" />
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="v-pills-profile"
                        role="tabpanel"
                        aria-labelledby="v-pills-profile-tab"
                      >
                        <div class="product-img">
                          <img
                            class="product-thumbnail"
                            src="{{ url('frontend/assets/images/product/home-product-hover-1.jpg') }}"
                            alt=""
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="product-modal-left pt-20">
                    <h4>
                      <a href="{{ route('single-product') }}"
                        >Form Armchair Walnut Base</a
                      >
                    </h4>
                    <div class="price pb-15">
                      <span>$396.00</span>
                      <span class="modal-old-price"> <del>$400 </del> </span>
                    </div>
                    <div class="available">
                      <p>
                        Availability: <span class="blue-color">In Stock</span>
                      </p>
                    </div>
                    <div class="sku pb-10">
                      <p>Sku: <span class="blue-color"> 0028KE21</span></p>
                    </div>
                    <p>
                      Typi non habent claritatem insitam, est usus legentis in
                      iis qui facit eorum claritatem. Investigationes
                      demonstraverunt lectores legere me lius quod legunt
                      saepius.…
                    </p>
                    <div
                      class="quick-add-to-cart d-lg-flex align-items-center pt-20"
                    >
                      <div class="quantity mr-10 mb-20">Quantity :</div>
                      <div
                        class="quantity-field position-relative d-inline-block pr-10 mb-20"
                      >
                        <input
                          type="text"
                          name="select1"
                          value="0"
                          class="quantity-input-arrow"
                          id="quantity-input"
                        />
                      </div>
                      <a href="#" class="add-cart-btn">Add to cart</a>
                    </div>
                    <div class="mega-product mb-20">
                      <p class="mb-1">
                        <span>Categories:</span>
                        <a href="#">Bedroom,</a>
                        <a href="#">Kitchen</a>
                      </p>
                      <p class="mb-1">
                        <span>Tags:</span>
                        <a href="#">FurniNest,</a>
                        <a href="#">Furniture,</a>
                        <a href="#">Living room,</a>
                        <a href="#">Table</a>
                      </p>
                    </div>
                    <div
                      class="social-sharing-wrapper d-lg-flex align-items-center"
                    >
                      <span class="share mr-20 d-inline-block mb-20"
                        >Share this product:</span
                      >
                      <ul class="social-sharing mb-20">
                        <li>
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-google-plus"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
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