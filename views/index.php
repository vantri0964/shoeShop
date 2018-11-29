	<!-- add header -->
	<?php 
		require_once('./header.php');
	?>
 	<!-- banner -->
	<div class="banner">
		<div class="banner-matter">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
  				<div class="carousel-inner">
				    <div class="item active">
				      	<img src="../images/banner.jpg" alt="Chania">
				      	<div class="carousel-caption">
				        	<h3>Los Angeles</h3>
				        	<p>LA is always so much fun!</p>
				      	</div>
				    </div>
    				<div class="item">
      					<img src="../images/banner.jpg" alt="Chicago">
      					<div class="carousel-caption">
        				<h3>Chicago</h3>
        				<p>Thank you, Chicago!</p>
      					</div>
    				</div>
    				<div class="item">
      					<img src="../images/banner.jpg" alt="New York">
      					<div class="carousel-caption">
        				<h3>New York</h3>
        				<p>We love the Big Apple!</p>
      					</div>
    				</div>
  				</div>
  				<!-- Left and right controls -->
  				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				</a>
  				<a class="right carousel-control" href="#myCarousel" data-slide="next">
    				<span class="glyphicon glyphicon-chevron-right"></span>
    				<span class="sr-only">Next</span>
  				</a>
			</div>
		</div>	
	</div>
	<!-- end banner -->
	<div class="line2"></div>
	<!--content-->
	<div class="content">    
		<div class="content-grids">
			<h2 align="center"><b>Sản Phẩm</b></h2>
			<div class="product-top">
				<!-- start-product -->
					<div class="col-md-8" id="content-8">
						<div class="col-md-6 grid-product-in">	
							<div class=" product-grid">	
								<a href="./single.php"><img class="img-responsive " src="../images/pr.png" alt=""></a>		
								<div class="shoe-in">
									<h6><a href="./single.php">Lorem Ipsum is simply dummy </a></h6>
									<label>$67.99</label>
									<a href="./single.php" class="store">Xem chi tiết</a>
								</div>

								<b class="plus-on">+</b>
							</div>	
						</div>
						<div class="col-md-6 grid-product-in">	
							<div class="product-grid">	
								<a href="./single.php"><img class="img-responsive " src="../images/pr1.png" alt=""></a>
								<div class="shoe-in">
									<h6><a href="single.php">Lorem Ipsum is simply dummy </a></h6>
									<label>$67.99</label>
									<a href="single.php" class="store">Xem chi tiết</a>
								</div>

								<b class="plus-on">+</b>
							</div>
						</div>
						<div class="col-md-6 grid-product-in">	
							<div class=" product-grid">	
								<a href="single.php"><img class="img-responsive " src="../images/pr2.png" alt=""></a>
								<div class="shoe-in">
									<h6><a href="single.php">Lorem Ipsum is simply dummy </a></h6>
									<label>$67.99</label>
									<a href="single.php" class="store">Xem chi tiết</a>
								</div>

								<b class="plus-on">+</b>
							</div>
						</div>
						<div class="col-md-6 grid-product-in">	
							<div class=" product-grid">	
								<a href="single.html"><img class="img-responsive " src="../images/pr4.png" alt=""></a>
								<div class="shoe-in">
									<h6><a href="single.html">Lorem Ipsum is simply dummy </a></h6>
									<label>$67.99</label>
									<a href="single.html" class="store">Xem chi tiết</a>
								</div>

								<b class="plus-on">+</b>
							</div>
						</div>
					</div>
				<!-- end product -->
				<!-- start slider -->
					<div class="col-md-3 col-md-offset-1">
						<section  class="sky-form">
							<div class="sellers">
								<h3 class="m_2">Special Offers</h3>
								<section class="slider">
									<div class="flexslider">
										<ul class="slides">
											<li>
												<div class="tittle">
													<img src="../images/si1.jpg" class="img-responsive" alt="" height="150px"  />
													<h6>Giày 1</h6>
													<p>Lorem ipsum dolor sit amet,</p>
													<p>Lorem ipsum dolor sit amet,</p>
													<p>Lorem ipsum dolor sit amet,</p>
													<a class="show1" href="#">SHOW ME MORE</a>
												</div>
											</li>
											<li>
												<div class="tittle">
													<img src="../images/si2.jpg" class="img-responsive" alt=""/>
													<h6>giày 2</h6>
													<p>Lorem ipsum dolor sit amet,</p>
													<p>Lorem ipsum dolor sit amet,</p>
													<p>Lorem ipsum dolor sit amet,</p>
													<a class="show1" href="#">SHOW ME MORE</a>
												</div>
											</li>
											<li>	
												<div class="tittle">
													<img src="../images/si1.jpg" class="img-responsive" alt=""/>
													<h6>Giày 3</h6>
													<p>Lorem ipsum dolor sit amet,</p>
													<p>Lorem ipsum dolor sit amet,</p>
													<p>Lorem ipsum dolor sit amet,</p>
													<a class="show1" href="#">SHOW ME MORE</a>
												</div>
											</li>
											<li>	
												<div class="tittle">
													<img src="../images/si3.jpg" class="img-responsive" alt=""/>
													<h6>Giày 4</h6>
													<p>Mô tả</p>
													<a class="show1" href="#">SHOW ME MORE</a>
												</div>
											</li>
										</ul>
									</div>
								</section>
							
									<!-- FlexSlider -->
										<script defer src="../js/jquery.flexslider.js"></script>
										  <script type="text/javascript">
											$(function(){
											  SyntaxHighlighter.all();
											});
											$(window).load(function(){
											  $('.flexslider').flexslider({
												animation: "slide",
												start: function(slider){
												  $('body').removeClass('loading');
												}
											  });
											});
										  </script>
									<!-- FlexSlider -->
							</div>
						</section>	
					</div>
				<!-- end slider -->
					<div class="clearfix"> </div>
			</div>
			<!-- product-top -->
			<div class="clearfix"> </div>
		</div>
		<!-- content-grids -->
	</div>
	<!-- content -->
	<!-- footer -->
	<?php 
		require_once('./footer.php');
	 ?>