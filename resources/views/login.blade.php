@extends('layout')

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
									<li class="mega_items"><a href="shop">shop<i class="fa fa-angle-down"></i></a> 
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
									<li><a class="active" href="#">pages <i class="fa fa-angle-down"></i></a>
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
                        <h3>Login</h3>
                        <ul>
                            <li><a href="index">home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        <form action="#">
                            <p>   
                                <label>Username or email <span>*</span></label>
                                <input type="text">
                             </p>
                             <p>   
                                <label>Passwords <span>*</span></label>
                                <input type="password">
                             </p>   
                            <div class="login_submit">
                               <a href="#">Lost your password?</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label>
                                <button type="submit">login</button>
                                
                            </div>

                        </form>
                     </div>    
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Register</h2>
                        <form action="#">
                            <p>   
                                <label>Email address  <span>*</span></label>
                                <input type="text">
                             </p>
                             <p>   
                                <label>Passwords <span>*</span></label>
                                <input type="password">
                             </p>
                            <div class="login_submit">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>    
                </div>
                <!--register area end-->
            </div>
        </div>    
    </div>
    <!-- customer login end -->
    @endsection