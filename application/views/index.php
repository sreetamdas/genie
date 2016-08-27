
		
		<!-- start Main Wrapper -->
		<div class="main-wrapper">
		
			<div class="flexslider-hero-slider">
				<div id="mainFlexSlider">
					<div class="flexslider">
						<ul class="slides">
							<li class="slide">
								<div class="flexslider-image-bg" style="background: url(assets/images/images/hero-header/02.jpg) center center no-repeat; background-size:cover"></div>
							</li><!-- slide1 end -->

							<li class="slide">
								<div class="flexslider-image-bg" style="background: url(assets/images/images/hero-header/03.jpg) center center no-repeat; background-size:cover"></div>
							</li><!-- slide2 end -->

							<li class="slide">
								<div class="flexslider-image-bg" style="background: url(assets/images/images/hero-header/04.jpg) center center no-repeat; background-size:cover"></div>
							</li><!-- slide3 end -->
							
							<li class="slide">
								<div class="flexslider-image-bg" style="background: url(assets/images/images/hero-header/05.jpg) center center no-repeat; background-size:cover"></div>
							</li><!-- slide4 end -->
							
							<li class="slide">
								<div class="flexslider-image-bg" style="background: url(assets/images/images/hero-header/06.jpg) center center no-repeat; background-size:cover"></div>
							</li><!-- slide5 end -->
							
						</ul><!-- slides end -->

						<div class="flexslider-overlay"></div>
						
					</div><!-- flexslider end -->
				</div>
				
				<div class="main-search-holder">
					<form id="filter_form" action="<?php echo base_url('/main/filter');?>" method="post">
					<div class="container">
	
						<div class="row">
					
							<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
							
								<h1 class="hero-title">Tour with Tour Packer</h1>
								<p class="lead">Visit Europe, America, Asia, Africa or beyond!</p>

							</div>
							
						</div>
						
						<div class="main-search-wrapper full-width">
						
							<div class="inner">
							
								<div class="column-item">
								
									<div class="form-group">
									
										<select name="destination" id="destination" class="select2-multi form-control" data-placeholder="Choose a Destination" required>
											<option value="">Choose a Destination</option>
											<option value="0">Any Destination</option>
											<?php foreach($country as $cnt){ ?>
											<option value="<?php echo $cnt['name'];?>"><?php echo $cnt['name'];?></option>
											<?php } ?>
										</select>

									</div>
								
								</div>
								
								<div class="column-item">
								
									<div class="form-group">
									
										<select name="monthyear" id="monthyear" class="select2-multi form-control" data-placeholder="Choose a Departure Month" required>
											<option value="">Choose a Departure Month</option>
											<option value="0">Any Departure Month</option>
											
											<option value="07-2016">July 2016</option>
											<option value="08-2016">August 2016</option>
											<option value="09-2016">September 2016</option>
											<option value="10-2016">October 2016</option>
											<option value="11-2016">November 2016</option>
											<option value="12-2016">December 2016</option>
										    <option value="01-2017">January 2017</option>
											<option value="02-2017">February 2017</option>
											<option value="03-2017">March 2017</option>
											<option value="04-2017">April 2017</option>
											<option value="05-2017">May 2017</option>
											<option value="06-2017">June 2017</option>
											<option value="07-2017">July 2017</option>
											<option value="08-2017">August 2017</option>
											<option value="09-2017">September 2017</option>
											<option value="10-2017">October 2017</option>
											<option value="11-2017">November 2017</option>
											<option value="12-2017">December 2017</option>
										    
										</select>
										
									</div>
								
								</div>
								
										<div class="column-item for-btn">
								
									<div class="form-group">
									
										<button type="submit" class="btn btn-primary btn-block">Search</button>
										
									</div>
								
								</div>
								
							</div>
							
						</div>
												</form>	

					</div>
					
				</div>

				
			</div>
			
			<div class="clear"></div>

		
			<div class="post-hero bg-light">
			
				<div class="container">
					
					<div class="row">
					
						<div class="col-sm-4">
							<div class="featured-count clearfix">
								<div class="icon"><i class="pe-7s-map-marker"></i></div>
								<div class="content">
									<h6>300+ Destinations</h6>
									<span>Tastes giving in passed direct me valley supply.</span>
								</div>
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="featured-count clearfix">
								<div class="icon"> <i class="pe-7s-user"></i></div>
								<div class="content">
									<h6>500+ Travel Guides</h6>
									<span>Prepared do an dissuade whatever steepest.</span>
								</div>
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="featured-count clearfix">
								<div class="icon"> <i class="pe-7s-smile"></i></div>
								<div class="content">
									<h6>20000+ Happy Customers</h6>
									<span>Devonshire invitation discovered indulgence.</span>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
				
			</div>

			<section>
			
				<div class="container">
				
					<div class="row">
						
						<div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
							
							<div class="section-title">
							
								<h3>Top Destinations</h3>
								
							</div>
							
						</div>
					
					</div>
					
					<div class="grid destination-grid-wrapper">
			
						
						<?php foreach($country as $c){ ?>}
						<div class="grid-item" data-colspan="5" data-rowspan="6">
							<a href="<?php echo base_url('/main/filterbycountry/'.$c['name']);?>" class="top-destination-image-bg" style="background-image:url('images/destination-grid/04.jpg');">
								<div class="relative">
									<h4><?php echo $c['name'];?></h4>
									<span></span>
								</div>
							</a>
						</div>
						<?php } ?>
					</div>
					
				</div>
				
			</section>
			
			<section class="bg-light">
			
				<div class="container">
				
					<div class="row">
						
						<div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
							
							<div class="section-title">
							
								<h3>Special Packages</h3>
								
								
							</div>
							
						</div>
					
					</div>
					
					<div class="GridLex-gap-30-wrappper package-grid-item-wrapper">
						
						<div class="GridLex-grid-noGutter-equalHeight">
							<?php for($i=0;$i<$data['rowcount'];$i++){ if($data[$i]['feat']==1){?>
							<div class="GridLex-col-4_sm-6_xs-12 mb-30">
								<div class="package-grid-item"> 
									<a href="<?php echo base_url('/main/detail_page/'.$data[$i]['p_no']);?>">
										<div class="image">
											<img src="<?php if(is_dir('./assets/images/'.$data[$i]['s_id'].'/'.$data[$i]['p_no']))
												echo base_url('/assets/images/'.$data[$i]['s_id'].'/'.$data[$i]['p_no'].'/'.'img_1.jpg');
											else

												echo base_url('/assets/images/images/tour-package/01.jpg');?>" alt="Tour Package" />
											<div class="absolute-in-image">
												<div class="duration"><span><?php echo $data[$i]['p_no'];?></span></div>
											</div>
										</div>
										<div class="content clearfix">
											<h5><?php echo $data[$i]['boat_name'];?></h5>
											<div class="rating-wrapper">
												<div class="raty-wrapper">
													<div class="star-rating-read-only" data-rating-score="4.0"></div> <span> / 7 review</span>
												</div>
											</div>
											<div class="absolute-in-content">
												<span class="btn"><i class="fa fa-heart-o"></i></span>
												<div class="price">RS: <?php echo $data[$i]['price'];?></div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<?php }}?>
							</div>
							
						</div>
					
					</div>
					
				</div>
				
			</section>
			
			<section class="overflow-hidden why-us-half-image-wrapper">
			
				<div class="GridLex-grid-noGutter-equalHeight">
						
					<div class="GridLex-col-6_sm-12">
						
						<div class="why-us-half-image-content">
						
							<div class="section-title text-left">
							
								<h3>Why Booking With Us</h3>
								<p>There are several seasons that you must travel with us</p>
								
							</div>
							
							<div class="featured-item">
							
								<h4>Experts On Tour</h4>
								
								<div class="content clearfix">
								
									<div class="icon">
										<i class="pe-7s-users"></i>
									</div>
									
									<p>Blind would equal while oh mr lain led and fact none. One preferred sportsmen resolving the happiness continued. High at of in loud rich true.</p>
									
								</div>
							</div>
							
							<div class="featured-item">
							
								<h4>Quality Accommodation</h4>
								
								<div class="content clearfix">
								
									<div class="icon">
										<i class="pe-7s-home"></i>
									</div>
									
									<p>Admiration stimulated cultivated reasonable be projection possession of. Real no near room ye bred sake if some. Is arranging furnished knowledge.</p>
									
								</div>
							</div>
							
							
							<div class="featured-item">
							
								<h4>Comfortable Transport</h4>
								
								<div class="content clearfix">
								
									<div class="icon">
										<i class="pe-7s-car"></i>
									</div>
									
									<p>Effect twenty indeed beyond for not had county. The use him without greatly can private. Increasing it unpleasant no of contrasted no continuing.</p>
									
								</div>
							</div>
							
						</div>
						
					</div>
					
					<div class="GridLex-col-6_sm-12 image-bg">
						<div class="image-bg" style="background-image:url('images/image-01.jpg');"></div>
					</div>
				
				</div>
				
			</section>
			
			<section class="bg-light">
			
				<div class="container">
				
					<div class="row">
						
						<div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
							
							<div class="section-title">
							
								<h3>Testimonial</h3>
								<p>What our customers say about us</p>
							</div>
							
						</div>
					
					</div>
					
					<div class="testimonial-wrapper">
					
						<div class="row">
							
							<div class="col-xs-12 col-sm-12 col-md-6">
								<div class="testimonial-item clearfix">
									<div class="image">
										<img src="images/man/01.jpg" alt="Man" />
									</div>
									<div class="content">
										<h4>Antony Robert</h4>
										<h6>From Spain</h6>
										<p>She meant new their sex could defer child. An lose at quit to life do dull. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire.</p>
									</div>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-6">
								<div class="testimonial-item clearfix">
									<div class="image">
										<img src="images/man/02.jpg" alt="Man" />
									</div>
									<div class="content">
										<h4>Mohammed Salem</h4>
										<h6>From Turkey</h6>
										<p>Consider now provided laughter boy landlord dashwood. Often voice and the spoke. No shewing fertile village equally prepare up females sentiments increasing particular.</p>
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</section>
			
			<div class="newsletter-wrapper">
			
				<div class="container">
				
					<div class="flex-row flex-align-middle flex-gap-30">
						
						<div class="flex-column flex-sm-12">
							<div class="newsletter-text clearfix">
								<div class="icon">
									<i class="pe-7s-mail"></i>
								</div>
								<div class="content">
									<h3>Signup for Newsletter</h3>
									<p>Affronting everything discretion men now own did. Still round match we to. Frankness pronounce daughters remainder extensive has but.</p>
								</div>
							</div>
						</div>
						
						<div class="flex-columns flex-sm-12">
							<div class="newsletter-form">
								<form class="">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search for...">
										<span class="input-group-btn">
											<button class="btn btn-primary" type="button">Signup <i class="fa fa-long-arrow-right"></i></button>
										</span>
									</div>
								</form>
							</div>
						</div>
					
					</div>
					
				</div>
				
			</div>
			
			<div class="overflow-hidden">
			
				<div class="instagram-wrapper">
					<div id="instagram" class="instagram"></div>
				</div>
				
			</div>
			
		</div>
		<!-- end Main Wrapper -->

