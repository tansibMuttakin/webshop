@extends('layouts.front')
@section('content')
    
    <div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="cart-heading">Cart</h1>
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>remove</th>
                                            <th>images</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cartItems as $item)
                                        <tr>
                                            <td class="product-remove"><a href="{{route('cart.destroy', $item->id)}}"><i class="pe-7s-close" style="hover:red;"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{$item->name}}</a></td>
                                            <td class="product-price-cart"><span class="amount">$ {{$item->price}}</span></td>
                                            <td class="product-quantity">
                                                <form action="{{route('cart.update', $item->id)}}">
                                                    <input value="{{$item->quantity}}" name="quantity" min="1" type="number">
                                                    <input class="button" type="submit" value="save">
                                                </form>
                                            </td>
                                            <td class="product-subtotal">{{($item->price)*($item->quantity)}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="coupon-all">
                                        <form action="#">
                                            <!-- <div class="coupon">
                                                <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                                <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                            </div> -->
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <li>Subtotal<span>N/A</span></li>
                                            <li>Total<span>$ {{Cart::session(auth()->id())->getTotal()}}</span></li>
                                        </ul>
                                        <a href="{{route('cart.checkout')}}">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
    </div>
@endsection