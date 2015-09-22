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
        'style' => '0',
        'id' => 0,
        'title' => '',
        'back_title' => '',
        'front_content' => '',
        'back_content' => '',
        'link' => '',
        'content' => '',
        'effect' => 'right',
        'colorFront' => '',
        'colorBack' => ''
    ), $atts));

    $postId = 0;
    if ( $id != 0 ) {
        $imgObj = wp_get_attachment_image_src( $id, 'full' );
        // var_dump($imgObj);
        $imgSrc =  $imgObj[0];
    } else {
        $imgSrc = ''. plugins_url() .'/motoPostStyler/img/xparty1.png.pagespeed.ic.UyqFIK62E3.webp';
    }
    $flipBoxMenu = new FlipBoxMenu();
    $flipBoxStructure = new FlipBoxStructure();
    $styles = $flipBoxMenu->styles;
    $chosenEffect = $effects[$effect];

    return $flipBoxStructure->generateFlipBoxLayout($styles, $style, $imgSrc, $title, $back_title, $front_content, $back_content, $link, $chosenEffect, $postId);
}

?>