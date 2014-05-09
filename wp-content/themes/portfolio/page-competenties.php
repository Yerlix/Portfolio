<?php

/*
 * Template name: Competenties
 */

get_header();
?>

<div id="main">
    <!-- Start H1 Title -->
    <div class="titlesnormal">
    
    	<h1>Response Tabs &amp; Toggle Section</h1>
        
        <span></span>
    
    </div>
    <!-- End H1 Title -->

    <?php get_template_part('content', 'competenties'); ?>
    <?php wp_reset_postdata(); ?>

<?php
    get_footer();
?>