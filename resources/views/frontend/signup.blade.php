@extends('master.master')
@section('title')
<title>Sign Up</title>
@endsection
@section('content')

<!--Breadcrumb start-->
<div class="ed_pagetitle">
    <div class="ed_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-6">
                <div class="page_title">
                    <h2>sign up</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="homepage">home</a></li>
                    <li><i class="fa fa-chevron-left"></i></li>
                    <li><a href="signup">sign up</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<div class="ed_transprentbg ed_toppadder80 ed_bottompadder80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                <div class="ed_teacher_div">
                    <div class="ed_heading_top">
                        <h3>sign up</h3>
                    </div>
                    <form class="ed_contact_form ed_toppadder40" method="post" action="{{ route('postsignup') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">First Name :</label>
                            <input type="text" name="registerUser_firstname" class="form-control" required> 
                        </div>
                        <div class="form-group">
                            <label class="control-label">Last Name :</label>
                            <input type="text" name="registerUser_lastname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email :</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password :</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Confirm Password :</label>
                            <input type="password" name="confirm_password" class="form-control" required> 
                        </div>
                        <button class="btn ed_btn ed_orange pull-right">sign up</button>
                        <span>
                            "Already have an account?"
                            <a class="ud-text-bold" href="/login">Log in</a>
                        </span>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection