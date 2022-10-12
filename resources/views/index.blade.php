@extends('mainlayout')
@section('content')
<div class="main">
    	<div class="content-top">
	    	<div class="sellers">
	    		<h4><span><span>Top</span> sellers</span></h4>    	
	    	</div>
    	   <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<div class="product-desc">
						<img src="{{ URL::asset('images/pic3.jpg')}}" alt=""/>
						<h4>Lorem Ipsum  </h4>
					</div>
					<div class="prod-inner">
						<span class="price">$12.50</span>
						<a href="{{route('single')}}" class="button" rel="nofollow">Add to cart</a>
						<div class="clear"></div> 
					</div>
				</div>			
				<div class="col_1_of_4 span_1_of_4">
					<div class="product-desc">
						<img src="{{ URL::asset('images/pic4.jpg')}}" alt=""/>
						<h4>Lorem Ipsum  </h4>
					</div>
					<div class="prod-inner">
						<span class="price">$12.50</span>
						<a href="{{route('single')}}" class="button" rel="nofollow">Add to cart</a>
						<div class="clear"></div> 
					</div>
				</div>			
				<div class="col_1_of_4 span_1_of_4">
					<div class="product-desc">
						<img src="{{ URL::asset('images/pic5.jpg')}}" alt=""/>
						<h4>Lorem Ipsum  </h4>
					</div>
					<div class="prod-inner">
						<span class="price">$12.50</span>
						<a href="{{route('single')}}" class="button" rel="nofollow">Add to cart</a>
						<div class="clear"></div> 
					</div>
				</div>			
				<div class="col_1_of_4 span_1_of_4">
					<div class="product-desc">
						<img src="{{ URL::asset('images/pic6.jpg')}}" alt=""/>
						<h4>Lorem Ipsum  </h4>
					</div>
					<div class="prod-inner">
						<span class="price">$12.50</span>
						<a href="{{route('single')}}" class="button" rel="nofollow">Add to cart</a>
						<div class="clear"></div> 
					</div>
				</div>			
				<div class="clear"></div> 
			</div>
		</div>
		<div class="content-top">
	    	<div class="sellers">
	    		<h4><span><span>Featured</span> Products</span></h4>    	
	    	</div>
    	   <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<div class="product-desc">
						<img src="{{ URL::asset('images/pic.jpg')}}" alt=""/>
						<h4>Lorem Ipsum  </h4>
					</div>
					<div class="prod-inner">
						<span class="price">$12.50</span>
						<a href="{{route('single')}}" class="button" rel="nofollow">Add to cart</a>
						<div class="clear"></div> 
					</div>
				</div>			
				<div class="col_1_of_4 span_1_of_4">
					<div class="product-desc">
						<img src="{{ URL::asset('images/pic7.jpg')}}" alt=""/>
						<h4>Lorem Ipsum  </h4>
					</div>
					<div class="prod-inner">
						<span class="price">$12.50</span>
						<a href="{{route('single')}}" class="button" rel="nofollow">Add to cart</a>
						<div class="clear"></div> 
					</div>
				</div>			
				<div class="col_1_of_4 span_1_of_4">
					<div class="product-desc">
						<img src="{{ URL::asset('images/pic8.jpg')}}" alt=""/>
						<h4>Lorem Ipsum  </h4>
					</div>
					<div class="prod-inner">
						<span class="price">$12.50</span>
						<a href="{{route('single')}}" class="button" rel="nofollow">Add to cart</a>
						<div class="clear"></div> 
					</div>
				</div>			
				<div class="col_1_of_4 span_1_of_4">
					<div class="product-desc">
						<img src="{{ URL::asset('images/pic1.jpg')}}" alt=""/>
						<h4>Lorem Ipsum  </h4>
					</div>
					<div class="prod-inner">
						<span class="price">$12.50</span>
						<a href="{{route('single')}}" class="button" rel="nofollow">Add to cart</a>
						<div class="clear"></div> 
					</div>
				</div>			
				<div class="clear"></div> 
			</div>
		</div>
		    <div class="content-bottom">
				<div class="col_1_of_3 span_1_of_3">
					<div class="banner-wrap bottom_banner color_link">
						<a href="#" class="main_link">
						<figure><img src="{{ URL::asset('images/delivery.png')}}" alt=""/></figure>
						<h5><span>Free Shipping</span><br> on orders over $99.</h5><p>This offer is valid on all our store items.</p></a>
					</div>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<div class="banner-wrap bottom_banner">
						<a href="#" class="main_link">
						<figure><img src="{{ URL::asset('images/phone.png')}}" alt=""/></figure><h5>Order online <br><span>1(800) 234-5678</span></h5><p>Hours: 8am-11pm PST M-Th; 8am-9pm PST Fri<br>
						</p></a>
					</div>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<div class="banner-wrap bottom_banner color_dark">
						<a href="#" class="main_link">
						<figure><img src="{{ URL::asset('images/gift.png')}}" alt=""/></figure><h5>Discount</h5><p>Choose from any of our extensive range </p></a>
					</div>
				</div>
				<div class="clear"></div> 
			</div>
@endsection
	
	
		