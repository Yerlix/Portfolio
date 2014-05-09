<?php

/*
 * Template name: Competenties
 */

get_header();
?>

<div id="main">
    <!-- Start H1 Title -->
    <div class="titlesnormal">
    
    	<h1><?php if (yer_get_meta('comptitle')) echo yer_get_meta('comptitle'); ?></h1>
        
        <span></span>
    
    </div>
    <!-- End H1 Title -->

    <!-- Start Main Body Wrap -->
    <div id="main-wrap">
        <?php get_template_part( 'content', 'competenties' ); ?>
        <?php get_template_part( 'content', 'usefullinks' ); ?>
    </div>
    <?php wp_reset_postdata(); ?>

<?php
    get_footer();
?>