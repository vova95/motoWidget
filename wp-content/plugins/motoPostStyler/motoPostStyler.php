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

class MotoPostStyler {
	function mp_library_add_shortcodes($motopressCELibrary) {

    // create new object
    $pageObj = new MPCEObject('motoWidget', __('PostStyler', 'domain'), null, array(
        'title' => array(
            'type' => 'text',
            'label' => __('Post Title', 'domain'),
            'default' => __('My PostStyler', 'domain'),
            'description' => __('Title Description', 'domain')
        ),
        'elements' => array(
            'type' => 'group',
            'contains' => 'my_post_item', // nested shortcode name
            'items' => array(
                'label' => array(
                    'default' => __('Item Title', 'domain'), // default
                    'parameter' => 'title' // nested shortcode title attribute name
                ),
                'count' => 2 // number of items automatically created for new object
            ),
            'text' => __('Add new item', 'domain'), // text of the button to add new element
            'disabled' => false,
            'rules' => array(
                'rootSelector' => '.my-page-item', // css selector of the internal object
                'activeSelector' => '> a', // css selector of the active element
                'activeClass' => 'active' // css class name of the active element
            ),
            'events' => array(
                'onActive' => array( // javascript event when item is activated
                    'selector' => '> a', // css selector of the element
                    'event' => 'click' // event name
                ),
                'onInactive' => array( // javascript event when item is de-activated
                    'selector' => '> a', // css selector of the element
                    'event' => 'click' // event name
                )
            )
        )
    	), 0, MPCEObject::ENCLOSED);

    $pageItem = new MPCEObject('my_post_item', __('Post Item', 'domain'), null, array(
        'id' => array(
            'type' => 'image',
            'label' => __('Image Source', 'domain'),
            'default' => '',
            'description' => __('Image Source Description', 'domain')
        ),
        'title' => array(
            'type' => 'text',
            'label' => __('Front Title', 'domain'),
            'default' => __('Walley Wines', 'domain'),
            'description' => __('', 'domain')
        ),
        'back_title' => array(
            'type' => 'text',
            'label' => __('Back Title', 'domain'),
            'default' => __('More Info', 'domain'),
            // 'description' => __('', 'domain')
        ),
        'front_content' => array(
            'type' => 'text',
            'label' => __('Front Content', 'domain'),
            'default' => __('$15.50', 'domain'),
            // 'description' => __('', 'domain')
        ),
        'back_content' => array(
            'type' => 'text',
            'label' => __('Back Content', 'domain'),
            'default' => __('Sed porttitor lectus nibh. Praesent sapien massa.', 'domain'),
            // 'description' => __('', 'domain')
        ),
        'link' => array(
            'type' => 'text',
            'label' => __('Link', 'domain'),
            'default' => __('Buy Now!', 'domain'),
            // 'description' => __('', 'domain')
        )
        // 'title1' => array(
        //     'type' => 'select',
        //     'list' => array(
        //         '1' => 'asd',
        //         '2' => 'asd1')
            
        // )
    ), null, MPCEObject::ENCLOSED, MPCEObject::RESIZE_NONE, false);

    $motopressCELibrary->addObject($pageObj);
	$motopressCELibrary->addObject($pageItem);
	}
}

$moto = new MotoPostStyler();
add_action('mp_library', array('MotoPostStyler', 'mp_library_add_shortcodes'));
add_shortcode('my_post_item', 'my_gallery_item_foo1');
add_shortcode('motoWidget', 'my_gallery_foo1');

function my_gallery_foo1($atts, $content = null) {
    extract(shortcode_atts(array(
        'title' => ''
    ), $atts));

    return '<div class="my-page">' . do_shortcode($content) . '</div>';
}

function my_gallery_item_foo1($atts, $content = null) {
    extract(shortcode_atts(array(
        'id' => 0,
        'title' => '',
        'back_title' => '',
        'front_content' => '',
        'back_content' => '',
        'link' => ''
    ), $atts));

    if ( $id != 0 ) {
        $imgObj = wp_get_attachment_image_src( $id, 'thumbnail' );
        $imgSrc =  $imgObj[0];
    } else {
        $imgSrc = ''. plugins_url() .'/motoPostStyler/xparty1.png.pagespeed.ic.UyqFIK62E3.webp';
    }
    $pageItem = new PageItemStructure();
    return $pageItem->pageItem($imgSrc, $title, $back_title, $front_content, $back_content, $link);
}

add_action( 'wp_footer', 'bsp_inspect_add_styles' );

function bsp_inspect_add_styles() {
    wp_register_style('bsp_inspect_style', plugins_url('css/style.css', __FILE__));
    wp_enqueue_style('bsp_inspect_style');
}
?>