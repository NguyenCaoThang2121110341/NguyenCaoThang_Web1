@extends('layouts.site')
@section('title', 'san-pham')
@section('content')
    <main>
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bread-inner">
                            <ul class="bread-list">
                                <li><a href="index1.html">Trang chủ<i class="ti-arrow-right"></i></a></li>
                                <li class="active"><a href="blog-single.html">Chi nhánh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- Product Style -->
        <section class="product-area shop-sidebar shop section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="shop-sidebar">
                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title">Danh mục</h3>
                                <ul class="categor-list">
                                    <li><a href="#">Áo thun</a></li>
                                    <li><a href="#">Áo khoác</a></li>
                                    <li><a href="#">Quần jeans</a></li>
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                            <!-- Shop By Price -->
                            <div class="single-widget range">
                                <h3 class="title">Giá</h3>
                                <div class="price-filter">
                                    <div class="price-filter-inner">
                                        <div id="slider-range"></div>
                                        <div class="price_slider_amount">
                                            <div class="label-input">
                                                <span>Ngẫu nhiên:</span><input type="text" id="amount" name="price"
                                                    placeholder="Add Your Price" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="check-box-list">
                                    <li>
                                        <label class="checkbox-inline" for="1"><input name="news" id="1"
                                                type="checkbox">$20 - $50<span class="count">(3)</span></label>
                                    </li>

                                </ul>
                            </div>
                            <!--/ End Shop By Price -->
                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title">Thương hiệu</h3>
                                <ul class="categor-list">
                                    <li><a href="#">KienM</a></li>
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="row">
                            <div class="col-12">
                                <!-- Shop Top -->
                                <div class="shop-top">
                                    <ul class="view-mode">
                                        <li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
                                        <li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
                                    </ul>
                                </div>
                                <!--/ End Shop Top -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <x-product-card />
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="default-img" src="https://via.placeholder.com/550x750"
                                                alt="#">
                                            <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                            <span class="new">Mới</span>
                                        </a>
                                        <div class="button-head">
                                            <div class="product-action">
                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View"
                                                    href="#"><i class=" ti-eye"></i><span>Xem Qua</span></a>
                                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Thêm vào
                                                        Danh sách</span></a>
                                                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>So
                                                        sánh</span></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a title="Thêm vào giỏ hàng" href="#">Thêm vào giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="product-details.html">Bộ sưu tập nam</a></h3>
                                        <div class="product-price">
                                            <span>80.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img class="default-img" src="https://via.placeholder.com/550x750"
                                                alt="#">
                                            <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                            <span class="price-dec">Giảm 30%</span>
                                        </a>
                                        <div class="button-head">
                                            <div class="product-action">
                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View"
                                                    href="#"><i class=" ti-eye"></i><span>Xem Qua</span></a>
                                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Thêm
                                                        vào Danh sách</span></a>
                                                <a title="Compare" href="#"><i
                                                        class="ti-bar-chart-alt"></i><span>So sánh</span></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a title="Thêm vào giỏ hàng" href="#">Thêm vào giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a href="product-details.html">Áo thun nam</a></h3>
                                        <div class="product-price">
                                            <span>90.000đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Product Style 1  -->
        <x-newsletter />
    @endsection
