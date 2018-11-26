@extends('layouts.app_front')

@section('content')
<!-- Main Content - start -->
<main>
    <div class="cont maincont">
        <h1>
            <span>
                Orders
            </span>
        </h1>
        <span class="maincont-line1 maincont-line12" style="margin-left: -35px;">
        </span>
        <span class="maincont-line2 maincont-line22" style="margin-bottom: 40px;">
        </span>
        <!-- Personal Menu -->
        <ul class="cont-sections">
            <li>
                <a href="message.html">
                    Messages
                    <span>
                        12
                    </span>
                </a>
            </li>
            <li>
                <a href="cart.html">
                    Shopping Cart
                    <span>
                        5
                    </span>
                </a>
            </li>
            <li class="active">
                <a href="orders.html">
                    Order Status
                    <span>
                        12
                    </span>
                </a>
            </li>
        </ul>
        <!-- Orders List - start -->
        <div class="section-list orders-list">
            <div class="sectls">
                <a class="sectls-img" href="product.html">
                    <img alt="" src="http://placehold.it/203x190">
                    </img>
                </a>
                <div class="sectls-cont">
                    <div class="sectls-ttl-wrap">
                        <p>
                            <a href="#">
                                Suspensions
                            </a>
                        </p>
                        <h3>
                            <a href="product.html">
                                Quisque rutrum nunc eget nisl auctor
                            </a>
                        </h3>
                    </div>
                    <div class="sectls-price-wrap">
                        <p>
                            Purchased
                        </p>
                        <p class="sectls-price">
                            2 items
                        </p>
                    </div>
                    <div class="sectls-col2-wrap">
                        <p>
                            Destination
                        </p>
                        <p class="sectls-col2">
                            IA - US
                        </p>
                    </div>
                    <div class="sectls-col3-wrap">
                        <p>
                            Status
                        </p>
                        <p class="sectls-col3">
                            Shipping
                        </p>
                    </div>
                    <div class="sectls-total-wrap">
                        <p>
                            Order amount
                        </p>
                        <p class="sectls-total">
                            $200
                        </p>
                    </div>
                </div>
                <div class="sectls-info">
                    <p class="sectls-add">
                        <a href="#">
                            Cancel the order
                        </a>
                    </p>
                    <p class="sectls-favorites">
                        <a href="#">
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Orders List - end -->
        <!-- Pagination -->
        <ul class="pager">
            <li>
                <a href="#">
                    1
                </a>
            </li>
            <li class="dots">
                <a href="#">
                    ...
                </a>
            </li>
            <li>
                <a href="#">
                    1
                </a>
            </li>
            <li class="active">
                <a href="#">
                    2
                </a>
            </li>
            <li>
                <a href="#">
                    3
                </a>
            </li>
            <li>
                <a href="#">
                    4
                </a>
            </li>
            <li>
                <a href="#">
                    5
                </a>
            </li>
            <li class="dots">
                <a href="#">
                    ...
                </a>
            </li>
            <li>
                <a href="#">
                    12
                </a>
            </li>
        </ul>
    </div>
</main>
<!-- Main Content - end -->
@endsection
