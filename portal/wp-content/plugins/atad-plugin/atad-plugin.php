<?php
/*
 * Plugin Name:       Atad mobile helper
 * Description:       Plugin developed to facilitate the integration with atad mobile app
 * Version:           1.0.0
 * Author:            Anas Eshtaiwi
 * Author URI:        https://my-portfolio.bio/founder
 */

 defined( 'ABSPATH' ) || exit;

 define('PLUGIN_PATH',plugin_dir_path(__FILE__));

 require_once PLUGIN_PATH . 'functions.php';
 require_once PLUGIN_PATH . 'includes/post-api-hooks.php';
 require_once PLUGIN_PATH . 'includes/get-api-hooks.php';