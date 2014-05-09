<?php

/*
 * Template name: Home
 */

get_header();
?>

<div id="main">
    <?php get_template_part( 'slider', 'home' ); ?>

    <!-- Start H1 Title -->
    <div class="titles">
        <h1><?php if (yer_get_meta('hometitle')) { echo yer_get_meta('hometitle'); } else { echo "Portfolio" ; } ?></h1>
        
        <span></span>
    
    </div>
    <!-- End H1 Title -->
    
    <!-- Start Main Body Wrap -->
    <div id="main-wrap">
        <?php get_template_part( 'content', 'home' ); ?>
        <?php get_template_part( 'content', 'usefullinks' ); ?>
    </div>

</div>

<?php
    get_footer();
?>