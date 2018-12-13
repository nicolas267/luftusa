<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Motor</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="{{Request::root()}}/public/frontend_template/HTML/css/font-awesome.min.css">
<link rel="stylesheet" href="{{Request::root()}}/public/frontend_template/HTML/css/zabuto_calendar.css">
<link rel="stylesheet" href="{{Request::root()}}/public/frontend_template/HTML/css/flexslider.css">
<link rel="stylesheet" href="{{Request::root()}}/public/frontend_template/HTML/css/jquery.fancybox.css">
<link rel="stylesheet" href="{{Request::root()}}/public/frontend_template/HTML/css/ion.rangeSlider.css">
<link rel="stylesheet" href="{{Request::root()}}/public/frontend_template/HTML/css/ion.rangeSlider.skinFlat.css">
<link rel="stylesheet" href="{{Request::root()}}/public/frontend_template/HTML/css/style.css">
<link rel="stylesheet" href="{{Request::root()}}/public/frontend_template/HTML/css/media.css">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
</head>
	<body>
		<div class="header">
			<!-- Navmenu Mobile Toggle Button -->
			<a href="#" class="header-menutoggle" id="header-menutoggle">Menu</a>
			<div class="header-info">
				<!-- Personal Menu -->
				<div class="header-personal">
					<a href="{{url('profile')}}" class="header-gopersonal"></a>
					@if (!Auth::guest())
						<ul>
							<li>
								<a href="message.html">Messages <span>12</span></a>
							</li>
							<li>
								<a href="#">Bookmarks <span>6</span></a>
							</li>
							<li>
								<a href="{{url('cart')}}">Shopping Cart <span>{{ count( Cart::getContent())}}</span></a>
							</li>
							<li class="header-order">
								<a href="{{url('orders')}}">Order Status</a>
							</li>
							<li>
								<a href="#">Settings</a>
							</li>
							<li>
								<a href="{{ route('logout') }}">Log out</a>
							</li>
						</ul>
	  				@else
		  				<ul>
							<li>
								<a href="{{ url('login') }}">Login</a>
							</li>
							<li>
								<a href="{{ url('register') }}">Register</a>
							</li>
						</ul>
	  				@endif
				</div> 

				<!-- Small Cart -->
				<a href="{{url('cart')}}" class="header-cart">
					<div class="header-cart-inner">
						<p class="header-cart-count">
							<img src="{{Request::root()}}/public/frontend_template/HTML/img/cart.png" alt="">
							<span>{{ count( Cart::getContent())}}</span>
						</p>
					</div>
				</a>

				<a href="#" class="header-compare"></a>
				<a href="#" class="header-favorites"></a>

				<!-- Search Form -->
				<a href="#" class="header-searchbtn" id="header-searchbtn"></a>
				<form action="#" class="header-search" id="header-search">
					<input type="text" placeholder="Search parts or vehicles">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<!-- Logotype -->
			<div class="header-logo">
				<div class="social">
					<a rel="nofollow" target="_blank" href="http://facebook.com">
						<i class="fa fa-facebook"></i>
					</a>
					<a rel="nofollow" class="left" target="_blank" href="http://youtube.com">
						<i class="fa fa-youtube-play"></i>
					</a>
					<a rel="nofollow" class="left" target="_blank" href="http://youtube.com">
						<i class="fa fa-instagram"></i>
					</a>
					<a rel="nofollow" class="left" target="_blank" href="mailto:email@email.com">
						<i class="fa fa-paper-plane"></i>
					</a>
				</div>
			</div>

			<!-- Navmenu - start -->
			<nav id="top-menu">
				<ul>
					<li class="active"> 
						<a href="{{url('home')}}">Home</a>
					</li>
					<li>
						<a href="{{url('about')}}">About Us</a>
					</li>
					<li>
						<a href="{{url('main')}}">Store</a>
					</li>
					<li class="li-logo" style="width: 100px;">
						<div class="nav-logo">
							<a href="{{url('home')}}" title="">
								<img src="{{Request::root()}}/public/frontend_template/HTML/img/logo.png" alt="">
							</a>
						</div>
					</li>
					<li>
						<a href="{{url('service')}}">Services</a>
					</li>
					<li>
						<a href="{{url('blog')}}">Blogs</a>
					</li>
					<li>
						<a href="{{url('contact')}}">Contact</a>
					</li>
				</ul>
			</nav>

			
			<!-- Navmenu - end -->
		</div>
		<!-- Header - end -->
		@yield('content')

		<!-- Footer - start -->
		<footer class="footer">
			<div class="cont footer-top">

				<!-- Footer Menu -->
				<div class="footer-menu">
					<p>Company</p>
					<ul>
						<li><a href="{{url('main')}}">Shipping</a></li>
						<li><a href="{{url('about')}}">About us</a></li>
						<li><a href="#">Services</a></li>
					</ul>
				</div>
				<div class="footer-menu">
					<p>Information</p>
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="{{url('contact')}}">Site Map</a></li>

					</ul>
				</div>
				<div class="footer-menu">
					<p>Account & Orders</p>
					<ul>
						<li><a href="{{url('profile')}}">My Account</a></li>
						<li><a href="#">My Garage</a></li>
						<li><a href="{{url('cart')}}">Shopping Cart</a></li>
						<li><a href="{{url('orders')}}">Order Status</a></li>
					</ul>
				</div>

				<div class="footer-info">
					<p class="footer-msg">Our online support is available <a class="callback" href="#">Send us a message</a></p>
					<ul class="footer-social">
						<li>
							<a rel="nofollow" target="_blank" href="http://facebook.com">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a rel="nofollow" class="left" target="_blank" href="http://youtube.com">
								<i class="fa fa-youtube-play"></i>
							</a>
						</li>
						<li>
							<a rel="nofollow" class="left" target="_blank" href="http://youtube.com">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
						<li>
							<a rel="nofollow" class="left" target="_blank" href="mailto:email@email.com">
								<i class="fa fa-paper-plane"></i>
							</a>
						</li>
					</ul>
					<div class="alert_success"></div>
					<form>
						{{csrf_field()}}
						<input data-required="text" data-required-email="email" type="text" placeholder="Email address" name="email" id="email">
						<input type="button" value="Subscribe" id="sub" class="btn-submit">
					</form>
				</div>

			</div>
			<div class="copyright">
				<p class="cont">© 2018 Luft technik All Rights Received. Design By Ushuaia Creative</p>
			</div>
		</footer>
		<!-- Footer - end -->

		<!-- Modal Form -->
		<div id="modal-form" class="modal-form">
			<p class="modal-form-ttl">Contact Us</p>
			<form action="{{action('Message@store')}}" method="post">
				 @csrf
				<input data-required="text" type="text" placeholder="Name" name="name">
				<input data-required="text" type="text" placeholder="Subject" name="subject">
				<input data-required="text" data-required-email="email" type="text" placeholder="Email" name="email">
				<textarea placeholder="Your message" name="message"></textarea>
				<input type="submit" value="Send"> 
			</form>
		</div>
		<!-- Header - start -->

		<script src="{{Request::root()}}/public/frontend_template/HTML/js/jquery-1.12.3.min.js"></script>
		<script src="{{Request::root()}}/public/frontend_template/HTML/js/fancybox/fancybox.js"></script>
		<script src="{{Request::root()}}/public/frontend_template/HTML/js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
		<script src="{{Request::root()}}/public/frontend_template/HTML/js/jquery.flexslider-min.js"></script>
		<script src="{{Request::root()}}/public/frontend_template/HTML/js/masonry.pkgd.min.js"></script>

		<script src="{{Request::root()}}/public/frontend_template/HTML/js/jquery.fractionslider.min.js"></script>
		<script src="{{Request::root()}}/public/frontend_template/HTML/js/ion.rangeSlider.min.js"></script>

		<script src="{{Request::root()}}/public/frontend_template/HTML/js/main.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
			"use strict";
			// Range Slider
			$(document).ready(function () {
				var $range_cost = $("#range_cost");
				$range_cost.ionRangeSlider({
				    type: "double",
				    grid: true,
				    min: 0,
				    max: 20000,
				    from: 200,
				    to: 14000,
				    prefix: "$",
				});
				$range_cost.on("change", function () {
				    var $this = $(this),
				        value = $this.prop("value").split(";");

				    $('#range_cost_ttl').html("$" + value[0] + " - $" + value[1]);
				});
				var $range_year = $("#range_year");
				$range_year.ionRangeSlider({
				    type: "double",
				    grid: true,
				    min: 1990,
				    max: 2016,
				    from: 2013,
				    to: 2016,
				});
				$range_year.on("change", function () {
				    var $this = $(this),
				        value = $this.prop("value").split(";");

				    $('#range_year_ttl').html(value[0] + " - " + value[1]);
				});
			});
		</script>
		<script>
			$.ajaxSetup({
		        headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });
		    $(".btn-submit").click(function(e){
		        e.preventDefault();
		        var email = $("input[name=email]").val();
		        $.ajax({
		           type:'POST',
		           url:'{{action('Newsletter@store')}}',
		           data:{email:email},
		           success:function(data){
		              $('.alert_success').html('<div class="alert alert-success">'+
						  ''+data.success+'</div>');
		           }
		        });
			});
		</script>
		<script>
			"use strict";
			function initialize() {
				var mapOptions = {
					zoom: 15,
					scrollwheel: false,
					center: new google.maps.LatLng(40.440128, -79.974326)
				};
				var map = new google.maps.Map(document.getElementById('contacts-map'),
					mapOptions);
				var marker = new google.maps.Marker({
					position: map.getCenter(),
					icon: 'img/marker.png',
					map: map
				});
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script> 
		<script>
			$(document).ready(function(){
				$('#top-menu li').on('click', function(){
				    $('ul li.active').removeClass('active');
				    $(this).addClass('active');
				});
			})
		</script>
	</body>
</html>