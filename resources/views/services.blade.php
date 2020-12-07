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
									<li><a  href="index.html">home<i class="fa fa-angle-down"></i></a>
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
									<li><a class="active" href="#">pages <i class="fa fa-angle-down"></i></a>
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
 
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>services</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>our services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--services img area-->
    <div class="services_gallery">
        <div class="container">  
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_services">
                        <div class="services_thumb">
                            <img src="assets/img/service/services1.jpg" alt="">
                        </div>
                        <div class="services_content">
                           <h3>DESIGN THE COVER</h3>
                           <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services">
                        <div class="services_thumb">
                            <img src="assets/img/service/services2.jpg" alt="">
                        </div>
                        <div class="services_content">
                           <h3>DESIGN THE COVER</h3>
                           <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_services">
                        <div class="services_thumb">
                            <img src="assets/img/service/services3.jpg" alt="">
                        </div>
                        <div class="services_content">
                           <h3>DESIGN THE COVER</h3>
                           <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
    <!--services img end-->

    <!--our services area-->
    <div class="our_services">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="services_title">
                        <h2>OUR SERVICES</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                            eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit..</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-sliders" aria-hidden="true"></i>
                        </div>
                        <div class="services_desc">
                            <h3>BRANDING</h3>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-umbrella"></i>
                        </div>
                        <div class="services_desc">
                            <h3>WEB DESIGN</h3>

                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">

                            <i class="fa fa-camera"></i>

                        </div>
                        <div class="services_desc">
                            <h3>PHOTOGRAPHY</h3>

                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="services_desc">
                            <h3>WEB DEVELOPMENT</h3>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-file-code-o" aria-hidden="true"></i>
                        </div>
                        <div class="services_desc">
                            <h3>CODING</h3>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        </div>
                        <div class="services_desc">
                            <h3>MARKETING</h3>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-headphones"></i>
                        </div>
                        <div class="services_desc">
                            <h3>SUPPORT</h3>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="services_item">
                         <div class="services_icone">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <div class="services_desc">
                            <h3>GRAPHIC DESIGN</h3>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--our services area end-->

    <!--services section area-->
    <div class="unlimited_services">
        <div class="container">  
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="services_section_thumb">
                        <img src="assets/img/service/services4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="unlimited_services_content">
                        <h1>UNLIMITED IDEAS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, suscipit dolorum ullam soluta voluptatem quasi molestias illum possimus, accusantium assumenda inventore debitis ducimus. Quis ducimus, consequatur corrupti, sunt rerum sit atque eum inventore. Autem excepturi reiciendis voluptate totam sit, sunt fugiat voluptatum beatae voluptas ab quia vitae accusamus assumenda facilis perferendis, quam itaque aliquid qui omnis culpa consectetur placeat ipsa quaerat. </p>
                        <div class="view__work">
                            <a href="#">MORE INFO  <i class="fa fa-angle-right"></i></a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>     
    </div> 
    <!--services section end--> 

    <!--price table area -->
    <div class="priceing_table">
        <div class="container">   
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_priceing">
                        <div class="priceing_title">
                            <h1>Standard</h1>
                        </div>
                        <div class="priceing_list">
                            <h1><span>£19</span>/Month</h1>
                            <ul>
                                <li>2 GB Webspace</li>
                                <li>1 Domain</li>
                                <li>PHP 5 Enbled</li>
                                <li>24H – Support</li>
                            </ul>
                            <a href="#">purchase now </a>
                        </div>       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_priceing">
                        <div class="priceing_title">
                            <h1>Returns</h1>
                        </div>
                        <div class="priceing_list">
                            <h1><span>£23</span>/Month</h1>
                            <ul>
                                <li>2 GB Webspace</li>
                                <li>1 Domain</li>
                                <li>PHP 5 Enbled</li>
                                <li>24H – Support</li>
                            </ul>
                            <a class="list_button" href="#">purchase now </a>
                        </div>       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_priceing">
                        <div class="priceing_title">
                            <h1>Affiliate</h1>
                        </div>
                        <div class="priceing_list">
                            <h1><span>£20</span>/Month</h1>
                            <ul>
                                <li>2 GB Webspace</li>
                                <li>1 Domain</li>
                                <li>PHP 5 Enbled</li>
                                <li>24H – Support</li>
                            </ul>
                            <a href="#">purchase now </a>
                        </div>       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_priceing">
                        <div class="priceing_title">
                            <h1>Specials</h1>
                        </div>
                        <div class="priceing_list">
                            <h1><span>£25</span>/Month</h1>
                            <ul>
                                <li>2 GB Webspace</li>
                                <li>1 Domain</li>
                                <li>PHP 5 Enbled</li>
                                <li>24H – Support</li>
                            </ul>
                            <a class="list_button" href="#">purchase now </a>
                        </div>       
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--price table  end-->

    <!--advantages wordpress -->
    <div class="advantages_ecommerce">
        <div class="container">   
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-8 col-sm-12">
                    <div class="advantages_content">
                        <h3>Advantages of Mobile ecommerce theme</h3>
                        <p>Build a professional website system and great user experience</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-12">
                    <div class="advantages_button">
                        <a href="#" title="MORE INFO ">MORE INFO <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--advantages wordpress end-->
 @endsection