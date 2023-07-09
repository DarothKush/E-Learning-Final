@extends('master.master')
@section('title')
<title>Check Out</title>
@endsection
@section('content')
 <!--Breadcrumb start-->
 <div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>Checkout</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="homepage">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="checkout">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--checkout start-->
        <div class="ed_graysection ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="woo-cart-table">
                            <form class="checkout woocommerce-checkout">
                                <div class="row">
                                  <form action="{{url('placeorder')}}" method="POST" >
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <h3 class="checkout-heading">Billing Details</h3>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <!-- <label>Country <sup>*</sup></label>
                                                    <select class="form-control">
												<option value="0">Select a country…</option>
												<option value="1">Åland Islands</option>
												<option value="2">Algeria</option>
												<option value="3">Australia</option>
												<option value="4">Brazil</option>
												<option value="5">India</option>
												<option value="6">Switzerland</option>
												<option value="7">United Kingdom (UK)</option>
												<option value="8">United States (US)</option>
											</select> -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label>first name <sup>*</sup></label>
                                                    <input type="text" name="first_name" class="form-control" placeholder="first_name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label>last name <sup>*</sup></label>
                                                    <input type="text" name="last_name" class="form-control" placeholder="last_name">
                                                </div>
                                            </div>
                    
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Billing Address <sup>*</sup></label>
                                                    <input type="text" name="billing_address" class="form-control" placeholder="billing_address">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Town / City <sup>*</sup></label>
                                                    <input type="text" name="city" class="form-control" placeholder="city">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label>County / Region <sup>*</sup></label>
                                                    <input type="text" name="country" class="form-control" placeholder="country">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label>Postcode / Zip<sup>*</sup></label>
                                                    <input type="text" name="postcode" class="form-control" placeholder="postcode">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <input type="text" name="contact" class="form-control" placeholder="contact">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <h3 class="checkout-heading">Shipping Details</h3>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <!-- <label>Country <sup>*</sup></label>
                                                    <select class="form-control">
												<option value="0">Select a country…</option>
												<option value="1">Åland Islands</option>
												<option value="2">Algeria</option>
												<option value="3">Australia</option>
												<option value="4">Brazil</option>
												<option value="5">India</option>
												<option value="6">Switzerland</option>
												<option value="7">United Kingdom (UK)</option>
												<option value="8">United States (US)</option>
											</select> -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" name="state" class="form-control" placeholder="state">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label> Post / Zip Code</label>
                                                    <input type="text" name="state_zipcode" class="form-control" placeholder="state_zipcode">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h3 class="checkout-heading">Order Details</h3>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <thread>
                                                        <tr>
                                                        <td>Course name</td>
                                                        <td>Price</td>
                                                        </tr>
                                                    </thread>
                                                

                                                    @foreach ($data as $item)
                                                    <tr>
                                                        <td>{{$item-> course_name}}</td>
                                                        <td><t/d>
                                                        <td>{{$item-> price}}</td>
                                        
                                                    </tr>
                                                    @endforeach

                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn ed_btn pull-right ed_orange">place order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--checkout end-->
@stop