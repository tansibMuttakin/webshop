@extends('layouts.front')

@section('content')
    <div class="pl-200 pr-200 overflow clearfix">
        <div class="categori-menu-slider-wrapper clearfix">
            <div class="categories-menu">
                <div class="category-heading">
                    <h3> All Departments <i class="pe-7s-angle-down"></i></h3>
                </div>
                <div class="category-menu-list">
                    <ul>
                    @foreach($categories as $category)
                        <li>
                            <a href="{{route('products.index',['category_id'=>$category->id])}}"><img alt="" src="assets/img/icon-img/5.png">{{$category->name}} <i class="pe-7s-angle-right"></i></a>
                            @php
                                $children= TCG\Voyager\Models\Category::where('parent_id',$category->id)->get();
                            @endphp
                            @if($children->isNotEmpty())
                                <div class="category-menu-dropdown">
                                    @foreach($children as $child)
                                        <div class="category-dropdown-style category-common4 mb-40">
                                                <a href="{{route('products.index',['category_id'=>$child->id])}}">
                                                    <h4 class="categories-subtitle"> {{$child->name}}</h4>
                                                </a>
                                                @php
                                                    $grandchild= TCG\Voyager\Models\Category::where('parent_id',$child->id)->get();
                                                @endphp

                                                @if($grandchild->isNotEmpty())
                                                    <ul>
                                                    @foreach($grandchild as $c)
                                                        <li><a href="{{route('products.index',['category_id'=>$c->id])}}"> {{$c->name}}</a></li>
                                                    @endforeach    
                                                    </ul>
                                                @endif
                                        </div>
                                    @endforeach
                                </div>
                            @endif    
                        </li>
                    @endforeach    
                    </ul>
                </div>
            </div>
            <div class="menu-slider-wrapper">
                <div class="menu-style-3 menu-hover text-center">
                    <nav>
                        <ul>
                            <li><a href="index.html">home <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                                <ul class="single-dropdown">
                                    <li><a href="index.html">Fashion</a></li>
                                    <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                    <li><a href="index-fruits.html">fruits</a></li>
                                    <li><a href="index-book.html">book</a></li>
                                    <li><a href="index-electronics.html">electronics</a></li>
                                    <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                    <li><a href="index-food.html">food & drink</a></li>
                                    <li><a href="index-furniture.html">furniture</a></li>
                                    <li><a href="index-handicraft.html">handicraft</a></li>
                                    <li><a target="_blank" href="index-smart-watch.html">smart watch</a></li>
                                    <li><a href="index-sports.html">sports</a></li>
                                </ul>
                            </li>
                            <li><a href="#">pages </a>
                                <ul class="single-dropdown">
                                    <li><a href="about-us.html">about us</a></li>
                                    <li><a href="menu-list.html">menu list</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="register.html">register</a></li>
                                    <li><a href="cart.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">shop <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                                <ul class="single-dropdown">
                                    <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                    <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                    <li><a href="shop.html">grid 4 column</a></li>
                                    <li><a href="shop-grid-box.html">grid box style</a></li>
                                    <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                    <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                    <li><a href="shop-list-box.html">list box style</a></li>
                                    <li><a href="cart.html">shopping cart</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="slider-area">
                    <div class="slider-active owl-carousel">
                        <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(assets/img/slider/5.jpg)">
                            <div class="slider-animation slider-content-style-3 fadeinup-animated">
                                <h2 class="animated">Invention of <br>design platform</h2>
                                <h4 class="animated">Best Product With warranty </h4>
                                <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                            </div>
                        </div>
                        <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(assets/img/slider/20.jpg)">
                            <div class="slider-animation slider-content-style-3 fadeinup-animated">
                                <h2 class="animated">Invention of <br>design platform</h2>
                                <h4 class="animated">Best Product With warranty </h4>
                                <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
        <div class="container-fluid">
            <div class="section-title-4 text-center mb-40">
                <h2>Top Products</h2>
            </div>
            <div class="top-product-style">
                
                <div class="tab-content">
                    <div class="tab-pane active show fade" id="electro1" role="tabpanel">
                        <div class="custom-row-2">
                            @foreach($product as $row)
                                @include('product._single_product')
                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane fade" id="electro2" role="tabpanel">
                        <div class="custom-row-2">
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/8.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">First Air Headphone Black</a></h4>
                                        <span>Headphone</span>
                                        <h5>$133.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/7.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Full Bast Doule Speaker</a></h4>
                                        <span>Headphone</span>
                                        <h5>$110.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/6.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Xo GoPro Hero</a></h4>
                                        <span>Headphone</span>
                                        <h5>$133.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/5.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Twin Wash Dual</a></h4>
                                        <span>Headphone</span>
                                        <h5>$120.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/4.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Play Station Suporting</a></h4>
                                        <span>Headphone</span>
                                        <h5>$180.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/3.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Cannon D300R</a></h4>
                                        <span>Headphone</span>
                                        <h5>$170.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/2.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Wifi Printer For Office</a></h4>
                                        <span>Headphone</span>
                                        <h5>$150.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/1.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Featured Tab Windows</a></h4>
                                        <span>Headphone</span>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="electro3" role="tabpanel">
                        <div class="custom-row-2">
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/4.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">First Air Headphone Black</a></h4>
                                        <span>Headphone</span>
                                        <h5>$133.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/3.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Full Bast Doule Speaker</a></h4>
                                        <span>Headphone</span>
                                        <h5>$110.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/2.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Xo GoPro Hero</a></h4>
                                        <span>Headphone</span>
                                        <h5>$133.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/1.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Twin Wash Dual</a></h4>
                                        <span>Headphone</span>
                                        <h5>$120.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/8.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Play Station Suporting</a></h4>
                                        <span>Headphone</span>
                                        <h5>$180.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/7.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Cannon D300R</a></h4>
                                        <span>Headphone</span>
                                        <h5>$170.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/6.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Wifi Printer For Office</a></h4>
                                        <span>Headphone</span>
                                        <h5>$150.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-col-style-2 custom-col-4">
                                <div class="product-wrapper product-border mb-24">
                                    <div class="product-img-3">
                                        <a href="product-details.html">
                                            <img src="assets/img/product/electro/5.jpg" alt="">
                                        </a>
                                        <div class="product-action-right">
                                            <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                            <a class="animate-top" title="Add To Cart" href="#">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                            <a class="animate-left" title="Wishlist" href="#">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content-4 text-center">
                                        <div class="product-rating-4">
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star yellow"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Featured Tab Windows</a></h4>
                                        <span>Headphone</span>
                                        <h5>$145.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-area-2 wrapper-padding ptb-80">
        <div class="container-fluid">
            <div class="brand-logo-active2 owl-carousel">
                <div class="single-brand">
                    <img src="assets/img/brand-logo/7.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/8.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/9.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/10.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/11.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/12.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/13.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/7.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="assets/img/brand-logo/8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="section-title-5">
                        <h2>Newsletter</h2>
                        <p>Sign Up for get all update news & Get <span>15% off</span></p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="newsletter-style-3">
                        <div id="mc_embed_signup" class="subscribe-form-3 pr-50">
                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your E-mail" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                    </div>
                                    <div class="clear">
                                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


                            
