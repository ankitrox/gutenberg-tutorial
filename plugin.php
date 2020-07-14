<?php
/**
 * Plugin Name: Gutenberg Tutorial
 * Plugin Author: WPGuruDev
 * Version: 1.0.0
 * Text Domain: gb-tut
 */
namespace WpGuruDev\Gutenberg;

define( 'GB_TUT_FILE', __FILE__ );
define( 'GB_TUT_PATH', dirname( __FILE__ ) );
define( 'GB_TUT_DIR', basename( GB_TUT_PATH ) );
define( 'GB_TUT_BUILD_URL', plugins_url( trailingslashit( GB_TUT_DIR ) . 'build' ) );

function test_script() {

    wp_enqueue_script(
        'gutenberg-test',
        trailingslashit( GB_TUT_BUILD_URL ) . 'index.js'
    );
}
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\test_script' );
