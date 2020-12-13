@extends('layout')

@section('content')

<body>

    <!--slider area start-->
    <section class="slider_section mb-100">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h2>Get 30% Off &amp; Free Shipping </h2>
                                <h1>SUmmer sale</h1>
                                <p>
                                    An exclusive selection of this season’s trends. <span>Exclusively online </span>
                                </p>
                                <a href="shop.html">Shop Now +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h2>Big sale up to 20% off </h2>
                                <h1>london style </h1>
                                <p>
                                    An exclusive selection of this season’s trends. <span>Exclusively online </span>
                                </p>
                                <a href="shop.html">Shop Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!--banner area start-->
    <div class="banner_area mb-95">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop"><img src="assets/img/bg/banner1.jpg" alt=""></a>
                            <div class="banner_text1">
                                <div class="banner_text1_inner">
                                    <h3>Men’s <br> Collections</h3>
                                    <a href="shop">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop"><img src="assets/img/bg/banner2.jpg" alt=""></a>
                            <div class="banner_text1">
                                <div class="banner_text1_inner">
                                    <h3>Women’s <br> Collections</h3>
                                    <a href="shop">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--categories product area start-->
    <div class="categories_product_area mb-92">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Top Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_carousel product_column4 owl-carousel">
                    <div class="col-lg-3">

                        {{ count($plateformes) }}
                        @foreach($plateformes as $plateforme)

                        
                        <article class="single_categories">
                            <figure>
                                <div class="categories_thumb">
                                    <a href="product-details"><img src="assets/img/s-product/category1.jpg" alt=""></a>
                                </div>
                                <figcaption class="categories_content">
                                    <h4 class="product_name"><a href="shop">{{$plateforme->name}}</a></h4>
                                    <div class="product_collection">
                                        <p>{{$plateforme->name}}</p>
                                        <a href="shop">+ Voir jeux</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--categories product area end-->

    <!--testimonial area start-->
    <div class="testimonial_area mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial_container">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial_wrapper  testimonial_collumn1 owl-carousel">
                            <div class="single_testimonial">
                                <div class="testimonial_thumb">
                                    <img src="assets/img/about/testimonial1.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                                    <h3><a href="#">John Sullivan</a></h3>
                                    <span>Customer</span>
                                </div>
                            </div>
                            <div class="single_testimonial">
                                <div class="testimonial_thumb">
                                    <img src="assets/img/about/testimonial2.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error in, mollitia nulla officiis excepturi repudiandae beatae optio, sequi maxime assumenda ipsum exercitationem nostrum ducimus facilis, nesciunt aliquam dicta totam.</p>
                                    <h3><a href="#">Jenifer Brown</a></h3>
                                    <span>Manager of AZ</span>
                                </div>
                            </div>
                            <div class="single_testimonial">
                                <div class="testimonial_thumb">
                                    <img src="assets/img/about/testimonial3.png" alt="">
                                </div>
                                <div class="testimonial_content">
                                    <p>These guys have been absolutely outstanding. Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Very fast responding! Thank you very much! I highly recommend this theme and these people!</p>
                                    <h3><a href="#">Kathy Young</a></h3>
                                    <span>CEO of SunPark</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--testimonial area end-->

    <!--product area start-->
    <div class="product_area  mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title product_shop_title">
                        <h2>Featured products </h2>
                    </div>
                    <div class="product_shop_collection">
                        <a href="shop">Shop all collection</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product_carousel product_column5 owl-carousel">
                    <div class="col-lg-3">
                        <div class="product_items">


                            @foreach($games as $game)

                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">{{$game->name}}</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
                                            <h4 class="product_name"><a href="product-details">{{$game->description}}</a></h4>
                                            <div class="price_box">
                                                <span class="current_price">EUR {{$game->price}} / {{$game->plateforme_id}}</span>
                                            </div>
                                        </div>
                                        <div class="add_to_cart">
                                            <a href="cart">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--brand area start-->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel ">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand4.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand5.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand6.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand7.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->
    @endsection