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
                                        <li><a href="index">Home 1</a></li>
                                        <li><a href="index-2">Home 2</a></li>
                                        <li><a href="index-3">Home 3</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop">shop</a></li>
                                                <li><a href="shop-fullwidth">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list"> Right Sidebar list</a></li>
                                                <li><a href="shop-list">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart">cart</a></li>
                                                <li><a href="wishlist">Wishlist</a></li>
                                                <li><a href="checkout">Checkout</a></li>
                                                <li><a href="my-account">my account</a></li>
                                                <li><a href="404">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details">product details</a></li>
                                                <li><a href="product-sidebar">product sidebar</a></li>
                                                <li><a href="product-grouped">product grouped</a></li>
                                                <li><a href="variable-product">product variable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog">blog</a></li>
                                        <li><a href="blog-details">blog details</a></li>
                                        <li><a href="blog-fullwidth">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar">blog sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about">About Us</a></li>
                                        <li><a href="services">services</a></li>
                                        <li><a href="faq">Frequently Questions</a></li>
                                        <li><a href="contact">contact</a></li>
                                        <li><a href="login">login</a></li>
                                        <li><a href="404">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about">about Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact"> Contact Us</a> 
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
							<a href="index"><img src="assets/img/logo/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-lg-8">                
						<!--main menu start-->
						<div class="main_menu menu_position"> 
							<nav>  
								<ul>
									<li><a  href="index">home<i class="fa fa-angle-down"></i></a>
										<ul class="sub_menu">
											<li><a href="index">Home shop 1</a></li>
											<li><a href="index-2">Home shop 2</a></li>
											<li><a href="index-3">Home shop 3</a></li>
										</ul>
									</li>
									<li class="mega_items"><a class="active" href="shop">shop<i class="fa fa-angle-down"></i></a> 
										<div class="mega_menu">
											<ul class="mega_menu_inner">
												<li><a href="#">Shop Layouts</a>
													<ul>
														<li><a href="shop-fullwidth">Full Width</a></li>
														<li><a href="shop-fullwidth-list">Full Width list</a></li>
														<li><a href="shop-right-sidebar">Right Sidebar </a></li>
														<li><a href="shop-right-sidebar-list"> Right Sidebar list</a></li>
														<li><a href="shop-list">List View</a></li>
													</ul>
												</li>
												<li><a href="#">other Pages</a>
													<ul>
														<li><a href="cart">cart</a></li>
														<li><a href="wishlist">Wishlist</a></li>
														<li><a href="checkout">Checkout</a></li>
														<li><a href="my-account">my account</a></li>
														<li><a href="404">Error 404</a></li>
													</ul>
												</li>
												<li><a href="#">Product Types</a>
													<ul>
														<li><a href="product-details">product details</a></li>
														<li><a href="product-sidebar">product sidebar</a></li>
														<li><a href="product-grouped">product grouped</a></li>
														<li><a href="variable-product">product variable</a></li>

													</ul>
												</li>
											</ul>
										</div>
									</li>
									<li><a href="blog">blog<i class="fa fa-angle-down"></i></a>
										<ul class="sub_menu pages">
											<li><a href="blog-details">blog details</a></li>
											<li><a href="blog-fullwidth">blog fullwidth</a></li>
											<li><a href="blog-sidebar">blog sidebar</a></li>
										</ul>
									</li> 
									<li><a href="contact"> Contact Us</a></li>
									<li><a href="about"> About us</a></li>
									<li><a href="#">pages <i class="fa fa-angle-down"></i></a>
										<ul class="sub_menu pages">
											<li><a href="about">About Us</a></li>
											<li><a href="services">services</a></li>
											<li><a href="faq">Frequently Questions</a></li>
											<li><a href="contact">contact</a></li>
											<li><a href="login">login</a></li>
											<li><a href="404">Error 404</a></li>
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
									<li><a href="my-account">My account</a></li>
									<li><a href="#">Order History</a></li>
									<li><a href="wishlist">Wishlist</a></li>
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

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>shop</h3>
                        <ul>
                            <li><a href="index">home</a></li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--shop  area start-->
    <div class="shop_area shop_fullwidth mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--shop wrapper start-->
                    
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_4" type="button"  class="active  btn-grid-4" data-toggle="tooltip" title="4"></button>
                            <button data-role="grid_3" type="button" class=" btn-grid-3" data-toggle="tooltip" title="3"></button>
                            <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
                        <div class=" niceselect_option">
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option  value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>
                        </div>
                        <div class="page_amount">
                            <p>Showing 1–12 of 21 results</p>
                        </div>
                    </div>
                     <!--shop toolbar end-->
                     <div class="row shop_wrapper">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details">chouette c'est super</a></h4>
										<div class="price_box"> 
											<span class="old_price">$84.00</span>
											<span class="current_price">$79.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details">chouette c'est super</a></h4>
									<div class="price_box"> 
										<span class="old_price">$84.00</span>
										<span class="current_price">$79.00</span>
									</div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>wouhou</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details">Epicuri per lobortis eleifend eget laoreet</a></h4>
										<div class="price_box"> 
											<span class="old_price">$86.00</span>
											<span class="current_price">$81.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details">Epicuri per lobortis eleifend eget laoreet</a></h4>
									<div class="price_box"> 
										<span class="old_price">$86.00</span>
										<span class="current_price">$81.00</span>
									</div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>wouhou</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details">youhouhou</a></h4>
										<div class="price_box"> 
											<span class="old_price">$78.00</span>
											<span class="current_price">$76.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details">youhouhou</a></h4>
									<div class="price_box"> 
										<span class="old_price">$78.00</span>
										<span class="current_price">$76.00</span>
									</div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>wouhou</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details">blablibla</a></h4>
										<div class="price_box"> 
											<span class="old_price">$88.00</span>
											<span class="current_price">$86.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details">blablibla</a></h4>
									<div class="price_box"> 
										<span class="old_price">$88.00</span>
										<span class="current_price">$86.00</span>
									</div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>wouhou</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details">blablabla</a></h4>
										<div class="price_box"> 
											<span class="old_price">$76.00</span>
											<span class="current_price">$72.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details">blablabla</a></h4>
									<div class="price_box"> 
										<span class="old_price">$76.00</span>
										<span class="current_price">$72.00</span>
									</div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>wouhou</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details">wouuuu</a></h4>
										<div class="price_box"> 
											<span class="old_price">$70.00</span>
											<span class="current_price">$65.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details">wouuuu</a></h4>
									<div class="price_box"> 
										<span class="old_price">$70.00</span>
										<span class="current_price">$65.00</span>
									</div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>wouhou</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details">wow c'est du jamais vu</a></h4>
										<div class="price_box"> 
											<span class="old_price">$68.00</span>
											<span class="current_price">$82.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details">wow c'est du jamais vu</a></h4>
									<div class="price_box"> 
										<span class="old_price">$68.00</span>
										<span class="current_price">$82.00</span>
									</div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>wouhou</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details"><img src="assets/img/product/product15.jpg" alt=""></a>
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details">ohlala</a></h4>
										<div class="price_box"> 
											<span class="old_price">$65.00</span>
											<span class="current_price">$62.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details">ohlala</a></h4>
									<div class="price_box"> 
										<span class="old_price">$65.00</span>
										<span class="current_price">$62.00</span>
									</div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>wouhou</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details">trop bien</a></h4>
										<div class="price_box"> 
											<span class="old_price">$60.00</span>
											<span class="current_price">$55.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details">trop bien</a></h4>
									<div class="price_box"> 
										<span class="old_price">$60.00</span>
										<span class="current_price">$55.00</span>
									</div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>wouhou</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details">wow</a></h4>
										<div class="price_box"> 
											<span class="old_price">$78.00</span>
											<span class="current_price">$76.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details">wow</a></h4>
									<div class="price_box"> 
										<span class="old_price">$78.00</span>
										<span class="current_price">$76.00</span>
									</div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>wouhou</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details">chouette c'est super</a></h4>
										<div class="price_box"> 
											<span class="old_price">$84.00</span>
											<span class="current_price">$79.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details">chouette c'est super</a></h4>
									<div class="price_box"> 
										<span class="old_price">$84.00</span>
										<span class="current_price">$79.00</span>
									</div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>wouhou</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details">trop bien</a></h4>
										<div class="price_box"> 
											<span class="old_price">$69.00</span>
											<span class="current_price">$67.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details">trop bien</a></h4>
									<div class="price_box"> 
										<span class="old_price">$69.00</span>
										<span class="current_price">$67.00</span>
									</div>
                                    <div class="product_rating">
                                        <ul>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_desc">
                                        <p>wouhou</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
    @endsection