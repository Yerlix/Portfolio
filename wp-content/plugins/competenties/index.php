<?php
/* Plugin Name: Competenties
Plugin URI: /
Description: 
Version: 1.0
Author: Yoeri Stessens
Author URI: 
License: GPLv2 or later
*/

function compettenties_activation() {
}
register_activation_hook(__FILE__, 'competenties_activation');

function competenties_deactivation() {
}
register_deactivation_hook(__FILE__, 'competenties_deactivation');

$prfx = 'competenties_';
include($prfx . 'post.php');
include($prfx . 'metaboxes.php');
