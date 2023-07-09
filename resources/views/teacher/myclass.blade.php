@extends('master.tmaster')
@section('title')
<title>My Classes</title>
@endsection
@section('content')


<div class="mymain-body container">
    <div class="bg-top-body rounded">
        <h1>My Classes</h1>
        <div class="nav-item dropdown">


            <div class="mysearch_bar">

                <input class="form-control mr-2 mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                
                <button class="btn btn-light mx-2 my-2 my-sm-0" type="submit">Search</button>
                <!-- <select class="myfilter">
                        <option>Filter</option>
                    </select> -->
            </div>
        </div>

        <div class="ed_courses ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row">
                        @foreach($list as $m)
                            <div class="col-lg-4 col-md-6">
                                <div class="ed_mostrecomeded_course">
                                    <div class="ed_item_img">
                                    <img src="{{ asset('assets/images/' . $m->course_img) }}" alt="" class="img-responsive" style="width: 800px; height: 450px;">


                                            
                                    </div>
                                    <div class="ed_item_description ed_most_recomended_data">
                                        <h4><a href="{{url('coursesingle',$m->course_id)}}">{{$m->course_name}} </a><span>£{{$m->price}}</span></h4>
                                        <div class="row">
                                            <div class="ed_rating">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <div class="ed_stardiv">
                                                                <div class="star-rating"><span
                                                                        style="width:80%;"></span>
                                                                </div>
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
                                                        <span>35 students</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course_detail">
                                            <div class="course_faculty">
                                                <img src="" alt=""> <a
                                                    href="instructor_dashboard.html">{{$m->teacher_name}}</a>
                                            </div>
                                        </div>
                                        <p>{{$m->course_description}}</p>
                                        <a href="{{url('coursesingle',$m->course_id)}}" class="ed_getinvolved">get involved <i
                                                class="fa fa-long-arrow-right"></i></a>
                                        <a href="{{ route('courseedit.edit', ['course_id' => $m->course_id]) }}"><button class="btn btn-white ">edit course</button></a>
                                        <a href="{{ $m->course_id }}/delete"><button class="btn btn-white">delete course</button></a>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                            <div class="col-lg-12">
                                    <div class="justify-content-end">
                                        <a href="createcourse"><button class="btn btn-blue ">Create Course</button></a>
                                    </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection