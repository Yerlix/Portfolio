<?php

/*
 * Template name: Contact
 */

get_header();
?>

<div id="main">
    <!-- Start H1 Title -->
    <div class="titlesnormal">
    
    	<h1><?php if (yer_get_meta('contacttitle')) { echo yer_get_meta('contacttitle'); } else { echo "Contact" ; } ?></h1>
        
        <span></span>
    
    </div>
    <!-- End H1 Title -->
    
    <!-- Start Main Body Wrap -->
    <div id="main-wrap">
        <?php get_template_part( 'content', 'contact' ); ?>
        <?php get_template_part( 'content', 'usefullinks' ); ?>
    </div>

</div>

<?php get_footer(); ?>