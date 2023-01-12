@extends('layouts.service-layout')
@section('title', 'Career Details')
@section('content')

    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li class="active">Job Details</li>
                </ul>
                <h1 class="title h2">Job Details</h1>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1 sal-animate" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="/assets/media/others/bubble-9.png" alt="Bubble">
            </li>
            <li class="shape shape-2 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="/assets/media/others/bubble-17.png" alt="Bubble">
            </li>
            <li class="shape shape-3 sal-animate" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="/assets/media/others/line-4.png" alt="Line">
            </li>
        </ul>
    </div>
    <!--=====================================-->
    <!--=       Why Choose Area Start       =-->
    <!--=====================================-->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/career/application/apply" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="why-choose-us">
                            <div class="section-heading heading-left">
                                <h3 class="title">{{$results->title}}</h3>
                                <input type="hidden" name="job_id" value="{{$results->id}}">
                                <br>
                                <p>{!! $results->details !!}</p>
                                <p><b>Apply before :</b> {{date('d-m-Y', strtotime($results->last_apply_date))}}</p>
                            </div>
                            <button type="button" class="axil-btn btn-fill-info" data-bs-toggle="modal"
                                    data-bs-target="#myModal">
                                Apply Now
                            </button>
                        </div>

                        <!-- The Modal -->
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content-custom">
                                    <!-- Modal body -->
                                    <div class="col-xl-12 col-lg-9 offset-xl-1">
                                        <div class="contact-form-box shadow-box mb--30">
                                            <button type="button" style="float: right;" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            <h4>Direct Apply and Check status</h4>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name"
                                                       placeholder="John Smith">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email"
                                                       placeholder="example@mail.com">
                                            </div>
                                            <div class="form-group mb--40">
                                                <label>Phone</label>
                                                <input type="tel" class="form-control" name="phone"
                                                       placeholder="+8801657889545">
                                            </div>
                                            <div class="form-group mb--40">
                                                <label>Upload CV</label>
                                                <input type="file" id="logo" class="form-control"
                                                       name="image"/>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="axil-btn btn-fill-info btn-fluid">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
