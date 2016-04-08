<?php

/*
Plugin Name: wp-swiss-knife
Description: Customize WordPress
Version: 0.01
Author: b8000h@gmail.com
*/

add_action('admin_menu', 'register_custom_admin_menu');

function register_custom_admin_menu() {
    add_menu_page('WP Swiss Knife', 'WP Swiss Knife', 'administrator', 'wp-swiss-knife', 'custom_admin_menu_function', plugins_url('images/swiss_knife_16x16.png'), 6);
}

function custom_admin_menu_function() {
    echo "Test";
}
