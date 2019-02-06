@extends('layouts.layout')

@section('content')    

    <!-- Profile Cover -->
    <section>
        <div id="image_blur"><img src="/storage/{{ $event->image }}"></div>
        <div class="space">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp">
                    <div class="col-12 col-md-8 mb-4 mb-lg-0">
                        <a href="#" class="text-white">
                            <div class="media d-block d-md-flex text-md-left text-center">
                                <div class="media-body align-self-center">
                                    <h2 class="text-white font-weight-bold lis-line-height-1">{{ $event->name }}</h2>
                                    <p class="mb-0">{{ $event->tagline }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 align-self-center">
                        <ul class="list-unstyled mb-0 lis-line-height-2 text-md-right text-center">
                            {{--<li><i class="fa fa-phone pr-2"></i>+88 25 5894 2589</li>--}}
                            {{--<li>--}}
                                {{--<A href="#" class="text-white"><i class="fa fa-envelope pr-2"></i> example@lister.com</A>--}}
                            {{--</li>--}}
                            <li>
                                <A href="#" class="text-white"><i class="fa fa-map-o pr-2"></i> {{ $event->venue }}</A>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Profile Cover -->
    <!-- Profile header -->
    <div class="profile-header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 order-xl-1 order-2 text-xl-right text-center">
                    <ul class="nav nav-pills flex-column flex-sm-row lis-font-poppins" id="myTab" role="tablist">
                        <li class="nav-item ml-0"> <a class="nav-link lis-light py-4 lis-relative mr-3 active" data-toggle="tab" href="#venue" role="tab" aria-controls="venue" aria-expanded="true"> Venue Details</a> </li>
                    </ul>
                </div>
                <div class="col-12 col-xl-6 align-self-center order-xl-2 order-1 text-xl-right text-center ">
                    {{--<div class="cover-btn mt-4 mt-xl-0 lis-f-14">--}}
                        {{--<ul class="list-inline mb-0">--}}
                            {{--<li class="list-inline-item py-2 mr-0"><a href="#" class="lis-light rounded-left"><i class="fa fa-envelope-o pr-1"></i> Add review</a> </li>--}}
                            {{--<li class="list-inline-item py-2 mr-0"><a href="#" class="lis-light"><i class="fa fa-heart-o pr-1"></i> Bookmark</a> </li>--}}
                            {{--<li class="list-inline-item py-2 mr-0"><a href="#" class="lis-light"><i class="fa fa-share pr-1"></i> Share</a> </li>--}}
                            {{--<li class="list-inline-item py-2 mr-0"><a href="#" class="lis-light rounded-right"><i class="fa fa-ellipsis-h"></i></a> </li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->
    <!-- Profile Content -->
    <section class="lis-bg-light pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="venue" role="tabpanel" aria-labelledby="venue">
                            <h6 class="lis-font-weight-500"><i class="fa fa-align-right pr-2 lis-f-14"></i> Description</h6>
                            <div class="card lis-brd-light mb-4 wow fadeInUp">
                                <div class="card-body p-4">
                                    <p>{{ $event->details }}</p>
                                </div>
                            </div>
                            <h6 class="lis-font-weight-500"><i class="fa fa-map-o pr-2 lis-f-14"></i> Location</h6>
                            <div class="card lis-brd-light mb-4 wow fadeInUp">
                                <div class="card-body p-4">
                                    <div id="map" style='height: 350px;'></div>
                                </div>
                            </div>
                            <h6 class="lis-font-weight-500"><i class="fa fa-photo pr-2 lis-f-14"></i> Gallery</h6>
                            <div class="card lis-brd-light wow fadeInUp">
                                <div class="card-body py-4 px-0">
                                    <div class="center3 slider">
                                        <div>
                                            <div class="gallery text-center lis-relative"> <img src="/storage/{{ $event->image }}" alt="" class="img-fluid rounded" />
                                                <div class="gallery-fade fade w-100 h-100 rounded">
                                                    <div class="d-table w-100 h-100">
                                                        <div class="d-table-cell align-middle">
                                                            <div class="h4">
                                                                <a data-toggle="lightbox" data-gallery="example-gallery" href="/storage/{{ $event->image }}" class="text-white"> <i class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">

                    <h6 class="lis-font-weight-500"><i class="fa fa-clock-o pr-2 lis-f-14"></i> Schedule</h6>
                    <div class="card lis-brd-light mb-4 wow fadeInUp">
                        <div class="card-body p-4">
                            <p><span class='lis-light-green font-weight-bold'>Event Date</span> : {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</p>
                            <p><span class='lis-light-green font-weight-bold'>Event Time</span> : {{ $event->time }}</p>
                        </div>
                    </div>
                    <h6 class="lis-font-weight-500"><i class="fa fa-tags pr-2 lis-f-14"></i> Categories</h6>
                    <div class="card lis-brd-light mb-4 wow fadeInUp">
                        <div class="card-body p-4">
                            <ul class="list-inline mb-0 lis-light-gold font-weight-normal h4">
                                <li class="list-inline-item">
                                    <A href="#">
                                        <div class="lis-bg4 text-center">
                                            <div class="text-white mb-0 h4">{{ $event->eventcategory->name }}</div>
                                        </div>
                                    </A>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h6 class="lis-font-weight-500"><i class="fa fa-user-secret pr-2 lis-f-14"></i>  Author</h6>
                    <div class="card lis-brd-light mb-4 wow fadeInUp">
                        <div class="card-body p-4">
                            <div class="media d-md-flex">
                                <a href="#"><img src="/storage/{{ $event->user->avatar }}" class="img-fluid d-flex mr-4 rounded-circle" alt="" width="70" /></a>
                                <div class='media-body align-self-center'>
                                    <h6 class="mb-0"><a href="#" class="lis-dark">{{ $event->user->name }}</a></h6>
                                    <p class='mb-0'>{{ $event->user->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <ul class="list-unstyled my-4 lis-line-height-2">
                                <li><i class="fa fa-phone pr-2"></i> {{ $event->user->phone }}</li>
                                <li><i class="fa fa-envelope pr-2"></i> {{ $event->user->email }}</li>
                            </ul>
                        </div>
                    </div>
                    <h6 class="lis-font-weight-500"><i class="fa fa-envelope pr-2 lis-f-14"></i>  Send Message</h6>
                    <div class="card lis-brd-light wow fadeInUp">
                        <div class="card-body p-4">
                            <div class="form-group lis-relative">
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Your Name">
                                <div class="lis-search"> <i class="fa fa-user lis-primary lis-left-0"></i> </div>
                            </div>
                            <div class="form-group lis-relative">
                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Email address">
                                <div class="lis-search"> <i class="fa fa-envelope lis-primary lis-left-0"></i> </div>
                            </div>
                            <div class="form-group lis-relative">
                                <textarea class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Message"></textarea>
                                <div class="lis-search"> <i class="fa fa-pencil lis-primary lis-left-0 lis-top-10"></i> </div>
                            </div> <a href="#" class="btn btn-primary btn-default"> Submit Message</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Profile Content -->
@endsection