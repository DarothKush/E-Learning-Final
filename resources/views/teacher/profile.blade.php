@extends('master.tmaster')
@section('title')
<title>Profile</title>
@endsection
@section('content')
<div class="container">
    <h1 class="mb-5 mx-4">Profile</h1>
    <div class="row">
        <div class=" col-6 col-lg">
            <div class="border rounded-top py-4 px-3 mx-4">
                <div class="row">
                    <div class="col-10">
                        <h6><span class="text-secondary">Full Name</span></h6>
                        <h6>Phalkun Ray</h6>
                    </div>
                    <div class="col-2 center">
                        <button class="border-0 text-danger " onclick="showDiv(1)">Edit</button>
                    </div>
                </div>
            </div>
            <div class="border rounded-top py-4 px-3 mx-4">
                <div class="row">
                    <div class="col-10">
                        <h6><span class="text-secondary">Email</span></h6>
                        <h6>Phalkun@Ray</h6>
                    </div>
                    <div class="col-2 center">
                        <button class="border-0 text-danger " onclick="showDiv(2)">Edit</button>
                    </div>
                </div>
            </div>
            <div class="border rounded-top py-4 px-3 mx-4">
                <div class="row">
                    <div class="col-10">
                        <h6><span class="text-secondary">Password</span></h6>
                        <h6>********</h6>
                    </div>
                    <div class="col-2 center">
                        <button class="border-0 text-danger " onclick="showDiv(3)">Edit</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-6">
            <div class="mx-5 mb-5 d-flex justify-content-center">
                <div class=" user-profile">
                    <img src="{{asset('assets/images/property/user.png')}}">
                    <h5>Phalkun</h5>
                    <h6>phalkunloy9@gmail.com</h6>
                </div>


            </div>

            <!-- pop up when edit -->
            <!-- name -->
            <div id="div1"  class="hide">
                <div class="d-flex justify-content-center">
                    <h3 class="mx-auto" id="title-form">Change Name</h3>

                </div>
                <div class="border rounded-top py-4 px-3 mx-4" >
                    <form action="">
                        <div class="row">
                            <div class="col-10">
                                <h6><span class="text-dark">New Name</span></h6>
                                <input class="form-control" type="text" name="newname" placeholder="Enter new name">
                            </div>
                            <div class="col-2 ">
                                <p class="text-white">a</p>
                                <p class="text-danger ">Change</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- email -->
            <div id="div2" class="hide">
                <div class="d-flex justify-content-center">
                    <h3 class="mx-auto" id="title-form">Change Email</h3>

                </div>
                <div class="border rounded-top py-4 px-3 mx-4" >
                    <form action="">
                        <div class="row">
                            <div class="col-10">
                                <h6><span class="text-dark">New Email</span></h6>
                                <input class="mb-2 form-control" type="text" name="newname"
                                    placeholder="Enter new email">

                                <h6><span class="text-dark">Password</span></h6>
                                <input class="mb-2 form-control" type="password" name="password_email"
                                    placeholder="Enter passsword">
                            </div>
                            <div class="col-2 buttom">
                                <p class="text-white">a</p>
                                <p type="submit" class="text-danger ">Change</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="div3" class="hide">
                <div class="d-flex justify-content-center">
                    <h3 class="mx-auto" id="title-form">Change Password</h3>
                </div>
                <div class="border rounded-top py-4 px-3 mx-4" >
                    <form action="">

                        <div class="row">
                            <div class="col-10">
                                <h6><span class="text-dark">OLd Password</span></h6>
                                <input class="mb-2 form-control" type="password" name="oldpassword"
                                    placeholder="Enter old passsword">

                                <h6><span class="text-dark">New Password</span></h6>
                                <input class="mb-2 form-control" type="password" name="newpassword"
                                    placeholder="Enter new passsword">

                                <h6><span class="text-dark">Confirm Password</span></h6>
                                <input class="mb-2 form-control" type="password" name="confirmpassword"
                                    placeholder="Confirm passsword">

                            </div>
                            <div class="col-2 buttom ">
                                <p class="text-white">a</p>
                                <p type="submit" class="text-danger ">Change</p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
</div>


@endsection