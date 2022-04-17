<?php
/**
 * Plugin Name: Disable the Admin Bar
 * Description: Remove Wordpress admin header .Admin Bar provides handy links to several key functions such as the ability to add new posts and pages, etc. However, if you find no use for it and wish to remove it.
 * Author: Shamim Imtiyaz

 */
 add_filter( 'show_admin_bar', '__return_false' );
 ?>