@extends('layouts.app_front')

@section('content')
<!-- Main Content - start -->
<main>
    <div class="cont maincont">
        <h1>
            <span>
                Product
            </span>
        </h1>
        <span class="maincont-line1" style="margin-top: -13px; margin-left: -13px;">
        </span>
        <span class="maincont-line2" style="margin-bottom: 100px;">
        </span>
        <!-- Product - start -->
        <div class="prod">
            <!-- Product Slider - start -->
            <div class="prod-slider-wrap">
                <div class="flexslider prod-slider" id="prod-slider">
                    <ul class="slides">
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a class="fancy-img" data-fancybox-group="prod" href="img/logo.png">
                                <img alt="" src="http://placehold.it/373x327"/>
                            </a>
                        </li>
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a class="fancy-img" data-fancybox-group="prod" href="img/logo.png">
                                <img alt="" src="http://placehold.it/343x405"/>
                            </a>
                        </li>
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a class="fancy-img" data-fancybox-group="prod" href="img/logo.png">
                                <img alt="" src="http://placehold.it/285x367"/>
                            </a>
                        </li>
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a class="fancy-img" data-fancybox-group="prod" href="img/logo.png">
                                <img alt="" src="http://placehold.it/284x260"/>
                            </a>
                        </li>
                        <li>
                            <!-- <a> & <img> Without Spaces -->
                            <a class="fancy-img" data-fancybox-group="prod" href="img/logo.png">
                                <img alt="" src="http://placehold.it/600x400"/>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flexslider prod-thumbs" id="prod-thumbs">
                    <ul class="slides">
                        <li>
                            <img alt="" src="http://placehold.it/373x327">
                            </img>
                        </li>
                        <li>
                            <img alt="" src="http://placehold.it/343x405">
                            </img>
                        </li>
                        <li>
                            <img alt="" src="http://placehold.it/285x367">
                            </img>
                        </li>
                        <li>
                            <img alt="" src="http://placehold.it/284x260">
                            </img>
                        </li>
                        <li>
                            <img alt="" src="http://placehold.it/600x400">
                            </img>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Product Slider - end -->
            <!-- Product Content - start -->
            <div class="prod-cont">
                <div class="prod-desc">
                    <p class="prod-desc-ttl">
                        <span>
                            Description
                        </span>
                    </p>
                    <p>
                        {{ucfirst($carparts->part)}}
                    </p>
                </div>
                <div class="prod-props">
                    <dl>
                        <dt>
                            Stroke
                        </dt>
                        <dd>
                            4 Stroke
                        </dd>
                        <dt>
                            Max Power
                        </dt>
                        <dd>
                            62kW/6000 (r/min)
                        </dd>
                        <dt>
                            Cylinders
                        </dt>
                        <dd>
                            2 Cylinder
                        </dd>
                        <dt>
                            Max Torque
                        </dt>
                        <dd>
                            101N·m/5000 (r/min)
                        </dd>
                        <dt>
                            Displacement (ml)
                        </dt>
                        <dd>
                            1000CC
                        </dd>
                        <dt>
                            <a href="#" id="prod-showprops">
                                view all details
                            </a>
                        </dt>
                        <dd>
                        </dd>
                    </dl>
                </div>
                <form action="{{route('cart.store')}}" method="post">
                    @csrf
                    <div class="prod-info">
                        <div class="prod-price-wrap">
                            <p>
                                Price
                            </p>
                            <p class="prod-price">
                                ${{number_format($carparts->price,'2',',','.')}}
                            </p>
                        </div>
                        <div class="prod-qnt-wrap">
                            <p>
                                Quantity
                            </p>
                            <p class="qnt-wrap prod-qnt">
                                <a class="qnt-minus prod-minus" href="#">
                                    -
                                </a>
                                <input name="qty" type="text" value="1">
                                    <a class="qnt-plus prod-plus" href="#">
                                        +
                                    </a>
                                </input>
                            </p>
                        </div>
                        <div class="prod-total-wrap">
                            <p>
                                Total
                            </p>
                            <p class="prod-total">
                                $3900
                            </p>
                        </div>
                        <div class="prod-shipping-wrap">
                            <p>
                                Shipping
                            </p>
                            <p class="prod-shipping">
                                Free
                            </p>
                        </div>
                    </div>
                    <div class="prod-actions">
                        @if (!Auth::guest())
                            @if($favorite)
                                <p class="prod-favorites">
                                    <span>
                                        <a href="{{route('favorite', [$carparts->car_part_id])}}">
                                        </a>
                                    </span>
                                    0
                                </p>
                                @else
                                <p class="prod-favorites">
                                    <a href="{{route('favorite', [$carparts->car_part_id])}}">
                                    </a>
                                    1
                                </p>

                            @endif    
                        @endif
                        <p class="prod-add">
                            <input name="id" type="hidden" value="{{$carparts->car_part_id}}"/>
                            <input name="name" type="hidden" value="{{$carparts->part}}"/>
                            <input name="price" type="hidden" value="{{$carparts->price}}"/>
                            <button class="prod-add" type="submit">
                                + Add to cart
                            </button>
                        </p>
                    </div>
                </form>
            </div>
            <!-- Product Content - end -->
        </div>
        <!-- Product - end -->
        <!-- Product Tabs - start -->
        <div class="prod-tabs-wrap">
            <ul class="prod-tabs">
                <li class="active" data-prodtab-num="1" id="prod-desc">
                    <a data-prodtab="#prod-tab-1" href="#">
                        Description
                    </a>
                </li>
                <li data-prodtab-num="2" id="prod-props">
                    <a data-prodtab="#prod-tab-2" href="#">
                        Features
                    </a>
                </li>
                <li data-prodtab-num="3" id="prod-reviews">
                    <a data-prodtab="#prod-tab-3" href="#">
                        Reviews
                        <span>
                            36
                        </span>
                    </a>
                </li>
                <li class="prod-tabs-addreview">
                    Add a review
                </li>
            </ul>
            <div class="prod-tab-cont">
                <p class="prod-tab-mob active" data-prodtab="#prod-tab-1" data-prodtab-num="1">
                    Description
                </p>
                <div class="prod-tab prod-tab-desc" id="prod-tab-1">
                    <p>
                        {{ucfirst($carparts->part)}}
                    </p>
                </div>
                <p class="prod-tab-mob" data-prodtab="#prod-tab-2" data-prodtab-num="2">
                    Features
                </p>
                <div class="prod-tab" id="prod-tab-2">
                    <dl class="prod-tab-props">
                        <dt>
                            Stroke
                        </dt>
                        <dd>
                            4 Stroke
                        </dd>
                        <dt>
                            Max Power
                        </dt>
                        <dd>
                            62kW/6000 (r/min)
                        </dd>
                        <dt>
                            Cylinders
                        </dt>
                        <dd>
                            2 Cylinder
                        </dd>
                        <dt>
                            Max Torque
                        </dt>
                        <dd>
                            101N·m/5000 (r/min)
                        </dd>
                        <dt>
                            Displacement (ml)
                        </dt>
                        <dd>
                            1000CC
                        </dd>
                    </dl>
                </div>
                <p class="prod-tab-mob" data-prodtab="#prod-tab-3" data-prodtab-num="3">
                    Reviews
                </p>
                <div class="prod-tab prod-reviews" id="prod-tab-3">
                    <form action="#" class="prod-addreview-form" id="prod-addreview-form">
                        <p class="prod-tab-addreview">
                            Add Your Review
                        </p>
                        <p class="prod-rating">
                            <i class="fa fa-star-o" title="5">
                            </i>
                            <i class="fa fa-star-o" title="4">
                            </i>
                            <i class="fa fa-star-o" title="3">
                            </i>
                            <i class="fa fa-star-o" title="2">
                            </i>
                            <i class="fa fa-star-o" title="1">
                            </i>
                        </p>
                        <input placeholder="Name" type="text">
                            <input placeholder="E-mail" type="text">
                                <textarea placeholder="Message">
                                </textarea>
                                <input type="submit" value="Add Review">
                                </input>
                            </input>
                        </input>
                    </form>
                    <div class="prod-review">
                        <h3>
                            Douglas Harrison
                        </h3>
                        <p class="prod-review-rating">
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star-o">
                            </i>
                        </p>
                        <p>
                            Praesent libero dui, consequat nec placerat id, cursus at metus.
                            <br>
                                Donec semper velit eget ex ultrices, eu lacinia nunc scelerisque.
                                <br>
                                    Ut tincidunt magna sit amet felis dictum efficitur.
                                </br>
                            </br>
                        </p>
                    </div>
                    <div class="prod-review">
                        <h3>
                            Douglas Harrison
                        </h3>
                        <p class="prod-review-rating">
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star-o">
                            </i>
                        </p>
                        <p>
                            Praesent libero dui, consequat nec placerat id, cursus at metus.
                            <br>
                                Donec semper velit eget ex ultrices, eu lacinia nunc scelerisque.
                                <br>
                                    Ut tincidunt magna sit amet felis dictum efficitur.
                                </br>
                            </br>
                        </p>
                    </div>
                    <div class="prod-review">
                        <h3>
                            Douglas Harrison
                        </h3>
                        <p class="prod-review-rating">
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star-o">
                            </i>
                        </p>
                        <p>
                            Praesent libero dui, consequat nec placerat id, cursus at metus.
                            <br>
                                Donec semper velit eget ex ultrices, eu lacinia nunc scelerisque.
                                <br>
                                    Ut tincidunt magna sit amet felis dictum efficitur.
                                </br>
                            </br>
                        </p>
                    </div>
                    <div class="prod-review">
                        <h3>
                            Douglas Harrison
                        </h3>
                        <p class="prod-review-rating">
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star">
                            </i>
                            <i class="fa fa-star-o">
                            </i>
                        </p>
                        <p>
                            Praesent libero dui, consequat nec placerat id, cursus at metus.
                            <br>
                                Donec semper velit eget ex ultrices, eu lacinia nunc scelerisque.
                                <br>
                                    Ut tincidunt magna sit amet felis dictum efficitur.
                                </br>
                            </br>
                        </p>
                    </div>
                    <p class="prod-review-more">
                        <a href="#">
                            show more
                        </a>
                    </p>
                </div>
                <p class="prod-tabs-addreview prod-tabs-addreview-mob">
                    Add a review
                </p>
            </div>
        </div>
    </div>
</main>
<!-- Main Content - end -->
@endsection
