<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Motor-Cycle Website Template | Home :: w3layouts</title>
<link href="{{ URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--slider-->
<script src="{{ URL::asset('js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('js/script.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.min.js')}}"></script>
</head>
<body>
<div class="wrap"> 
	<div class="total">
<!-- header -->

<div class="header">
			<div class="header-bot">
				<div class="logo">
					<a href="index.html"><img src="{{URL::asset('images/logo.png')}}" alt=""/></a>
				</div>
				<div class="f-right">
					<p class="welcome-msg">Welcome to our online store! </p>
					<div class="clear"></div>
					<ul class="links">
                        <li class="first"><a href="#" title="My Account">My Account</a></li>
                        <li><a href="#" title="My Wishlist">My Wishlist</a></li>
                        <li><a href="#" title="My Cart" class="top-link-cart">My Cart</a></li>
                        <li><a href="#" title="Checkout" class="top-link-checkout">Checkout</a></li>
                       <li class=" last"><a href="#" title="Log In">Log In</a></li>
           			</ul>
				</div>
				<div class="clear"></div> 
			</div>
		</div>		
		<div class="header_bottom">
			  <div class="menu">
			     	<ul>
					   	<li class="active"><a href="{{route('index')}}">Home</a></li>
					   	<li><a href="{{route('about')}}">About</a></li>
					   	<li><a href="{{route('specials')}}">Specials</a></li>
					    <li><a href="{{route('contact')}}">Contact</a></li>
					    <div class="clear"></div>
		     		</ul>
			    </div>
			    <div class="search_box">
			     	<form>
			     		<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			     	</form>
			    </div>
	     	<div class="clear"></div>
	     </div>
<!-- MAIN -->
@yield('content')
<!-- END MAIN -->
<div class="footer">
<div class="footer-top">
	<div class="col_1_of_4 span_1_of_4">
				<h3>INFORMATION</h3>
				<ul>
					<li><a href="#">About us</a></li>
					<li><a href="#">Sitemap</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Terms and conditions</a></li>
					<li><a href="#">Legal Notice</a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h3>CATEGORIES</h3>
				<ul>
					<li><a href="#">New products</a></li>
					<li><a href="#">top sellers</a></li>
					<li><a href="#">Specials</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Comments</a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4">
				<h3>My ACCOUNT</h3>
				<ul>
					<li><a href="#">Your Account</a></li>
					<li><a href="#">Personal info</a></li>
					<li><a href="#">Prices</a></li>
					<li><a href="#">Address</a></li>
					<li><a href="#">Locations</a></li>
				</ul>
			</div>
			<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
				<h3>FOLLOW US</h3>
				<ul>
					<li><a href="#">FACEBOOK</a></li>
					<li><a href="#">TWITTER</a></li>
					<li><a href="#">RSS</a></li>
				</ul>
			</div>
			<div class="clear"></div> 
	</div>
	<div class="copy">
		<p>Design by <a href="#">W3layouts</a></p>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>

	
	
		