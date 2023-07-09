@extends('master.master')
@section('title')
<title>Cart</title>
@endsection
@section('content')
<!--Breadcrumb start-->
<div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>Cart</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="homepage">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="cart">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--Cart page start-->
        <div class="ed_graysection ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="woo-cart-table">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>courses name</th>
                                            <th>course description</th>
                                            
                                            <th>price</th>                                     
                                        </tr>
                                        

                                    </thead>
                                    <tbody>
                                        @foreach($cart as $carts)
                                        <tr>
                                        
                                            <th>{{$carts->course_name}}</th>
                                            <th>{{$carts->course_description}}</th>
                                            <th>{{$carts->price}}</th>                                     
                                            
                                        </tr>
                                        @endforeach    
                                        <tr>

                                           
                                            <td colspan="3">
                                                <div class="woo_coupon_code">
                                                    <form class="form-inline">
                                                        <div class="form-group">
                                                            <input type="text" name="coupon_code" class="form-control" value="" placeholder="Coupon code">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" class="btn ed_btn ed_green" name="apply_coupon" value="Apply Coupon">
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                            <td colspan="3">
                                                <div class="ed_update_btn">
                                                    <input type="submit" class="btn ed_btn ed_green" name="update_cart" value="Update Cart">
                                                </div>
                                            </td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="ed_cart_collaterals">
                        <div class="cart_totals">
                            <h2>Cart Totals</h2>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount" id="subtotal">{{$subtotal}}</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><span class="amount" id="total">{{$total}}</span> </td>
                                    </tr>

                                    <script>
    
                             const subtotalElement = document.getElementById('subtotal').querySelector('span');
                             const totalElement = document.getElementById('total').querySelector('span');


                            let subtotal = 0;
                            let total = 0;
                            @foreach($cart as $item)
                            subtotal += {{ $item->price }};
                            @endforeach
                            total = subtotal; 
                            subtotalElement.textContent = subtotal;
                            totalElement.textContent = total;
                            </script>
                                </tbody>
                            </table>
                            <div class="wc-proceed-to-checkout">
                                <a href="checkout" class="btn ed_btn ed_green">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--cart page end-->
        <!--Newsletter Section six start-->
        <div class="ed_newsletter_section">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                <div class="ed_newsletter_section_heading">
                                    <h4>Let us inform you about everything important directly.</h4>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="row">
                                    <div class="ed_newsletter_section_form">
                                        <form class="form row m-0">
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                                <input class="form-control" type="text" placeholder="Newsletter Email" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                <button class="btn ed_btn ed_green">confirm</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop       <!--Newsletter Section six end-->