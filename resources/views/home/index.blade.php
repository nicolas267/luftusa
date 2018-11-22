@extends('layouts.app_front')

@section('content')
	<!-- Main Content - start -->
	<main>
		<!-- Frontpage Slider -->
		<div class="frontslider-wrap">
			<div class="responisve-container">
				<div class="slider" id="front-slider">
					<div class="slide">
						<img 	src="{{Request::root()}}/frontend_template/HTML/img/front-slider/1.png"
								data-position="45,430" data-in="fade" data-delay="0" data-out="fade" alt="American Legends">
						<p 		class="caption1"			
								data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">AMERICAN</p>
						<p 		class="caption2" 	
								data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">LEGENDS</p>		
					</div>
					<div class="slide">
						<img 	src="{{Request::root()}}/frontend_template/HTML/img/front-slider/2.png"
								data-position="50,518" data-in="fade" data-delay="0" data-out="fade" alt="Legendary Bike">
						<p 		class="caption1"			
								data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">OFFROAD</p>
						<p 		class="caption2" 	
								data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">KING</p>	
					</div>
					<div class="slide">
						<img 	src="{{Request::root()}}/frontend_template/HTML/img/front-slider/3.png"
								data-position="21,480" data-in="fade" data-delay="0" data-out="fade" alt="Dream Car">
						<p 		class="caption1"			
								data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">DREAM</p>
						<p 		class="caption2" 	
								data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">CARS</p>	
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
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg1.png" alt="">
					</span>
					<p>Automobiles</p>
				</a>
			</li>
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg2.png" alt="">
					</span>
					<p>Motorcycles</p>
				</a>
			</li>
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg3.png" alt="">
					</span>
					<p>ATVs</p>
				</a>
			</li>
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg4.png" alt="">
					</span>
					<p>Snowmobiles</p>
				</a>
			</li>
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg5.png" alt="">
					</span>
					<p>UTVs</p>
				</a>
			</li>
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg6.png" alt="">
					</span>
					<p>Scooters</p>
				</a>
			</li>
			<li>
				<a href="catalog.html">
					<span class="frontcategs-img">
						<img src="{{Request::root()}}/frontend_template/HTML/img/front-categories/frcateg7.png" alt="">
					</span>
					<p>Watercrafts</p>
				</a>
			</li>
		</ul>
		</div>


		<!-- Frontpage Filter -->
		<div class="frontsearch-wrap">
			<div class="cont frontsearch">
				<h2>Search</h2>
				<p class="frontsearch-count">21900 ITEMS</p>
				<div class="frontsearch-wrap">
					<div class="frontsearch-selects">
						<div class="dropdown-wrap frontsearch-select">
							<p class="dropdown-title frontsearch-select-ttl">Choose Type</p>
							<ul class="dropdown-list">
								@foreach($carstype as $cartype)
			 						<li>
										<a href="#">{{ $cartype->car_type }}</a>
									</li>
								@endforeach
							</ul>
						</div>
						<div class="dropdown-wrap frontsearch-select">
							<p class="dropdown-title frontsearch-select-ttl">Choose Model</p>
							<ul class="dropdown-list">
								@foreach($carmodel as $carmodel)
									<li>
										<a href="#">{{ $carmodel->car_model }}</a>
									</li>
								@endforeach
							</ul>
						</div>
						<div class="dropdown-wrap frontsearch-select">
							<p class="dropdown-title frontsearch-select-ttl">Choose Version</p>
							<ul class="dropdown-list">
								@foreach($carversions as $carversion)
								<li>
									<a href="#">{{ $carversion->car_version }}</a>
								</li>
								@endforeach
							</ul>
						</div>
						<div class="dropdown-wrap frontsearch-select dropdown-wrap-range">
							<p id="range_year_ttl" class="dropdown-title frontsearch-select-ttl">2013 - 2016</p>
							<ul class="dropdown-list">
								<li>
									<input type="text" id="range_year" value="">
								</li>
							</ul>
						</div>
						<div class="dropdown-wrap frontsearch-select dropdown-wrap-range">
							<p id="range_cost_ttl" class="dropdown-title frontsearch-select-ttl">$200 - $14.000</p>
							<ul class="dropdown-list">
								<li>
									<input type="text" id="range_cost" value="">
								</li>
							</ul>
						</div>
					</div>
					<div style="height: 200px;"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Special Deals Items -->
		<div class="specials-wrap">
			<div class="cont specials">
				<h2>Special Deals</h2>
				<p class="specials-count">350 ITEMS</p>
				<div class="specials-list">
					<div class="special special-pseudo">
						<a href="#" class="special-link"></a>
					</div>
					<div class="special special-first">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec1.jpg" alt="">
							</p>
							<h3><span>Nulla lacinia lectus</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Suspensions</a>
							<span class="special-price">$200</span>
							<del>$400</del>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
					<div class="special">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec2.jpg" alt="">
							</p>
							<h3><span>Praesent amet mollis</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Brakes</a>
							<span class="special-price">$312</span>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
					<div class="special">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec3.jpg" alt="">
							</p>
							<h3><span>Mauris suscipit tellus</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Gauges</a>
							<span class="special-price">$230.50</span>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
					<div class="special">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec4.jpg" alt="">
							</p>
							<h3><span>Suspendisse lobortis</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Filters</a>
							<span class="special-price">$1290</span>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
					<div class="special">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec5.jpg" alt="">
							</p>
							<h3><span>Nam iaculis risus nisi</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Sprockets</a>
							<span class="special-price">$1180</span>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
					<div class="special">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec6.jpg" alt="">
							</p>
							<h3><span>Sed fermentum elit</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Spark Plugs</a>
							<span class="special-price">$305</span>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
					<div class="special">
						<a href="product.html" class="special-link">
							<p class="special-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/spec7.jpg" alt="">
							</p>
							<h3><span>Mauris suscipit tellus</span></h3>
						</a>
						<p class="special-info">
							<a href="#" class="special-categ">Springs</a>
							<span class="special-price">$230.30</span>
							<a href="#" class="special-add">+ Add to cart</a>
						</p>
					</div>
				</div>
				<p class="special-more">
					<a href="#">show more</a>
				</p>
				<span class="special-line1"></span>
				<span class="special-line2"></span>
			</div>
		</div>
		<!-- Popular Items -->
		<div class="populars-wrap">
			<div class="cont populars">
				<h2>Popular</h2>
				<p class="populars-count">7 ITEMS</p>
				<div class="populars-list">
					@foreach($products as $product)
					<div class="popular">
						<a href="product.html" class="popular-link">
							<p class="popular-img">
								<img src="{{Request::root()}}/frontend_template/HTML/img/pop1.jpg" alt="">
							</p>
							<h3><span>{{ucwords($product->part)}}</span></h3>
						</a>
						<p class="popular-info">
							<a href="#" class="popular-categ">Helmets</a>
							<span class="popular-price">${{number_format($product->price,'2',',','.')}}</span>
							<a href="#" class="popular-add">+ Add to cart</a>
						</p>
					</div>
					@endforeach
				</div>
				<p class="popular-more">
					<a href="#">show more</a>
				</p>
				<span class="popular-line1"></span>
				<span class="popular-line2"></span>
			</div>
		</div>
	</main>
	<!-- Main Content - end -->
@endsection

