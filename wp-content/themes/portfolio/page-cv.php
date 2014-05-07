<?php

/*
 * Template name: CV
 */

get_header();
?>

<div id="main">

    <!-- Start H1 Title -->
    <div class="titles">
        <h1><?php if (yer_get_meta('cvtitle')) { echo yer_get_meta('cvtitle'); } else { echo "Persoonlijk" ; } ?></h1>
        
        <span></span>
    
    </div>
    <!-- End H1 Title -->
    
    <?php get_template_part( 'content', 'cv' ); ?>

</div>

<?php
    get_footer();
?>