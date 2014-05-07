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
    
    <?php get_template_part('content', 'contact'); ?>

</div>

<?php get_footer(); ?>