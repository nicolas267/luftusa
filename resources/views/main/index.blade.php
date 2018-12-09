@extends('layouts.app_front')

@section('content')
<main>
    <div class="cont maincont">
        <h1>
            <span>
                Main parts
            </span>
        </h1>
        <span class="maincont-line1 maincont-line12" style="margin-left: 32px;">
        </span>
        <span class="maincont-line2 maincont-line22" style="margin-bottom:500px;">
        </span>
        <div class="section-top">
            <a class="section-menu-btn" href="#" id="section-menu-btn">
                Catalog
            </a>
            <div class="section-shipping" style="height: 15px;">
            </div>
            <div class="section-menu-wrap" id="section-menu-wrap">
                <div class="section-menu">
                    <p class="section-menu-ttl">
                        Main Parts
                    </p>
                    <ul class="section-menu-list">
                        <li>
                            <a href="#">
                                Engines
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Brakes & Clutch
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Handlebars & Grips
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Chains & Sprockets
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Electrical
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Filters
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Levers
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Tires
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="section-menu">
                    <p class="section-menu-ttl">
                        Clothing
                    </p>
                    <ul class="section-menu-list">
                        <li>
                            <a href="#">
                                Gloves
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Goggles
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Helmets
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Jackets
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Pants
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Casual Wear
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Protective Gear
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="section-menu">
                    <p class="section-menu-ttl">
                        Brands
                    </p>
                    <ul class="section-menu-list">
                        <li>
                            <a href="#">
                                EdgeDesign
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Storm
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                BestWorks
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                HarleyStore
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                GoodTires
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                EngineMasters
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                EnMonsters
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="section-menu">
                    <p class="section-menu-ttl">
                        Accessories
                    </p>
                    <ul class="section-menu-list">
                        <li>
                            <a href="#">
                                Battery Chargers
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Electrical
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Tools
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Tie Downs
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="section-menu">
                    <p class="section-menu-ttl">
                        Maintenance
                    </p>
                    <ul class="section-menu-list">
                        <li>
                            <a href="#">
                                Repair Instruments
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Brakes & Clutch Parts
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Cleaners & Chemicals
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Spark Plugs
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Catalog Filter - end -->
        <!-- Catalog Items - start -->
        @if(count($carparts))
            <div class="section-gallery">
                @for ($i = 0; $i < count($carparts); $i++)
                <div class="sectgl">
                    <a class="sectgl-link" href="{{route('products.show',[$carparts[$i]->car_part_id])}}">
                        <p class="sectgl-img">
                            <img alt="" src="http://placehold.it/203x190">
                            </img>
                        </p>
                        <h3>
                            <span>
                                {{ ucwords($carparts[$i]->part) }}
                            </span>
                        </h3>
                    </a>
                    <form action="{{route('cart.store')}}" method="post">
                        @csrf
                        <p class="sectgl-info">
                            <a class="sectgl-categ" href="#">
                                Helmets
                            </a>
                            <span class="sectgl-price">
                                ${{ number_format($carparts[$i]->price,"2",",",".") }}
                            </span>
                            <input type="hidden" name="id" value="{{$carparts[$i]->car_part_id}}">
                            <input type="hidden" name="name" value="{{$carparts[$i]->part}}">
                            <input type="hidden" name="price" value="{{$carparts[$i]->price}}">
                            <input type="hidden" name="qty" value="1">
                            <button type="submit" class="sectgl-add">
                                + Add to cart
                            </button>
                        </p>
                    </form>
                </div>
                @endfor
            </div>
        @endif
        <!-- Catalog Items - end -->
        <!-- Pagination -->
        <div class="pager">
            {{ $carparts->links()}}
        </div>
    </div>
</main>
@endsection
