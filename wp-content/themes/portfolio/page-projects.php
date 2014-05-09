<?php

/*
 * Template name: Projecten
 */

get_header();
?>

<div id="main">
    <!-- Start H1 Title -->
    <div class="titlesnormal">
        <h1><?php if (yer_get_meta('projitle')) { echo yer_get_meta('projtitle'); } else { echo "Portfolio" ; } ?></h1>
        
        <span></span>
    
    </div>
    <!-- End H1 Title -->
    
    <!-- Start Main Body Wrap -->
    <div id="main-wrap">
        <!-- Start About -->
        <div class="boxes-full">
            <div class="boxes-padding">
                <div>
                    <div class="portfolio-text"><?php echo $post->post_content; ?></div>
                </div>
                
            </div>
            <span class="box-arrow"></span>
        </div>
        <!-- End About -->
        <?php get_template_part( 'content', 'projects' ); ?>
        <?php get_template_part( 'content', 'usefullinks' ); ?>
    </div>

</div>

<?php
    get_footer();
?>