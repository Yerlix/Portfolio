<!-- Start Main Body Wrap -->
    <div id="main-wrap">

        <!-- Start About titles -->
        <!-- <div class="boxes-full">
            <div class="boxes-padding fullpadding">
                <h1><?php if (yer_get_meta('abouttitle')) { echo yer_get_meta('abouttitle'); } else { echo "Over mezelf" ; } ?></h1>
            </div>
            <span class="box-arrow"></span>
        </div> -->
        <!-- End Latest Project titles -->
        
        <!-- Start About -->
        <?php $uploadedimgs = rwmb_meta( 'yer_aboutimgs', 'type=plupload_image' ); ?>
        <?php $images = array(); ?>
        <?php foreach ($uploadedimgs as $image) {
            $images[] = $image;
        }
        ?>
        <div class="boxes-full">
            <div class="boxes-padding">
                <div class="bti">
                    <div class="about-images printhide"><img src="<?php echo $images[0]['full_url']; ?>" alt="<?php echo $images[0]['alt']; ?>"></div>
                    <div class="about-images-sub printhide"><?php if (yer_get_meta('imgsub')) echo yer_get_meta('imgsub'); ?></div>
                    <div class="about-titles"><?php if (yer_get_meta('aboutsub')) { echo yer_get_meta('aboutsub'); } else { echo "Over mezelf" ; } ?></div>
                    <div class="about-text"><?php if (yer_get_meta('aboutcontent')) echo yer_get_meta('aboutcontent'); ?></div>
                </div>
                
            </div>
            <span class="box-arrow"></span>
        </div>
        <!-- End About -->

        <!-- Start Featured Boxes -->        
        <!-- Retrieve hobby image -->
        <?php $uploadedimgs = rwmb_meta( 'yer_hobbyimg', 'type=plupload_image' ); ?>
        <?php $images = array(); ?>
        <?php foreach ($uploadedimgs as $image) {
            $images[] = $image;
        }
        ?>
        <div class="boxes-full homeHeight">
            <div class="boxes-padding">
                <div class="bti">
                    <div class="featured-images printhide"><img src="<?php echo $images[0]['full_url']; ?>" alt="<?php echo $images[0]['alt']; ?>" width="80%"></div>
                    <div class="featured-titles"><?php if (yer_get_meta('hobbytitle')) echo yer_get_meta('hobbytitle'); ?></div>
                    <div class="featured-text"><?php if (yer_get_meta('hobbycontent')) echo yer_get_meta('hobbycontent'); ?></div>
                </div>
                
            </div>
            <span class="box-arrow"></span>
        </div>
        <!-- End Featured Boxes -->

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
                $uploadedimgs = rwmb_meta( 'yer_linkimgs', 'type=plupload_image' );
                $images = array();
                foreach ($uploadedimgs as $image) {
                    $images[] = $image;
                }

                // Get contact page id
                $contactPageID = get_ID_by_slug('contact');
            ?>
            <div class="boxes-half boxes-first linkHeight">
              <div class="portfoliowrap">
                <div class="title">
                    Contact
                    <span class="titlearrow"></span>
                </div>
                <div class="portfolioimage">
                    <a href="<?php echo get_page_link($contactPageID); ?>" rel="prettyPhoto">
                        <img src="<?php echo $images[0]['full_url']; ?>" alt="<?php echo $images[0]['alt']; ?>"/>
                    </a>
                </div>
                <div class="text">
                    <?php if (yer_get_meta('linkcontact')) echo yer_get_meta('linkcontact'); ?>
                    <span class="textarrow"></span>
                </div>
              </div>
            </div>
            
            <div class="boxes-half boxes-half-last linkHeight">
              <div class="portfoliowrap">
                <div class="title">
                    Projects
                    <span class="titlearrow"></span>
                </div>
                <div class="portfolioimage">
                    <a href="" rel="prettyPhoto" title="Lorem ipsum dolor sit amet">
                        <img src="<?php echo $images[1]['full_url']; ?>" alt="<?php echo $images[1]['alt']; ?>"/>
                    </a>
                </div>
                <div class="text">
                    <?php if (yer_get_meta('linkprojects')) echo yer_get_meta('linkprojects'); ?>
                    <span class="textarrow"></span>
                </div>
              </div>
            </div>
        </div>
        <!-- End Useful links -->
    
    </div>
    <!-- End Main Body Wrap