@extends('layouts.site')
@section('title', 'chi-tiet-san-pham')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/productdetail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css ') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css ') }}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css ') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css ') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css/niceselect.css ') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href=" {{ asset('css/animate.css') }}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/flex-slider.min.css ') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css ') }}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css ') }}">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{ asset('css/reset.css ') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css ') }}">


    <main>
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bread-inner">
                            <ul class="bread-list">
                                <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                                <li class="active"><a href="blog-single.html">Product Detail</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- Start Blog Single -->
        <section class="product-details section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="product-images">
                            <div class="main-image">
                                <img src="{{ asset('images/T-Shirt-05.jpg') }}" alt="Product Detail">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="product-info">
                            <h2 class="title">Tên sản phẩm</h2>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-o"></i></li>
                                </ul>
                                <span>(5 Đánh giá)</span>
                            </div>
                            <div class="price">
                                <span>$200.00</span>
                            </div>
                            <p class="info">Mô tả sản phẩm sẽ được hiển thị chi tiết về sản phẩm,
                                các tính năng, ưu điểm, và những điều cần lưu ý.</p>
                            <div class="tags">
                                <span>Tags:</span>
                                <ul>
                                    <li><a href="#">Glass</a>,</li>
                                    <li><a href="#">Pant</a>,</li>
                                    <li><a href="#">T-shirt</a>,</li>
                                    <li><a href="#">Sweater</a></li>
                                </ul>
                            </div>
                            <div class="quantity">
                                <h4>Số lượng:</h4>
                                    <button type="button" class="cart-minus">-</button>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                    <button type="button" class="cart-plus">+</button>
                                </div>
                            </div>

                            <div class="add-to-cart">
                                <a href="#" class="btn">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="default-social">
                                <h4 class="share-now">Chia sẻ:</h4>
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Details -->
        <!-- Start Product Description -->
        <section class="product-description section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-info">
                            <h2 class="title">Mô tả sản phẩm</h2>
                            <p>Thêm mô tả chi tiết về sản phẩm. miêu tả về chất liệu, kích thước, cách sử
                                dụng, hướng dẫn bảo quản, và bất kỳ thông tin nào khác mà khách hàng có thể cần biết.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Blog Single -->
    </main>
    <script src="{{ asset('js/ActiveCartDetailProduct.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/colors.js') }}"></script>
    <script src="{{ asset('js/slicknav.min.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/finalcountdown.min.js') }}"></script>
    <script src="{{ asset('js/nicesellect.js') }}"></script>
    <script src="{{ asset('js/flex-slider.js') }}"></script>
    <script src="{{ asset('js/scrollup.js') }}"></script>
    <script src="{{ asset('js/onepage-nav.min.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
@endsection
