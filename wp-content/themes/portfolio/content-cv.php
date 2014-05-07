<!-- Start Main Body Wrap -->
    <div id="main-wrap">

        <!-- Start Personal info -->        
        <!-- Retrieve variables -->
        <?php 
            // persoonlijke gegevens
            $labels = rwmb_meta('yer_perslabels', 'type=text');
            $content = rwmb_meta('yer_perscontent', 'type=text');

            $length = count($labels);
            if (count($labels) > count($content)){
                $length = count($content);
            } else if (count($labels) < count($content)){
                $length = count($labels);
            }

            // vrije tijds gegevens
            $hobbys = rwmb_meta('yer_hobbys')
        ?>

        <div class="boxes-half boxes-first persHeight">
            <div class="boxes-padding">
                <div class="bti">
                    <div class="cv-images"><img src=""></div>
                    <div class="cv-titles"><?php if (yer_get_meta('perstitle')) echo yer_get_meta('perstitle'); ?></div>
                    <div class="cv-text cvbody">
                        <ul>
                            <?php for ($i=0; $i < $length; $i++) { ?>
                                <li class="cvLabel"><a><?php echo $labels[$i]; ?></a></li>
                                <li class="cvContent"><a><?php echo $content[$i]; ?></a></li>
                                <li class="divider"></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
                
            </div>
            <span class="box-arrow"></span>
        </div>
        <div class="boxes-half boxes-half-last persHeight">
            <div class="boxes-padding">
                <div class="bti">
                    <div class="cv-images"><img src=""></div>
                    <div class="cv-titles"><?php if (yer_get_meta('hobbystitle')) echo yer_get_meta('hobbystitle'); ?></div>
                    <div class="cv-text cvbody">
                        <ul>
                            <?php foreach ($hobbys as $hobby) { ?>
                                <li class="cvLabel"><a><?php echo $hobby; ?></a></li>
                                <li class="divider"></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
                
            </div>
            <span class="box-arrow"></span>
        </div>
        <!-- End Personal Info -->
        
        <!-- Start Useful links -->
        <?php 
            $homePageID = get_ID_by_slug('home');
            $uploadedimgs = rwmb_meta( 'yer_linkimgs', 'type=plupload_image', $homePageID );
            $images = array();
            foreach ($uploadedimgs as $image) {
                $images[] = $image;
            }

            // Get contact page id
            $contactPageID = get_ID_by_slug('contact');
        ?>
        <!-- Start Useful links titles -->
        <div class="boxes-full">
            <div class="boxes-padding fullpadding">
                <h1><?php if (yer_get_meta('linktitle', 'type=text', $contactPageID)) { echo yer_get_meta('linktitle', 'type=text', $contactPageID); } else { echo "Nuttige links" ; } ?></h1>
            </div>
            <span class="box-arrow"></span>
        </div>
        <!-- End Useful links titles -->

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
        <!-- End Useful links -->
    
    </div>
    <!-- End Main Body Wrap