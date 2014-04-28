<?php
    // Get the slider images
    $images = rwmb_meta( 'yer_slideimgs', 'type=plupload_image' );
?><!-- Start Slider Wrapping -->
<div id="sliderwrap">
	
    <!-- Start Slider -->
    <div id="slider" class="nivoSlider">
        <?php if ($images) { ?>
            <?php foreach ($images as $image) { ?>
                 <a href="#"><img src="<?php echo $image['full_url']; ?>" alt=""/></a>
            <?php } ?>
        <?php } else { ?>
            <a href="#"><img src="<?php echo THEME_URL; ?>/images/slider-banners/slider01.jpg" alt=""/></a>
            <a href="#"><img src="<?php echo THEME_URL; ?>/images/slider-banners/slider02.jpg" alt=""/></a>
            <a href="#"><img src="<?php echo THEME_URL; ?>/images/slider-banners/slider03.jpg" alt=""/></a>
        <?php } ?>
    </div>
    <!-- End Slider -->
    <!-- Start Slider HTML Captions -->
    <div id="htmlcaption" class="nivo-html-caption featured-text">
        <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
    </div>
    <!-- End Slider HTML Captions -->

</div>
<!-- End Slider Wrapping -->