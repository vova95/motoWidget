<?php
/**
 * Plugin Name: motoPostStyler
 * Plugin URI: http://vovazubenko.com
 * Description: This plugin was created to style your posts view
 * Version: 1.0
 * Author: Vladymyr Zubenko
 * Author URI: http://vovazubenko.com
 * License: GPL2
 */

require 'includes/pageItemStructure.php';
require 'includes/MotoPost.php';



add_action('mp_library', 'MotoPostStyler::mp_library_add_shortcodes');
add_shortcode('my_post_item', 'my_gallery_item_foo1');
add_shortcode('motoWidget', 'my_gallery_foo1');

function my_gallery_foo1($atts, $content = null) {
    extract(shortcode_atts(array(
        'style' => '0'
    ), $atts));

    MotoPostStyler::$chosenStyle = $style;
    
    return '<div class="my-page">' . do_shortcode($content) . '</div>';
}

function my_gallery_item_foo1($atts, $content = null) {
    $effects = array(
            'right' => array('my-page-item-right', 'back-side-item-right'),
            'left' => array('my-page-item-left', 'back-side-item-left'),
            'up' => array('my-page-item-up', 'back-side-item-up'),
            'down' => array('my-page-item-down', 'back-side-item-down'),
        );

    extract(shortcode_atts(array(
        'id' => 0,
        'title' => '',
        'back_title' => '',
        'front_content' => '',
        'back_content' => '',
        'link' => '',
        'content' => '',
        'effect' => 'right'
    ), $atts));

    if ( $id != 0 ) {
        $imgObj = wp_get_attachment_image_src( $id, 'thumbnail' );
        $imgSrc =  $imgObj[0];
    } else {
        $imgSrc = ''. plugins_url() .'/motoPostStyler/xparty1.png.pagespeed.ic.UyqFIK62E3.webp';
    }
    MotoPostStyler::addContentToStyle($content);
    
    $id = MotoPostStyler::$chosenStyle;
    $chosenEffect = $effects[$effect];
    $pageItem = new PageItemStructure();
    return $pageItem->pageItem(MotoPostStyler::$styles, $id, $imgSrc, $title, $back_title, $front_content, $back_content, $link, $chosenEffect);
}

add_action( 'wp_footer', 'bsp_inspect_add_styles' );

function bsp_inspect_add_styles() {
    wp_register_style('ultimate-set', 'http://ultimate.brainstormforce.com/wp-content/uploads/smile_fonts/Ultimate-set/A.Ultimate-set.css.pagespeed.cf.0xSe2I2K70.css');
    wp_register_style('post_styler', plugins_url('css/style.css', __FILE__));
    wp_enqueue_style('ultimate-set');
    wp_enqueue_style('post_styler');
}


?>