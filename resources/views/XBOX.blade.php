@extends('layout')

@section('content')

<body>


@foreach($games as $game)

<article class="single_product1">
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
                    <span class="current_price">EUR {{$game->price}} / {{$game->plateform_id}}</span>
                </div>
            </div>
            <div class="add_to_cart">
                <a href="cart">Add to cart</a>
            </div>
        </figcaption>
    </figure>
</article>



    @endforeach




@endsection