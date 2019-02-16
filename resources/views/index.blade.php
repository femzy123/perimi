@extends('layouts.layout_trans')

@section('content')

    <!-- Page Inner -->
    <section class="image-bg lis-grediant grediant-tb">
        <div class="background-image-maker"></div>
        <div class="holder-image">
            <img src="/storage/images/bg1.jpg" alt="" class="img-fluid d-none">
        </div>
        <div class="container">
            <div class="row justify-content-center pt-5">
                <div class="col-12 col-md-10 text-center wow fadeInUp">
                    <div class="heading pb-5">
                        <h1 class="display-4">Find Nearby Spots</h1>
                        <h4 class="font-weight-normal mb-0">Expolore top-rated attractions, activities and more</h4>
                    </div>
                    <ul class="nav nav-tabs flex-column flex-sm-row" id="myTab" role="tablist">
                        <li class="nav-item mr-md-1">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-map-marker pr-1"></i> Places</a>
                        </li>
                        <li class="nav-item mr-md-1">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-microphone pr-1"></i> Events</a>
                        </li>
                    </ul>
                    <div class="tab-content bg-white p-5 rounded-bottom rounded-right" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            @component('components.search-form', [
                                 'categories' => $categories,
                                 'search_btn' => 'Search Events',
                                 'location' => true,
                                 'date' => false,
                                 'radius' => false

                                 ])
                            @endcomponent
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            @component('components.search-form', [
                              'categories' => $categories,
                              'search_btn' => 'Search Events',
                              'location' => true,
                              'date' => false,
                              'radius' => false

                              ])
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Inner -->
    <!-- Categories -->
    <section class="lis-grediant grediant-tb-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center">
                    <div class="heading pb-4">
                        <h5 class="lis-light">Find the best places</h5>
                        <h2 class="f-weight-500">Discover Our Featured Categories.</h2> </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="fullwidth-carousel-container center2 slider">
                @foreach($categories as $category)
                    <div>
                        <div class="card lis-brd-light text-center text-lg-left lis-info lis-relative">
                            <a href="#">
                                <div class="lis-grediant grediant-tb-light lis-relative modImage rounded"> <img src="/storage/{{ $category->image }}" alt="" class="img-fluid rounded" /> </div>
                            </a>
                            <div class="hover-text lis-absolute lis-left-20 lis-bottom-20 lis-font-roboto text-white text-left">
                                <h6 class="text-white mb-0">{{ $category->name }}</h6> <span class="lis-font-roboto">{{ $category->listings_count }} listings</span> </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 text-center"> <a href="/category" class="btn btn-info">View More Featured Categories</a> </div>
            </div>
        </div>
    </section>
    <!--End Categories -->

    <!-- Explore Cities -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center">
                    <div class="heading pb-4">
                        <h2 class="f-weight-500">Explore Cities</h2>
                        <h5 class="lis-light">Discover & connect with top-rated local businesses in any city</h5> </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row portfolio-box">
                <div class="post col-md-4 text-center wow fadeInUp mb-4">
                    <a href="#" class="text-white">
                        <div class="text-white lis-relative lis-masonry"> <img src="/storage/images/masonry1.jpg" alt="" class="img-fluid rounded w-100">
                            <div class="overlay rounded"></div>
                            <div class="lis-absolute lis-right-0 lis-left-0 lis-top-0 w-100 h-100">
                                <div class="d-table w-100 h-100">
                                    <div class="d-table-cell align-middle">
                                        <h4 class="mb-2 text-white">Abuja</h4>
                                        <p>16 Listings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="post col-md-4 text-center wow fadeInUp mb-4 mb-md-0">
                    <a href="#" class="text-white">
                        <div class="text-white lis-relative lis-masonry"> <img src="/storage/images/masonry2.jpg" alt="" class="img-fluid rounded w-100">
                            <div class="overlay rounded"></div>
                            <div class="lis-absolute lis-right-0 lis-left-0 lis-top-0 w-100 h-100">
                                <div class="d-table w-100 h-100">
                                    <div class="d-table-cell align-middle">
                                        <h4 class="mb-2 text-white">Lagos</h4>
                                        <p>{{ $states->find(20)->listings_count }} listings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="post col-md-4 text-center wow fadeInUp mb-4">
                    <a href="#" class="text-white">
                        <div class="text-white lis-relative lis-masonry"> <img src="/storage/images/masonry3.jpg" alt="" class="img-fluid rounded w-100">
                            <div class="overlay rounded"></div>
                            <div class="lis-absolute lis-right-0 lis-left-0 lis-top-0 w-100 h-100">
                                <div class="d-table w-100 h-100">
                                    <div class="d-table-cell align-middle">
                                        <h4 class="mb-2 text-white">Ibadan</h4>
                                        <p>27 Listings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="post col-md-4 text-center wow fadeInUp mb-4 mb-md-0">
                    <a href="#" class="text-white">
                        <div class="text-white lis-relative lis-masonry"> <img src="/storage/images/masonry4.jpg" alt="" class="img-fluid rounded w-100">
                            <div class="overlay rounded"></div>
                            <div class="lis-absolute lis-right-0 lis-left-0 lis-top-0 w-100 h-100">
                                <div class="d-table w-100 h-100">
                                    <div class="d-table-cell align-middle">
                                        <h4 class="mb-2 text-white">Owerri</h4>
                                        <p>23 Listings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="post col-md-4 text-center wow fadeInUp mb-4 mb-md-0">
                    <a href="#" class="text-white">
                        <div class="text-white lis-relative lis-masonry"> <img src="/storage/images/masonry5.jpg" alt="" class="img-fluid rounded w-100">
                            <div class="overlay rounded"></div>
                            <div class="lis-absolute lis-right-0 lis-left-0 lis-top-0 w-100 h-100">
                                <div class="d-table w-100 h-100">
                                    <div class="d-table-cell align-middle">
                                        <h4 class="mb-2 text-white">Asaba</h4>
                                        <p>{{ $states->find(10)->listings_count }} Listings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End Explore Cities -->

    <!-- Visited Places -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center">
                    <div class="heading pb-4">
                        <h2 class="f-weight-500">Featured Places</h2>
                        <h5 class="lis-light">Discover & connect with top-rated local businesses</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-0">
            <div class="fullwidth-carousel-container center slider">
                @forelse($listings as $listing)
                    <div>
                        <div class="card lis-brd-light text-center text-lg-left">
                            <a href="#">
                                <div class="lis-grediant grediant-tb-light2 lis-relative modImage rounded-top">
                                    <img src="/storage/{{ $listing->cover_image }}" alt="" class="img-fluid rounded-top w-100 cover_img" />
                                </div>
                                <div class="lis-absolute lis-right-20 lis-top-20">
                                    <div class="lis-post-meta border border-white text-white rounded lis-f-14">Open</div>
                                </div>
                            </a>
                            <div class="card-body pt-0">
                                <div class="media d-block d-lg-flex lis-relative">
                                    <img src="/storage/{{ $listing->logo }}" alt="" class="lis-mt-minus-15 img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 lis-border-width-2 border-white logo" />
                                    <div class="media-body align-self-start mt-2">
                                        <h5 class="mb-0 lis-font-weight-600"><A href="#" class="lis-dark">{{ $listing->name }}</A></h5>
                                        <p class="blockquote-footer">{{ $listing->tagline }}</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled my-4 lis-line-height-2">
                                    <li><i class="fa fa-angle-double-right pr-2"></i>{{ $listing->description }}</li>
                                    <li><i class="fa fa-phone pr-2"></i>{{ $listing->phone }}</li>
                                    <li><i class="fa fa-map-o pr-2"></i>{{ $listing->address }}</li>
                                    <li><i class="fa fa-map-marker pr-2"></i>{{ $listing->state->states }}</li>
                                    <li><i class="fa fa-folder-open pr-2"></i>{{ $listing->category->name }}</li>

                                </ul>
                                <div class="clearfix">
                                    <div class="float-none float-lg-left mb-3 mb-lg-0 mt-1">
                                        <a href="#" class="text-white"><i class="icofont icofont-travelling px-2 lis-bg5 py-2 lis-rounded-circle-50 lis-f-14"></i></a>
                                        <a href="#" class="lis-id-info lis-light p-2 lis-rounded-circle-50 lis-f-14">1 More...</a>
                                    </div>
                                    <div class="float-none float-lg-right mt-1">
                                        <a href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></a>
                                        <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></a>
                                        <a href="#" class="lis-green-light text-white text-white p-2 lis-rounded-circle-50 lis-f-14 lis-line-height-2"><i class="fa fa-star"></i> 4.0</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    No Featured Listing
                @endforelse
            </div>
        </div>
        <div class="container" style="margin-top: 7%">
            <div class="row justify-content-center mt-5">
                <div class="col-12 text-center"> <a href="/listings" class="btn btn-info">View More Listings</a> </div>
            </div>
        </div>
    </section>
    <!--End Visited Places -->

    <!-- Work -->
    <section class="lis-bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center">
                    <div class="heading pb-4">
                        <h2>How Does It Work</h2>
                        <h5 class="font-weight-normal lis-light">Discover & connect with top-rated local businesses</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 text-center wow fadeInUp mb-5 mb-md-0">
                    <div class="icon-box box-line box-line-dotted1 lis-relative">
                        <img src="/storage/images/icon-1.png" alt="" class="img-fluid mb-4 z-index-99  lis-relative" />
                        <h5>1. Find Interesting Place</h5>
                        {{-- <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p> --}}
                    </div>
                </div>
                <div class="col-12 col-md-4 text-center wow fadeInUp mb-5 mb-md-0">
                    <div class="icon-box box-line box-line-dotted2 lis-relative">
                        <img src="/storage/images/icon-2.png" alt="" class="img-fluid mb-4 z-index-99  lis-relative" />
                        <h5>2. Choose a Category</h5>
                        {{-- <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p> --}}
                    </div>
                </div>
                <div class="col-12 col-md-4 text-center wow fadeInUp mb-5 mb-md-0">
                    <div class="icon-box">
                        <img src="/storage/images/icon-3.png" alt="" class="img-fluid mb-4 z-index-99  lis-relative" />
                        <h5>3. Contact with Owners</h5>
                        {{-- <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Work -->

    <!-- Upcoming Events -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center">
                    <div class="heading pb-4">
                        <h2>Upcoming Events</h2>
                        <h5 class="font-weight-normal lis-light">Discover & connect with top-rated local businesses</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($events as $event)
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5 mb-lg-0">
                        <div class="card lis-brd-light bg-transparent">
                        <a href="listing-explore-event-profile.html">
                            <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top">
                                <img src="/storage/{{ $event->image }}" alt="" class="img-fluid rounded-top w-100 event_img">
                            </div>
                            <div class="lis-absolute lis-right-20 lis-top-20">
                                <div class="lis-post-meta border border-white text-white rounded lis-f-14">{{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</div>
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="media d-block d-sm-flex text-center text-sm-left">
                                <div class="d-block d-sm-flex">
                                    <ul class="list-unstyled my-0">
                                        <li class="lis-font-weight-800 mb-2 h6"><a href="listing-explore-event-profile.html" class="lis-dark">{{ $event->name }}</a></li>
                                        <li><i class="fa fa-map-o pr-2"></i>{{ $event->venue }}</li>
                                        <li><i class="fa fa-folder pr-2"></i>{{ $event->eventcategory->name }}</li>
                                    </ul>
                                </div>
                                <div class="media-body align-self-center text-center text-sm-right mt-3 mt-sm-0">
                                    <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <h3>No Upcoming Event</h3>
                @endforelse
            </div>
        </div>
        <div class="container" style="margin-top: 7%">
            <div class="row justify-content-center mt-5">
                <div class="col-12 text-center"> <a href="/event" class="btn btn-info">View More Events</a> </div>
            </div>
        </div>
    </section>
    <!--End Upcoming Events -->

@endsection

