<?php

/*
 * Template name: CV
 */

get_header();
?>

<div id="main">

    <!-- Start H1 Title -->
    <div class="titlesnormal">
        <h1><?php if (yer_get_meta('cvtitle')) { echo yer_get_meta('cvtitle'); } else { echo "Persoonlijk" ; } ?></h1>
        
        <span></span>
    
    </div>
    <!-- End H1 Title -->
    
    <!-- Start Main Body Wrap -->
    <div id="main-wrap">
        <?php get_template_part( 'content', 'cv' ); ?>
        <?php get_template_part( 'content', 'usefullinks' ); ?>
    </div>

</div>

<?php
    get_footer();
?>