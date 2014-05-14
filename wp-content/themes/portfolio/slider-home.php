<?php
    // Get the slider images
    $images = rwmb_meta( 'yer_slideimgs', 'type=plupload_image' );
    $links = rwmb_meta( 'yer_imgurls');
?>

<!-- Start Slider Wrapping -->
<div id="sliderwrap">
	
    <!-- Start Slider -->
    <div id="slider" class="nivoSlider">
    <?php
        $i = 0;
        foreach ($images as $image) { ?>
             <a href="<?php echo $links[$i]; ?>"><img src="<?php echo $image['full_url']; ?>" alt=""/></a>
             <?php $i++; ?>
       <?php } ?>
    </div>
    <!-- End Slider -->
    <!-- Start Slider HTML Captions -->
    <div id="htmlcaption" class="nivo-html-caption">
        <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
    </div>
    <!-- End Slider HTML Captions -->

</div>
<!-- End Slider Wrapping -->