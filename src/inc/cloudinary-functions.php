<?php
/**
 * Twenty Seventeen: Cloudinary V2 Adjustments
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

add_action('wp_enqueue_scripts', 'remove_cloudinary_videoplayer');
function remove_cloudinary_videoplayer() {
    wp_deregister_style('cld-player');
    wp_dequeue_style('cld-player');

    wp_deregister_script('cld-video-init');
    wp_dequeue_script('cld-video-init');

    wp_deregister_script('cld-player');
    wp_dequeue_script('cld-player');
}

add_action('wp_head', 'remove_cloudinary_gallery');
add_action('wp_enqueue_scripts', 'remove_cloudinary_gallery');
function remove_cloudinary_gallery() {
    wp_deregister_style('cloudinary-gallery-block-css');
    wp_dequeue_style('cloudinary-gallery-block-css');

    wp_deregister_script('cloudinary-gallery-block-js');
    wp_deregister_script('cloudinary-gallery-init');
    wp_deregister_script('cld-gallery');
    wp_deregister_script('cld-gallery-js');

    wp_dequeue_script('cloudinary-gallery-block-js');
    wp_dequeue_script('cloudinary-gallery-init');
    wp_dequeue_script('cld-gallery');
    wp_dequeue_script('cld-gallery-js');
}