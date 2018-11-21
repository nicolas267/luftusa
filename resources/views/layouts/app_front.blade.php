<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Motor</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="{{Request::root()}}/frontend_template/HTML/css/font-awesome.min.css">
<link rel="stylesheet" href="{{Request::root()}}/frontend_template/HTML/css/zabuto_calendar.css">
<link rel="stylesheet" href="{{Request::root()}}/frontend_template/HTML/css/flexslider.css">
<link rel="stylesheet" href="{{Request::root()}}/frontend_template/HTML/css/jquery.fancybox.css">
<link rel="stylesheet" href="{{Request::root()}}/frontend_template/HTML/css/ion.rangeSlider.css">
<link rel="stylesheet" href="{{Request::root()}}/frontend_template/HTML/css/ion.rangeSlider.skinFlat.css">
<link rel="stylesheet" href="{{Request::root()}}/frontend_template/HTML/css/style.css">
<link rel="stylesheet" href="{{Request::root()}}/frontend_template/HTML/css/media.css">

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
					<a href="#" class="header-gopersonal"></a>
					<ul>
						<li>
							<a href="message.html">Messages <span>12</span></a>
						</li>
						<li>
							<a href="#">Bookmarks <span>6</span></a>
						</li>
						<li>
							<a href="cart.html">Shopping Cart <span>5</span></a>
						</li>
						<li class="header-order">
							<a href="orders.html">Order Status</a>
						</li>
						<li>
							<a href="#">Settings</a>
						</li>
						<li>
							<a href="#">Log out</a>
						</li>
					</ul>
				</div>

				<!-- Small Cart -->
				<a href="cart.html" class="header-cart">
					<div class="header-cart-inner">
						<p class="header-cart-count">
							<img src="{{Request::root()}}/frontend_template/HTML/img/cart.png" alt="">
							<span>3</span>
						</p>
						<p class="header-cart-summ">$300</p>
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
			<p class="header-logo">
				<a href="index.html"><img src="{{Request::root()}}/frontend_template/HTML/img/logo.png" alt=""></a>
			</p>

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
						<a href="{{url('store')}}">Store</a>
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
						<li><a href="#">Shipping</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Services</a></li>
					</ul>
				</div>
				<div class="footer-menu">
					<p>Information</p>
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Site Map</a></li>

					</ul>
				</div>
				<div class="footer-menu">
					<p>Account & Orders</p>
					<ul>
						<li><a href="#">My Account</a></li>
						<li><a href="#">My Garage</a></li>
						<li><a href="#">Shopping Cart</a></li>
						<li><a href="#">Order Status</a></li>
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
							<a rel="nofollow" target="_blank" href="mailto:email@email.com">
								<i class="fa fa-paper-plane"></i>
							</a>
						</li>
						<li>
							<a rel="nofollow" target="_blank" href="http://pinterest.com">
								<i class="fa fa-pinterest-p"></i>
							</a>
						</li>
						<li>
							<a rel="nofollow" target="_blank" href="http://youtube.com">
								<i class="fa fa-youtube-play"></i>
							</a>
						</li>
						<li>
							<a rel="nofollow" target="_blank" href="http://twitter.com">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a rel="nofollow" target="_blank" href="http://google.com">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
						<li>
							<a rel="nofollow" target="_blank" href="http://twitter.com">
								<i class="fa fa-share-alt"></i>
							</a>
						</li>
					</ul>
					<div class="alert_success"></div>
					<form action="{{action('Newsletter@store')}}" method="post">
						{{csrf_field()}}
						<input data-required="text" data-required-email="email" type="text" placeholder="Email address" name="email" id="email">
						<input type="button" value="Subscribe" id="sub" class="btn-submit">
					</form>
				</div>

			</div>
			<div class="copyright">
				<p class="cont">© 2016 Stockware All Right Received</p>
			</div>
		</footer>
		<!-- Footer - end -->


		<!-- Modal Form -->
		<div id="modal-form" class="modal-form">
			<p class="modal-form-ttl">Contact Us</p>
			<form action="#" class="form-validate">
				<input data-required="text" type="text" placeholder="Name" name="name2">
				<input data-required="text" type="text" placeholder="Phone" name="phone2">
				<input data-required="text" data-required-email="email" type="text" placeholder="Email" name="email2">
				<textarea placeholder="Your message" name="mess2"></textarea>
				<input type="submit" value="Send">
			</form>
		</div>
		<!-- Header - start -->

		<script src="{{Request::root()}}/frontend_template/HTML/js/jquery-1.12.3.min.js"></script>
		<script src="{{Request::root()}}/frontend_template/HTML/js/fancybox/fancybox.js"></script>
		<script src="{{Request::root()}}/frontend_template/HTML/js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
		<script src="{{Request::root()}}/frontend_template/HTML/js/jquery.flexslider-min.js"></script>
		<script src="{{Request::root()}}/frontend_template/HTML/js/masonry.pkgd.min.js"></script>

		<script src="{{Request::root()}}/frontend_template/HTML/js/jquery.fractionslider.min.js"></script>
		<script src="{{Request::root()}}/frontend_template/HTML/js/ion.rangeSlider.min.js"></script>

		<script src="{{Request::root()}}/frontend_template/HTML/js/main.js"></script>
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
		              $('.alert_success').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
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
	</body>
</html>