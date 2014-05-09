<!-- Ophalen variabelen -->
<?php
    // Get all projects
    $args = array(
        'post_type' => 'project',
    );
    $query = new WP_Query($args);
    $projects = array();

    $args = array(
        'orderby'   => 'name',
        'order'     => 'ASC',
        'exclude'   => '1',
    );
    $categories = get_categories($args);
?>

 <!-- Loop doorlopen -->
<?php 
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $projects[] = $post;
        endwhile;
    endif;
?> 
<?php wp_reset_postdata(); ?>

<!-- <?php var_dump($categories); ?> -->

<!-- Start Box -->
<div class="boxes-full">
    <div class="boxes-padding fullpadding">
        <!-- Start None Split Section -->
        <div class="splitnone">
            <!-- Start Portfolio Filter -->
          <div id="portfolio-filter">
                <ul>
                    <li><strong>Filter: </strong></li>
                    <li><a href="#portfolio-filter" title="All" class="orangebutton smallsmoothrectange" data-filter="*">show all</a></li>
                    <?php foreach ($categories as $cat) { ?>
                        <li><a href="#portfolio-filter" title="<?php echo $cat->name; ?>" class="orangebutton smallsmoothrectange" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a></li>
                    <?php } ?>                
                </ul>
            </div>
            <!-- End Portfolio Filter -->
        </div>
        <!-- End None Split Section -->
    </div>
    <span class="box-arrow"> </span>
</div>
<!-- End Box -->

<!-- Start Box -->
<div class="boxes-full">
    <div class="boxes-padding fullpadding">
        <!-- Start None Split Section -->
        <div class="splitnone">
            <div id="portfolio-container">
                <!-- Loop door alle projecten -->
                <?php foreach ($projects as $key => $value) { ?>
                    <?php
                        // ophalen categorien per post
                        $post_categories = wp_get_post_categories( $value->ID );
                        $cats = array();
                            
                        // de categorien overlopen en slechts bepaalde info in array steken
                        foreach($post_categories as $c){
                            $cat = get_category( $c );
                            $cats[] = array( 'slug' => $cat->slug );
                        }

                        // gegevens van de afbeelding ophalen
                        $link = rwmb_meta( 'yer_pro_link', 'type=url', $value->ID);
                        $images = rwmb_meta( 'yer_pro_image', 'type=plupload_image', $value->ID);
                        $array_keys = array_keys($images);
                        $imgid = reset($array_keys);
                    ?>
                    
                    <!-- classes worden dynamisch bijgevoegd als ze tot een categorie behoren -->
                    <!-- Daarna afbeelding tonen en gegevens plaatsen zoals de url naar het project -->
                    <div class="element2 isotope-item <?php foreach($cats as $cat) { echo $cat['slug'] . ' '; } $categorie; ?>">
                        <div class="portfoliowrap">
                            <div class="title"><?php echo $value->post_title; ?><span class="titlearrow"></span></div>
                            <div class="portfolioimage">
                                <a href="<?php echo $link; ?>" target="_blanc" title="<?php echo $link; ?>">
                                    <img src="<?php echo $images[$imgid]['full_url']; ?>" alt="<?php echo $images[$imgid]['alt']; ?>" />
                                </a>
                            </div>
                            <div class="text">
                                <?php echo $value->post_content; ?>
                                <span class="textarrow"></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- End None Split Section -->
    </div>
    <span class="box-arrow"></span>
</div>
<!-- End Box