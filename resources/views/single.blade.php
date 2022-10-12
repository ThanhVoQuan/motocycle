@extends('mainlayout')
@section('content')
<header>
<script src="{{ URL::asset('js/slides.min.jquery.js')}}"></script>
   <!-- <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script> -->
</header>
<div class="mian">
    	<div class="single">
    		<div class="grid_24">
			  <div class="single-head">&nbsp;&nbsp;<a href="#" class="headerNavigation">Top</a> |
			  	<i class="#"></i> <a href="#" class="headerNavigation">Catalog</a> | 
			  	<i class="#"></i> <a href="#" class="headerNavigation">Bikes</a> |
				<i class="#"></i> <a href="#" class="headerNavigation last">Model 0018</a>    
			  </div>
    		</div>
				<div class="content span_1_of_2">				
					<div class="grid images_3_of_2">
						<div class="lsidebar span_1_of_s">
					     <!-- <img src="images/pic12.jpg" alt=""/>-->
					     <div id="container">
						   <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="{{ URL::asset('images/pic20.jpg')}}" alt=" " /></a>
									<!-- <a href="#" target="_blank"><img src="{{ URL::asset('images/pic21.jpg')}}" alt=" " /></a>
									<a href="#" target="_blank"><img src="{{ URL::asset('images/pic22.jpg')}}" alt=" " /></a>					
									<a href="#" target="_blank"><img src="{{ URL::asset('images/pic23.jpg')}}" alt=" " /></a>
									<a href="#" target="_blank"><img src="{{ URL::asset('images/pic24.jpg')}}" alt=" " /></a>
									<a href="#" target="_blank"><img src="{{ URL::asset('images/pic25.jpg')}}" alt=" " /></a> -->
								</div>
								<!-- <ul class="pagination">
									<li><a href="#"><img src="{{ URL::asset('images/t-pic20.jpg')}}" alt=" " /></a></li>
									<li><a href="#"><img src="{{ URL::asset('images/t-pic21.jpg')}}" alt=" " /></a></li>
									<li><a href="#"><img src="{{ URL::asset('images/t-pic22.jpg')}}" alt=" " /></a></li>
									<li><a href="#"><img src="{{ URL::asset('images/t-pic23.jpg')}}" alt=" " /></a></li>
									<li><a href="#"><img src="{{ URL::asset('images/t-pic24.jpg')}}" alt=" " /></a></li>
									<li><a href="#"><img src="{{ URL::asset('images/t-pic25.jpg')}}" alt=" " /></a></li>
								</ul> -->
							</div>
						</div>
					</div>
					</div>
					</div>
				<div class="desc span_3_of_2">
					<h3>Lorem Ipsum is simply dummy<span class="smallText">[Model 0018]</span></h3>
					<div class="options">
                        <p class="options-title">Available Options:</p>
                        <ul class="ofh">
                        		<li class="first"><label>Color:</label><select name="id[1]"><option value="2">original</option><option value="7">dark (+$20.00)</option><option value="1">light (+$5.00)</option></select></li>
                        		<li class="last"><label>Size:</label><select name="id[2]"><option value="3">standard</option><option value="8">large (+$10.00)</option><option value="4">small</option></select></li>
                            </ul>
          			 </div>
          			 <h2 class="price">
          			 	<b>Price:&nbsp;&nbsp;</b><span class="productSpecialPrice">$42.00</span> </h2>
          			 	<input type="submit" value="Add to Cart" class="button1">
          			 	<div class="clear"></div>
          			<div class="rating">
					   <span class="vote">
						<span title=" Rating: /5" class="vmicon ratingbox" style="display:inline-block;">
							<span class="stars-orange" style="width:10%">
							</span>
						</span>
					     <span class="rating-title">Rating:  Not Rated Yet</span>
					 </span>	
				  </div>
          	</div>
		<div class="tab-heading">
			Description		</div>
				<p class="para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,.</p>
		<div class="tab-heading">
			Reviews	</div>
			<div class="small_title">This product was added to our catalog on Wednesday 06 November, 2013.</div>
			<p class="single-para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,Lorem ipsum dolor sit amet, consectetuer adipiscing elit,.</p>
		  		<div class="team">
						<h2>Related Posts</h2>
						<div class="section group">
							<div class="grid_1_of_3 images_1_of_3">
								  <img src="{{ URL::asset('images/pic10.jpg')}}" alt=""/>
								 <h4><a href="#">Jacalyn Markel</a></h4>
							</div>
							<div class="grid_1_of_3 images_1_of_3">
								  <img src="{{ URL::asset('images/pic11.jpg')}}" alt=""/>
								  <h4><a href="#">Steven Burge</a></h4>
							</div>
							<div class="grid_1_of_3 images_1_of_3">
								  <img src="{{ URL::asset('images/pic12.jpg')}}" alt=""/>
								   <h4><a href="#">Jon Mackenzie</a></h4>
							</div><div class="clear"></div> 
						</div>
					</div>
			</div>
			<div class="rightsidebar span_3_of_1">
				<div class="blog-bottom">
					<h4>Archives</h4>
					<ul class="categories">
						<li class="firstItem"> <a href="#">
						June , 15</a>
						</li>
						<li> <a href="#">
						June , 15</a>
						</li>
						<li> <a href="#">
						June , 15</a>
						</li>
						<li> <a href="#">
						June , 15</a>
						</li>
					</ul>
				</div>
				<div class="blog-bottom">
					<h4>Our Offers</h4>
					<div class="about-team">
							<div class="client">
								<div class="about-team-left">
									<a href="#"><img src="images/pic13.jpg" title="client-name"></a>
								</div>
								<div class="about-team-right">
									<p>tristique senectus et netus et malesuada fames ac turpis egestas.Vestibulum tortor quam,</p>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="client">
								<div class="about-team-left">
									<a href="#"><img src="images/pic14.jpg" title="client-name"></a>
								</div>
								<div class="about-team-right">
									<p>tristique senectus et netus et malesuada fames ac turpis egestas.Vestibulum tortor quam,</p>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="client">
								<div class="about-team-left">
									<a href="#"><img src="images/pic15.jpg" title="client-name"></a>
								</div>
								<div class="about-team-right">
									<p>tristique senectus et netus et malesuada fames ac turpis egestas.Vestibulum tortor quam,</p>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="client">
								<div class="about-team-left">
									<a href="#"><img src="images/pic16.jpg" title="client-name"></a>
								</div>
								<div class="about-team-right">
									<p>tristique senectus et netus et malesuada fames ac turpis egestas.Vestibulum tortor quam,</p>
								</div>
								<div class="clear"> </div>
							</div>
						</div>
 			    </div>
 			        <div class="event-grid">
					  	<div class="event_img">
						  <img src="images/pic17.jpg" title="post1" alt=""/>
					    </div>
						<div class="event_desc">
						 <h5><span>NEQUE LIGULA</span></h5>
						  <h5>Aug 28Th, 2013</h5>
						<p>Lorem ipsum dolor sit amet consectetur dolor more normal of letters,<a href="#">[...]</a></p>
					    </div>
							<div class="clear"> </div>
				    </div>
				     <div class="event-grid">
					  	<div class="event_img">
						  <img src="images/pic18.jpg" title="post1" alt=""/>
					    </div>
						<div class="event_desc">
						 <h5><span>NEQUE LIGULA</span></h5>
						  <h5>Aug 28Th, 2013</h5>
						<p>Lorem ipsum dolor sit amet consectetur dolor more normal of letters,<a href="#">[...]</a></p>
					    </div>
							<div class="clear"> </div>
				    </div>
				     <div class="event-grid">
					  	<div class="event_img">
						  <img src="images/pic19.jpg" title="post1" alt=""/>
					    </div>
						<div class="event_desc">
						 <h5><span>NEQUE LIGULA</span></h5>
						  <h5>Aug 28Th, 2013</h5>
						<p>Lorem ipsum dolor sit amet consectetur dolor more normal of letters,<a href="#">[...]</a></p>
					    </div>
							<div class="clear"> </div>
				    </div>
 			   </div>	
 			 <div class="clear"></div> 	
 	      </div>
 	   </div>
@endsection
	
	
		