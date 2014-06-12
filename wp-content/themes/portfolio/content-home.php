

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
        <div class="boxes-full" id="overmezelf">
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