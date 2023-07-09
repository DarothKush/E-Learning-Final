@extends('master.master')
@section('title')
<title>aboutus</title>
@endsection
@section('content')

<!--Breadcrumb start-->
<div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>Educo Instructor</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="homepage">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="allteacher">Educo Instructor</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--instructor single start-->
        <div class="ed_dashboard_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="ed_sidebar_wrapper">
                            <div class="ed_profile_img">
                                <img src="https://dummyimage.com/263x263/000/fff" alt="Profile Image" class="img-responsive" />
                            </div>
                            <h3>joanna simpson</h3>
                            <p><span>active :- </span> 20 Min ago</p>
                            <div class="ed_tabs_left">
                                <ul class="nav nav-tabs">
                                    <li><a class="active" href="#a" data-bs-toggle="tab">profile</a></li>
                                    <li><a href="#b" data-bs-toggle="tab">courses <span>4</span></a></li>
                                    <li><a href="#c" data-bs-toggle="tab">activity</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                        <div class="ed_dashboard_tab">
                            <div class="tab-content">
                                <div class="tab-pane active" id="a">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#view" aria-controls="view" role="tab" data-bs-toggle="tab">instructor Detail</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="view">
                                                    <div class="ed_inner_dashboard_info">
                                                        <h2> joanna simpson (instructor)</h2>
                                                        <table id="profile_view_settings">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Location</th>
                                                                    <th>Intro</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Joanna Simpson</td>
                                                                    <td>London</td>
                                                                    <td>I am Joanna Simpson. I am from London.</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="b">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#my" aria-controls="my" role="tab" data-bs-toggle="tab">courses</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="my">
                                                    <div class="ed_inner_dashboard_info">
                                                        <h2>all courses by Joanna Simpson</h2>
                                                        <div class="ed_mostrecomeded_course_slider">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 ed_bottompadder20">
                                                                    <div class="ed_item_img">
                                                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                                                    </div>
                                                                    <div class="ed_item_description ed_most_recomended_data">
                                                                        <h4><a href="coursesingle">Project Learning </a><span>£25</span></h4>
                                                                        <div class="row">
                                                                            <div class="ed_rating">
                                                                                <div class="col-lg-6 col-md-7 col-sm-6 col-6">
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
                                                                                <div class="col-lg-6 col-md-5 col-sm-6 col-6">
                                                                                    <div class="ed_views">
                                                                                        <i class="fa fa-users"></i>
                                                                                        <span>35 students</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>Project-Based Learning is a flexible tool for framing given academic standards into flexible tool for framing.</p>
                                                                        <a href="coursesingle" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 ed_bottompadder20">
                                                                    <div class="ed_item_img">
                                                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                                                    </div>
                                                                    <div class="ed_item_description ed_most_recomended_data">
                                                                        <h4><a href="coursesingle">Billing Seminar</a><span>£20</span></h4>
                                                                        <div class="row">
                                                                            <div class="ed_rating">
                                                                                <div class="col-lg-6 col-md-7 col-sm-6 col-6">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="ed_stardiv">
                                                                                                <div class="star-rating"><span style="width:80%;"></span></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="row">
                                                                                                <p>(3 review)</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-5 col-sm-6 col-6">
                                                                                    <div class="ed_views">
                                                                                        <i class="fa fa-users"></i>
                                                                                        <span>55 students</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>We offer these billing seminars to AMA member physicians along with their staff (at least must attend the seminar).</p>
                                                                        <a href="coursesingle" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 ed_bottompadder20">
                                                                    <div class="ed_item_img">
                                                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                                                    </div>
                                                                    <div class="ed_item_description ed_most_recomended_data">
                                                                        <h4><a href="coursesingle">Girls On Rails </a><span>£40</span></h4>
                                                                        <div class="row">
                                                                            <div class="ed_rating">
                                                                                <div class="col-lg-6 col-md-7 col-sm-6 col-6">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="ed_stardiv">
                                                                                                <div class="star-rating"><span style="width:80%;"></span></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="row">
                                                                                                <p>(8 review)</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-5 col-sm-6 col-6">
                                                                                    <div class="ed_views">
                                                                                        <i class="fa fa-users"></i>
                                                                                        <span>45 students</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>In a lot of various jobs, psychology tests are something you will have to deal with. We can prepare you.</p>
                                                                        <a href="coursesingle" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 ed_bottompadder20">
                                                                    <div class="ed_item_img">
                                                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                                                    </div>
                                                                    <div class="ed_item_description ed_most_recomended_data">
                                                                        <h4><a href="coursesingle">programming </a><span>£38</span></h4>
                                                                        <div class="row">
                                                                            <div class="ed_rating">
                                                                                <div class="col-lg-6 col-md-7 col-sm-6 col-6">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="ed_stardiv">
                                                                                                <div class="star-rating"><span style="width:80%;"></span></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                                                            <div class="row">
                                                                                                <p>(9 review)</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-5 col-sm-6 col-6">
                                                                                    <div class="ed_views">
                                                                                        <i class="fa fa-users"></i>
                                                                                        <span>60 students</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>Sometimes students need help with things unrelated to school. Where we come in and make sure you are happy .</p>
                                                                        <a href="coursesingle" class="ed_getinvolved">get involved <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="c">
                                    <div class="ed_dashboard_inner_tab">
                                        <div role="tabpanel">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation"><a class="active" href="#personal" aria-controls="personal" role="tab" data-bs-toggle="tab">personal</a></li>
                                                <li role="presentation"><a href="#mentions" aria-controls="mentions" role="tab" data-bs-toggle="tab">mentions</a></li>
                                                <li role="presentation"><a href="#favourites" aria-controls="favourites" role="tab" data-bs-toggle="tab">favourites</a></li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="personal">
                                                    <div class="ed_inner_dashboard_info">
                                                        <div class="ed_course_single_info">
                                                            <div class="ed_add_students">
                                                                <img src="https://dummyimage.com/263x263/000/fff" alt="">
                                                                <span>student started course course status 1 weeks, 2 days ago</span>
                                                                <p>Student adler braxton started the course Course Status</p>
                                                            </div>
                                                            <div class="ed_add_students">
                                                                <img src="https://dummyimage.com/263x263/000/fff" alt="">
                                                                <span>student started course course status 1 weeks, 4 days ago</span>
                                                                <p>Student baldwin dallas started the course Course Status</p>
                                                            </div>
                                                            <div class="ed_add_students">
                                                                <img src="https://dummyimage.com/263x263/000/fff" alt="">
                                                                <span>student started course course status 1 weeks, 3 days ago</span>
                                                                <p>Student carney Tate started the course Course Status</p>
                                                            </div>
                                                            <div class="ed_add_students">
                                                                <img src="https://dummyimage.com/263x263/000/fff" alt="">
                                                                <span>student started course course status 2 weeks, 4 days ago</span>
                                                                <p>Student dwight easton started the course Course Status</p>
                                                            </div>
                                                            <div class="ed_add_students">
                                                                <img src="https://dummyimage.com/263x263/000/fff" alt="">
                                                                <span>student started course course status 2 weeks, 5 days ago</span>
                                                                <p>Student elbert wade started the course Course Status</p>
                                                            </div>
                                                            <div class="ed_add_students">
                                                                <img src="https://dummyimage.com/263x263/000/fff" alt="">
                                                                <span>student started course course status 2 weeks, 2 days ago</span>
                                                                <p>Student hailey kyler started the course Course Status</p>
                                                            </div>
                                                            <div class="ed_add_students">
                                                                <img src="https://dummyimage.com/263x263/000/fff" alt="">
                                                                <span>student started course course status 3 weeks, 3 days ago</span>
                                                                <p>Student graham ryder started the course Course Status</p>
                                                            </div>
                                                            <div class="ed_add_students">
                                                                <img src="https://dummyimage.com/263x263/000/fff" alt="">
                                                                <span>student started course course status 3 weeks, 6 days ago</span>
                                                                <p>Student jaxon keegan started the course Course Status</p>
                                                            </div>
                                                            <div class="ed_add_students">
                                                                <img src="https://dummyimage.com/263x263/000/fff" alt="">
                                                                <span>student started course course status 4 weeks, 2 days ago</span>
                                                                <p>Student kealy sage started the course Course Status</p>
                                                            </div>
                                                            <div class="ed_add_students">
                                                                <img src="https://dummyimage.com/263x263/000/fff" alt="">
                                                                <span>student started course course status 4 weeks, 4 days ago</span>
                                                                <p>Student lavern gunner started the course Course Status</p>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="row">
                                                                    <div class="ed_blog_bottom_pagination ed_toppadder40">
                                                                        <nav>
                                                                            <ul class="pagination">
                                                                                <li><a href="javascript:void(0);">1</a></li>
                                                                                <li><a href="javascript:void(0);">2</a></li>
                                                                                <li><a href="javascript:void(0);">3</a></li>
                                                                                <li class="active"><a href="javascript:void(0);">Next <span class="sr-only">(current)</span></a></li>
                                                                            </ul>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="mentions">
                                                    <div class="ed_inner_dashboard_info">
                                                        <h2>sorry, there was no mentions event found. please try a different filter</h2>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="favourites">
                                                    <div class="ed_inner_dashboard_info">
                                                        <h2>sorry, there was no favourites event found. please try a different filter</h2>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--tab End-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--instructor single end-->
@stop