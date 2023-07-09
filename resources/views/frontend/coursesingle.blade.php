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
                            <h2>Single course</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="{{ route('homepage') }}">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="{{ route('course.index') }}">educo courses</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="{{url('coursesingle',$courses->course_id)}}">Single course</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--Single content start-->
        <div class="ed_graysection ed_course_single ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                        <div class="ed_course_single_item">
                            <div class="ed_course_single_image">
                            <img src="{{ asset('assets/images/' . $courses->course_img) }}" alt="" class="img-responsive" style="width: 800px; height: 450px;">
                            </div>
                            <div class="ed_course_single_info">
                            <h2>{{$courses->course_name}} <span>$ {{$courses->price}}</span></h2>
                                <div class="ed_rating">
                                    <div class="row w-100 justify-content-between">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="ed_stardiv">
                                                        <div class="star-rating"><span style="width:80%;"></span></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <span>(5 review)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6 pull-right text-right">
                                            <div class="ed_views">
                                                <i class="fa fa-users"></i>
                                                <span> students</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  w-100 justify-content-between">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="course_detail">
                                            <div class="course_faculty">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt=""> <a href="instructor_dashboard">{{$courses->teacher_name}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 pull-right text-right">
                                        <div class="ed_course_duration">
                                            time duration: 75 days
                                            <p>post graduation course</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ed_course_single_tab">
                                <div role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation"><a class="active" href="#description" aria-controls="description" role="tab" data-bs-toggle="tab">description</a></li>
                                        <li role="presentation"><a href="#students" aria-controls="students" role="tab" data-bs-toggle="tab">students</a></li>
                                        <li role="presentation"><a href="#news" aria-controls="news" role="tab" data-bs-toggle="tab">news</a></li>
                                        <li role="presentation"><a href="#events" aria-controls="events" role="tab" data-bs-toggle="tab">events</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="description">
                                            <div class="ed_course_tabconetent" placeholder="course_description">
                                                <h2>about course</h2>
                                                <p>{{$courses->Course_description}}</p>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="students">
                                            <div class="ed_inner_dashboard_info">
                                                <div class="ed_course_single_info">
                                                    <h2>total students :- <span>20</span></h2>
                                                    <h5>10 students recently join this course</h5>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>adler braxton</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>baldwin dallas</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>carney Tate</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>dwight easton</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>elbert wade</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>hailey kyler</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>graham ryder</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>jaxon keegan</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>kealy sage</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="ed_add_students">
                                                        <img src="https://dummyimage.com/100x100/000/fff" alt="">
                                                        <span>lavern gunner</span>
                                                        <p>new student</p>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
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
                                        <div role="tabpanel" class="tab-pane" id="news">
                                            <div class="ed_course_tabconetent">
                                                <h2>course news</h2>
                                                <h5>some recent news about this course....</h5>
                                                <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer
                                                    of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter
                                                    consequences that are extremely painful. </p>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="events">
                                            <div class="ed_course_single_info">
                                                <h2>total events on this course :-<span>5</span></h2>
                                                <div class="ed_course_single_inner_tab">
                                                    <div role="tabpanel">
                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation"><a class="active" href="#upcoming" aria-controls="upcoming" role="tab" data-bs-toggle="tab">upcoming</a></li>
                                                            <li role="presentation"><a href="#past" aria-controls="past" role="tab" data-bs-toggle="tab">past</a></li>
                                                        </ul>
                                                        <!-- Tab panes -->
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active" id="upcoming">
                                                                <div class="ed_course_event">
                                                                    <h5>1. mobile capabilities</h5>
                                                                    <p><span>orgnaiger :-</span> James Marco</p>
                                                                    <p><span>held on :-</span> October 1 @ 7:30 Am - 9:00 Am</p>
                                                                    <p>It is pleasure, expound the actual teachings of the great explorer of the truthI will give you a complete account of the system, and No one rejects, dislikes, or avoids pleasure itself,
                                                                        because.
                                                                    </p>
                                                                </div>
                                                                <div class="ed_course_event">
                                                                    <h5>2. Management Prog.</h5>
                                                                    <p><span>orgnaiger :-</span> Fumes Sarcoma</p>
                                                                    <p><span>held on :-</span>October 3 @ 10:30 Am - 2:00 Pm</p>
                                                                    <p>I will give you a complete account of the system, and No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, expound the actual teachings of the great explorer of
                                                                        the truth.</p>
                                                                </div>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane" id="past">
                                                                <div class="ed_course_event">
                                                                    <h5>1. JavaScript Campus.</h5>
                                                                    <p><span>orgnaiger :-</span> Tina Fibonacci</p>
                                                                    <p><span>held on :-</span>September 20 @ 7:30 Pm - 12:00 Am</p>
                                                                    <p>avoids pleasure itself, because it is pleasure, expound the actual teachings of the great explorer of the truth will give you a complete account of the system, and No one rejects, dislikes.</p>
                                                                </div>
                                                                <div class="ed_course_event">
                                                                    <h5>2. Coding Seminar</h5>
                                                                    <p><span>orgnaiger :-</span> James Marco</p>
                                                                    <p><span>held on :-</span> September 10 @ 7:30 Am - 9:00 Am</p>
                                                                    <p>great explorer of the complete account of the system, and No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, expound the actual teachings of the truth.</p>
                                                                </div>
                                                                <div class="ed_course_event">
                                                                    <h5>3. Project Learning</h5>
                                                                    <p><span>orgnaiger :-</span> Shy Tommy</p>
                                                                    <p><span>held on :-</span>September 30 @ 10:30 Am - 2:00 Pm</p>
                                                                    <p>one rejects, dislikes, or avoids pleasure itself, because it is pleasure, of the system, and No expound the actual teachings of the great explorer of the truth.</p>
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
                            </div>
                            <!--tab End-->
                        </div>
                        <div class="ed_time_executor ed_toppadder40">
                            <ul>
                                <li><a href="course_lesson">lessons</a> <span>estimated time</span></li>
                                <li><a href="course_lesson">development overview</a> <span>1Hourse 10 Minuts</span></li>
                                <li><a href="course_lesson">basic html</a> <span>2Hourse 30 Minuts</span></li>
                                <li><a href="course_lesson">Basic CSS</a> <span>3Hourse 15 Minuts</span></li>
                                <li><a href="course_lesson">Advanced HTML + CSS</a> <span>1Hourse 30 Minuts</span></li>
                                <li><a href="course_lesson">Javascript</a> <span>2Hourse 45 Minuts</span></li>
                            </ul>
                        </div>
                    </div>
                    <!--Sidebar Start-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="sidebar_wrapper_upper">
                            <div class="sidebar_wrapper">
                                <aside class="widget widget_button">
                                    <a href="{{url('purchase',$courses->course_id)}}" class="ed_btn ed_green">Join this course</a>
                                </aside>
                                <aside class="widget widget_categories">
                                    <h4 class="widget-title">related courses</h4>
                                    <ul>
                                        <li><a href="coursesingle"><i class="fa fa-chevron-right"></i> Management Prog.</a></li>
                                        <li><a href="coursesingle"><i class="fa fa-chevron-right"></i> ethical heaking</a></li>
                                        <li><a href="coursesingle"><i class="fa fa-chevron-right"></i> Mobile Capabilities</a></li>
                                        <li><a href="coursesingle"><i class="fa fa-chevron-right"></i> Javascript Campus</a></li>
                                        <li><a href="coursesingle"><i class="fa fa-chevron-right"></i> Coding Seminar</a></li>
                                        <li><a href="coursesingle"><i class="fa fa-chevron-right"></i> html css</a></li>
                                        <li><a href="coursesingle"><i class="fa fa-chevron-right"></i> it skills</a></li>

                                    </ul>
                                </aside>
                                <aside class="widget widget_sharing">
                                    <h4 class="widget-title">share this course</h4>
                                    <ul>
                                        <li><a href="coursesingle"><i class="fa fa-facebook"></i> facebook</a></li>
                                        <li><a href="coursesingle"><i class="fa fa-linkedin"></i> linkedin</a></li>
                                        <li><a href="coursesingle"><i class="fa fa-twitter"></i> twitter</a></li>
                                        <li><a href="coursesingle"><i class="fa fa-google-plus"></i> google+</a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                        <div class="ed_sidebar_slider ed_bottompadder10">
               
                            <h3>popular courses</h3>
                            <div id="owl-demo3" class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="{{url('coursesingle',$courses->course_id)}}">{{$courses->course_name}} </a><span>{{$courses->price}}</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item2" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="{{url('coursesingle',$courses->course_id)}}">{{$courses->course_name}}</a><span>{{$courses->price}}</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item3" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="coursesingle">User experience Jam </a><span>£38</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item4" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="coursesingle">Girls on Rails </a><span>free</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="coursesingle">Coding Seminar </a><span>free</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="https://dummyimage.com/263x263/000/fff" alt="item2" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="coursesingle">Javascript Campus </a><span>£60</span></h4>
                                    </div>
                                </div>
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
