<?php
    // Get all competentions
    $args = array(
        'post_type' => 'competentie',
    );
    $query = new WP_Query($args); 

    // arrays voorzien
    $softskills = array();
    $hardskills = array();
?>

<!-- Loop doorlopen -->
<?php if ($query->have_posts()) : ?>
    <?php while ($query->have_posts()) : $query->the_post() ?>
        <!-- Ophalen variabelen -->
        <?php
            // ophalen soort skill
            $skill = rwmb_meta('yer_soft_hard', 'type=radio', $post->ID);


            if ($skill === "soft")
                $softskills[] = $post;

            if ($skill === "hard")
                $hardskills[] = $post;
        ?>
    <?php endwhile; ?>
<?php endif; ?>

<!-- Start Main Body Wrap -->
<div id="main-wrap">
    
    <!-- Start -->
    <div class="boxes-full">
    
    	<div class="boxes-padding fullpadding">
        	
            <!-- Start Softskills Section -->
        	<div class="splitnone">
            	<h3>Softskills</h3>
                <p>Tekst</p>
            </div>
            <div class="clear"></div>
            <hr />
            <div class="splitnone">
            
                <h3>Toggle Section</h3>
                
                <!-- Start Toggle Softskills -->
                <?php if (count($softskills) > 0) { ?>
                    <div class="togglewrap">
                        <?php foreach ($softskills as $skill) { ?>
                            <div class="toggletitle"><a><?php echo $skill->post_title; ?></a></div>
                            <div class="togglecontent compbody">
                                <p>
                                    <?php echo $skill->post_content; ?>
                                </p>
                                <h3>Bewijzen</h3>

                                <!-- ophalen bewijzen -->
                                <?php $bewijzen = rwmb_meta('yer_bewijzen', 'type=file_advanced', $skill->ID); ?>
                                <ul>
                                    <?php foreach ($bewijzen as $bewijs) { ?>
                                        <li class="compLabel"><a href="<?php echo $bewijs['url']; ?>" target="_blanc"><?php echo $bewijs['name']; ?></a></li>
                                    <?php } ?>                                    
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <!-- End Toggle Softskills-->
            </div>
            <div class="clear"></div>
            <hr />

            <!-- Start None Split Section -->
            <div class="splitnone">
                <h3>Title</h3>
                <p>Tekst</p>
            </div>
            <div class="clear"></div>
            <hr />
            <div class="splitnone">
                <h3>Toggle Section</h3>
                <!-- Start Toggle Hardskills -->
                <?php if (count($hardskills) > 0) { ?>
                    <div class="togglewrap">
                        <?php foreach ($hardskills as $skill) { ?>
                            <div class="toggletitle"><a><?php echo $skill->post_title; ?></a></div>
                            <div class="togglecontent compbody">
                                <p>
                                    <?php echo $skill->post_content; ?>
                                </p>
                                <h3>Bewijzen</h3>

                                <!-- ophalen bewijzen -->
                                <?php $bewijzen = rwmb_meta('yer_bewijzen', 'type=file_advanced', $skill->ID); ?>
                                <ul>
                                    <?php foreach ($bewijzen as $bewijs) { ?>
                                        <li class="compLabel"><a href="<?php echo $bewijs['url']; ?>" target="_blanc"><?php echo $bewijs['name']; ?></a></li>
                                    <?php } ?>                                    
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <!-- End Toggle Hardskills-->           
            </div>
            <!-- End None Split Section -->

        </div>
        <span class="box-arrow"> </span>
    </div>
    <!-- End Latest Project titles -->

</div>
<!-- End Main Body Wrap -->