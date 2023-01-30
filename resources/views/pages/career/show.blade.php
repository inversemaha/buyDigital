@extends('layouts.service-layout')
@section('title', 'career')
@section('content')

    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area-career breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000"
                 data-sal-delay="300">
                <h1 class="title h2">Career Board</h1>
                <h3 class="title h2">If you are interested, please drop your CV and Cover Letter.</h3>
                <button type="button" class="axil-btn btn-fill-info" data-bs-toggle="modal"
                        data-bs-target="#myModal">
                    Drop Your Cv
                </button>
                <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                    <img class="paralax-image" src="/assets/media/banner/banner-thumb-6.png" alt="Illustration">
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="/assets/media/others/bubble-21.png" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="/assets/media/others/line-4.png" alt="Line">
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-12">
        <form action="/dropbox/cv/submit" method="post"
              enctype="multipart/form-data">
            @csrf
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content-custom">
                        <!-- Modal body -->
                        <div class="col-xl-12 col-lg-9 offset-xl-1">
                            <div class="contact-form-box shadow-box mb--30">
                                <button type="button" style="float: right;" class="btn-close"
                                        data-bs-dismiss="modal"></button>
                                <h4>Drop Your CV Here</h4>
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

    <!--=====================================-->
    <!--=        Job Post Area Start         =-->

    <div class="section " id="jobPost">
        <div class="container">
            <div class="row">
                @foreach($result as $res)
                    <div class="col-lg-6 col-md-6 sal-animate" data-sal="slide-up" data-sal-duration="800"
                         data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="{{$res->featured_image}}" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="#">{{$res->title}} </a></h5>
                                <p>{{$res->short_details}}</p>
                                <a href="/career/board/details/{{$res->id}}" class="more-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Development Service -->

@endsection
