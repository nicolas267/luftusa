@extends('layouts.app_front')

@section('content')
<!-- Main Content - start -->
<main>
    <!-- Frontpage Slider -->
    <div class="frontslider-wrap">
        <div class="responisve-container">
            <div class="slider" id="front-slider">
                <div class="slide">
                    <img alt="American Legends" data-delay="0" data-in="fade" data-out="fade" data-position="45,430" src="{{Request::root()}}/frontend_template/HTML/img/front-slider/1.png">
                        <p class="caption1" data-delay="0" data-in="right" data-out="fade" data-position="50,0" data-step="0">
                            AMERICAN
                        </p>
                        <p class="caption2" data-delay="0" data-in="right" data-out="fade" data-position="150,0" data-step="0">
                            LEGENDS
                        </p>
                    </img>
                </div>
                <div class="slide">
                    <img alt="Legendary Bike" data-delay="0" data-in="fade" data-out="fade" data-position="50,518" src="{{Request::root()}}/frontend_template/HTML/img/front-slider/2.png">
                        <p class="caption1" data-delay="0" data-in="right" data-out="fade" data-position="50,0" data-step="0">
                            OFFROAD
                        </p>
                        <p class="caption2" data-delay="0" data-in="right" data-out="fade" data-position="150,0" data-step="0">
                            KING
                        </p>
                    </img>
                </div>
                <div class="slide">
                    <img alt="Dream Car" data-delay="0" data-in="fade" data-out="fade" data-position="21,480" src="{{Request::root()}}/frontend_template/HTML/img/front-slider/3.png">
                        <p class="caption1" data-delay="0" data-in="right" data-out="fade" data-position="50,0" data-step="0">
                            DREAM
                        </p>
                        <p class="caption2" data-delay="0" data-in="right" data-out="fade" data-position="150,0" data-step="0">
                            CARS
                        </p>
                    </img>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories List -->
    <div class="cont">
        <ul class="frontcategs">
            <li>
                <a href="catalog.html">
                    <span class="frontcategs-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg1.png">
                        </img>
                    </span>
                    <p>
                        Automobiles
                    </p>
                </a>
            </li>
            <li>
                <a href="catalog.html">
                    <span class="frontcategs-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg2.png">
                        </img>
                    </span>
                    <p>
                        Motorcycles
                    </p>
                </a>
            </li>
            <li>
                <a href="catalog.html">
                    <span class="frontcategs-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg3.png">
                        </img>
                    </span>
                    <p>
                        ATVs
                    </p>
                </a>
            </li>
            <li>
                <a href="catalog.html">
                    <span class="frontcategs-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg4.png">
                        </img>
                    </span>
                    <p>
                        Snowmobiles
                    </p>
                </a>
            </li>
            <li>
                <a href="catalog.html">
                    <span class="frontcategs-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg5.png">
                        </img>
                    </span>
                    <p>
                        UTVs
                    </p>
                </a>
            </li>
            <li>
                <a href="catalog.html">
                    <span class="frontcategs-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg6.png">
                        </img>
                    </span>
                    <p>
                        Scooters
                    </p>
                </a>
            </li>
            <li>
                <a href="catalog.html">
                    <span class="frontcategs-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg7.png">
                        </img>
                    </span>
                    <p>
                        Watercrafts
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- Frontpage Filter -->
    <div class="frontsearch-wrap">
        <div class="cont frontsearch">
            <h2>
                Search
            </h2>
            <p class="frontsearch-count">
                21900 ITEMS
            </p>
            <div class="frontsearch-wrap">
                <div class="frontsearch-selects">
                    <div class="dropdown-wrap frontsearch-select">
                        <p class="dropdown-title frontsearch-select-ttl">
                            Choose Type
                        </p>
                        <ul class="dropdown-list">
                            @foreach($carstype as $cartype)
                            <li>
                                <a href="#">
                                    {{ ucwords($cartype->car_type) }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="dropdown-wrap frontsearch-select">
                        <p class="dropdown-title frontsearch-select-ttl">
                            Choose Model
                        </p>
                        <ul class="dropdown-list">
                            @foreach($carmodel as $carmodel)
                            <li>
                                <a href="#">
                                    {{ ucwords($carmodel->car_model) }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="dropdown-wrap frontsearch-select">
                        <p class="dropdown-title frontsearch-select-ttl">
                            Choose Version
                        </p>
                        <ul class="dropdown-list">
                            @foreach($carversions as $carversion)
                            <li>
                                <a href="#">
                                    {{ ucwords($carversion->car_version) }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="dropdown-wrap frontsearch-select dropdown-wrap-range">
                        <p class="dropdown-title frontsearch-select-ttl" id="range_year_ttl">
                            2013 - 2016
                        </p>
                        <ul class="dropdown-list">
                            <li>
                                <input id="range_year" type="text" value="">
                                </input>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown-wrap frontsearch-select dropdown-wrap-range">
                        <p class="dropdown-title frontsearch-select-ttl" id="range_cost_ttl">
                            $200 - $14.000
                        </p>
                        <ul class="dropdown-list">
                            <li>
                                <input id="range_cost" type="text" value="">
                                </input>
                            </li>
                        </ul>
                    </div>
                </div>
                <div style="height: 200px;">
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Special Deals Items -->
<div class="specials-wrap">
    <div class="cont specials">
        <h2>
            Special Deals
        </h2>
        <p class="specials-count">
            350 ITEMS
        </p>
        <div class="specials-list">
            <div class="special special-pseudo">
                <a class="special-link" href="#">
                </a>
            </div>
            <div class="special special-first">
                <a class="special-link" href="product.html">
                    <p class="special-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/spec1.jpg">
                        </img>
                    </p>
                    <h3>
                        <span>
                            Nulla lacinia lectus
                        </span>
                    </h3>
                </a>
                <p class="special-info">
                    <a class="special-categ" href="#">
                        Suspensions
                    </a>
                    <span class="special-price">
                        $200
                    </span>
                    <del>
                        $400
                    </del>
                    <a class="special-add" href="#">
                        + Add to cart
                    </a>
                </p>
            </div>
            <div class="special">
                <a class="special-link" href="product.html">
                    <p class="special-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/spec2.jpg">
                        </img>
                    </p>
                    <h3>
                        <span>
                            Praesent amet mollis
                        </span>
                    </h3>
                </a>
                <p class="special-info">
                    <a class="special-categ" href="#">
                        Brakes
                    </a>
                    <span class="special-price">
                        $312
                    </span>
                    <a class="special-add" href="#">
                        + Add to cart
                    </a>
                </p>
            </div>
            <div class="special">
                <a class="special-link" href="product.html">
                    <p class="special-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/spec3.jpg">
                        </img>
                    </p>
                    <h3>
                        <span>
                            Mauris suscipit tellus
                        </span>
                    </h3>
                </a>
                <p class="special-info">
                    <a class="special-categ" href="#">
                        Gauges
                    </a>
                    <span class="special-price">
                        $230.50
                    </span>
                    <a class="special-add" href="#">
                        + Add to cart
                    </a>
                </p>
            </div>
            <div class="special">
                <a class="special-link" href="product.html">
                    <p class="special-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/spec4.jpg">
                        </img>
                    </p>
                    <h3>
                        <span>
                            Suspendisse lobortis
                        </span>
                    </h3>
                </a>
                <p class="special-info">
                    <a class="special-categ" href="#">
                        Filters
                    </a>
                    <span class="special-price">
                        $1290
                    </span>
                    <a class="special-add" href="#">
                        + Add to cart
                    </a>
                </p>
            </div>
            <div class="special">
                <a class="special-link" href="product.html">
                    <p class="special-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/spec5.jpg">
                        </img>
                    </p>
                    <h3>
                        <span>
                            Nam iaculis risus nisi
                        </span>
                    </h3>
                </a>
                <p class="special-info">
                    <a class="special-categ" href="#">
                        Sprockets
                    </a>
                    <span class="special-price">
                        $1180
                    </span>
                    <a class="special-add" href="#">
                        + Add to cart
                    </a>
                </p>
            </div>
            <div class="special">
                <a class="special-link" href="product.html">
                    <p class="special-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/spec6.jpg">
                        </img>
                    </p>
                    <h3>
                        <span>
                            Sed fermentum elit
                        </span>
                    </h3>
                </a>
                <p class="special-info">
                    <a class="special-categ" href="#">
                        Spark Plugs
                    </a>
                    <span class="special-price">
                        $305
                    </span>
                    <a class="special-add" href="#">
                        + Add to cart
                    </a>
                </p>
            </div>
            <div class="special">
                <a class="special-link" href="product.html">
                    <p class="special-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/spec7.jpg">
                        </img>
                    </p>
                    <h3>
                        <span>
                            Mauris suscipit tellus
                        </span>
                    </h3>
                </a>
                <p class="special-info">
                    <a class="special-categ" href="#">
                        Springs
                    </a>
                    <span class="special-price">
                        $230.30
                    </span>
                    <a class="special-add" href="#">
                        + Add to cart
                    </a>
                </p>
            </div>
        </div>
        <p class="special-more">
            <a href="#">
                show more
            </a>
        </p>
        <span class="special-line1">
        </span>
        <span class="special-line2">
        </span>
    </div>
</div>
<!-- Popular Items -->
<div class="populars-wrap">
    <div class="cont populars">
        <h2>
            Popular
        </h2>
        <p class="populars-count">
            8 ITEMS
        </p>
        <div class="populars-list">
            @foreach($products as $product)
            <div class="popular">
                <a class="popular-link" href="product.html">
                    <p class="popular-img">
                        <img alt="" src="{{Request::root()}}/frontend_template/HTML/img/pop1.jpg">
                        </img>
                    </p>
                    <h3>
                        <span>
                            {{ucwords($product->part)}}
                        </span>
                    </h3>
                </a>
                <p class="popular-info">
                    <a class="popular-categ" href="#">
                        Helmets
                    </a>
                    <span class="popular-price">
                        ${{number_format($product->price,'2',',','.')}}
                    </span>
                    <a class="popular-add" href="#">
                        + Add to cart
                    </a>
                </p>
            </div>
            @endforeach
        </div>
        <p class="popular-more">
            <a href="#">
                show more
            </a>
        </p>
        <span class="popular-line1">
        </span>
        <span class="popular-line2">
        </span>
    </div>
</div>
<!-- Main Content - end -->
@endsection
