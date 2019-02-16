<div class="row">
    <div class="col-12

    @if($radius)
        col-md-6
        @else
            col-md-12
    @endif">
        <div class="form-group lis-relative">
            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="What are you looking for?">
            <div class="lis-search">
                <i class="fa fa-search lis-primary lis-left-0"></i>
            </div>
        </div>
    </div>
    @if($location)
        <div class="col-12
        @if($radius)
        col-md-6
        @else
                col-sm-6 col-lg-4
        @endif
            ">
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
    @endif
    <div class="col-12
            @if($radius)
            col-md-4
                @else
            col-sm-6 col-lg-4
                @endif
            ">
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
    @if($radius)
        <div class="col-12 col-md-4">
            <p class="pt-2 mb-2">Radius <span id="ex6CurrentSliderValLabel"> <span id="ex6SliderVal">530 </span></span></p>
            <input id="ex6" type="text" data-slider-min="300" data-slider-max="1000" data-slider-step="1" data-slider-value="3"/>
        </div>
        @else
        <div class="col-12 col-lg-4">
            <a href="#" class="btn btn-info btn-block btn-lg"><i class="fa fa-search pr-1"></i> Search</a>
        </div>
    @endif
    @if($date)
        <div class="col-12 col-md-4">
            <div id="datepicker" class="form-group lis-relative">
                <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4 has-datepicker" placeholder="Date" />
                <div class="lis-search">
                    <i class="fa fa-calendar lis-primary lis-left-0"></i>
                </div>
            </div>
        </div>
    @endif
</div>
@if($radius)
    <div class="row mt-3">
        <div class="col-12 col-md-12 pt-4">
            <a href="#" class="btn btn-info"><i class="fa fa-search pr-2"></i>{{ $search_btn }}</a>
        </div>
    </div>
@endif