
		
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
			
			