@extends('master.master')
@section('title')
<title>Contact</title>
@endsection
@section('content')
 <!--Breadcrumb start-->
 <div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--Section fourteen Contact form start-->
        <div class="ed_transprentbg ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="ed_heading_top">
                            <h3>Send us a message</h3>
                        </div>
                    </div>
                    <div class="ed_contact_form ed_toppadder60 row m-0">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" id="uname" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" id="umail" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" id="sub" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <textarea id="msg" class="form-control" rows="6" placeholder="Message"></textarea>
                            </div>
                            <button id="ed_submit" class="btn ed_btn ed_orange pull-right">send</button>
                            <p id="err"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Section fourteen Contact form start-->
        <!--Section fifteen Contact form start-->
        <div class="ed_event_single_contact_address ed_toppadder70 ed_bottompadder70">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="ed_heading_top ed_bottompadder70">
                        <h3>Contact & Find</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="ed_event_single_address_info ed_toppadder50 ed_bottompadder50">
                                    <h4 class="ed_bottompadder30">contact info</h4>
                                    <p class="ed_bottompadder40 ed_toppadder10">You can always reach us via following contact details. We will give our best to reach you as possible.</p>
                                    <p>Phone: <span>1-220-090-080</span></p>
                                    <p>Email: <a href="javascript:void(0);">info@edutioncollege.gov.co.uk</a></p>
                                    <p>Website: <a href="javascript:void(0);">http://www.edutioncollege.gov.co.uk</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="ed_event_single_address_map">
                                    <div id="map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462560.30120302504!2d54.947561088342766!3d25.076381466775672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1633159256205!5m2!1sen!2sin"
                                            width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Section fifteen Contact form start-->
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