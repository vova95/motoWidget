<?php
/**
 * Plugin Name: FlipBoxCreator
 * Plugin URI: http://vovazubenko.com
 * Description: Flip boxes for your site
 * Version: 1.0
 * Author: Vladymyr Zubenko
 * Author URI: http://vovazubenko.com
 * License: GPL2
 */

require 'includes/FlipBoxMenu.php';
require 'includes/FlipBoxStructure.php';
// require 'includes/styleChanger.php';

$flipBoxMenu = new FlipBoxMenu();
add_action('mp_library', array($flipBoxMenu, 'mp_library_add_shortcodes'));
add_shortcode('FlipBox', 'generateFlipBox');

function generateFlipBox($atts, $content = null) {

	$effects = array(
            'right' => array('my-page-item-right', 'back-side-item-right'),
            'left' => array('my-page-item-left', 'back-side-item-left'),
            'up' => array('my-page-item-up', 'back-side-item-up'),
            'down' => array('my-page-item-down', 'back-side-item-down'),
        );

    extract(shortcode_atts(array(
        'style' => 'style1',
        'id' => 0,
        'content' => '',
        'font_color' => '',
        'effect' => 'right',
        'title' => '',
        'front_content' => '',
        'back_title' => '',
        'back_content' => '',
        'link_text' => '',
        'link' => '',
        'color_front' => '',
        'color_back' => '',
        'border_color_front' => '',
        'border_color_back' => '',
        'front_text_color' => '',
        'back_text_color' => '',
        'circle_color' => '',
        'link_color' => '',
        'link_text_color' => ''
    ), $atts));
    $postId = 0;
    if ( $id != 0 ) {
        $imgObj = wp_get_attachment_image_src( $id, 'full' );
        // var_dump($imgObj);
        $imgSrc =  $imgObj[0];
    } else {
        $imgSrc = ''. plugins_url() .'/motoPostStyler/img/xparty1.png.pagespeed.ic.UyqFIK62E3.webp';
    }

    $flipBoxStructure = new FlipBoxStructure();
    $chosenEffect = $effects[$effect];
    $arguments = array(
        'style' => $style,
        'imgSrc' => $imgSrc,
        'content' => $content,
        'font_color' => $font_color,
        'effect' => $chosenEffect,
        'title' => $title,
        'front_content' => $front_content,
        'back_title' => $back_title,
        'back_content' => $back_content,
        'link_text' => $link_text,
        'link' => $link,
        'color_front' => $color_front,
        'color_back' => $color_back,
        'border_color_front' => $border_color_front,
        'border_color_back' => $border_color_back,
        'front_text_color' => $front_text_color,
        'back_text_color' => $back_text_color,
        'circle_color' => $circle_color,
        'link_color' => $link_color,
        'link_text_color' => $link_text_color
    );
    // var_dump($arguments['link_color']);
    $boxId = generateId($style, $content, $imgSrc, $color_front, $color_back, $font_color);
    return $flipBoxStructure->generateFlipBoxLayout($arguments, $boxId);
}



add_action( 'wp_enqueue_scripts', 'flip_box_add_styles' );
add_action( 'admin_enqueue_scripts', 'flip_box_add_styles' );
add_action( 'wp_enqueue_scripts', 'flip_box_add_scripts' );

function generateId($style, $content, $imgSrc, $colorFront, $colorBack, $fontColor) {
    $id .= $style;
    $id .= $content;
    $id .= $imgSrc;
    $id .= $colorFront;
    $id .= $colorBack;
    $id .= $fontColor;
    $id = md5($id);
    return $id;
}

function flip_box_add_styles() {
    wp_register_style('post_styler', plugins_url('css/style.css', __FILE__));
    wp_register_style('post_media_styler', plugins_url('css/media.css', __FILE__));
    wp_enqueue_style('post_styler');
    wp_enqueue_style('post_media_styler');
}
function flip_box_add_scripts() {
    wp_register_script('jquery_script', plugins_url('js/jquery.min.js', __FILE__));
    wp_register_script('post_app_script', plugins_url('js/app.js', __FILE__));
    wp_enqueue_script('jquery_script');
    wp_enqueue_script('post_app_script');
}
?>