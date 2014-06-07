<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Portfolio</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<link rel="shortcut icon" href="<?php echo yer_favicon(); ?>" />
<link rel="stylesheet" href="<?php echo THEME_URL; ?>/css/main.css"  type="text/css">
<link rel="stylesheet" href="<?php echo THEME_URL; ?>/css/print.css" type="text/css" media="print" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php echo THEME_URL; ?>/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="<?php echo THEME_URL; ?>/js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="<?php echo THEME_URL; ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="<?php echo THEME_URL; ?>/js/twitter.js"></script>    
<script src="<?php echo THEME_URL; ?>/js/custom.js"></script>   
<script src="<?php echo THEME_URL; ?>/js/eqHeight.js"></script>   
<script src="<?php echo THEME_URL; ?>/js/contact_validation.js"></script>   
<script src="<?php echo THEME_URL; ?>/js/portfolio_settings.js"></script>   
<script>
	//// Start Simple Sliders ////
	$(function() {
		setInterval("rotateDiv()", 10000);
	});
		
		function rotateDiv() {
		var currentDiv=$("#simpleslider div.current");
		var nextDiv= currentDiv.next ();
		if (nextDiv.length ==0)
			nextDiv=$("#simpleslider div:first");
		
		currentDiv.removeClass('current').addClass('previous').fadeOut('2000');
		nextDiv.fadeIn('3000').addClass('current',function() {
			currentDiv.fadeOut('2000', function () {currentDiv.removeClass('previous');});
		});
	
	}
	//// End Simple Sliders //// 
</script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>

<!-- <script type="text/javascript">
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
</script> -->
</head>

<body>
<div id="header">
		<!-- Start navigation area -->
		<div id="navigation">

			<div id="navigation_wrap">

				<!-- Start contact info area -->
				<!-- <div id="conteactinfo"><strong>Email:</strong> info@domainname.com  |  <strong>Phone:</strong> (+44) 1234 567 890</div> -->
				<!-- End contact info area -->
				<!-- Start navigation -->
				<div id="navi">
					<?php wp_nav_menu( array( 'theme_location' => 'header_menu' ) ); ?>                
				</div>
				<!-- End navigation -->
				
			</div>
		
		</div>
		<!-- End navigation area -->
		<div class="clear"></div>
		<!-- Start Social & Logo area -->
		<div id="header_small">
			<!-- Start Download button on CV -->
				<?php if (get_page_template_slug() === "page-cv.php"){ ?>
					<div id="downloadCV">
						<a class="smallsmoothrectange orangebutton" id="downloadCV" href="#" title="">Print CV</a>
					</div>		
				<?php } ?>
			<!-- End Download button on CV -->
					
			<!-- Start Social area -->
			<div class="social">
				<ul>
					<?php if (yer_get_option("link")) { ?>
						<li><a href="<?php echo yer_get_option("link"); ?>" class="social-linkedin"></a></li> 
					<?php } ?>
				</ul>
			</div>
			<!-- End Socialarea -->
			
			<!-- Start Logo area -->
			<?php $logotext = yer_get_option("sitelogo"); ?>
			<div id="logo">
			<?php if ($logotext) { ?>
				<a href="<?php home_url(); ?>/" title="Response"><?php echo $logotext; ?></a> 
			<?php } else { ?>
				<a href="<?php home_url(); ?>/" title="Response">Yoeri Stessens</a> 
			<?php } ?>
			</div>
			<!-- End Logo area -->
		
		</div>
		<!-- End Social & Logo area -->

</div>