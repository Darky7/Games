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
                       <h3>cart</h3>
                        <ul>
                            <li><a href="index">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
     <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">  
            <form action="#"> 
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                            <thead>
                                <tr>
                                    <th class="product_remove">Delete</th>
                                    <th class="product_thumb">Image</th>
                                    <th class="product_name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product_total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a></td>
                                    <td class="product_name"><a href="#">Handbag fringilla</a></td>
                                    <td class="product-price">£65.00</td>
                                    <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                    <td class="product_total">£130.00</td>


                                </tr>

                                <tr>
                                   <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a></td>
                                    <td class="product_name"><a href="#">Handbags justo</a></td>
                                    <td class="product-price">£90.00</td>
                                    <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                    <td class="product_total">£180.00</td>


                                </tr>
                                <tr>
                                   <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                    <td class="product_thumb"><a href="#"><img src="assets/img/s-product/product3.jpg" alt=""></a></td>
                                    <td class="product_name"><a href="#">Handbag elit</a></td>
                                    <td class="product-price">£80.00</td>
                                    <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                    <td class="product_total">£160.00</td>


                                </tr>

                            </tbody>
                        </table>   
                            </div>  
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>      
                        </div>
                     </div>
                 </div>
                 <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">   
                                    <p>Enter your coupon code if you have one.</p>                                
                                    <input placeholder="Coupon code" type="text">
                                    <button type="submit">Apply coupon</button>
                                </div>    
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Subtotal</p>
                                       <p class="cart_amount">£215.00</p>
                                   </div>
                                   <div class="cart_subtotal ">
                                       <p>Shipping</p>
                                       <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                   </div>
                                   <a href="#">Calculate shipping</a>

                                   <div class="cart_subtotal">
                                       <p>Total</p>
                                       <p class="cart_amount">£215.00</p>
                                   </div>
                                   <div class="checkout_btn">
                                       <a href="#">Proceed to Checkout</a>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form> 
        </div>     
    </div>
     <!--shopping cart area end -->
 @endsection