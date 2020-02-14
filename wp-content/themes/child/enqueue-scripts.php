<?php
/**
 * ks load dynamic assets.
 *
 */

function ks_scripts() {
  wp_enqueue_style( 'ks-main-style', get_stylesheet_directory_uri() . '/src/main.css', array(), '0df04fa320547aef0900932ad3a50121', false );

  wp_enqueue_script( 'ks-vendor', get_stylesheet_directory_uri() . '/src/js/vendor.js', array(), '73e810029e3429668b28fcfb8708d929', true );
  
  wp_enqueue_script( 'ks-js', get_stylesheet_directory_uri() . '/src/js/main.js', array( 'ks-vendor' ), 'fa55942d80debc3feb16dbd598936b0e', true );
}

add_action( 'wp_enqueue_scripts', 'ks_scripts' );