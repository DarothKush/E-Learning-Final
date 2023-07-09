@extends('master.master')
@section('purchase')
<title?>Contact</title>
@endsection
@section('content')
        <!--header end -->
        <!--Breadcrumb start-->
        <div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>Purchase Course</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="coursesingle">single course</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="purchase_course">Purchase Course</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--Single content start-->
        <div class="ed_graysection ed_purchase_course ed_toppadder80 ed_bottompadder80 course_purchase_wrapper">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="ed_course_single_item">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="ed_course_single_image">
                                    <img src="{{ asset('assets/images/' . $courses->course_img) }}" alt="" class="img-responsive" style="width: 800px; height: 450px;">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-12">
                                    <div class="ed_course_single_info">
                                    <h2>{{$courses->course_name}} <span>$ {{$courses->price}}</span></h2>
                                        <div class="ed_abbcart">
                                            <form action="{{url('add_cart', $courses->course_id)}}" method="POST">
                                            @csrf
                                            <input class="btn ed_btn ed_green" type="submit" value="Add Cart"></input>
                                            </form>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="ed_course_single_tab ed_toppadder40">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-bs-toggle="tab">description</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="description">
                                                    <div class="ed_course_tabconetent">
                                                        <h2>about course</h2>
                                                        <p>{{$courses->course_description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab End-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="sidebar_wrapper_upper">
                            <div class="sidebar_wrapper">
                                <aside class="widget widget_cart">
                                    <div class="course_single_item">
                                        <div class="course_single_info">

                                            <div class="button_cart">
                                                <a href="{{ route('cart') }}" class="btn ed_btn ed_green">view cart</a><a href="{{ route('checkout.index') }}" class="btn ed_btn ed_orange pull-right">checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>

                            </div>
                        </div>
                    </div>
                    <!--Sidebar End-->

                </div>
            </div>

        </div>

        <!--Single content end-->
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
        <!--Newsletter Section six end-->
@stop 