@extends('layout')

@section('content')

<body>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>shop</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
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
                                <div class="product_content grid_content">
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Duis pulvinar obortis eleifend elementum</a></h4>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Epicuri per lobortis eleifend eget laoreet</a></h4>
										<div class="price_box"> 
											<span class="old_price">$86.00</span>
											<span class="current_price">$81.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Epicuri per lobortis eleifend eget laoreet</a></h4>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Kaoreet lobortis sagittis laoreet metus is</a></h4>
										<div class="price_box"> 
											<span class="old_price">$78.00</span>
											<span class="current_price">$76.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Kaoreet lobortis sagittis laoreet metus is</a></h4>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Ornare sed consequat nisl eget mi porttitor</a></h4>
										<div class="price_box"> 
											<span class="old_price">$88.00</span>
											<span class="current_price">$86.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Ornare sed consequat nisl eget mi porttitor</a></h4>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Aliquam lobortis pellentesque nisi lectus</a></h4>
										<div class="price_box"> 
											<span class="old_price">$76.00</span>
											<span class="current_price">$72.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Aliquam lobortis pellentesque nisi lectus</a></h4>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Eodem modo vels is mattis antes facilisis</a></h4>
										<div class="price_box"> 
											<span class="old_price">$70.00</span>
											<span class="current_price">$65.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Eodem modo vels is mattis antes facilisis</a></h4>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Fusce ultricies  dolor vitae tristique suscipit</a></h4>
										<div class="price_box"> 
											<span class="old_price">$68.00</span>
											<span class="current_price">$82.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Fusce ultricies  dolor vitae tristique suscipit</a></h4>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="assets/img/product/product15.jpg" alt=""></a>
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Nostrum exercitationem itae posuere nisl</a></h4>
										<div class="price_box"> 
											<span class="old_price">$65.00</span>
											<span class="current_price">$62.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Nostrum exercitationem itae posuere nisl</a></h4>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Pellentesque posuere hendrerit dui quis</a></h4>
										<div class="price_box"> 
											<span class="old_price">$60.00</span>
											<span class="current_price">$55.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Pellentesque posuere hendrerit dui quis</a></h4>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Donec eu libero ac dapibus urna placerat</a></h4>
										<div class="price_box"> 
											<span class="old_price">$78.00</span>
											<span class="current_price">$76.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Donec eu libero ac dapibus urna placerat</a></h4>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Duis pulvinar obortis eleifend elementum</a></h4>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
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
                                <div class="product_content grid_content">
                                    <div class="product_content_inner">
										<h4 class="product_name"><a href="product-details.html">Pellentesque posuere hendrerit dui quis</a></h4>
										<div class="price_box"> 
											<span class="old_price">$69.00</span>
											<span class="current_price">$67.00</span>
										</div>
									</div>
									<div class="add_to_cart">
										<a href="cart.html">Add to cart</a>
									</div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Pellentesque posuere hendrerit dui quis</a></h4>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                    </div>
                                    <div class="add_to_cart shop_list_cart">
										<a href="cart.html">Add to cart</a>
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