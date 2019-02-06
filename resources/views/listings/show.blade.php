@extends('layouts.layout')

@section('content')

    <!-- Profile Cover -->
    <section>
        <div id="image_blur"><img src="/storage/{{$listing->cover_image}}" alt=""></div>
        <div class="space">
            <div class="container">
                <div class="row justify-content-center wow fadeInUp">
                    <div class="col-12 col-md-8 mb-4 mb-lg-0">
                        <a href="#" class="text-white">
                            <div class="media d-block d-md-flex text-md-left text-center"> <img src="/storage/{{ $listing->logo }}" class="img-fluid d-md-flex mr-4 border border-white lis-border-width-4 rounded mb-4 mb-md-0" alt="" />
                                <div class="media-body align-self-center">
                                    <h2 class="text-white font-weight-bold lis-line-height-1">{{ $listing->name }}</h2>
                                    <p class="mb-0">{{ $listing->tagline }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-4 align-self-center">
                        <ul class="list-unstyled mb-0 lis-line-height-2 text-md-right text-center text-white">
                            <li><i class="fa fa-phone pr-2"></i>{{ $listing->phone }}</li>
                            <li>
                                <A href="#" class="text-white"><i class="fa fa-envelope pr-2"></i> {{ $listing->email }}</A>
                            </li>
                            <li>
                                <A href="#" class="text-white"><i class="fa fa-map-o pr-2"></i> {{ $listing->address }}</A>
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
                <div class="col-12 col-xl-5 order-xl-1 order-2 text-xl-right text-center">
                    <ul class="nav nav-pills flex-column flex-sm-row lis-font-poppins" id="myTab" role="tablist">
                        <li class="nav-item  ml-0"> <a class="nav-link lis-light py-4 lis-relative mr-3 active" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-expanded="true"> Details</a> </li>
                        <li class="nav-item ml-0"> <a class="nav-link lis-light py-4 lis-relative mr-3" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"> Reviews</a> </li>

                    </ul>
                </div>
                <div class="col-12 col-xl-7 align-self-center order-xl-2 order-1 text-xl-right text-center ">
                    <div class="cover-btn mt-4 mt-xl-0 lis-f-14">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item py-2 mr-0"><a href="#" class="lis-light rounded-left"><i class="fa fa-envelope-o pr-1"></i> Add review</a> </li>
                            <li class="list-inline-item py-2 mr-0"><a href="#" class="lis-light"><i class="fa fa-heart-o pr-1"></i> Bookmark</a> </li>
                            <li class="list-inline-item py-2 mr-0"><a href="#" class="lis-light"><i class="fa fa-share pr-1"></i> Share</a> </li>
                            <li class="list-inline-item py-2 mr-0"><a href="#" class="lis-light rounded-right"><i class="fa fa-ellipsis-h"></i></a> </li>
                        </ul>
                    </div>
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
                        <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details">
                            <h6 class="lis-font-weight-500"><i class="fa fa-align-right pr-2 lis-f-14"></i> Description</h6>
                            <div class="card lis-brd-light wow fadeInUp mb-4">
                                <div class="card-body p-4">
                                    {{--<p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>--}}
                                    <p class="pt-3 mb-0">{{ $listing->description }}</p>
                                </div>
                            </div>
                            <h6 class="lis-font-weight-500"><i class="fa fa-map-o pr-2 lis-f-14"></i> Location</h6>
                            <div class="card lis-brd-light wow fadeInUp mb-4">
                                <div class="card-body p-4">
                                    <div id="map" style='height: 350px;'></div>
                                </div>
                            </div>
                            {{--<h6 class="lis-font-weight-500"><i class="fa fa-photo pr-2 lis-f-14"></i> Gallery</h6>--}}
                            {{--<div class="card lis-brd-light wow fadeInUp">--}}
                                {{--<div class="card-body py-4 px-0">--}}
                                    {{--<div class="center3 slider">--}}
                                        {{--<div>--}}
                                            {{--<div class="gallery text-center lis-relative"> <img src="dist/images/gallery1.jpg" alt="" class="img-fluid rounded" />--}}
                                                {{--<div class="gallery-fade fade w-100 h-100 rounded">--}}
                                                    {{--<div class="d-table w-100 h-100">--}}
                                                        {{--<div class="d-table-cell align-middle">--}}
                                                            {{--<div class="h4">--}}
                                                                {{--<a data-toggle="lightbox" data-gallery="example-gallery" href="dist/images/gallery1.jpg" class="text-white"> <i class="fa fa-search-plus"></i></a>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<div class="gallery text-center lis-relative"> <img src="dist/images/gallery2.jpg" alt="" class="img-fluid rounded" />--}}
                                                {{--<div class="gallery-fade fade w-100 h-100 rounded">--}}
                                                    {{--<div class="d-table w-100 h-100">--}}
                                                        {{--<div class="d-table-cell align-middle">--}}
                                                            {{--<div class="h4">--}}
                                                                {{--<a data-toggle="lightbox" data-gallery="example-gallery" href="dist/images/gallery2.jpg" class="text-white"> <i class="fa fa-search-plus"></i></a>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<div class="gallery text-center lis-relative"> <img src="dist/images/gallery3.jpg" alt="" class="img-fluid rounded" />--}}
                                                {{--<div class="gallery-fade fade w-100 h-100 rounded">--}}
                                                    {{--<div class="d-table w-100 h-100">--}}
                                                        {{--<div class="d-table-cell align-middle">--}}
                                                            {{--<div class="h4">--}}
                                                                {{--<a data-toggle="lightbox" data-gallery="example-gallery" href="dist/images/gallery3.jpg" class="text-white"> <i class="fa fa-search-plus"></i></a>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<div class="gallery text-center lis-relative"> <img src="dist/images/gallery1.jpg" alt="" class="img-fluid rounded" />--}}
                                                {{--<div class="gallery-fade fade w-100 h-100 rounded">--}}
                                                    {{--<div class="d-table w-100 h-100">--}}
                                                        {{--<div class="d-table-cell align-middle">--}}
                                                            {{--<div class="h4">--}}
                                                                {{--<a data-toggle="lightbox" data-gallery="example-gallery" href="dist/images/gallery1.jpg" class="text-white"> <i class="fa fa-search-plus"></i></a>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<div class="gallery text-center lis-relative"> <img src="dist/images/gallery2.jpg" alt="" class="img-fluid rounded" />--}}
                                                {{--<div class="gallery-fade fade w-100 h-100 rounded">--}}
                                                    {{--<div class="d-table w-100 h-100">--}}
                                                        {{--<div class="d-table-cell align-middle">--}}
                                                            {{--<div class="h4">--}}
                                                                {{--<a data-toggle="lightbox" data-gallery="example-gallery" href="dist/images/gallery2.jpg" class="text-white"> <i class="fa fa-search-plus"></i></a>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div>--}}
                                            {{--<div class="gallery text-center lis-relative"> <img src="dist/images/gallery3.jpg" alt="" class="img-fluid rounded" />--}}
                                                {{--<div class="gallery-fade fade w-100 h-100 rounded">--}}
                                                    {{--<div class="d-table w-100 h-100">--}}
                                                        {{--<div class="d-table-cell align-middle">--}}
                                                            {{--<div class="h4">--}}
                                                                {{--<a data-toggle="lightbox" data-gallery="example-gallery" href="dist/images/gallery3.jpg" class="text-white"> <i class="fa fa-search-plus"></i></a>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews">
                            <h6 class="lis-font-weight-500"><i class="fa fa-signal pr-2 lis-f-14"></i> Reviews</h6>
                            <div class="card lis-brd-light wow fadeInUp mb-2">
                                <div class="card-body p-4">
                                    <div class="media d-block d-sm-flex text-center text-sm-left">
                                        <a href="#"><img src="dist/images/author5.jpg" class="img-fluid d-md-flex mr-sm-4 rounded-circle" alt="" width="60" /></a>
                                        <div class="media-body align-self-center">
                                            <ul class="list-inline mb-0 lis-light-gold font-weight-normal h5 float-sm-right float-none my-md-0 my-3">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <h6 class="mb-0"><a href="#" class="lis-dark">Jack Amiel</a></h6>
                                            <p>November 03, 2017</p>
                                            <h6 class="lis-primary mb-2">Best Place To Eat Breakfast</h6>
                                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci placerat dolor.</p>
                                            <div class="review-image my-3">
                                                <A href="dist/images/review1.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img src="dist/images/review1.jpg" class="img-fluid rounded w-25 mr-2" alt="" /></A>
                                                <A href="dist/images/review2.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img src="dist/images/review2.jpg" class="img-fluid rounded w-25 mr-2" alt="" /></A>
                                                <A href="dist/images/review3.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img src="dist/images/review3.jpg" class="img-fluid rounded w-25 mr-2" alt="" /></A>
                                            </div>
                                            <ul class="list-inline mb-0 comment-info lis-f-14">
                                                <li class="list-inline-item mr-4 lis-relative"><a href="#" class="lis-light"><i class="fa fa-thumbs-up pr-1"></i> 20 Likes</a></li>
                                                <li class="list-inline-item  lis-relative"><a href="#" class="lis-light"><i class="fa fa-reply-all pr-1"></i> 20 Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card lis-brd-light wow fadeInUp mb-2">
                                <div class="card-body p-4">
                                    <div class="media d-block d-sm-flex text-center text-sm-left">
                                        <a href="#"><img src="dist/images/author6.jpg" class="img-fluid d-md-flex mr-sm-4 rounded-circle" alt="" width="60" /></a>
                                        <div class="media-body align-self-center">
                                            <ul class="list-inline mb-0 lis-light-gold font-weight-normal h5 float-sm-right float-none my-md-0 my-3">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                            <h6 class="mb-0"><a href="#" class="lis-dark">John Deo</a></h6>
                                            <p>October 28, 2017</p>
                                            <h6 class="lis-primary mb-2">Good Place</h6>
                                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci placerat dolor.</p>
                                            <ul class="list-inline mb-0 comment-info lis-f-14">
                                                <li class="list-inline-item mr-4 lis-relative"><a href="#" class="lis-light"><i class="fa fa-thumbs-up pr-1"></i> 20 Likes</a></li>
                                                <li class="list-inline-item  lis-relative"><a href="#" class="lis-light"><i class="fa fa-reply-all pr-1"></i> 20 Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card lis-brd-light wow fadeInUp mb-2">
                                <div class="card-body p-4">
                                    <div class="media d-block d-sm-flex text-center text-sm-left">
                                        <a href="#"><img src="dist/images/author7.jpg" class="img-fluid d-md-flex mr-sm-4 rounded-circle" alt="" width="60" /></a>
                                        <div class="media-body align-self-center">
                                            <ul class="list-inline mb-0 lis-light-gold font-weight-normal h5 float-sm-right float-none my-md-0 my-3">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <h6 class="mb-0"><a href="#" class="lis-dark">Jonathan</a></h6>
                                            <p>October 25, 2017</p>
                                            <h6 class="lis-primary mb-2">Delicious Food</h6>
                                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci placerat dolor.</p>
                                            <div class="review-image my-3">
                                                <A href="dist/images/review4.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img src="dist/images/review4.jpg" class="img-fluid rounded w-25 mr-2" alt="" /></A>
                                            </div>
                                            <ul class="list-inline mb-0 comment-info lis-f-14">
                                                <li class="list-inline-item mr-4 lis-relative"><a href="#" class="lis-light"><i class="fa fa-thumbs-up pr-1"></i> 20 Likes</a></li>
                                                <li class="list-inline-item  lis-relative"><a href="#" class="lis-light"><i class="fa fa-reply-all pr-1"></i> 20 Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination list-inline mb-0 text-center text-uppercase lis-f-14 justify-content-center my-4">
                                <li class="p-1 page-item"><a class="page-link lis-brd-light lis-light rounded" href="#"><i class="fa fa-angle-left pr-1"></i> Prev</a></li>
                                <li class="p-1 page-item d-none d-sm-inline-block"><a class="page-link lis-light rounded" href="#">1</a></li>
                                <li class="p-1 page-item d-none d-sm-inline-block"><a class="page-link lis-light rounded" href="#">2</a></li>
                                <li class="p-1 page-item d-none d-sm-inline-block"><a class="page-link lis-light rounded" href="#">3</a></li>
                                <li class="p-1 page-item"><a class="page-link lis-brd-light lis-light rounded" href="#"> Next <i class="fa fa-angle-right pl-1"></i></a></li>
                            </ul>
                            <h6 class="lis-font-weight-500"><i class="fa fa-commenting pr-2 lis-f-14"></i>  Add Review</h6>
                            <div class="card lis-brd-light wow fadeInUp">
                                <div class="card-body p-4">
                                    <p class="mb-2">Your rating for this listing</p>
                                    <ul class="list-inline lis-light-gold font-weight-normal h5">
                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group lis-relative">
                                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Your Name">
                                                <div class="lis-search"> <i class="fa fa-user lis-primary lis-left-0"></i> </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group lis-relative">
                                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Email address">
                                                <div class="lis-search"> <i class="fa fa-envelope lis-primary lis-left-0"></i> </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12">
                                            <div class="form-group lis-relative">
                                                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Title of review">
                                                <div class="lis-search"> <i class="fa fa-drivers-license-o lis-primary lis-left-0"></i> </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12">
                                            <div class="form-group lis-relative">
                                                <textarea class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Review"></textarea>
                                                <div class="lis-search"> <i class="fa fa-pencil lis-primary lis-left-0 lis-top-10"></i> </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12">
                                            <h6 class="lis-font-weight-500">  Add a photo</h6>
                                            <input type="file" class="d-block"> <small>Note: The image size should smaller than or equal to 20MB</small> </div>
                                    </div> <a href="#" class="btn btn-primary btn-default mt-3"> Submit Review</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    {{--<h6 class="lis-font-weight-500"><i class="fa fa-star pr-2 lis-f-14"></i> Listing Ratings</h6>--}}
                    {{--<div class="card lis-brd-light wow fadeInUp mb-4">--}}
                        {{--<div class="card-body p-4">--}}
                            {{--<ul class="list-inline mb-0 lis-light-gold font-weight-normal h4">--}}
                                {{--<li class="list-inline-item"><i class='fa fa-star'></i></li>--}}
                                {{--<li class="list-inline-item"><i class='fa fa-star'></i></li>--}}
                                {{--<li class="list-inline-item"><i class='fa fa-star'></i></li>--}}
                                {{--<li class="list-inline-item"><i class='fa fa-star-o'></i></li>--}}
                                {{--<li class="list-inline-item"><i class='fa fa-star-o'></i></li>--}}
                                {{--<li class="list-inline-item"> 3.0</li>--}}
                            {{--</ul> <small>2.77 average based on 19184 ratings</small> </div>--}}
                    {{--</div>--}}
                    {{--<h6 class="lis-font-weight-500"><i class="fa fa-clock-o pr-2 lis-f-14"></i> Opening Hours</h6>--}}
                    {{--<div class="card lis-brd-light wow fadeInUp mb-4">--}}
                        {{--<div class="card-body p-4">--}}
                            {{--<button class="text-btn bg-transparent border-0  w-100 text-left collapsed px-0 lis-light" data-toggle="collapse" data-target="#demo"><span class='lis-light-green font-weight-bold'>Open Today</span> : 9:30AM - 7:30PM </button>--}}
                            {{--<div id="demo" class="collapse">--}}
                                {{--<dl class="row mb-0 mt-4 lis-line-height-2"> <dt class="col-sm-6 font-weight-normal">Monday</dt>--}}
                                    {{--<dd class="col-sm-6">9:30AM - 7:30PM</dd> <dt class="col-sm-6 font-weight-normal">Tuesday</dt>--}}
                                    {{--<dd class="col-sm-6">9:30AM - 7:30PM</dd> <dt class="col-sm-6 font-weight-normal">Wednesday</dt>--}}
                                    {{--<dd class="col-sm-6">9:30AM - 7:30PM</dd> <dt class="col-sm-6 font-weight-normal">Thursday</dt>--}}
                                    {{--<dd class="col-sm-6">9:30AM - 7:30PM</dd> <dt class="col-sm-6 font-weight-normal">Friday</dt>--}}
                                    {{--<dd class="col-sm-6">9:30AM - 7:30PM</dd> <dt class="col-sm-6 font-weight-normal">Saturday</dt>--}}
                                    {{--<dd class="col-sm-6">Closed</dd> <dt class="col-sm-6 font-weight-normal">Sunday</dt>--}}
                                    {{--<dd class="col-sm-6">Closed</dd>--}}
                                {{--</dl>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <h6 class="lis-font-weight-500"><i class="fa fa-tags pr-2 lis-f-14"></i> Categories</h6>
                    <div class="card lis-brd-light wow fadeInUp mb-4">
                        <div class="card-body p-4">
                            <ul class="list-inline mb-0 lis-light-gold font-weight-normal h4">
                                <li class="list-inline-item">
                                    <A href="#">
                                        <div class="lis-bg4 text-center">
                                            <div class="text-white mb-0 h4">{{ $listing->category->name }}</div>
                                        </div>
                                    </A>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h6 class="lis-font-weight-500"><i class="fa fa-user-secret pr-2 lis-f-14"></i>  Author</h6>
                    <div class="card lis-brd-light wow fadeInUp mb-4">
                        <div class="card-body p-4">
                            <div class="media d-md-flex">
                                <div class='media-body align-self-center'>
                                    <h6 class="mb-0"><a href="#" class="lis-dark">{{ $listing->user->name }}</a></h6>
                                    <p class='mb-0'>Member since {{ $listing->user->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <ul class="list-unstyled my-4 lis-line-height-2">
                                <li><i class="fa fa-phone pr-2"></i> {{ $listing->user->phone }}</li>
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
                            </div> <a href="#" class="btn btn-info"> Submit Message</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Profile Content -->

@endsection