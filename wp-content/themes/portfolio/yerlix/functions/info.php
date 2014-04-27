<?php
//Theme Information Data
function yerlix_information_page(){ ?>
    <div class="wrap" id="yerlix-edit-slider-page">
        <h2><?php echo _e('Theme Information','yerlix'); ?></h2>
        <div id="optionsframework-metabox" class="metabox-holder">
            <div id="optionsframework" class="postbox">
                <h3><?php _e('General Information','yerlix'); ?></h3>
                <div class="page">
                    <ul>
                        <li><?php _e('WordPress Version','yerlix'); ?>: <b><?php echo get_bloginfo('version'); ?></b></li>
                        <li><?php _e('URL','yerlix'); ?>: <b><a href="<?php echo site_url(); ?>" target="_blank"><?php echo site_url(); ?></a></b></li>
                        <li><?php _e('Theme Version','yerlix'); ?>: <b><?php $yer_theme = wp_get_theme(); echo $yer_theme->get( 'Version' ); ?></b></li>
                        <li><?php _e('PHP Version','yerlix'); ?>: <b><?php echo phpversion(); ?></b></li>
                        <li><?php _e('MySQL server version','yerlix'); ?>: <b><?php echo  mysql_get_server_info(); ?></b></li>
                        <li><?php _e('Theme created date','yerlix'); ?>: <b>5 July 13</b></li>
                        <li><?php _e('Theme last update date','yerlix'); ?>: <b>9 January, 2014</b></li>
                    </ul>
                </div>
                <h3><?php _e('Installed Plugins','yerlix'); ?></h3>
                <div class="page">
                    <ul>
                        <?php foreach(get_option( 'active_plugins' ) as $plugin) { echo '<li>'.$plugin.'</li>'; } ?>
                    </ul>
                </div>
                <h3><?php _e('Changelog','yerlix'); ?></h3>
                <div class="page">
                    <b><i>Version 1.5 - 09/01/14</i></b><br />
                    <p class="greycolor">
                        - WordPress 3.8 Ready<br>
                        - Added new section Theme Info in theme options panel<br>
                        - Fixed the third level menu drop down issue<br>
                        - Fixed child themes support css styles issue<br>
                        - Fixed some responsive styles issues<br>
                        - Updated Revolution Slider plugin to version 4.1.4<br>
                        - Added new fields in theme options panel for advanced google fonts attributes<br>
                        - Fixed the toggle shortcode issue with height<br>
                        - Fixed the admin logo width issue on WordPress v.3.8<br>
                        - Added logo.psd file into the download archive<br>
                        - Fixed the images with caption responsive issue<br>
                        - Updated the nicescroll.js plugin and updated the custom scroll style<br>
                        - Updated languages files, added new words from new template<br>
                        - Fixed custom post type icons in Admin panel for WordPress v.3.8<br>
                        - Added an Upload button and text specification in Gallery box on the Edit page in Admin Panel<br>
                        - Fixed default lists,images etc... styles on single page template<br>
                        - Added option to upload custom pre loader animated image and replace the default<br>
                        - Added WPML XML Config file for better multilingual support<br>
                        - Added options for Home pages to disable each block in page setting editor.<br>
                        - Fixed the services boxes issue with double content (on hover and below the image). Now one is shown on desktop screen and the other on mobile screen<br>
                        - Added a color selector preview box<br>
                        - Added 15 predefined color schemes<br>
                    </p>
                    <b><i>Version 1.4 - 26/10/13</i></b><br />
                    <p class="greycolor">
                        - Added child theme support<br>
                        - Added a child theme prototype archive<br>
                        - Updated button shortcode style<br>
                        - Made columns shortcode responsive<br>
                        - Added Services shortcode<br>
                        - Added Team shortcode<br>
                        - Added Testimonial shortcode<br>
                        - Added Partners shortcode<br>
                        - Added Google Maps shortcode<br>
                        - Added Divider shortcode<br>
                        - Updated Documentation.<br>
                        - Updated xml with demo data file<br>
                        - Compatible with WorpdPress 3.7<br>
                        - Updated Revolution slider plugin<br>
                        - Added more service items on a service page (15 items)<br>
                        - Added more rows in Pricing Table on Single Service template (15 rows)<br>
                    </p>
                    <b><i>Version 1.3 - 03/10/13</i></b><br />
                    <p class="greycolor">
                        - fixed Activation bug on hostings with new php.
                    </p>
                    <b><i>Version 1.2 - 01/09/13</i></b><br />
                    <p class="greycolor">
                        - Fixed the bug with ajax comments<br>
                        - Fixed menu section warnings<br>
                        - Optimized JS scripts<br>
                        - Optimized framework scripts<br>
                        - fixed preloader position<br>
                    </p>
                    <b><i>Version 1.1 - 09/08/13</i></b><br />
                    <p class="greycolor">
                        - Support WordPress 3.6<br>
                        - fixed the bug on services page<br>
                        - Updated the blockquote tag style<br>
                        - Created new template: Home Style 2<br>
                        - Created new template: About Style 2<br>
                        - Created new template: Contact Style 2<br>
                        - Optimized JS scripts<br>
                        - Fixed the bug with blog posts slider after clicking load more<br>
                        - Fixed responsive css for new templates<br>
                        - Created new template: Gallery Filter 2 columns<br>
                        - Created new template: Gallery Filter 3 columns<br>
                        - Created new template: Gallery Filter 4 columns<br>
                        - Created new template: Blog Archive 2 Columns<br>
                        - Created new template: Blog Archive 3 Columns<br>
                        - Created new template: Home Style 3<br>
                        - Created new template: Home Style 4<br>
                        - Created new template: Home Style 5<br>
                        - Updated Documentation.pdf file<br>
                        - Updated theme demo, created new pages<br>
                        - Updated Revolution Slider plugin<br>
                    </p>
                    <b><i>Version 1.0 - 31/05/13</i></b><br />
                    <p class="greycolor">
                        - Initial Release
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php }