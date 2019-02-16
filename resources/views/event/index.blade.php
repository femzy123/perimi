@extends('layouts.layout')

@section('content')

    <!-- Sidebar -->
    <section class="pb-0" style="padding-top: 94px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 py-5 order-lg-1 order-2 left-sidebar z-index-99">
                    <div class="lis-relative">
                        <h5 class="mb-2">Which event are you looking for?</h5>
                        <p>Search by Keywords, Location, Category or Filters</p>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group lis-relative">
                                    <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="What are you looking for?">
                                    <div class="lis-search">
                                        <i class="fa fa-search lis-primary lis-left-0"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group lis-relative">
                                    <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Location">
                                    <div class="lis-search">
                                        <i class="fa fa-map-o lis-primary lis-left-0"></i>
                                    </div>
                                    <div class="lis-search">
                                        <a href="#" class="lis-light"><i class="fa fa-crosshairs lis-left-auto lis-right-0"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group lis-relative">
                                    <select class="style-select form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4">
                                        <option> All Categories</option>
                                        @foreach($categories as $category)
                                            <option>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="lis-search">
                                        <i class="fa fa-tags lis-primary lis-left-0"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <p class="pt-2 mb-2">Radius <span id="ex6CurrentSliderValLabel"> <span id="ex6SliderVal">530 </span></span></p>
                                <input id="ex6" type="text" data-slider-min="300" data-slider-max="1000" data-slider-step="1" data-slider-value="3"/>
                            </div>
                            <div class="col-12 col-md-4">
                                <div id="datepicker" class="form-group lis-relative">
                                    <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4 has-datepicker" placeholder="Date" />
                                    <div class="lis-search">
                                        <i class="fa fa-calendar lis-primary lis-left-0"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-md-12 pt-4">
                                <a href="#" class="btn btn-info"><i class="fa fa-search pr-2"></i> Search Events</a>
                            </div>
                        </div>
                        <div class="row mt-5">
                            @forelse($events as $event)
                                <div class="col-12 col-xl-6 mb-xl-0 mb-5">
                                <div class="card lis-brd-light bg-transparent">
                                    <a href="/event/{{$event->id}}">
                                        <div class="modImage lis-grediant grediant-tb-light2 lis-relative rounded-top">
                                            <img src="storage/{{ $event->image }}" alt="" class="img-fluid rounded-top w-100">
                                        </div>
                                        <div class="lis-absolute lis-right-20 lis-top-20">
                                            <div class="lis-post-meta border border-white text-white rounded lis-f-14">{{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</div>
                                        </div>
                                    </a>
                                    <div class="card-body">
                                        <div class="media d-block d-sm-flex text-center text-sm-left">
                                            <div class="d-block d-sm-flex">
                                                <ul class="list-unstyled my-0">
                                                    <h6 class="lis-font-weight-600 mb-2"><a href="#" class="lis-dark">{{ $event->name }}</a></h6>
                                                    <li><i class="fa fa-map-o pr-2"></i>{{ $event->venue }}</li>
                                                    <li><i class="fa fa-folder pr-2"></i>{{ $event->eventcategory->name }}</li>
                                                </ul>
                                            </div>
                                            <div class="media-body align-self-center text-center text-sm-right mt-3 mt-sm-0">
                                                <a href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info lis-rounded-circle-50 text-center"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <h3>No Event Available</h3>
                            @endforelse
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
        <h3 class="text-white mb-0 lis-line-height-1_7"><i class="icofont icofont-long-arrow-up"></i></h3>
    </a>
    <!-- End Top To Bottom-->

@endsection