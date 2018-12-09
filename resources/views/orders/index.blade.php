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
                <a href="{{url('cart')}}">
                    Shopping Cart
                    <span>
                        {{ count( Cart::getContent())}}
                    </span>
                </a>
            </li>
            <li class="active">
                <a href="orders.html">
                    Order Status
                    <span>
                        {{count($orders)}}
                    </span>
                </a>
            </li>
        </ul>
        <!-- Orders List - start -->
        <div class="section-list orders-list">
            @if(count($orders)>0)
                @foreach($orders as $order)
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
                                        {{ucwords($order->part)}}
                                    </a>
                                </h3>
                            </div>
                            <div class="sectls-price-wrap">
                                <p>
                                    Purchased
                                </p>
                                <p class="sectls-price">
                                    {{$order->quantity}} items
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
                                    ${{number_format($order->subtotal,'2',',','.')}}
                                </p>
                            </div>
                        </div>
                        <div class="sectls-info">
                            <p class="sectls-add">
                                <a href="{{route('orderDestroy',$order->order_product_id)}}">
                                    Cancel the order
                                </a>
                            </p>
                            <p class="sectls-favorites">
                                <a href="#">
                                </a>
                            </p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="sectls" style="padding: 20px; height: 150px;">
                    <div class="sectls-cont">
                        <h1 style="text-align: center; margin-top: 1%;">No data found</h1>
                    </div>
                </div>
            @endif
        </div>
        <!-- Orders List - end -->
        <!-- Pagination -->
        <div class="pager">
            {{ $orders->links()}}
        </div>
    </div>
</main>
<!-- Main Content - end -->
@endsection
