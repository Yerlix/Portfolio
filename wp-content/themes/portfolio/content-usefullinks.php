<!-- Start Useful links titles -->
<div class="printhide">
    <div class="boxes-full">
        <div class="boxes-padding fullpadding">
            <h1><?php if (yer_get_meta('linktitle')) { echo yer_get_meta('linktitle'); } else { echo "Nuttige links" ; } ?></h1>
        </div>
        <span class="box-arrow"></span>
    </div>
    <!-- End Useful links titles -->
    
    <!-- Start Useful links -->
    <?php 
        $contactimg = yer_contactimg();
        $projectimg = yer_projectimg();

        // Get contact page id
        $contactPageID = get_ID_by_slug('contact');

        // Get project page id
        $projectPageID = get_ID_by_slug('projecten');

        // Get competences page id
        $competencesPageID = get_ID_by_slug('competenties');

        $template = get_post_meta( $post->ID, '_wp_page_template', true );
        // var_dump($template);
    ?>
    <?php if ( $template !== "page-contact.php") { ?>
    <a href="<?php echo get_page_link($contactPageID); ?>">
        <div class="boxes-half boxes-first linkHeight">
            <div class="usefulwrap">
                <div class="title">
                    Contact
                    <span class="titlearrow"></span>
                </div>
                <div class="usefulimage">
                    <img src="<?php echo $contactimg; ?>" alt="Contacteer mij"/>
                </div>
                <div class="text">
                    <span class="textarrow"></span>
                </div>
            </div>
        </div>
    </a>
    <?php } else {
        not_usefull_link($post);
    } ?>
    
    <?php if ($template !== "page-projects.php") { ?>
    <a href="<?php echo get_page_link($projectPageID); ?>">
        <div class="boxes-half boxes-half-last linkHeight">
            <div class="usefulwrap">
                <div class="title">
                    Projecten
                    <span class="titlearrow"></span>
                </div>
                <div class="usefulimage">
                    <img src="<?php echo $projectimg; ?>" alt="Mijn projecten"/>
                </div>
                <div class="text">
                    <span class="textarrow"></span>
                </div>
            </div>
        </div>
    </a>
    <?php } else {
        not_usefull_link($post);
    } ?>
</div>



<?php function not_usefull_link($post) {
    $template = get_post_meta( $post->ID, '_wp_page_template', true );
    $compimg = yer_compimg();
    $competentiesPageID = get_ID_by_slug('competenties');

    switch ($template) {
        case 'page-contact.php':
                $classes = 'boxes-half boxes-first linkHeight';
            break;

        case 'page-projects.php':
            $classes = 'boxes-half boxes-half-last linkHeight';
            break;

    } ?>

    <a href="<?php echo get_page_link($competentiesPageID); ?>">
        <div class="<?php echo $classes; ?>">
            <div class="usefulwrap">
                <div class="title">
                    Competenties
                    <span class="titlearrow"></span>
                </div>
                <div class="usefulimage">
                    <img src="<?php echo $compimg; ?>" alt="Contacteer mij"/>
                </div>
                <div class="text">
                    <span class="textarrow"></span>
                </div>
            </div>
        </div>
    </a>
<?php } ?>
<!-- End Useful links -->