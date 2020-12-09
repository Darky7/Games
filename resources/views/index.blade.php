@extends(.layout)

@section('content')


<body>
    
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
                                    <a class="nav-link active" href="">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop-list">Shop</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account">My account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="cart">Cart</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="whishlist">Whishlist</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact">Contact Us</a> 
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@mimix.com</a></span>
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
							<a href="/"><img src="assets/img/logo/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-lg-8">                
						<!--main menu start-->
						<div class="main_menu menu_position"> 
							<nav>  
								<ul>
									<li><a class="active" href="">Home</a></li>
									<li><a href="shop-list">Shop</a></li>
									<li><a href="shop-list">My Account</a></li>
									<li><a href="shop-list">Cart</a></li>
									<li><a href="shop-list">Wishlist</a></li>
									<li><a href="about">About Us</a></li>
									<li><a href="contact">Contact Us</a></li>
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
						        <a href=""> <span class="pe-7s-user"></span></a>
								<ul class="dropdown_currency">
									<li><a href="my-account">My account</a></li>
									<li><a href="#">Order History</a></li>
									<li><a href="wishlist.">Wishlist</a></li>
									<li><a href="cart">Shipping</a></li>
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
                    <a href="cart"><i class="fa fa-shopping-cart"></i> View cart</a>
                </div>
                <div class="cart_button">
                    <a href="checkout"><i class="fa fa-sign-in"></i> Checkout</a>
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
                                <a href="shop">Shop Now +</a>
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
                                <a href="shop">Shop Now </a>
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
                                    <a href="product-details"><img src="assets/img/s-product/category1.jpg" alt=""></a>
                                </div>
                                <figcaption class="categories_content">
                                    <h4 class="product_name"><a href="shop">t-shirt</a></h4>
                                   <div class="product_collection">
										<p>13 Products</p>
										<a href="shop">+ Shop Collection</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_categories">
                            <figure>
                                <div class="categories_thumb">
                                    <a href="product-details"><img src="assets/img/s-product/category2.jpg" alt=""></a>
                                </div>
                                <figcaption class="categories_content">
                                    <h4 class="product_name"><a href="shop">Blazer</a></h4>
                                   <div class="product_collection">
										<p>13 Products</p>
										<a href="shop">+ Shop Collection</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_categories">
                            <figure>
                                <div class="categories_thumb">
                                    <a href="product-details"><img src="assets/img/s-product/category3.jpg" alt=""></a>
                                </div>
                                <figcaption class="categories_content">
                                    <h4 class="product_name"><a href="shop.">jacket</a></h4>
                                   <div class="product_collection">
										<p>13 Products</p>
										<a href="shop">+ Shop Collection</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_categories">
                            <figure>
                                <div class="categories_thumb">
                                    <a href="product-details"><img src="assets/img/s-product/category4.jpg" alt=""></a>
                                </div>
                                <figcaption class="categories_content">
                                    <h4 class="product_name"><a href="shop">Dress</a></h4>
                                   <div class="product_collection">
										<p>13 Products</p>
										<a href="shop">+ Shop Collection</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                   </div>
                   <div class="col-lg-3">
                        <article class="single_categories">
                            <figure>
                                <div class="categories_thumb">
                                    <a href="product-details"><img src="assets/img/s-product/category2.jpg" alt=""></a>
                                </div>
                                <figcaption class="categories_content">
                                    <h4 class="product_name"><a href="shop">Blazer</a></h4>
                                   <div class="product_collection">
										<p>13 Products</p>
										<a href="shop">+ Shop Collection</a>
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
                    	<a href="shop">Shop all collection</a>
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
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details">Duis pulvinar obortis eleifend elementum</a></h4>
											<div class="price_box"> 
												<span class="old_price">$84.00</span>
												<span class="current_price">$79.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details">Eodem modo vels is mattis antes facilisis</a></h4>
											<div class="price_box"> 
												<span class="old_price">$86.00</span>
												<span class="current_price">$82.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart">Add to cart</a>
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
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product5.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product6.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details">Epicuri per lobortis eleifend eget laoreet</a></h4>
											<div class="price_box"> 
												<span class="old_price">$82.00</span>
												<span class="current_price">$77.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product8.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details">Fusce ultricies  dolor vitae tristique suscipit</a></h4>
											<div class="price_box"> 
												<span class="old_price">$90.00</span>
												<span class="current_price">$88.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart">Add to cart</a>
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
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product9.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product10.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details">Kaoreet lobortis sagittis laoreet metus is</a></h4>
											<div class="price_box"> 
												<span class="old_price">$94.00</span>
												<span class="current_price">$92.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product11.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product12.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details">Nostrum exercitationem itae posuere nisl</a></h4>
											<div class="price_box"> 
												<span class="old_price">$98.00</span>
												<span class="current_price">$94.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart">Add to cart</a>
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
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product13.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product14.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details">Ornare sed consequat nisl eget mi porttitor</a></h4>
											<div class="price_box"> 
												<span class="old_price">$76.00</span>
												<span class="current_price">$73.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product15.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product14.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details">Pellentesque posuere hendrerit dui quis</a></h4>
											<div class="price_box"> 
												<span class="old_price">$70.00</span>
												<span class="current_price">$66.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart">Add to cart</a>
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
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product2.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product1.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details">Aliquam lobortis pellentesque nisi lectus</a></h4>
											<div class="price_box"> 
												<span class="old_price">$66.00</span>
												<span class="current_price">$62.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product4.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product3.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details">Donec eu libero ac dapibus urna placerat</a></h4>
											<div class="price_box"> 
												<span class="old_price">$87.00</span>
												<span class="current_price">$78.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart">Add to cart</a>
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
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product6.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product5.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details">Kaoreet lobortis sagittis laoreet metus is</a></h4>
											<div class="price_box"> 
												<span class="old_price">$74.00</span>
												<span class="current_price">$72.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart">Add to cart</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details"><img src="assets/img/product/product8.jpg" alt=""></a>
                                        <a class="secondary_img" href="product-details"><img src="assets/img/product/product7.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
                                                <li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <div class="product_content_inner">
											<h4 class="product_name"><a href="product-details">Eodem modo vel mattis ante facilisis</a></h4>
											<div class="price_box"> 
												<span class="old_price">$86.00</span>
												<span class="current_price">$82.00</span>
											</div>
                                        </div>
                                        <div class="add_to_cart">
                                        	<a href="cart">Add to cart</a>
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
                            <a href="shop"><img src="assets/img/bg/banner3.jpg" alt=""></a>
                            <div class="banner_text2">
                            	<h3>S/S-20 <br> Collections</h3>
                            	<a href="shop">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop"><img src="assets/img/bg/banner4.jpg" alt=""></a>
                            <div class="banner_text2">
								<h3>A/W-20 <br> Collections</h3>
								<a href="shop">shop now</a>
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
				<a href="shop"><img src="assets/img/bg/banner5.jpg" alt=""></a>
				<div class="banner_text3">
					<h3>Minimalist Spring Collection</h3>
					<h2>up TO 40% off</h2>
					<p>An exclusive selection of this season’s trends. <span>Exclusively online!</span></p>
					<a href="shop">shop now</a>
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
													<a class="primary_img" href="product-details"><img src="assets/img/product/product3.jpg" alt=""></a>
													<a class="secondary_img" href="product-details"><img src="assets/img/product/product4.jpg" alt=""></a>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details">Eodem modo vel are mattis ante facilisis</a></h4>
														<div class="price_box"> 
															<span class="old_price">$86.00</span>
															<span class="current_price">$82.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details"><img src="assets/img/product/product5.jpg" alt=""></a>
												<a class="secondary_img" href="product-details"><img src="assets/img/product/product6.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details">Epicuri per lobortis eleifend eget laoreet</a></h4>
													<div class="price_box"> 
														<span class="old_price">$82.00</span>
														<span class="current_price">$77.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details"><img src="assets/img/product/product9.jpg" alt=""></a>
												<a class="secondary_img" href="product-details"><img src="assets/img/product/product10.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details">Kaoreet lobortis sagittis laoreet metus feugiat</a></h4>
													<div class="price_box"> 
														<span class="old_price">$94.00</span>
														<span class="current_price">$92.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details"><img src="assets/img/product/product13.jpg" alt=""></a>
													<a class="secondary_img" href="product-details"><img src="assets/img/product/product14.jpg" alt=""></a>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details">Ornare sed consequat nisl eget mi porttitor</a></h4>
														<div class="price_box"> 
															<span class="old_price">$76.00</span>
															<span class="current_price">$73.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details"><img src="assets/img/product/product4.jpg" alt=""></a>
													<a class="secondary_img" href="product-details"><img src="assets/img/product/product3.jpg" alt=""></a>
													<div class="label_product">
														<span class="label_sale">Sale</span>
													</div>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details">Donec eu libero ac dapibus urna placerat</a></h4>
														<div class="price_box"> 
															<span class="old_price">$87.00</span>
															<span class="current_price">$78.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details"><img src="assets/img/product/product8.jpg" alt=""></a>
												<a class="secondary_img" href="product-details"><img src="assets/img/product/product7.jpg" alt=""></a>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details">Eodem modo vel mattis ante facilisis</a></h4>
													<div class="price_box"> 
														<span class="old_price">$86.00</span>
														<span class="current_price">$82.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart">Add to cart</a>
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
													<a class="primary_img" href="product-details"><img src="assets/img/product/product4.jpg" alt=""></a>
													<a class="secondary_img" href="product-details"><img src="assets/img/product/product3.jpg" alt=""></a>
													<div class="label_product">
														<span class="label_sale">Sale</span>
													</div>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details">Donec eu libero ac dapibus urna placerat</a></h4>
														<div class="price_box"> 
															<span class="old_price">$87.00</span>
															<span class="current_price">$78.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details"><img src="assets/img/product/product8.jpg" alt=""></a>
												<a class="secondary_img" href="product-details"><img src="assets/img/product/product7.jpg" alt=""></a>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details">Eodem modo vel mattis ante facilisis</a></h4>
													<div class="price_box"> 
														<span class="old_price">$86.00</span>
														<span class="current_price">$82.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details"><img src="assets/img/product/product3.jpg" alt=""></a>
													<a class="secondary_img" href="product-details"><img src="assets/img/product/product4.jpg" alt=""></a>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details">Eodem modo vel mattis ante facilisis</a></h4>
														<div class="price_box"> 
															<span class="old_price">$86.00</span>
															<span class="current_price">$82.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details"><img src="assets/img/product/product5.jpg" alt=""></a>
												<a class="secondary_img" href="product-details"><img src="assets/img/product/product6.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details">Epicuri per lobortis eleifend eget laoreet</a></h4>
													<div class="price_box"> 
														<span class="old_price">$82.00</span>
														<span class="current_price">$77.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details"><img src="assets/img/product/product9.jpg" alt=""></a>
												<a class="secondary_img" href="product-details"><img src="assets/img/product/product10.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details">Kaoreet lobortis sagittis laoreet metus feugiat</a></h4>
													<div class="price_box"> 
														<span class="old_price">$94.00</span>
														<span class="current_price">$92.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details"><img src="assets/img/product/product13.jpg" alt=""></a>
													<a class="secondary_img" href="product-details"><img src="assets/img/product/product14.jpg" alt=""></a>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details">Ornare sed consequat nisl eget mi porttitor</a></h4>
														<div class="price_box"> 
															<span class="old_price">$76.00</span>
															<span class="current_price">$73.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart">Add to cart</a>
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
												<a class="primary_img" href="product-details"><img src="assets/img/product/product9.jpg" alt=""></a>
												<a class="secondary_img" href="product-details"><img src="assets/img/product/product10.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details">Kaoreet lobortis sagittis laoreet metus feugiat</a></h4>
													<div class="price_box"> 
														<span class="old_price">$94.00</span>
														<span class="current_price">$92.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details"><img src="assets/img/product/product13.jpg" alt=""></a>
													<a class="secondary_img" href="product-details"><img src="assets/img/product/product14.jpg" alt=""></a>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details">Ornare sed consequat nisl eget mi porttitor</a></h4>
														<div class="price_box"> 
															<span class="old_price">$76.00</span>
															<span class="current_price">$73.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details"><img src="assets/img/product/product3.jpg" alt=""></a>
													<a class="secondary_img" href="product-details"><img src="assets/img/product/product4.jpg" alt=""></a>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details">Eodem modo vel mattis ante facilisis</a></h4>
														<div class="price_box"> 
															<span class="old_price">$86.00</span>
															<span class="current_price">$82.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details"><img src="assets/img/product/product5.jpg" alt=""></a>
												<a class="secondary_img" href="product-details"><img src="assets/img/product/product6.jpg" alt=""></a>
												<div class="label_product">
													<span class="label_sale">Sale</span>
												</div>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details">Epicuri per lobortis eleifend eget laoreet</a></h4>
													<div class="price_box"> 
														<span class="old_price">$82.00</span>
														<span class="current_price">$77.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart">Add to cart</a>
												</div>
											</figcaption>
										</figure>
									</article>
							   </div>
							   
							   <div class="col-lg-3">
									<article class="single_product">
											<figure>
												<div class="product_thumb">
													<a class="primary_img" href="product-details"><img src="assets/img/product/product4.jpg" alt=""></a>
													<a class="secondary_img" href="product-details"><img src="assets/img/product/product3.jpg" alt=""></a>
													<div class="label_product">
														<span class="label_sale">Sale</span>
													</div>
													<div class="action_links">
														<ul>
															<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
															<li class="wishlist"><a href="wishlist." title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
															<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
														</ul>
													</div>
												</div>
												<figcaption class="product_content">
													<div class="product_content_inner">
														<h4 class="product_name"><a href="product-details">Donec eu libero ac dapibus urna placerat</a></h4>
														<div class="price_box"> 
															<span class="old_price">$87.00</span>
															<span class="current_price">$78.00</span>
														</div>
													</div>
													<div class="add_to_cart">
														<a href="cart">Add to cart</a>
													</div>
												</figcaption>
											</figure>
										</article>
							   </div>
							   <div class="col-lg-3">
									<article class="single_product">
										<figure>
											<div class="product_thumb">
												<a class="primary_img" href="product-details"><img src="assets/img/product/product8.jpg" alt=""></a>
												<a class="secondary_img" href="product-details"><img src="assets/img/product/product7.jpg" alt=""></a>
												<div class="action_links">
													<ul>
														<li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="pe-7s-search"></span></a></li>
														<li class="wishlist"><a href="wishlist" title="Add to Wishlist"><span class="pe-7s-like"></span></a></li>
														<li class="compare"><a href="#" title="Add to Compare"><span class="pe-7s-edit"></span></a></li>                                                 
													</ul>
												</div>
											</div>
											<figcaption class="product_content">
												<div class="product_content_inner">
													<h4 class="product_name"><a href="product-details">Eodem modo vel mattis ante facilisis</a></h4>
													<div class="price_box"> 
														<span class="old_price">$86.00</span>
														<span class="current_price">$82.00</span>
													</div>
												</div>
												<div class="add_to_cart">
													<a href="cart">Add to cart</a>
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



