<!-- Start Footer -->
<div id="footer">
	<!-- Start Footer Top -->
	<div id="footertop">
	
		<div class="footerwrap">
			<!-- Start Latest Tweets -->
			<div id="latest-tweets">
				<div id="twittertitle">Latest Tweets</div>
				<div id="twitterbody"></div>
			</div>
			<!-- End Latest Tweets -->
			<!-- Start Useful Links -->
			<div id="useful_links">
				<div id="usefultitle">Latest Tweets</div>
				<div id="usefulbody">
				
					<ul>
					
						<li><a href="#" title="">Lorem ipsum dolor sit </a></li>
						<li><a href="#" title="">Maecenas non ipsum nunc</a></li>
						<li><a href="#" title="">Lorem ipsum dolor </a></li>
						<li><a href="#" title="">Maecenas non ipsum </a></li>
						<li><a href="#" title="">Lorem ipsum dolor sit </a></li>
						<li><a href="#" title="">Maecenas non ipsum nunc</a></li>
						<li><a href="#" title="">Lorem ipsum dolor </a></li>
						<li><a href="#" title="">Maecenas non ipsum </a></li>
						<li><a href="#" title="">Lorem ipsum dolor sit </a></li>
						<li><a href="#" title="">Maecenas non ipsum nunc</a></li>
					
					</ul>
				
				</div>
			</div>
			<!-- End Useful Links -->
			<!-- Start Testimonials -->
			<div id="latest-testimonial">
				<div id="testimonialtitle">Latest Testimonials</div>
				<div id="testimonialbody">
					<!-- Starting simple slider -->
					<div id="simpleslider">
							<!-- Slide 1 -->
							<div class="current">
								<h6>Title 1</h6>
								<p>Lorem ipsum dolor sit amet, consectetur elit. Maecenas non ipsum nunc, nec sagittis tellus. Lorem ipsum dolor sit amet, consectetur elit. Maecenas non ipsum nunc</p>
							</div>
							<!-- End Slide 1 -->
							<!-- Slide 2 -->
							<div>
								<h6>iusdhfisd sdf</h6>
								<p>Lorem ipsum dolor sit amet, consectetur elit. Maecenas non ipsum nunc, nec sagittis tellus. Lorem ipsum dolor sit amet, consectetur elit. Maecenas non ipsum nunc</p>
							</div>
							<!-- End Slide 2 -->
							<!-- Slide 3 -->
							<div>
								<h6>eco sodalirity ltd</h6>
								<p>Lorem ipsum dolor sit amet, consectetur elit. Maecenas non ipsum nunc, nec sagittis tellus. Lorem ipsum dolor sit amet, consectetur elit. Maecenas non ipsum nunc</p>
							</div>
							<!-- End Slide 3 -->
							<!-- Slide 4 -->
							<div>
								<h6>asd</h6>
								<p>Lorem ipsum dolor sit amet, consectetur elit. Maecenas non ipsum nunc, nec sagittis tellus. Lorem ipsum dolor sit amet, consectetur elit. Maecenas non ipsum nunc</p>
							</div>
							<!-- End Slide 4 -->
							<!-- Slide 5 -->
							<div>
								<h6>ec234234234</h6>
								<p>Lorem ipsum dolor sit amet, consectetur elit. Maecenas non ipsum nunc, nec sagittis tellus. Lorem ipsum dolor sit amet, consectetur elit. Maecenas non ipsum nunc</p>
							</div>
							<!-- End Slide 5 -->
					</div>
					<!-- Ending simple slider -->
					<div class="speachlower"></div>
				</div>
			</div>
			<!-- End Latest Testimonials -->
		</div>
	
	</div>
	<!-- End Footer Top -->
	<div class="clear"></div>
	<!-- Start Footer Bottom -->
	<div id="footerbottom">
	
		<div class="footerwrap">
		
			<!-- Start Copyright Div -->
			<div id="copyright">
				<?php if (yer_get_option('copyrights')) {
					echo yer_get_option('copyrights');
				} else {
					?>
						&copy;<?php echo date("Y"); ?>.Response - All rights reserved! - Theme by 
						<!-- PLEASE SUPPORT US BY LEAVING THIS LINK -->
						<a href="http://www.derby-web-design-agency.co.uk" title="Theme Provided By UBL Designs">UBL Designs</a></div>
						<!-- PLEASE SUPPORT US BY LEAVING THIS LINK -->
					<?php
				}
				?>

					
			
			</div>
			<!-- End Copyright Div -->

			<!-- Start Social area -->
			<div class="socialfooter">
				
				<ul>
					<?php if (yer_get_option("link")) { ?>
						<li><a href="<?php echo yer_get_option("link"); ?>" class="social-linkedin"></a></li> 
					<?php } ?>
				</ul>
				
			</div>
			<!-- End Socialarea -->
		
		</div>
	
	</div>
	<!-- End Footer Bottom -->
</div>
<!-- End Footer -->
<!-- Start Scroll To Top Div -->
<div id="scrolltab"></div>
<!-- End Scroll To Top Div -->
</body>
</html>