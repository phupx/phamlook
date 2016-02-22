<?php 
/*
Plugin Name: Subscribe Forms
Author: umarbajwa
Description: Add Beautiful froms to your website to increase converions
Plugin URI: http://web-settler.com/mailchimp-subscribe-form/
Author URI: http://web-settler.com/mailchimp-subscribe-form/
Version: 2.2
Donate link: http://web-settler.com/mailchimp-subscribe-form/
License: GPL V2


*********
* Copyright: 2014 http://web-settler.com/
* Note: License Free to use, Free to modify, Permission required to redistribute.
* Help: URL:http://web-settler.com/contact/
* Email: umar@web-setter.com
********
*/

include 'ssm_cs_post_type.php';
include 'ssm_cs_scripts.php';
include 'ssm_meta_boxes.php';
include 'ssm_menu_pages.php';

function ssm_plugin_add_settings_link( $links ) {
    $settings_link = '<a href="edit.php?post_type=subscribe_me_forms">' . __( 'Dashboard' ) . '</a>';
    $support_link = '<a href="http://web-settler.com/free-support/">' . __( 'Support' ) . '</a>';
    array_push( $links, $settings_link );
    array_push( $links, $support_link );
  	return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'ssm_plugin_add_settings_link' );



  ?>