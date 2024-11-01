<?php

/**
 * Plugin Name: WP REST API POST/ PAGE CUSTOM FIELDS
 * Description: Adds Custom Fields to WP REST API JSON output, (metadata).
 * Version: 1.0
 * Author: Ahmed Imraan
 * Author URI: https://ahmedimraan.netlify.com/
 */


// Add Meta Fields to Posts and Pages
add_action('rest_api_init',function (){
    register_rest_field('page',
    'metadata',
    array(
        'get_callback' => 'response_meta_api',
        'update_callback' => null,
        'schema' => null,
        )
    );
});

add_action('rest_api_init',function (){
    register_rest_field('post',
    'metadata',
    array(
        'get_callback' => 'response_meta_api',
        'update_callback' => null,
        'schema' => null,
        )
    );
});

add_action('rest_api_init',function (){
    register_rest_field('user',
    'metadata',
    array(
        'get_callback' => 'response_meta_api',
        'update_callback' => null,
        'schema' => null,
        )
    );
});

add_action('rest_api_init',function (){
    register_rest_field('taxonomie',
    'metadata',
    array(
        'get_callback' => 'response_meta_api',
        'update_callback' => null,
        'schema' => null,
        )
    );
});

function response_meta_api($object, $request){
    return get_post_meta($object['id']);
    
}
