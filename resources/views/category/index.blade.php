@extends('layouts.layout')

@section('content')

    <!-- Category -->
    <section>
        <div class="container pt-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center">
                    <div class="heading pb-4">
                        <h5 class="lis-light">Find the best places</h5>
                        <h2 class="f-weight-500">Find Listings by Category</h2> </div>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                <div class="col-12 col-sm-6 col-xl-3 mb-4 wow fadeInUp">
                    <div class="card lis-brd-light text-center text-lg-left lis-info lis-relative">
                        <a href="/category/{{$category->id}}">
                            <div class="lis-grediant grediant-tb-light lis-relative modImage rounded"> <img src="storage/{{ $category->image }}" alt="" class="img-fluid rounded" /> </div>
                            {{--<div class="lis-absolute lis-left-20 lis-top-20 lis-bg6 lis-icon lis-rounded-circle-50 text-center">--}}
                                {{--<div class="text-white mb-0 lis-line-height-2_5 h4"><i class="icofont icofont-medical-sign-alt"></i></div>--}}
                            {{--</div>--}}
                        </a>
                        <div class="hover-text lis-absolute lis-left-20 lis-bottom-20 lis-font-roboto text-white text-left">
                            <h4 class="text-white mb-0">{{ $category->name }}</h4> <span class="lis-font-roboto">{{ $category->listings_count }} listings</span> </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Category -->

@endsection