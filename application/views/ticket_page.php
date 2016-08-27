<div class="clear"></div>
			<div class="content-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-9" role="main">
							<div class="detail-content-wrapper">										
									<div id="section-2" class="detail-content">
										<div class="section-title text-left">
											<h4>Details</h4>
										</div>
										<div class="detail-item">
											<div class="row">
												<div class="col-sm-4 col-sm-3 mb-30">
													<ul class="list-info no-icon bb-dotted">
														<li><span class="font600">Ticket by: <?php echo $data['issuer'];?></span></li>
														<li><span class="font600">Time of Issue:</span> <?php echo $data[0]['time'];?></li>
														<li><span class="font600">Likes:</span> <?php echo $data[0]['likes'];?></li>
														<li><span class="font600">Support :</span> <?php echo $data[0]['support'];?> </li>
														<li><span class="font600">Expected Date of Completion:</span> <?php echo $data[0]['edc'];?></li>
														<li><span class="font600">Assigned to:</span> <?php echo $data[0]['assignee'];?></li>
													</ul>
												</div>
												<div class="col-sm-8 col-md-9">
													<div class="itinerary-wrapper">
														<div class="itinerary-item intro-item">
															<h5>Descriptioon</h5>
															<div class="intro-item-body">
																<p><?php echo $data[0]['des'];?></p>
															</div>
														</div>														
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="review-content">	
										
												<ul class="review-list">
													<?php foreach($comment as $c){ ?>	
													<li class="clearfix">
														<div class="content">
															<div class="row gap-20 mb-0">
																<div class="col-sm-9">
																	<h6><?php echo $c['commenter'][0]['first_name'];?> <span></span></h6>
																</div
																<div class="col-sm-3">
																	<p class="review-date"><?php echo $c['time'];?></p>
															</div>
														</div>
															<div class="review-text">
																<p><?php echo $c['comment']?></p>
															</div>							
															
														
													</li>
   													<?php } ?>

												</ul>
										</div>

									</div>
									
									<div id="leave-comment" class="detail-content">
									
										<div class="section-title text-left">
											<h4>Leave Your Review</h4>
										</div>
										
										<div class="review-form">
											
											<form method="POST" action="<?php echo base_url('/main/addcomment/'.$data[0]['iid'])?>">
											
												<div class="row">
												
													<div class="clear"></div>
													
													<div class="col-sm-12 col-md-8">
													
														<div class="form-group">
															<label>Comment: </label>
															<textarea class="form-control form-control-sm" name="commentbox" rows="5"></textarea>
														</div>
													</div>
													
													<div class="clear"></div>
													
													<div class="col-sm-12 col-md-8 mt-10">
														<button action="Submit" class="btn btn-primary">Comment</button>
													</div>
													
												</div>
											
											</form>
										
										</div>
										
									</div>	
									
									<div class="call-to-action">
									
										Question? <a href="#" class="btn btn-primary btn-sm btn-inverse">Make an inquiry</a> or call +66 28 878 5452
									
									</div>
										
								</div>
							
						</div>

						

					</div>
				
				</div>
					
			</div>

		</div>
		<!-- end Main Wrapper -->

	


 
<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/instagram.min.js"></script>
<script type="text/javascript" src="js/spin.min.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/select2.full.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/readmore.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/validator.min.js"></script>
<script type="text/javascript" src="js/jquery.raty.js"></script> 
<script type="text/javascript" src="js/customs.js"></script>

<script>

/**
*  Sidebar Sticky
*/

!function ($) {

  $(function(){

    var $window = $(window)
    var $body   = $(document.body)

    var navHeight = $('.navbar').outerHeight(true) + 50

    $body.scrollspy({
      target: '.scrollspy-sidebar',
      offset: navHeight
    })

    $window.on('load', function () {
      $body.scrollspy('refresh')
    })

    $('.scrollspy-container [href=#]').click(function (e) {
      e.preventDefault()
    })

    // back to top
    setTimeout(function () {
      var $sideBar = $('.scrollspy-sidebar')

      $sideBar.affix({
        offset: {
          top: function () {
            var offsetTop      = $sideBar.offset().top
            var sideBarMargin  = parseInt($sideBar.children(0).css('margin-top'), 10)
            var navOuterHeight = $('.scrollspy-nav').height()

            return (this.top = offsetTop - navOuterHeight - sideBarMargin)
          }
        , bottom: function () {
            return (this.bottom = $('.scrollspy-footer').outerHeight(true))
          }
        }
      })
    }, 100)
		
  })

}(window.jQuery)

</script>

</body>

</html>