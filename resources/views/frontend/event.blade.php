 @extends('master.master')
 @section('title')
 <title>Events</title>
 @endsection
 @section('content')
 <!--Breadcrumb start-->
 <div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>educo events</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="events.html">educo events</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--Single content start-->
        <div class="ed_single_wrapper ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div id="ed_custom_select">
                                    <a class="ed_custom_select_box_button ed_btn ed_green" data-select-value="no-selection">
                                        <span>sort by </span>
                                    </a>
                                    <ul class="ed_custom_select_box_options">
                                        <li><a data-select-value="first-item">date</a></li>
                                        <li><a data-select-value="second-item">time</a></li>
                                    </ul>
                                </div>
                                <div class="on_map ed_btn ed_green">show events on map</div>
                                <div class="on_image ed_btn ed_green" style="display:none;">show events on image</div>
                            </div>
                            <!-- Section eleven start -->
                            <div class="ed_event_wrapper">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="ed_event_wrapper_item">
                                            <div class="ed_event_wrapper_item_img">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_event_wrapper_item_description">
                                                <h4><a href="event_single.html">Vocational Counselling</a></h4>
                                                <span>September 17 @ 7:00 am - 9:00 am</span>
                                                <p>Vocational counselling is a career focused on helping people who need to find a job. Pretty obvious, right?</p>
                                                <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="ed_event_wrapper_item">
                                            <div class="ed_event_wrapper_item_img">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_event_wrapper_item_description">
                                                <h4><a href="event_single.html">Elementary School</a></h4>
                                                <span>September 23 @ 7:30 am - 12:00 am</span>
                                                <p>We offer these billing seminars to AMA member physicians along with their staff (attend the seminar)..</p>
                                                <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="ed_event_wrapper_item">
                                            <div class="ed_event_wrapper_item_img">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_event_wrapper_item_description">
                                                <h4><a href="event_single.html">Student Guidance</a></h4>
                                                <span>September 25 @ 8:30 am - 10:00 am</span>
                                                <p>Sometimes students need help with things unrelated to school. Where we come in and make sure you are happy .</p>
                                                <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="ed_event_wrapper_item">
                                            <div class="ed_event_wrapper_item_img">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_event_wrapper_item_description">
                                                <h4><a href="event_single.html">Girls on Rails</a></h4>
                                                <span>September 27 @ 10:30 pm - 12:00 pm</span>
                                                <p>In a lot of various jobs, psycho tests are something you will have to deal with girls becomes.</p>
                                                <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="ed_event_wrapper_item">
                                            <div class="ed_event_wrapper_item_img">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_event_wrapper_item_description">
                                                <h4><a href="event_single.html">Coding Seminar</a></h4>
                                                <span>September 28 @ 1:30 pm - 5:00 pm</span>
                                                <p>Coding Seminar is a career focused on helping people who need to find a job. Pretty obvious, as well right?</p>
                                                <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="ed_event_wrapper_item">
                                            <div class="ed_event_wrapper_item_img">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_event_wrapper_item_description">
                                                <h4><a href="event_single.html">JavaScript Campus</a></h4>
                                                <span>September 29 @ 7:30 pm - 9:00 am</span>
                                                <p>We can offer help for elementary schools as well. Make sure your kid becomes a superstar in JavaScript.</p>
                                                <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="ed_event_wrapper_item">
                                            <div class="ed_event_wrapper_item_img">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_event_wrapper_item_description">
                                                <h4><a href="event_single.html">management prog.</a></h4>
                                                <span>September 30 @ 1:30 am - 5:00 pm</span>
                                                <p>In the fast-paced business world, human capital mngmnt systems have been slowing people down with silted.</p>
                                                <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="ed_event_wrapper_item">
                                            <div class="ed_event_wrapper_item_img">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_event_wrapper_item_description">
                                                <h4><a href="event_single.html">Model Specificity</a></h4>
                                                <span>October 1 @ 7:30 am - 9:00 am</span>
                                                <p>Vague assessments like “great job,” or “needs more work” are the opposite of the kind of resolute specificity.</p>
                                                <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="ed_event_wrapper_item">
                                            <div class="ed_event_wrapper_item_img">
                                                <img src="https://dummyimage.com/263x263/000/fff" alt="item1" class="img-responsive">
                                            </div>
                                            <div class="ed_event_wrapper_item_description">
                                                <h4><a href="event_single.html">mobile capabilities</a></h4>
                                                <span>October 3 @ 12:30 am - 2:00 am</span>
                                                <p>Administrators can activate SuccessFactors Mobile for select individuals, groups access all mobile.</p>
                                                <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="ed_blog_bottom_pagination">
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
                        <!-- Section eleven end -->
                    </div>
                    <!--Sidebar Start-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="sidebar_wrapper">
                            <aside class="widget widget_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
							</span>
                                </div>
                            </aside>
                            <aside class="widget widget_calendar">
                                <h4 class="widget-title">Events calendar</h4>
                                <div class="jquery-calendar"></div>
                            </aside>
                            <aside class="widget widget_categories">
                                <h4 class="widget-title">Events Documented</h4>
                                <ul>
                                    <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Physics Championship</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> The First Color Run</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Tea For Everyone</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Catrina Charity</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Edution Orchestra</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Welcome Party</a></li>
                                </ul>
                            </aside>
                            <aside class="widget widget_tag_cloud">
                                <h4 class="widget-title">Search by Tags</h4>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">university</a>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">skill</a>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">tests</a>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">exams</a>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">elementary school</a>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">college</a>
                                <a href="javascript:void(0);" class="ed_btn ed_orange">edution</a>
                            </aside>
                        </div>
                    </div>
                    <!--Sidebar End-->
                </div>
            </div>
        </div>
        <!--Single content end-->
        <!--skill section start -->
        <div class="ed_graysection ed_toppadder90 ed_bottompadder90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="skill_section">
                            <h4><a href="javascript:void(0);">See our events gallery</a></h4>
                            <p>We excell in multiple areas, but there are some in which we are absolutely rocking.</p>
                            <span><i class="fa fa-file-image-o"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="skill_section">
                            <h4><a href="javascript:void(0);">Want to be a volunteer? <i class="fa fa-long-arrow-right"></i></a></h4>
                            <p>Not a member yet? You need to download this sign-in sheet and make sure you become one.</p>
                            <span><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--skill section end -->
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