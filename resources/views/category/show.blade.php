@extends('layouts.layout')

@section('content')

    <!-- Sidebar -->
    <section class="">
        <div class="container">
            <div class="row pt-5">
                <div class="col-12 col-md-12">
                    <div class="lis-relative">
                        <div class="row">
                            <div class="col-sm-6 align-self-center">
                                <h5>Showing Listings under {{ $category->name }}</h5>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-right shorting">
                                    <div class="form-group lis-relative">
                                        <div>
                                            <i class="fa fa-sliders lis-primary lis-left-0"></i>
                                            <a href="{{ route('category.show', ['category'=> request()->category, 'sort'=> 'latest']) }}" style="font-size: small">Latest</a> |
                                            <a href="{{ route('category.show', ['category'=> request()->category, 'sort'=> 'oldest']) }}" style="font-size: small">Oldest</a>
                                        </div>

                                        {{--<select class="form-control border-0 pl-4">--}}
                                            {{--<option>Default Order</option>--}}
                                            {{--<option>Newest First</option>--}}
                                            {{--<option>Oldest First</option>--}}
                                            {{--<option>Highest Rating</option>--}}
                                            {{--<option>Lowest Rating</option>--}}
                                            {{--<option>Random</option>--}}
                                        {{--</select>--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @forelse($category->listings as $listing)
                            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-4">
                                <div class="card lis-brd-light wow fadeInUp text-center text-lg-left">
                                    <a href="#">
                                        <div class="lis-grediant grediant-tb-light2 lis-relative modImage lis-radius rounded-top"> <img src="/storage/{{ $listing->cover_image }}" alt="" class="img-fluid rounded-top w-100 cover_img" /> </div>
                                        <div class="lis-absolute lis-right-20 lis-top-20">
                                            <div class="lis-post-meta border border-white text-white rounded lis-f-14">Open</div>
                                        </div>
                                    </a>
                                    <div class="card-body pt-0">
                                        <div class="media d-block d-lg-flex lis-relative"> <img src="/storage/{{ $listing->logo }}" alt="" class="lis-mt-minus-15 img-fluid d-lg-flex mx-auto mr-lg-3 mb-4 mb-lg-0 border lis-border-width-2 rounded-circle border-white" width="80" />
                                            <div class="media-body align-self-start mt-2">
                                                <h6 class="mb-0 lis-font-weight-600"><A href="#" class="lis-dark">{{ $listing->name }}</A></h6>
                                                <p class="blockquote-footer">{{ $listing->tagline }}</p>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled my-4 lis-line-height-2">
                                            <li><i class="fa fa-phone pr-2"></i> {{ $listing->phone }}</li>
                                            <li><i class="fa fa-map-o pr-2"></i> {{ $listing->address }}</li>
                                            <li><i class="fa fa-map-marker pr-2"></i>{{ $listing->state->states }}</li>
                                        </ul>
                                        <div class="clearfix">
                                            <div class="float-none float-lg-left mb-3 mb-lg-0 mt-1">
                                                <A href="#" class="text-white"><i class="icofont icofont-beer px-2 lis-bg2 py-2 lis-rounded-circle-50 lis-f-14"></i></A>
                                                <A href="#" class="text-white"><i class="icofont icofont-fast-food px-2 lis-bg4 py-2 lis-rounded-circle-50 lis-f-14"></i></A>
                                                <A href="#" class="lis-id-info lis-light p-2 lis-rounded-circle-50 lis-f-14">1 More...</A> </div>
                                            <div class="float-none float-lg-right mt-1">
                                                <A href="#" class="lis-light lis-f-14"><i class="fa fa-envelope-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                                <A href="#" class="lis-light lis-f-14"><i class="fa fa-heart-o lis-id-info  lis-rounded-circle-50 text-center"></i></A>
                                                <A href="#" class="lis-green-light text-white p-2 lis-rounded-circle-50 lis-f-14"><i class="fa fa-star"></i> 3.0</A> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <h3>No Listings in this category</h3>
                            @endforelse
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <nav>
                                    <ul class="pagination list-inline mb-0 text-center text-uppercase lis-f-14 justify-content-center">
                                        {{--<li class="p-1 page-item">{{ $category->link() }}</li>--}}
                                        {{--<li class="p-1 page-item d-none d-sm-inline-block"><a class="page-link lis-light rounded" href="#">1</a></li>--}}
                                        {{--<li class="p-1 page-item d-none d-sm-inline-block active"><a class="page-link lis-light rounded" href="#">2</a></li>--}}
                                        {{--<li class="p-1 page-item d-none d-sm-inline-block"><a class="page-link lis-light rounded" href="#">3</a></li>--}}
                                        {{--<li class="p-1 page-item"><a class="page-link lis-brd-light lis-light rounded" href="#"> Next <i class="fa fa-angle-right pl-1"></i></a></li>--}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Sidebar -->

@endsection