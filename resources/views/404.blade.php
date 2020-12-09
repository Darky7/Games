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
														<li><a href="cart.">cart</a></li>
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
    
    <!--error section area start-->
    <div class="error_section">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="error_form">
                        <h1>404</h1>
                        <h2>Opps! PAGE NOT BE FOUND</h2>
                        <p>Sorry but the page you are looking for does not exist, have been<br> removed, name changed or is temporarily unavailable.</p>
                        <form action="#">
                            <input placeholder="Search..." type="text">
                            <button type="submit"><i class="icon-magnifier icons"></i></button>
                        </form>
                        <a href="welcome">Back to home page</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--error section area end--> 
    
   <!--footer area start-->
    <footer class="footer_widgets footer_padding"> 
        <div class="container">
            <div class="footer_top">
                <div class="row">
                    <div class="col-12">
                    	<div class="newsletter_area">
                    		 <div class="section_title">
							   <h2>Keep Connected</h2>
							</div>
							<div class="newsletter_desc">
								<p>Get updates by subscribe our weekly newsletter</p>
							</div>
                   			<div class="subscribe_form">
								<form id="mc-form" class="mc-form footer-newsletter" >
									<input id="mc-email" type="email" autocomplete="off" placeholder="Your email address" />
									<button id="mc-submit">Subscribe</button>
								</form>
								<!-- mailchimp-alerts Start -->
								<div class="mailchimp-alerts text-centre">
									<div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
									<div class="mailchimp-success"></div><!-- mailchimp-success end -->
									<div class="mailchimp-error"></div><!-- mailchimp-error end -->
								</div><!-- mailchimp-alerts end -->
							</div>
                    	</div>
                    </div>    
                 </div>
            </div>
            <div class="footer_middle">
            	<div class="row">
            		<div class="col-12">
            			<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
            		</div>
            	</div>
            </div>
            <div class="footer_bottom">  
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="footer_bottom_left">
                        	<div class="footer_logo">
							   <a href="index"><img src="assets/img/logo/logo2.png" alt=""></a>
							</div>
                        	<div class="copyright_area">
								<p>Copyright  © 2020  <a href="index">Braga</a>.  <a href="https://hasthemes.com/" target="_blank">All rights reserved.</a></p>
							</div>
                        </div>
                    </div> 
                    <div class="col-lg-6 col-md-5">
                       <div class="footer_paypal text-right">
                       		<a href="#"><img src="assets/img/icon/payment.png" alt=""></a>	
                       </div>
                    </div>    
                </div>     
            </div>  
        </div>    
    </footer>
    <!--footer area end-->
@endsection