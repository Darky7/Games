@extends('layout')

@section('content')

<body>
  
   
    
    <!--header area start-->
    
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon-round"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                       
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">about Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a> 
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    
    <header>
        <div class="main_header sticky-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-2 col-md-4 offset-md-4 offset-lg-0 col-5 offset-3 col-sm-5">
						<div class="logo">
							<a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-lg-8">                
						<!--main menu start-->
						<div class="main_menu menu_position"> 
							<nav>  
								<ul>
									<li><a class="active"  href="index.html">home<i class="fa fa-angle-down"></i></a>
										<ul class="sub_menu">
											<li><a href="index.html">Home shop 1</a></li>
											<li><a href="index-2.html">Home shop 2</a></li>
											<li><a href="index-3.html">Home shop 3</a></li>
										</ul>
									</li>
									<li class="mega_items"><a href="shop.html">shop<i class="fa fa-angle-down"></i></a> 
										<div class="mega_menu">
											<ul class="mega_menu_inner">
												<li><a href="#">Shop Layouts</a>
													<ul>
														<li><a href="shop-fullwidth.html">Full Width</a></li>
														<li><a href="shop-fullwidth-list.html">Full Width list</a></li>
														<li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
														<li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
														<li><a href="shop-list.html">List View</a></li>
													</ul>
												</li>
												<li><a href="#">other Pages</a>
													<ul>
														<li><a href="cart.html">cart</a></li>
														<li><a href="wishlist.html">Wishlist</a></li>
														<li><a href="checkout.html">Checkout</a></li>
														<li><a href="my-account.html">my account</a></li>
														<li><a href="404.html">Error 404</a></li>
													</ul>
												</li>
												<li><a href="#">Product Types</a>
													<ul>
														<li><a href="product-details.html">product details</a></li>
														<li><a href="product-sidebar.html">product sidebar</a></li>
														<li><a href="product-grouped.html">product grouped</a></li>
														<li><a href="variable-product.html">product variable</a></li>

													</ul>
												</li>
											</ul>
										</div>
									</li>
									<li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
										<ul class="sub_menu pages">
											<li><a href="blog-details.html">blog details</a></li>
											<li><a href="blog-fullwidth.html">blog fullwidth</a></li>
											<li><a href="blog-sidebar.html">blog sidebar</a></li>
										</ul>
									</li> 
									<li><a href="contact.html"> Contact Us</a></li>
									<li><a href="about.html"> About us</a></li>
									<li><a href="#">pages <i class="fa fa-angle-down"></i></a>
										<ul class="sub_menu pages">
											<li><a href="about.html">About Us</a></li>
											<li><a href="services.html">services</a></li>
											<li><a href="faq.html">Frequently Questions</a></li>
											<li><a href="contact.html">contact</a></li>
											<li><a href="login.html">login</a></li>
											<li><a href="404.html">Error 404</a></li>
										</ul>
									</li>
								</ul>  
							</nav> 
						</div>
						<!--main menu end-->
					</div> 
					<div class="col-lg-2 col-md-4 col-sm-4 col-4">
						<div class="header_account_area">
							<div class="header_account_list search_list">
								<a href="javascript:void(0)"><span class="pe-7s-search"></span></a>
								<div class="dropdown_search">
									<form action="#">
										<input placeholder="Search entire store here ..." type="text">
										<button type="submit"><span class="pe-7s-search"></span></button>
									</form>
								</div>
							</div>
							<div class="header_account_list  mini_cart_wrapper">
								<a href="javascript:void(0)"><span class="pe-7s-shopbag"></span>
									<span class="item_count">2</span>
								</a>
								
						   </div>
						    <div class="language_currency header_account_list ">
						        <a href="#"> <span class="pe-7s-user"></span></a>
								<ul class="dropdown_currency">
									<li><a href="my-account.html">My account</a></li>
									<li><a href="#">Order History</a></li>
									<li><a href="wishlist.html">Wishlist</a></li>
									<li><a href="cart.html">Shipping</a></li>
								</ul>
							</div>
						</div>
					</div>               
				</div>
			</div>
        </div> 
        <!--mini cart-->
        <div class="mini_cart">
            <div class="cart_gallery">
                <div class="cart_close">
                    <div class="cart_text">
                        <h3>cart</h3>
                    </div>
                    <div class="mini_cart_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                   <div class="cart_img">
                       <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                   </div>
                    <div class="cart_info">
                        <a href="#">Juicy Couture Tricot</a>
                        <p>1 x <span> $30.00 </span></p>    
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-ios-close-outline"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                   <div class="cart_img">
                       <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                   </div>
                    <div class="cart_info">
                        <a href="#">Juicy Couture Juicy</a>
                        <p>1 x <span> $29.00 </span></p>    
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-ios-close-outline"></i></a>
                    </div>
                </div>
            </div>
            <div class="mini_cart_table">
                <div class="cart_table_border">
                    <div class="cart_total">
                        <span>Sub total:</span>
                        <span class="price">$125.00</span>
                    </div>
                    <div class="cart_total mt-10">
                        <span>total:</span>
                        <span class="price">$125.00</span>
                    </div>
                </div>
            </div>
            <div class="mini_cart_footer">
               <div class="cart_button">
                    <a href="cart.html"><i class="fa fa-shopping-cart"></i> View cart</a>
                </div>
                <div class="cart_button">
                    <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
                </div>

            </div>
        </div>
        <!--mini cart end-->
    </header>
    <!--header area end-->
    
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
                            <a href="shop.html"><img src="assets/img/bg/banner1.jpg" alt=""></a>
                            <div class="banner_text1">
                                <div class="banner_text1_inner">
                            		<h3>Men’s <br> Collections</h3>
                            		<a href="shop.html">shop now</a>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner2.jpg" alt=""></a>
                            <div class="banner_text1">
                                <div class="banner_text1_inner">
									<h3>Women’s <br> Collections</h3>
									<a href="shop.html">shop now</a>
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
    <div class="categories_product_area   mb-92">
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
                        <article class="single_categories">
                            <figure>
                                <div class="categories_thumb">
                                    <a href="product-details.html"><img src="assets/img/s-product/category1.jpg" alt=""></a>
                                </div>
                                <figcaption class="categories_content">
                                    <h4 class="product_name"><a href="shop.html">t-shirt</a></h4>
                                   <div class="product_collection">
										<p>13 Products</p>
										<a href="shop.html">+ Shop Collection</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_categories">
                            <figure>
                                <div class="categories_thumb">
                                    <a href="product-details.html"><img src="assets/img/s-product/category2.jpg" alt=""></a>
                                </div>
                                <figcaption class="categories_content">
                                    <h4 class="product_name"><a href="shop.html">Blazer</a></h4>
                                   <div class="product_collection">
										<p>13 Products</p>
										<a href="shop.html">+ Shop Collection</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_categories">
                            <figure>
                                <div class="categories_thumb">
                                    <a href="product-details.html"><img src="assets/img/s-product/category3.jpg" alt=""></a>
                                </div>
                                <figcaption class="categories_content">
                                    <h4 class="product_name"><a href="shop.html">jacket</a></h4>
                                   <div class="product_collection">
										<p>13 Products</p>
										<a href="shop.html">+ Shop Collection</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_categories">
                            <figure>
                                <div class="categories_thumb">
                                    <a href="product-details.html"><img src="assets/img/s-product/category4.jpg" alt=""></a>
                                </div>
                                <figcaption class="categories_content">
                                    <h4 class="product_name"><a href="shop.html">Dress</a></h4>
                                   <div class="product_collection">
										<p>13 Products</p>
										<a href="shop.html">+ Shop Collection</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_categories">
                            <figure>
                                <div class="categories_thumb">
                                    <a href="product-details.html"><img src="assets/img/s-product/category2.jpg" alt=""></a>
                                </div>
                                <figcaption class="categories_content">
                                    <h4 class="product_name"><a href="shop.html">Blazer</a></h4>
                                   <div class="product_collection">
										<p>13 Products</p>
										<a href="shop.html">+ Shop Collection</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
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
                    	<a href="shop.html">Shop all collection</a>
                    </div>
                </div>
            </div> 
            <div class="row">
               <div class="product_carousel product_column5 owl-carousel">
                   <div class="col-lg-3">
                       <div class="product_items">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Duis pulvinar obortis eleifend elementum</a></h4>
											<div class="price_box"> 
												<span class="old_price">$84.00</span>
												<span class="current_price">$79.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart.html">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Eodem modo vels is mattis antes facilisis</a></h4>
											<div class="price_box"> 
												<span class="old_price">$86.00</span>
												<span class="current_price">$82.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart.html">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                   </div>
                   <div class="col-lg-3">
                       <div class="product_items">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Epicuri per lobortis eleifend eget laoreet</a></h4>
											<div class="price_box"> 
												<span class="old_price">$82.00</span>
												<span class="current_price">$77.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart.html">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Fusce ultricies  dolor vitae tristique suscipit</a></h4>
											<div class="price_box"> 
												<span class="old_price">$90.00</span>
												<span class="current_price">$88.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart.html">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            
                        </div>
                   </div>
                   <div class="col-lg-3">
                       <div class="product_items">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Kaoreet lobortis sagittis laoreet metus is</a></h4>
											<div class="price_box"> 
												<span class="old_price">$94.00</span>
												<span class="current_price">$92.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart.html">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Nostrum exercitationem itae posuere nisl</a></h4>
											<div class="price_box"> 
												<span class="old_price">$98.00</span>
												<span class="current_price">$94.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart.html">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            
                        </div>
                   </div>
                   <div class="col-lg-3">
                       <div class="product_items">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Ornare sed consequat nisl eget mi porttitor</a></h4>
											<div class="price_box"> 
												<span class="old_price">$76.00</span>
												<span class="current_price">$73.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart.html">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product15.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Pellentesque posuere hendrerit dui quis</a></h4>
											<div class="price_box"> 
												<span class="old_price">$70.00</span>
												<span class="current_price">$66.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart.html">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            
                        </div>
                   </div>
                   <div class="col-lg-3">
                       <div class="product_items">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Aliquam lobortis pellentesque nisi lectus</a></h4>
											<div class="price_box"> 
												<span class="old_price">$66.00</span>
												<span class="current_price">$62.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart.html">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Donec eu libero ac dapibus urna placerat</a></h4>
											<div class="price_box"> 
												<span class="old_price">$87.00</span>
												<span class="current_price">$78.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart.html">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            
                        </div>
                   </div>
                   <div class="col-lg-3">
                       <div class="product_items">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Kaoreet lobortis sagittis laoreet metus is</a></h4>
											<div class="price_box"> 
												<span class="old_price">$74.00</span>
												<span class="current_price">$72.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart.html">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis</a></h4>
											<div class="price_box"> 
												<span class="old_price">$86.00</span>
												<span class="current_price">$82.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart.html">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            
                        </div>
                   </div>
               </div>
           </div>   
        </div> 
    </div>
    <!--product area end-->
    
    <!--banner area start-->
    <div class="banner_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner3.jpg" alt=""></a>
                            <div class="banner_text2">
                            	<h3>S/S-20 <br> Collections</h3>
                            	<a href="shop.html">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner4.jpg" alt=""></a>
                            <div class="banner_text2">
								<h3>A/W-20 <br> Collections</h3>
								<a href="shop.html">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    
    <!--discount banner area start-->
    <div class="discount_banner_area mb-95">
    	<div class="container-fluid p-0">
    		<div class="banner_thumb">
				<a href="shop.html"><img src="assets/img/bg/banner5.jpg" alt=""></a>
				<div class="banner_text3">
					<h3>Minimalist Spring Collection</h3>
					<h2>up TO 40% off</h2>
					<p>An exclusive selection of this season’s trends. <span>Exclusively online!</span></p>
					<a href="shop.html">shop now</a>
				</div>
			</div>
    	</div>
    </div>
    <!--discount banner area end-->
    
    <!--product area start-->
    <div class="product_area  mb-95">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                           <h2>Our Categories</h2>
                        </div>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tennis" role="tab" aria-controls="tennis" aria-selected="true"> 
                                       + Tennis
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#fitness" role="tab" aria-controls="fitness" aria-selected="false">
                                        + Fitness
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#football" role="tab" aria-controls="football" aria-selected="false">
                                        + Football
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="product_container">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tennis" role="tabpanel">
                        <div class="row">
                           <div class="product_carousel product_column5 owl-carousel">
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details.html">Eodem modo vel are mattis ante facilisis</a></h4>
														<div class="price_box"> 
															<span class="old_price">$86.00</span>
															<span class="current_price">$82.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart.html">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details.html">Epicuri per lobortis eleifend eget laoreet</a></h4>
													<div class="price_box"> 
														<span class="old_price">$82.00</span>
														<span class="current_price">$77.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart.html">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details.html">Kaoreet lobortis sagittis laoreet metus feugiat</a></h4>
													<div class="price_box"> 
														<span class="old_price">$94.00</span>
														<span class="current_price">$92.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart.html">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details.html">Ornare sed consequat nisl eget mi porttitor</a></h4>
														<div class="price_box"> 
															<span class="old_price">$76.00</span>
															<span class="current_price">$73.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart.html">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
													<div class="label_product">
														<span class="label_sale">Sale</span>
													</div>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details.html">Donec eu libero ac dapibus urna placerat</a></h4>
														<div class="price_box"> 
															<span class="old_price">$87.00</span>
															<span class="current_price">$78.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart.html">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis</a></h4>
													<div class="price_box"> 
														<span class="old_price">$86.00</span>
														<span class="current_price">$82.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart.html">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
						   </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="fitness" role="tabpanel">
                        <div class="row">
                           <div class="product_carousel product_column5 owl-carousel">
                                <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
													<div class="label_product">
														<span class="label_sale">Sale</span>
													</div>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details.html">Donec eu libero ac dapibus urna placerat</a></h4>
														<div class="price_box"> 
															<span class="old_price">$87.00</span>
															<span class="current_price">$78.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart.html">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis</a></h4>
													<div class="price_box"> 
														<span class="old_price">$86.00</span>
														<span class="current_price">$82.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart.html">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis</a></h4>
														<div class="price_box"> 
															<span class="old_price">$86.00</span>
															<span class="current_price">$82.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart.html">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details.html">Epicuri per lobortis eleifend eget laoreet</a></h4>
													<div class="price_box"> 
														<span class="old_price">$82.00</span>
														<span class="current_price">$77.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart.html">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details.html">Kaoreet lobortis sagittis laoreet metus feugiat</a></h4>
													<div class="price_box"> 
														<span class="old_price">$94.00</span>
														<span class="current_price">$92.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart.html">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details.html">Ornare sed consequat nisl eget mi porttitor</a></h4>
														<div class="price_box"> 
															<span class="old_price">$76.00</span>
															<span class="current_price">$73.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart.html">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   
						   </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="football" role="tabpanel">
                        <div class="row">
                           <div class="product_carousel product_column5 owl-carousel">
                            	<div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details.html">Kaoreet lobortis sagittis laoreet metus feugiat</a></h4>
													<div class="price_box"> 
														<span class="old_price">$94.00</span>
														<span class="current_price">$92.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart.html">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details.html">Ornare sed consequat nisl eget mi porttitor</a></h4>
														<div class="price_box"> 
															<span class="old_price">$76.00</span>
															<span class="current_price">$73.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart.html">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis</a></h4>
														<div class="price_box"> 
															<span class="old_price">$86.00</span>
															<span class="current_price">$82.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart.html">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details.html">Epicuri per lobortis eleifend eget laoreet</a></h4>
													<div class="price_box"> 
														<span class="old_price">$82.00</span>
														<span class="current_price">$77.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart.html">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
													<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
													<div class="label_product">
														<span class="label_sale">Sale</span>
													</div>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details.html">Donec eu libero ac dapibus urna placerat</a></h4>
														<div class="price_box"> 
															<span class="old_price">$87.00</span>
															<span class="current_price">$78.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart.html">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
												<a class="secondary_img" href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis</a></h4>
													<div class="price_box"> 
														<span class="old_price">$86.00</span>
														<span class="current_price">$82.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart.html">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
						   </div>
                       </div>
                    </div>
                </div>
            </div>
               
        </div> 
    </div>
    <!--product area end-->
    
    <!--shipping area start-->
    <div class="shipping_area">
        <div class="container">
            <div class="shipping_container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single_shipping">
							<div class="shipping_icone">
							   <img src="assets/img/about/shipping1.png" alt="">
							</div>
							<div class="shipping_content">
							   <h3>Free Delivery</h3>
								<p>Free shipping on all order</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single_shipping">
							<div class="shipping_icone">
							   <img src="assets/img/about/shipping2.png" alt="">
							</div>
							<div class="shipping_content">
							   <h3>Online Support 24/7</h3>
								<p>Support online 24 hours a day</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single_shipping">
							<div class="shipping_icone">
							   <img src="assets/img/about/shipping3.png" alt="">
							</div>
							<div class="shipping_content">
							   <h3>Money Return</h3>
								<p>Back guarantee under 7 days</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single_shipping">
							<div class="shipping_icone">
							   <img src="assets/img/about/shipping4.png" alt="">
							</div>
							<div class="shipping_content">
							   <h3>Member Discount</h3>
								<p>Onevery order over $120.00</p>
							</div>
						</div>
					</div>
				</div>  
            </div> 
        </div>
    </div>
    <!--shipping area end-->
    
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