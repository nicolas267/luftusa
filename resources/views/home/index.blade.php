@extends('layouts.app_front')

@section('content')
<!-- Main Content - start -->
<main>
    <!-- Frontpage Slider -->
    <div class="frontslider-wrap">
        <div class="responisve-container">
            <div class="slider" id="front-slider">
                <div class="slide">
                    <img alt="Legendary Bike" width="544" height="330" data-delay="0" data-in="fade" data-out="fade" data-position="50,518" src="{{Request::root()}}/public/frontend_template/HTML/img/front-slider/2.png"/>
                    <p class="caption1" data-delay="0" data-in="right" data-out="fade" data-position="50,0" data-step="0">
                        OFFROAD
                    </p>
                    <p class="caption2" data-delay="0" data-in="right" data-out="fade" data-position="150,0" data-step="0">
                        KING
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories List -->
    <div class="cont">
        <ul class="frontcategs">
            <li>
                <a href="#">
                    <span class="frontcategs-img">
                        <div class="acce">
                            
                        </div>
                    </span>
                    <p>
                        Air
                    </p>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="frontcategs-img">
                       <div class="acce">
                            
                        </div>
                    </span>
                    <p>
                        Performance
                    </p>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="frontcategs-img">
                       <div class="acce">
                            
                        </div>
                    </span>
                    <p>
                        Exterior
                    </p>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="frontcategs-img">
                       <div class="acce">
                            
                        </div>
                    </span>
                    <p>
                        Accessories
                    </p>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="frontcategs-img">
                       <div class="acce">
                            
                        </div>
                    </span>
                    <p>
                        Apparel
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <div class="frontsearch-wrap maincont">
        <div class="cont frontsearch">
            <h2>
                Search
            </h2>
            <span class="maincont-line1" style="margin-top: -10px; margin-right:50px; margin-left: -10px;">
            </span>
            <span class="maincont-line2" style="margin-left: 40px; margin-top: 47px;">
            </span>
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
        <!-- Special Deals Items -->
        <div class="specials-wrap">
            <div class="cont specials">
                <h2>
                    Special Deals
                </h2>
                <div class="specials-list">
                    <div class="special special-pseudo">
                        <a class="special-link" href="#">
                        </a>
                    </div>
                        @if(count($favorite)>0)
                            @foreach($favorite as $product)
                                <div class="special">
                                    <form action="{{route('cart.store')}}" method="post">
                                        @csrf
                                        <a class="special-link" href="{{route('products.show',$product->car_part_id)}}">
                                            <p class="special-img">
                                                <img alt="" src="{{Request::root()}}/public/frontend_template/HTML/img/spec2.jpg"/>
                                            </p>
                                            <h3>
                                                <span>
                                                   {{ucwords($product->part)}}
                                                </span>
                                            </h3>
                                        </a>
                                        <p class="special-info">
                                            <a class="special-categ" href="#">
                                                Helmets
                                            </a>
                                            <span class="special-price">
                                                ${{number_format($product->price,'2',',','.')}}
                                            </span>
                                            <input type="hidden" name="id" value="{{$product->car_part_id}}">
                                            <input type="hidden" name="name" value="{{$product->part}}">
                                            <input type="hidden" name="price" value="{{$product->price}}">
                                            <input type="hidden" name="qty" value="1">
                                            <button type="submit" class="special-add">
                                                + Add to cart
                                            </button>
                                        </p>
                                    </form>
                                </div>
                            @endforeach
                        @else
                            <div class="special" style="width: 100%; height: 200px; min-height:0px;">
                                <h1 style="text-align: center; margin-top: 5%;">Sorry at the moment we do not have content to show</h1>
                            </div>
                        @endif
                </div>
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
                <div class="populars-list">
                    @if(count($products)>0)
                        @foreach($products as $product)
                        <form action="{{route('cart.store')}}" method="post">
                            <div class="popular">
                                <a class="popular-link" href="{{route('products.show',$product->car_part_id)}}">
                                    <img alt="" src="{{Request::root()}}/public/frontend_template/HTML/img/front-slider/2.png"/>
                                    <h3>
                                        <span>
                                            {{ucwords($product->part)}}
                                        </span>
                                    </h3>
                                </a>
                                    @csrf
                                    <p class="popular-info">
                                        <a class="popular-categ" href="#">
                                            Helmets
                                        </a>
                                        <span class="popular-price">
                                            ${{number_format($product->price,'2',',','.')}}
                                        </span>
                                        <input type="hidden" name="id" value="{{$product->car_part_id}}">
                                        <input type="hidden" name="name" value="{{$product->part}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <input type="hidden" name="qty" value="1">
                                        <button type="submit" class="popular-add">
                                            + Add to cart
                                        </button>
                                    </p>
                            </div>
                        </form>
                        @endforeach
                    @else
                    <div class="popular" style="width: 100%; height: 200px; min-height:0px;">
                        <h1 style="text-align: center; margin-top: 5%;">Sorry at the moment we do not have content to show</h1>
                    </div>
                    @endif
                </div>
                <span class="popular-line1">
                </span>
                <span class="popular-line2">
                </span>
            </div>
        </div>
        <!-- Main Content - end -->
    </div>
</main>

@endsection
