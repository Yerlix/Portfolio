<?php
/* Plugin Name: Portfolio Projects
Plugin URI: /
Description: 
Version: 1.0
Author: Yoeri Stessens
Author URI: 
License: GPLv2 or later
*/

function projects_activation() {
}
register_activation_hook(__FILE__, 'projects_activation');

function projects_deactivation() {
}
register_deactivation_hook(__FILE__, 'projects_deactivation');

$prfx = 'projects_';
include($prfx . 'post.php');
include($prfx . 'metaboxes.php');