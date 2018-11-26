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
	        <span class="maincont-line2 maincont-line22">
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
	            <li>
	                <a href="cart.html">
	                    Shopping Cart
	                    <span>
	                        5
	                    </span>
	                </a>
	            </li>
	            </li>
	            <li>
	                <a href="orders.html">
	                    Order Status
	                    <span>
	                        12
	                    </span>
	                </a>
	            </li>
	        	<li>
	        		<form action="#" class="form-validate">
						<input type="button" value="Check Out" id="sub" class="btn-submit">
					</form>
	        	</li>
	        </ul>
	        <!-- Cart Items - start -->
	        <div class="section-list cart-list">
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
	                            <a href="#">
	                                Quisque rutrum nunc eget nisl auctor
	                            </a>
	                        </h3>
	                    </div>
	                    <div class="sectls-price-wrap">
	                        <p>
	                            Price
	                        </p>
	                        <p class="sectls-price">
	                            $200
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
	                            <input type="text" value="1">
	                                <a class="qnt-plus sectls-plus" href="#">
	                                    +
	                                </a>
	                            </input>
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
	                            Remove from cart
	                        </a>
	                    </p>
	                    <p class="sectls-favorites">
	                        <a href="#">
	                        </a>
	                    </p>
	                </div>
	            </div>
	        </div>
	        <!-- Cart Items - start -->
	        <!-- Pagination -->
	        <ul class="pager">
	        	<li>
	        		<form action="#" class="form-validate">
						<input type="button" value="Check Out" id="sub" class="btn-submit">
					</form>
	        	</li>
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
	    <!-- Get a Special Deals -->
	</main>
@endsection
