@extends('master.master')
@section('title')
<title>aboutus</title>
@endsection
@section('content')
<div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>Educo Courses</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="course">Educo Courses</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!-- Section eleven start -->
        <div class="ed_courses ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="row">
                        @foreach ($data as $courses)
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="ed_mostrecomeded_course">
                                    <div class="ed_item_img">
                                    <img src="{{ asset('assets/images/' . $courses->course_img) }}" alt="" class="img-responsive" style="width: 360px; height: 360px;">
                                    </div>
                                    <div class="ed_item_description ed_most_recomended_data">
                                        <h4><a href="{{url('coursesingle',$courses->course_id)}}">{{$courses->course_name}} </a><span>$ {{$courses->price}}</span></h4>
                                        <div class="row">
                                            <div class="ed_rating">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <div class="ed_stardiv">
                                                                <div class="star-rating"><span style="width:80%;"></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <div class="row">
                                                                <p>(5 review)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="ed_views">
                                                        <i class="fa fa-users"></i>
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course_detail">
                                            <div class="course_faculty">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt=""> {{$courses->teacher_name}}</a>
                                            </div>
                                        </div>
                                        <p>Project-Based Learning is a flexible tool for framing given academic standards into curriculum flexible tool for framing.</p>
                                        <a href="{{url('coursesingle',$courses->course_id)}}" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                        


                            <div class="col-lg-12">
                                <div class="ed_blog_bottom_pagination">
                                    <nav>
                                        <ul class="pagination">
                                            {{$data->links('pagination::bootstrap-4')}} 
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Sidebar Start-->
                    <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="sidebar_wrapper_upper">
                            <div class="sidebar_wrapper">
                                <aside class="widget widget_search">
                                    <div class="input-group">
                                        @csrf
                                        <form action="{{url('course_search')}}" method="GET">
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                        <span class="input-group-btn">
								        <button class="btn btn-default" type="submit" value="search"><i class="fa fa-search"></i></button>
							            </span>
                                        </div>
                                </aside>        

                            </div>
                        </div>
                    </div>
                    <!--Sidebar End-->
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- Section eleven end -->



@endsection