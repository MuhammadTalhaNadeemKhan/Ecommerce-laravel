@extends('backend.layouts.app')

@section('title', 'home')

@section('content')
                
                    <div class="main-content">
                        
                        <div class="main-content-inner">
                            
                            <div class="main-content-wrap">
                                <div class="tf-section-2 mb-30">
                                    <div class="flex gap20 flex-wrap-mobile">
                                        <div class="w-half">
                                            
                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                                <path opacity="0.08" d="M19.1086 2.12943C22.2027 0.343099 26.0146 0.343099 29.1086 2.12943L42.4913 9.85592C45.5853 11.6423 47.4913 14.9435 47.4913 18.5162V33.9692C47.4913 37.5418 45.5853 40.8431 42.4913 42.6294L29.1086 50.3559C26.0146 52.1423 22.2027 52.1423 19.1086 50.3559L5.72596 42.6294C2.63194 40.8431 0.725956 37.5418 0.725956 33.9692V18.5162C0.725956 14.9435 2.63195 11.6423 5.72596 9.85592L19.1086 2.12943Z" fill="url(#paint0_linear_53_110)"/>
                                                                <defs>
                                                                  <linearGradient id="paint0_linear_53_110" x1="-43.532" y1="-34.3465" x2="37.6769" y2="43.9447" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#92BCFF"/>
                                                                    <stop offset="1" stop-color="#2377FC"/>
                                                                  </linearGradient>
                                                                </defs>
                                                            </svg>
                                                            <i class="icon-shopping-bag"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Total Sales</div>
                                                            <h4>34,945</h4>
                                                        </div>
                                                    </div>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">1.56%</div>
                                                    </div>
                                                </div>
                                                <div class="wrap-chart">
                                                    <div id="line-chart-1"></div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                                <path opacity="0.08" d="M19.1086 2.12943C22.2027 0.343099 26.0146 0.343099 29.1086 2.12943L42.4913 9.85592C45.5853 11.6423 47.4913 14.9435 47.4913 18.5162V33.9692C47.4913 37.5418 45.5853 40.8431 42.4913 42.6294L29.1086 50.3559C26.0146 52.1423 22.2027 52.1423 19.1086 50.3559L5.72596 42.6294C2.63194 40.8431 0.725956 37.5418 0.725956 33.9692V18.5162C0.725956 14.9435 2.63195 11.6423 5.72596 9.85592L19.1086 2.12943Z" fill="url(#paint0_linear_53_110)"/>
                                                                <defs>
                                                                  <linearGradient id="paint0_linear_53_110" x1="-43.532" y1="-34.3465" x2="37.6769" y2="43.9447" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#92BCFF"/>
                                                                    <stop offset="1" stop-color="#2377FC"/>
                                                                  </linearGradient>
                                                                </defs>
                                                            </svg>
                                                            <i class="icon-dollar-sign"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Total Income</div>
                                                            <h4>$37,802</h4>
                                                        </div>
                                                    </div>
                                                    <div class="box-icon-trending down">
                                                        <i class="icon-trending-down"></i>
                                                        <div class="body-title number">1.56%</div>
                                                    </div>
                                                </div>
                                                <div class="wrap-chart">
                                                    <div id="line-chart-2"></div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="wg-chart-default mb-20">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                                <path opacity="0.08" d="M19.1086 2.12943C22.2027 0.343099 26.0146 0.343099 29.1086 2.12943L42.4913 9.85592C45.5853 11.6423 47.4913 14.9435 47.4913 18.5162V33.9692C47.4913 37.5418 45.5853 40.8431 42.4913 42.6294L29.1086 50.3559C26.0146 52.1423 22.2027 52.1423 19.1086 50.3559L5.72596 42.6294C2.63194 40.8431 0.725956 37.5418 0.725956 33.9692V18.5162C0.725956 14.9435 2.63195 11.6423 5.72596 9.85592L19.1086 2.12943Z" fill="url(#paint0_linear_53_110)"/>
                                                                <defs>
                                                                  <linearGradient id="paint0_linear_53_110" x1="-43.532" y1="-34.3465" x2="37.6769" y2="43.9447" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#92BCFF"/>
                                                                    <stop offset="1" stop-color="#2377FC"/>
                                                                  </linearGradient>
                                                                </defs>
                                                            </svg>
                                                            <i class="icon-file"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Orders Paid</div>
                                                            <h4>34,945</h4>
                                                        </div>
                                                    </div>
                                                    <div class="box-icon-trending">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.00%</div>
                                                    </div>
                                                </div>
                                                <div class="wrap-chart">
                                                    <div id="line-chart-3"></div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="wg-chart-default">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center gap14">
                                                        <div class="image">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                                <path opacity="0.08" d="M19.1086 2.12943C22.2027 0.343099 26.0146 0.343099 29.1086 2.12943L42.4913 9.85592C45.5853 11.6423 47.4913 14.9435 47.4913 18.5162V33.9692C47.4913 37.5418 45.5853 40.8431 42.4913 42.6294L29.1086 50.3559C26.0146 52.1423 22.2027 52.1423 19.1086 50.3559L5.72596 42.6294C2.63194 40.8431 0.725956 37.5418 0.725956 33.9692V18.5162C0.725956 14.9435 2.63195 11.6423 5.72596 9.85592L19.1086 2.12943Z" fill="url(#paint0_linear_53_110)"/>
                                                                <defs>
                                                                  <linearGradient id="paint0_linear_53_110" x1="-43.532" y1="-34.3465" x2="37.6769" y2="43.9447" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#92BCFF"/>
                                                                    <stop offset="1" stop-color="#2377FC"/>
                                                                  </linearGradient>
                                                                </defs>
                                                            </svg>
                                                            <i class="icon-users"></i>
                                                        </div>
                                                        <div>
                                                            <div class="body-text mb-2">Total Visitor</div>
                                                            <h4>34,945</h4>
                                                        </div>
                                                    </div>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">1.56%</div>
                                                    </div>
                                                </div>
                                                <div class="wrap-chart">
                                                    <div id="line-chart-4"></div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="wg-box w-half">
                                            <div class="flex items-center justify-between">
                                                <h5>Sale by category</h5>
                                                <div class="dropdown default">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                       <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>  
                                                            <a href="javascript:void(0);">This Week</a>
                                                        </li>
                                                        <li>  
                                                            <a href="javascript:void(0);">Last Week</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="flex gap10 justify-between flex-wrap">
                                                <div>
                                                    <div class="text-tiny mb-2">Total Mar 20, 2024</div>
                                                    <div class="flex items-center gap10">
                                                        <h4>$37,802</h4>
                                                        <div class="box-icon-trending up">
                                                            <i class="icon-trending-up"></i>
                                                            <div class="body-title number">0.56%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown default style-box">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <a href="product-list.html" class="view-all">Week<i class="icon-chevron-down"></i></a>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>  
                                                            <a href="javascript:void(0);">Month</a>
                                                        </li>
                                                        <li>  
                                                            <a href="javascript:void(0);">Year</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="morris-donut-1" class="text-center"></div>
                                            <div class="flex gap20">
                                                <div class="block-legend style-1 w-full">
                                                    <div class="dot t1"></div>
                                                    <div class="text-tiny">Indoor</div>
                                                </div>
                                                <div class="block-legend style-1 w-full">
                                                    <div class="dot t2"></div>
                                                    <div class="text-tiny">Outdoor</div>
                                                </div>
                                                <div class="block-legend style-1 w-full">
                                                    <div class="dot t3"></div>
                                                    <div class="text-tiny">Decor</div>
                                                </div>
                                            </div>
                                            <div class="flex gap20">
                                                <div class="block-legend style-1 w-full">
                                                    <div class="dot t4"></div>
                                                    <div class="text-tiny">Accessories</div>
                                                </div>
                                                <div class="block-legend style-1 w-full">
                                                    <div class="dot t5"></div>
                                                    <div class="text-tiny">Office</div>
                                                </div>
                                                <div class="block-legend style-1 w-full">
                                                    <div class="dot t6"></div>
                                                    <div class="text-tiny">Offers</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Earnings revenue</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">This Week</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap gap40">
                                            <div>
                                                <div class="mb-2">
                                                    <div class="block-legend">
                                                        <div class="dot t1"></div>
                                                        <div class="text-tiny">Revenue</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>$37,802</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-2">
                                                    <div class="block-legend">
                                                        <div class="dot t2"></div>
                                                        <div class="text-tiny">Order</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>$28,305</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="line-chart-8"></div>
                                    </div>
                                    
                                </div>
                                <div class="tf-section mb-30">
                                    
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Recent orders</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">3 days</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">7 days</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-table table-product-overview t2">
                                            <ul class="table-title flex gap20 mb-14">
                                                <li>
                                                    <div class="body-title">Product</div>
                                                </li>    
                                                <li>
                                                    <div class="body-title">Customer</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Product ID</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Quantity</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Price</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Status</div>
                                                </li>
                                            </ul>
                                            <div class="divider mb-14"></div>
                                            <ul class="flex flex-column gap10">
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src={{ url('backend/assets/images/products/31.png') }} alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap20">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Taste of the Wild Formula Finder</a>
                                                        </div>
                                                        <div class="body-text">2,672</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">X1</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div>
                                                            <div class="block-available">Delivered</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src={{ url('backend/assets/images/products/32.png') }} alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap20">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Proden Plaqueoff Dental Bites Dog, 150 G</a>
                                                        </div>
                                                        <div class="body-text">2,672</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">X2</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div>
                                                            <div class="block-available">Delivered</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src={{ url('backend/assets/images/products/33.png') }} alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap20">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Zuke's Lil' Links Healthy Little Sausage Links for Dogs...</a>
                                                        </div>
                                                        <div class="body-text">2,672</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">X1</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div>
                                                            <div class="block-available">Delivered</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src={{ url('backend/assets/images/products/34.png') }} alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap20">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Rachael Ray Nutrish Grain Free Chicken Drumstick...</a>
                                                        </div>
                                                        <div class="body-text">2,672</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">X3</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div>
                                                            <div class="block-available">Delivered</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="divider"></li>
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src={{ url('backend/assets/images/products/35.png') }} alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow gap20">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-title-2">Fruitables Dog Treats Sweet Potato & Pecan Flavor</a>
                                                        </div>
                                                        <div class="body-text">2,672</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div class="body-text">X2</div>
                                                        <div class="body-text">$28,672.36</div>
                                                        <div>
                                                            <div class="block-available">Delivered</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="flex items-center justify-between flex-wrap gap10">
                                            <div class="text-tiny">Showing 5 entries</div>
                                            <ul class="wg-pagination">
                                                <li>
                                                    <a href="#"><i class="icon-chevron-left"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">1</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icon-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="tf-section-3">
                                    
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Top product</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">This Week</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-table table-top-product-1">
                                            <ul class="table-title flex gap10 mb-14">
                                                <li>
                                                    <div class="body-title">Product</div>
                                                </li>    
                                                <li>
                                                    <div class="body-title">Review</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Sold</div>
                                                </li>
                                                <li>
                                                    <div class="body-title">Profit</div>
                                                </li>
                                            </ul>
                                            <ul class="flex flex-column gap18">
                                                <li class="product-item">
                                                    <div class="image small no-bg">
                                                        <img src={{ url('backend/assets/images/products/36.png') }} alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Prodotti per il tuo cane...</a>
                                                        </div>
                                                        <div>
                                                            <div class="rating-number">
                                                                <div class="icon">
                                                                    <i class="icon-star1"></i>
                                                                </div>
                                                                <div class="number body-text">4.7</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="body-text">120</div>
                                                        </div>
                                                        <div>
                                                            <div class="body-text">$16.960</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <div class="image small no-bg">
                                                        <img src={{ url('backend/assets/images/products/37.png') }} alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Wholesome Pride...</a>
                                                        </div>
                                                        <div>
                                                            <div class="rating-number">
                                                                <div class="icon">
                                                                    <i class="icon-star1"></i>
                                                                </div>
                                                                <div class="number body-text">4.7</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="body-text">120</div>
                                                        </div>
                                                        <div>
                                                            <div class="body-text">$16.960</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <div class="image small no-bg">
                                                        <img src={{ url('backend/assets/images/products/38.png') }} alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Beneful Baked Delights...</a>
                                                        </div>
                                                        <div>
                                                            <div class="rating-number">
                                                                <div class="icon">
                                                                    <i class="icon-star1"></i>
                                                                </div>
                                                                <div class="number body-text">4.7</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="body-text">120</div>
                                                        </div>
                                                        <div>
                                                            <div class="body-text">$16.960</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <div class="image small no-bg">
                                                        <img src={{ url('backend/assets/images/products/39.png') }} alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Taste of the Wild...</a>
                                                        </div>
                                                        <div>
                                                            <div class="rating-number">
                                                                <div class="icon">
                                                                    <i class="icon-star1"></i>
                                                                </div>
                                                                <div class="number body-text">4.7</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="body-text">120</div>
                                                        </div>
                                                        <div>
                                                            <div class="body-text">$16.960</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="product-item">
                                                    <div class="image small no-bg">
                                                        <img src={{ url('backend/assets/images/products/40.png') }} alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between flex-grow">
                                                        <div class="name">
                                                            <a href="product-list.html" class="body-text">Canagan - Britain's...</a>
                                                        </div>
                                                        <div>
                                                            <div class="rating-number">
                                                                <div class="icon">
                                                                    <i class="icon-star1"></i>
                                                                </div>
                                                                <div class="number body-text">4.7</div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="body-text">120</div>
                                                        </div>
                                                        <div>
                                                            <div class="body-text">$16.960</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Earnings</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">This Week</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="line-chart-9"></div>
                                        <div class="flex flex-wrap gap40 justify-center">
                                            <div>
                                                <div class="mb-2">
                                                    <div class="block-legend">
                                                        <div class="dot t1"></div>
                                                        <div class="text-tiny">Revenue</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>$37,802</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-2">
                                                    <div class="block-legend">
                                                        <div class="dot t2"></div>
                                                        <div class="text-tiny">Profit</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap10">
                                                    <h4>$28,305</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Website visitors</h5>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">This Week</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Last Week</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="line-chart-10"></div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
  @endsection