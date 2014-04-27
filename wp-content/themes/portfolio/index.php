<?php

get_header();
?>


<div id="main">
    <?php get_template_part( 'slider', 'home' ); ?>

    <!-- Start H1 Title -->
    <div class="titles">
    	<h1><?php if (yer_get_meta('firsttitle')) { echo yer_get_meta('firsttitle'); } else { echo "Portfolio" ; } ?></h1>
        
        <span></span>
    
    </div>
    <!-- End H1 Title -->
    
    <?php get_template_part( 'content', 'index' ); ?>

</div>

<?php
    get_footer();
?>