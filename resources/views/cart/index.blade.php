@extends('layouts.app_front')

@section('content')

<main>
    <div class="cont maincont">
        <h1>
            <span>
                Cart
            </span>
        </h1>
        <span class="maincont-line123 maincont-line12">
        </span>
        <span class="maincont-line2 maincont-line22" style="margin-bottom: 20px;">
        </span>
        <!-- Personal Menu -->
        <ul class="cont-sections" style="margin-right: 20px;">
            <li>
                <a href="#">
                    Messages
                    <span>
                        12
                    </span>
                </a>
                <li class="active">
                    <a href="{{url('cart')}}">
                        Shopping Cart
                        <span>
                            {{$data->count()}}
                        </span>
                    </a>
                </li>
            </li>
            <li>
                <a href="{{url('orders')}}">
                    Order Status
                    <span>
                        
                    </span>
                </a>
            </li>
            <li>
                <form action="#" class="form-validate" style="margin-left: 40px;">
                    <input class="btn-submit" id="sub" type="button" value="Check Out" />
                </form>
            </li>
        </ul>
        <!-- Cart Items - start -->
        <div class="section-list cart-list">
            @if(count($data)>0)
                @foreach($data as $data)
                <div class="sectls">
                    <a class="sectls-img" href="product.html">
                        <img alt="" src="http://placehold.it/203x190">
                        </img>
                    </a>
                    <form action="{{route('cart.update',$data->id)}}" method="POST">
                        @csrf
                        @method('PUT')
    	                <div class="sectls-cont">
    	                    <div class="sectls-ttl-wrap">
    	                        <p>
    	                            <a href="#">
    	                                Suspensions
    	                            </a>
    	                        </p>
    	                        <h3>
    	                            <a href="#">
    	                                {{ucwords($data->name)}}
    	                            </a>
    	                        </h3>
    	                    </div>
    	                    <div class="sectls-price-wrap">
    	                        <p>
    	                            Price
    	                        </p>
    	                        <p class="sectls-price">
    	                            $ {{number_format($data->price,'2',',','.')}}
    	                        </p>
    	                    </div>
    	                    <div class="sectls-qnt-wrap">
    	                        <p>
    	                            Quantity
    	                        </p>
    	                        <p class="qnt-wrap sectls-qnt">
    	                            <a class="qnt-minus sectls-minus" href="#">
    	                                -
    	                            </a>
    	                            <input type="text" name="qty" value=" {{$data->quantity}}"/>
    	                            <a class="qnt-plus sectls-plus" href="#">
    	                                +
    	                            </a>
    	                        </p>
    	                    </div>
    	                    <div class="sectls-total-wrap">
    	                        <p>
    	                            Order amount
    	                        </p>
    	                        <p class="sectls-total">
    	                            ${{number_format($data->getPriceSum(),'2',',','.')}}
    	                        </p>
    	                    </div>
    	                </div>
    	                <div class="sectls-info">
    	                    <p class="sectls-add">
    	                        <a href="{{route('cartDestroy',$data->id)}}">
    	                            Remove from cart
    	                        </a>
    	                    </p>
    	                    <p class="sectls-update">
    	                        <button style="background: transparent; border-color: transparent;" type="Submit">Update from cart</button>
    	                    </p>
    	                    <p class="sectls-favorites">
    	                        <a href="#">
    	                        </a>
    	                    </p>
    	                </div>
    	            </form>
                </div>
                @endforeach
            @else
                <div class="sectls" style="height: 150px;">
                    <div style="padding: 30px; width: 100%;">
                        <h1 style="margin-left: 20%; margin-top: 3%;">
                            No data found
                        </h1>
                    </div>
                </div>
            @endif
        </div>
        <!-- Cart Items - start -->
        <!-- Pagination -->
        <ul class="pager">
            <li>
                <form action="#" class="form-validate">
                    <input class="btn-submit" id="sub" type="button" value="Check Out">
                    </input>
                </form>
            </li>
        </ul>
    </div>
    <!-- Get a Special Deals -->
</main>
@endsection
