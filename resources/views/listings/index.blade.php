@extends('layouts.layout')

@section('content')

    <!-- Sidebar -->
    <section class="pb-0" style="padding-top: 94px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 py-5 order-lg-1 order-2 left-sidebar z-index-99">
                    <div class="lis-relative">
                        <h5 class="mb-2">What are you looking for?</h5>
                        <p>Search by Keywords, Location, Category or Filters</p>

                        <div class="form-group lis-relative">
                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="What are you looking for?">
                            <div class="lis-search"> <i class="fa fa-search lis-primary lis-left-0"></i> </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group lis-relative">
                                    <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Location">
                                    <div class="lis-search"> <i class="fa fa-map-o lis-primary lis-left-0"></i> </div>
                                    <div class="lis-search"> <a href="#" class="lis-light"><i class="fa fa-crosshairs lis-left-auto lis-right-0"></i></a> </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group lis-relative">
                                    <select class="style-select form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4">
                                        <option> All Categories</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <div class="lis-search"> <i class="fa fa-tags lis-primary lis-left-0"></i> </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <p class="pt-2 mb-2">Radius <span id="ex6CurrentSliderValLabel"> <span id="ex6SliderVal">530 </span></span>
                                </p>
                                <input id="ex6" type="text" data-slider-min="300" data-slider-max="1000" data-slider-step="1" data-slider-value="3" /> </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-md-12 pt-4">
                                <a href="#" class="btn btn-info"><i class="fa fa-search pr-2"></i> Search Places</a>
                            </div>
                        </div>
                        <div class="row mt-5">
                        @foreach($listings as $listing)
                                <div class="col-12 col-xl-6 mb-xl-0 mb-5">
                                <div class="card lis-brd-light text-center text-lg-left">
                                    <a href="/listings/{{ $listing->id }}">
                                        <div class="lis-grediant  lis-relative grediant-tb-light2 modImage lis-radius rounded-top"> <img src="\storage\{{ $listing->cover_image }}" alt="" class="cover_img img-fluid rounded-top w-100" /> </div>
                                        <div class="lis-absolute lis-right-20 lis-top-20">
                                            <div class="lis-post-meta border border-white text-white rounded lis-f-14">Open</div>
                                        </div>
                                    </a>
                                    <div class="card-body pt-0">
                                        <div class="media d-block d-lg-flex lis-relative"> <img src="\storage\{{ $listing->logo }}" alt="" class="logo lis-mt-minus-15 img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 border lis-border-width-2 rounded-circle border-white" width="80" />
                                            <div class="media-body align-self-start mt-2">
                                                <h6 class="mb-0 lis-font-weight-600"><A href="#" class="lis-dark">{{ $listing->name }}</A></h6> </div>
                                        </div>
                                        <ul class="list-unstyled my-4 lis-line-height-2">
                                            <li><i class="fa fa-phone pr-2"></i>{{ $listing->phone }}</li>
                                            <li><i class="fa fa-map-o pr-2"></i>{{ $listing->address }}</li>
                                            <li><i class="fa fa-map-marker pr-2"></i>{{ $listing->state->states }}</li>
                                            <li><i class="fa fa-folder-open pr-2"></i>{{ $listing->category->name }}</li>
                                        </ul>
                                        <div class="clearfix">
                                            <div class="float-none float-lg-right mt-1">
                                                <A href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                                <A href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                                <A href="#" class="lis-green-light text-white p-2 lis-rounded-circle-50 lis-f-14"><i class="fa fa-star"></i> 3.0</A> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-lg-2 order-1 px-0">
                    <div id="map" class="w-100 h-100 map-fixed"></div>
                </div>
            </div>
        </div>
    </section>
    <!--End Sidebar -->
    <!-- Top To Bottom-->
    <a href="#" class="scrollup text-center lis-bg-primary lis-rounded-circle-50">
        <div class="text-white mb-0 lis-line-height-1_7 h3"><i class="icofont icofont-long-arrow-up"></i></div>
    </a>
    <!-- End Top To Bottom-->

@endsection

