		<!-- Start Footer -->
		<div id="footer">
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
								<a href="http://www.derby-web-design-agency.co.uk" title="Theme Provided By UBL Designs">UBL Designs</a>
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
					<!-- End Social area -->
				
				</div>
			
			</div>
			<!-- End Footer Bottom -->
		</div>
		<!-- End Footer -->
		<!-- Start Scroll To Top Div -->
		<div id="scrolltab"></div>
		<!-- End Scroll To Top Div -->


			<script type="text/javascript">
			//// Script for equal heights
			$(document).ready(function(){
				equalheight();
			})
			$(window).resize(function(){
				equalheight();	
			})

			function equalheight(){
				// homepage
				$(".homeHeight").eqHeight();
				$(".linkHeight").eqHeight();

				// cv page
				$(".persHeight").eqHeight();
				$(".kennisHeight").eqHeight();
				$(".expHeight").eqHeight();
				$(".variaHeight").eqHeight();
			}	
		</script>
	</body>
</html>