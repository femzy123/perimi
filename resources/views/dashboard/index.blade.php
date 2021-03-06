@extends('layouts.layout')

@section('content')
    <!-- Profile Cover -->
    {{--<section class="image-bg lis-grediant grediant-bt-dark text-white pb-4 profile-inner">--}}
        {{--<div class="background-image-maker"></div>--}}
        {{--<div class="holder-image"> <img src="dist/images/bg7.jpg" alt="" class="img-fluid d-none"> </div>--}}
        {{--<div class="container">--}}
            {{--<div class="row justify-content-center wow fadeInUp">--}}
                {{--<div class="col-12 col-md-12 mb-4 mb-lg-0">--}}
                    {{--<a href="#" class="text-white">--}}
                        {{--<div class="media d-block d-sm-flex text-sm-left text-center"> <img src="/storage/{{ $user->avatar }}" class="img-fluid d-sm-flex mr-0 mr-sm-4 border border-white lis-border-width-4 rounded mb-4 mb-md-0" alt="" />--}}
                            {{--<div class="media-body align-self-center">--}}
                                {{--<h5 class="text-white lis-font-weight-500 lis-line-height-1">{{ $user->name }}</h5>--}}
                                {{--<p class="mb-0">Member since {{ $user->created_at }}</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--End Profile Cover -->
    <!-- Profile header -->
    <div class="profile-header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-9 order-xl-1 order-2 text-xl-right text-center">
                    <ul class="nav nav-pills flex-column flex-sm-row lis-font-poppins" id="myTab" role="tablist">
                        <li class="nav-item ml-0"> <a class="nav-link lis-light py-4 lis-relative mr-3 active" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-expanded="true"> Profile</a> </li>
                        <li class="nav-item ml-0"> <a class="nav-link lis-light py-4 lis-relative mr-3" data-toggle="tab" href="#listing" role="tab" aria-controls="listing"> My Listings</a> </li>
                        <li class="nav-item ml-0"> <a class="nav-link lis-light py-4 lis-relative mr-3" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Reviews </a> </li>
                        <li class="nav-item ml-0"> <a class="nav-link lis-light py-4 lis-relative" data-toggle="tab" href="#bookmark" role="tab" aria-controls="bookmark"> Bookmarks</a> </li>
                    </ul>
                </div>
                <div class="col-12 col-xl-3 align-self-center order-xl-2 order-1 text-xl-right text-center mt-4 mt-xl-0">
                    <a href="#" class="btn btn-primary btn-default"> <i class="fa fa-plus pr-1"></i> Add Listing</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->
    <!-- Profile Content -->
    <section class="lis-bg-light pt-5">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile">
                    <div class="row">
                        <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                            <h6 class="lis-font-weight-500"><i class="fa fa-user-circle-o pr-2 lis-f-14"></i> Basic Info</h6>
                            <div class="card lis-brd-light wow fadeInUp mb-4">
                                <div class="card-body p-4">
                                    <div class="media d-md-flex d-block text-center text-md-left">
                                        <a href="#"><img src="/storage/{{ $user->avatar }}" class="img-fluid d-md-flex mr-0 mr-md-5 rounded " alt="" width="280"></a>
                                        <div class="media-body align-self-center mt-4 mt-md-0">
                                            <h5 class="mb-0 lis-font-weight-500"><a href="#" class="lis-dark">{{ $user->name }}</a></h5>
                                            <p class="mb-0">Member since {{ $user->created_at->diffForHumans() }}</p>
                                            <dl class="row my-2 lis-line-height-2">
                                                <dt class="col-xl-3 col-md-4 lis-font-weight-500 lis-dark">Email:</dt>
                                                <dd class="col-xl-9 col-md-8"><a href="#" class="lis-primary">{{ $user->email }}</a></dd> <dt class="col-xl-3 col-md-4 lis-font-weight-500 lis-dark">Website</dt>
                                                <dd class="col-xl-9 col-md-8"><a href="http://www.themeforest.net" target="blank" class="lis-primary">http://www.themeforest.net</a></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<h6 class="lis-font-weight-500"><i class="fa fa-align-left pr-2 lis-f-14"></i> Biography</h6>--}}
                            {{--<div class="card lis-brd-light wow fadeInUp">--}}
                                {{--<div class="card-body p-4">--}}
                                    {{--<p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>--}}
                                    {{--<p class="pt-3 mb-0">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Maecenas nec odio et ante tincidunt tempus.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="col-12 col-lg-4">
                            <h6 class="lis-font-weight-500"><i class="fa fa-star pr-2 lis-f-14"></i> Ratings</h6>
                            <div class="card lis-brd-light wow fadeInUp mb-4">
                                <div class="card-body p-4">
                                    <ul class="list-inline mb-0 lis-light-gold font-weight-normal h4">
                                        <li class="list-inline-item"><i class='fa fa-star'></i></li>
                                        <li class="list-inline-item"><i class='fa fa-star'></i></li>
                                        <li class="list-inline-item"><i class='fa fa-star'></i></li>
                                        <li class="list-inline-item"><i class='fa fa-star-o'></i></li>
                                        <li class="list-inline-item"><i class='fa fa-star-o'></i></li>
                                        <li class="list-inline-item"> 3.0</li>
                                    </ul> <small>2.77 average based on 19184 ratings</small> </div>
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
                <div class="tab-pane fade" id="listing" role="tabpanel" aria-labelledby="listing">
                    <div class="row portfolio-box2">
                        @forelse($user->listings as $listing)
                        <div class="post col-12 col-md-6 col-lg-6 col-xl-4 wow fadeInUp mb-4">
                            <div class="card lis-brd-light text-center text-lg-left">
                                <a href="#">
                                    <div class="lis-grediant grediant-tb-light2 lis-relative modImage rounded-top"> <img src="/storage/{{ $listing->cover_image }}" alt="" class="img-fluid rounded-top w-100" /> </div>
                                    <div class="lis-absolute lis-right-20 lis-top-20">
                                        <div class="lis-post-meta border border-white text-white rounded lis-f-14">Open</div>
                                    </div>
                                </a>
                                <div class="card-body pt-0">
                                    <div class="media d-block d-lg-flex lis-relative"> <img src="/storage/{{ $listing->logo }}" alt="" class="lis-mt-minus-15 img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 border lis-border-width-2 rounded-circle border-white" width="80" />
                                        <div class="media-body align-self-start mt-2">
                                            <h6 class="mb-0 lis-font-weight-600"><A href="#" class="lis-dark">{{ $listing->name }}</A></h6> </div>
                                    </div>
                                    <ul class="list-unstyled my-4 lis-line-height-2">
                                        <li><i class="fa fa-phone pr-2"></i> {{ $listing->phone }}</li>
                                        <li><i class="fa fa-map-o pr-2"></i> {{ $listing->address }}</li>
                                    </ul>
                                    <div class="clearfix">
                                        <div class="float-none float-lg-left mb-3 mb-lg-0 mt-1">
                                            <A href="#" class="text-white"><i class="icofont icofont-travelling px-2 lis-bg5 py-2 lis-rounded-circle-50 lis-f-14"></i></A>
                                            <A href="#" class="lis-id-info lis-light p-2 lis-rounded-circle-50 lis-f-14">1 More...</A> </div>
                                        <div class="float-none float-lg-right mt-1">
                                            <A href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                            <A href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                            <A href="#" class="lis-green-light text-white p-2 lis-rounded-circle-50 lis-f-14"><i class="fa fa-star"></i> 4.0</A> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                            <h3>You have no listing yet</h3>
                            <a href="#" class="btn btn-lg btn-info">Add Listing</a>
                        @endforelse

                    </div>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="lis-font-weight-500"><i class="fa fa-signal pr-2 lis-f-14"></i> Reviews</h6> </div>
                    </div>
                    <div class="row portfolio-box2">
                        <div class="post col-12 col-md-6 wow fadeInUp mb-4">
                            <div class="card lis-brd-light">
                                <div class="card-body p-4">
                                    <div class="media d-block d-sm-flex text-center text-sm-left">
                                        <a href="#"><img src="dist/images/author5.jpg" class="img-fluid d-md-flex mr-sm-4 rounded-circle" alt="" width="60"></a>
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
                                                <a href="dist/images/review1.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img src="dist/images/review1.jpg" class="img-fluid rounded w-25 mr-2" alt=""></a>
                                                <a href="dist/images/review2.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img src="dist/images/review2.jpg" class="img-fluid rounded w-25 mr-2" alt=""></a>
                                                <a href="dist/images/review3.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img src="dist/images/review3.jpg" class="img-fluid rounded w-25 mr-2" alt=""></a>
                                            </div>
                                            <ul class="list-inline mb-0 comment-info lis-f-14">
                                                <li class="list-inline-item mr-4 lis-relative"><a href="#" class="lis-light"><i class="fa fa-thumbs-up pr-1"></i> 20 Likes</a></li>
                                                <li class="list-inline-item  lis-relative"><a href="#" class="lis-light"><i class="fa fa-reply-all pr-1"></i> 20 Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post col-12 col-md-6 wow fadeInUp mb-4">
                            <div class="card lis-brd-light">
                                <div class="card-body p-4">
                                    <div class="media d-block d-sm-flex text-center text-sm-left">
                                        <a href="#"><img src="dist/images/author6.jpg" class="img-fluid d-md-flex mr-sm-4 rounded-circle" alt="" width="60"></a>
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
                        </div>
                        <div class="post col-12 col-md-6 wow fadeInUp mb-4 mb-lg-0">
                            <div class="card lis-brd-light">
                                <div class="card-body p-4">
                                    <div class="media d-block d-sm-flex text-center text-sm-left">
                                        <a href="#"><img src="dist/images/author4.jpg" class="img-fluid d-md-flex mr-sm-4 rounded-circle" alt="" width="60"></a>
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
                                                <a href="dist/images/review4.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img src="dist/images/review4.jpg" class="img-fluid rounded w-25 mr-2" alt=""></a>
                                                <a href="dist/images/blog6.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img src="dist/images/blog6.jpg" class="img-fluid rounded w-25 mr-2" alt=""></a>
                                                <a href="dist/images/review5.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img src="dist/images/review5.jpg" class="img-fluid rounded w-25 mr-2" alt=""></a>
                                            </div>
                                            <ul class="list-inline mb-0 comment-info lis-f-14">
                                                <li class="list-inline-item mr-4 lis-relative"><a href="#" class="lis-light"><i class="fa fa-thumbs-up pr-1"></i> 20 Likes</a></li>
                                                <li class="list-inline-item  lis-relative"><a href="#" class="lis-light"><i class="fa fa-reply-all pr-1"></i> 20 Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post col-12 col-md-6 wow fadeInUp">
                            <div class="card lis-brd-light">
                                <div class="card-body p-4">
                                    <div class="media d-block d-sm-flex text-center text-sm-left">
                                        <a href="#"><img src="dist/images/author7.jpg" class="img-fluid d-md-flex mr-sm-4 rounded-circle" alt="" width="60"></a>
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
                                                <a href="dist/images/review4.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img src="dist/images/review4.jpg" class="img-fluid rounded w-25 mr-2" alt=""></a>
                                            </div>
                                            <ul class="list-inline mb-0 comment-info lis-f-14">
                                                <li class="list-inline-item mr-4 lis-relative"><a href="#" class="lis-light"><i class="fa fa-thumbs-up pr-1"></i> 20 Likes</a></li>
                                                <li class="list-inline-item  lis-relative"><a href="#" class="lis-light"><i class="fa fa-reply-all pr-1"></i> 20 Reply</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="bookmark" role="tabpanel" aria-labelledby="bookmark">
                    <div class="row portfolio-box2">
                        <div class="post col-12 col-md-6 col-lg-6 col-xl-4 wow fadeInUp mb-4">
                            <div class="card lis-brd-light text-center text-lg-left">
                                <a href="#">
                                    <div class="lis-grediant grediant-tb-light2 lis-relative modImage rounded-top"> <img src="dist/images/img5.jpg" alt="" class="img-fluid rounded-top w-100" /> </div>
                                    <div class="lis-absolute lis-right-20 lis-top-20">
                                        <div class="lis-post-meta border border-white text-white rounded lis-f-14">Open</div>
                                    </div>
                                </a>
                                <div class="card-body pt-0">
                                    <div class="media d-block d-lg-flex lis-relative"> <img src="dist/images/card-logo5.png" alt="" class="lis-mt-minus-15 img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 border lis-border-width-2 rounded-circle border-white" width="80" />
                                        <div class="media-body align-self-start mt-2">
                                            <h6 class="mb-0 lis-font-weight-600"><A href="#" class="lis-dark">Vintage Italian Beer Bar & Restaurant</A></h6> </div>
                                    </div>
                                    <ul class="list-unstyled my-4 lis-line-height-2">
                                        <li><i class="fa fa-phone pr-2"></i> +88 25 5894 2589</li>
                                        <li><i class="fa fa-map-o pr-2"></i> First Street, New York, USA</li>
                                    </ul>
                                    <div class="clearfix">
                                        <div class="float-none float-lg-left mb-3 mb-lg-0 mt-1">
                                            <A href="#" class="text-white"><i class="icofont icofont-travelling px-2 lis-bg5 py-2 lis-rounded-circle-50 lis-f-14"></i></A>
                                            <A href="#" class="lis-id-info lis-light p-2 lis-rounded-circle-50 lis-f-14">1 More...</A> </div>
                                        <div class="float-none float-lg-right mt-1">
                                            <A href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                            <A href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  bookmark lis-rounded-circle-50 text-center"></i></A>
                                            <A href="#" class="lis-green-light text-white p-2 lis-rounded-circle-50 lis-f-14"><i class="fa fa-star"></i> 4.0</A> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post col-12 col-md-6 col-lg-6 col-xl-4  wow fadeInUp mb-4">
                            <div class="card lis-brd-light bg-transparent">
                                <a href="#">
                                    <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top"> <img src="dist/images/img6.jpg" alt="" class="img-fluid rounded-top w-100"> </div>
                                    <div class="lis-absolute lis-right-20 lis-top-20">
                                        <div class="lis-post-meta border border-white text-white rounded lis-f-14">Oct 18-20</div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="media d-block d-sm-flex text-center text-sm-left">
                                        <div class="d-block d-sm-flex">
                                            <ul class="list-unstyled my-0">
                                                <li class="lis-font-weight-600 mb-2"><a href="#" class="lis-dark">Enchanted Valley Carnival</a></li>
                                                <li><i class="fa fa-map-o pr-2"></i> Bishop Avenue, New York</li>
                                            </ul>
                                        </div>
                                        <div class="media-body align-self-center text-center text-sm-right mt-3 mt-sm-0"> <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info bookmark lis-rounded-circle-50 text-center"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post col-12 col-md-6 col-lg-6 col-xl-4  wow fadeInUp mb-4">
                            <div class="card lis-brd-light text-center text-lg-left">
                                <a href="#">
                                    <div class="lis-grediant grediant-tb-light2 lis-relative modImage rounded-top"> <img src="dist/images/img2.jpg" alt="" class="img-fluid rounded-top w-100"> </div>
                                    <div class="lis-absolute lis-right-20 lis-top-20">
                                        <div class="lis-post-meta border border-white text-white rounded lis-f-14">Closed</div>
                                    </div>
                                </a>
                                <div class="card-body pt-0">
                                    <div class="media d-block d-lg-flex lis-relative"> <img src="dist/images/card-logo2.png" alt="" class="lis-mt-minus-15 img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 border lis-border-width-2 rounded-circle border-white" width="80">
                                        <div class="media-body align-self-start mt-2">
                                            <h6 class="mb-0 lis-font-weight-600"><a href="#" class="lis-dark">Bodega Garage - Filipino Night Club</a></h6> </div>
                                    </div>
                                    <ul class="list-unstyled my-4 lis-line-height-2">
                                        <li><i class="fa fa-phone pr-2"></i> +88 25 5894 2589</li>
                                        <li><i class="fa fa-map-o pr-2"></i> First Street, New York, USA</li>
                                    </ul>
                                    <div class="clearfix">
                                        <div class="float-none float-lg-left mb-3 mb-lg-0 mt-1"> <a href="#" class="text-white"><i class="icofont icofont-radio-mic px-2 lis-bg3 py-2 lis-rounded-circle-50 lis-f-14"></i></a> <a href="#" class="text-white"><i class="icofont icofont-beer px-2 lis-bg2 py-2 lis-rounded-circle-50 lis-f-14"></i></a> <a href="#" class="lis-id-info lis-light p-2 lis-rounded-circle-50 lis-f-14" tabindex="0">1 More...</a> </div>
                                        <div class="float-none float-lg-right mt-1"> <a href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></a> <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info bookmark lis-rounded-circle-50 text-center"></i></a> <a href="#" class="lis-green-light text-white p-2 lis-rounded-circle-50 lis-f-14" tabindex="0"><i class="fa fa-star"></i> 5.0</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post col-12 col-md-6 col-lg-6 col-xl-4  wow fadeInUp mb-4">
                            <div class="card lis-brd-light">
                                <a href="#">
                                    <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top"> <img src="dist/images/img9.jpg" alt="" class="img-fluid rounded-top w-100"> </div>
                                    <div class="lis-absolute lis-right-20 lis-top-20">
                                        <div class="lis-post-meta border border-white text-white rounded lis-f-14">For Sale</div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h6 class="lis-font-weight-600 mb-2"><a href="#" class="lis-dark">Villa in Melbourne City</a></h6>
                                    <ul class="list-unstyled mt-0">
                                        <li><i class="fa fa-map-o pr-2"></i>1903 Hollywood, NJ 85624, USA</li>
                                    </ul>
                                    <div class="media">
                                        <div class="d-flex">
                                            <h5 class="lis-primary mb-0"><span class="lis-f-14 lis-dark">Price:</span> $13,80,000 </h5> </div>
                                        <div class="media-body align-self-center text-right"> <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info bookmark lis-rounded-circle-50 text-center"></i></a> </div>
                                    </div>
                                </div>
                                <div class="lis-devider"></div>
                                <ul class="list-inline mb-0 text-center lis-property-meta">
                                    <li class="list-inline-item lis-brd-right lis-brd-light lis-meta-block float-left"><i class="fa fa-object-group pr-1"></i> 5842 m2</li>
                                    <li class="list-inline-item lis-brd-right lis-brd-light lis-meta-block float-left"><i class="fa fa-bed pr-1"></i> 4 Bed</li>
                                    <li class="list-inline-item lis-meta-block float-left"><i class="fa fa-bath pr-1"></i> 3 Bath</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post col-12 col-md-6 col-lg-6 col-xl-4 wow fadeInUp mb-4">
                            <div class="card lis-brd-light">
                                <a href="#">
                                    <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top"> <img src="dist/images/img10.jpg" alt="" class="img-fluid rounded-top w-100"> </div>
                                    <div class="lis-absolute lis-right-20 lis-top-20">
                                        <div class="lis-post-meta border border-white text-white rounded lis-f-14">For Rent</div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h6 class="lis-font-weight-600 mb-2"><a href="#" class="lis-dark">Family House in Omaha</a></h6>
                                    <ul class="list-unstyled mt-0">
                                        <li><i class="fa fa-map-o pr-2"></i>15421 Southwest, NJ 32568, USA</li>
                                    </ul>
                                    <div class="media">
                                        <div class="d-flex">
                                            <h5 class="lis-primary mb-0"><span class="lis-f-14 lis-dark">Price:</span> $2,500 <small class="lis-light">/month</small> </h5> </div>
                                        <div class="media-body align-self-center text-right"> <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info bookmark lis-rounded-circle-50 text-center"></i></a> </div>
                                    </div>
                                </div>
                                <div class="lis-devider"></div>
                                <ul class="list-inline mb-0 text-center lis-property-meta">
                                    <li class="list-inline-item lis-brd-right lis-brd-light lis-meta-block float-left"><i class="fa fa-object-group pr-1"></i> 2018 m2</li>
                                    <li class="list-inline-item lis-brd-right lis-brd-light lis-meta-block float-left"><i class="fa fa-bed pr-1"></i> 2 Bed</li>
                                    <li class="list-inline-item lis-meta-block float-left"><i class="fa fa-bath pr-1"></i> 1 Bath</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post col-12 col-md-6 col-lg-6 col-xl-4  wow fadeInUp mb-4">
                            <div class="card lis-brd-light bg-transparent">
                                <a href="#">
                                    <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top"> <img src="dist/images/img8.jpg" alt="" class="img-fluid rounded-top w-100"> </div>
                                    <div class="lis-absolute lis-right-20 lis-top-20">
                                        <div class="lis-post-meta border border-white text-white rounded lis-f-14">Dec 28-31</div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="media d-block d-sm-flex text-center text-sm-left">
                                        <div class="d-block d-sm-flex">
                                            <ul class="list-unstyled my-0">
                                                <li class="lis-font-weight-600 mb-2"><a href="#" class="lis-dark">VH1 Supersonic 2018</a></li>
                                                <li><i class="fa fa-map-o pr-2"></i> Bishop Avenue, New York</li>
                                            </ul>
                                        </div>
                                        <div class="media-body align-self-center text-center text-sm-right mt-3 mt-sm-0"> <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info bookmark lis-rounded-circle-50 text-center"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post col-12 col-md-6 col-lg-6 col-xl-4  wow fadeInUp mb-4 mb-xl-0">
                            <div class="card lis-brd-light text-center text-lg-left">
                                <a href="#">
                                    <div class="lis-grediant grediant-tb-light2 lis-relative modImage rounded-top"> <img src="dist/images/img3.jpg" alt="" class="img-fluid rounded-top w-100"> </div>
                                    <div class="lis-absolute lis-right-20 lis-top-20">
                                        <div class="lis-post-meta border border-white text-white rounded lis-f-14">Open</div>
                                    </div>
                                </a>
                                <div class="card-body pt-0">
                                    <div class="media d-block d-lg-flex lis-relative"> <img src="dist/images/card-logo3.png" alt="" class="lis-mt-minus-15 img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 border lis-border-width-2 rounded-circle border-white" width="80">
                                        <div class="media-body align-self-start mt-2">
                                            <h6 class="mb-0 lis-font-weight-600"><a href="#" class="lis-dark">Regal Cinemas Destiny USA 19 IMAX &amp; RPX</a></h6> </div>
                                    </div>
                                    <ul class="list-unstyled my-4 lis-line-height-2">
                                        <li><i class="fa fa-phone pr-2"></i> +88 25 5894 2589</li>
                                        <li><i class="fa fa-map-o pr-2"></i> First Street, New York, USA</li>
                                    </ul>
                                    <div class="clearfix">
                                        <div class="float-none float-lg-left mb-3 mb-lg-0 mt-1"> <a href="#" class="text-white"><i class="icofont icofont-radio-mic px-2 lis-bg3 py-2 lis-rounded-circle-50 lis-f-14"></i></a> <a href="#" class="lis-id-info lis-light p-2 lis-rounded-circle-50 lis-f-14" tabindex="0">1 More...</a> </div>
                                        <div class="float-none float-lg-right mt-1"> <a href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></a> <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info bookmark lis-rounded-circle-50 text-center"></i></a> <a href="#" class="lis-green-light text-white p-2 lis-rounded-circle-50 lis-f-14" tabindex="0"><i class="fa fa-star"></i> 4.5</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post col-12 col-md-6 col-lg-6 col-xl-4 wow fadeInUp mb-4 mb-xl-0">
                            <div class="card lis-brd-light">
                                <a href="#">
                                    <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top"> <img src="dist/images/img11.jpg" alt="" class="img-fluid rounded-top w-100"> </div>
                                    <div class="lis-absolute lis-right-20 lis-top-20">
                                        <div class="lis-post-meta border border-white text-white rounded lis-f-14">For Rent</div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h6 class="lis-font-weight-600 mb-2"><a href="#" class="lis-dark">Park Avenue Apartment </a></h6>
                                    <ul class="list-unstyled mt-0">
                                        <li><i class="fa fa-map-o pr-2"></i>14228 Townshire Drive, NJ 06589, USA</li>
                                    </ul>
                                    <div class="media">
                                        <div class="d-flex">
                                            <h5 class="lis-primary mb-0"><span class="lis-f-14 lis-dark">Price:</span> $3,100 <small class="lis-light">/month</small> </h5> </div>
                                        <div class="media-body align-self-center text-right"> <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info bookmark lis-rounded-circle-50 text-center"></i></a> </div>
                                    </div>
                                </div>
                                <div class="lis-devider"></div>
                                <ul class="list-inline mb-0 text-center lis-property-meta">
                                    <li class="list-inline-item lis-brd-right lis-brd-light lis-meta-block float-left"><i class="fa fa-object-group pr-1"></i> 3258 m2</li>
                                    <li class="list-inline-item lis-brd-right lis-brd-light lis-meta-block float-left"><i class="fa fa-bed pr-1"></i> 4 Bed</li>
                                    <li class="list-inline-item lis-meta-block float-left"><i class="fa fa-bath pr-1"></i> 2 Bath</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post col-12 col-md-6 col-lg-6 col-xl-4  wow fadeInUp">
                            <div class="card lis-brd-light bg-transparent">
                                <a href="#">
                                    <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top"> <img src="dist/images/img7.jpg" alt="" class="img-fluid rounded-top w-100"> </div>
                                    <div class="lis-absolute lis-right-20 lis-top-20">
                                        <div class="lis-post-meta border border-white text-white rounded lis-f-14">Nov 13-15</div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <div class="media d-block d-sm-flex text-center text-sm-left">
                                        <div class="d-block d-sm-flex">
                                            <ul class="list-unstyled my-0">
                                                <li class="lis-font-weight-600 mb-2"><a href="#" class="lis-dark">Timeout 72 Hours</a></li>
                                                <li><i class="fa fa-map-o pr-2"></i> North Street, New York, USA</li>
                                            </ul>
                                        </div>
                                        <div class="media-body align-self-center text-center text-sm-right mt-3 mt-sm-0"> <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info bookmark lis-rounded-circle-50 text-center"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Profile Content -->
@endsection