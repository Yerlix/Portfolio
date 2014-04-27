<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Portfolio</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<link rel="shortcut icon" href="<?php echo yer_favicon(); ?>" />
<link href="<?php echo THEME_URL; ?>/css/main.css" rel="stylesheet" type="text/css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php echo THEME_URL; ?>/js/jquery.nivo.slider.js" type="text/javascript"</script>
<script src="<?php echo THEME_URL; ?>/js/twitter.js"></script>    
<script src="<?php echo THEME_URL; ?>/js/custom.js"></script>   
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
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>                
				</div>
				<!-- End navigation -->
				
			</div>
		
		</div>
		<!-- End navigation area -->
		<div class="clear"></div>
		<!-- Start Social & Logo area -->
		<div id="header_small">
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
				<a href="" title="Response"><?php echo $logotext; ?></a> 
			<?php } else { ?>
				<a href="" title="Response">Yoeri Stessens</a> 
			<?php } ?>
			</div>
			<!-- End Logo area -->
		
		</div>
		<!-- End Social & Logo area -->

</div>