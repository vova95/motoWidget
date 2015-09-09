<?php
/*
Plugin Name: MotoPress Nested Shortcodes Example
Plugin URI: http://www.getmotopress.com/
Description: Example of the Nested Shortcodes in MotoPress Content Editor plugin
Version: 1.0
Author: MotoPress
Author URI: http://www.getmotopress.com/
*/

// add action to work with MotoPress Library
add_action('mp_library', 'mp_library_add_nested_shortcodes', 10, 1);
 
function mp_library_add_nested_shortcodes($motopressCELibrary) {

    // create new object
    $galleryObj = new MPCEObject('my_gallery', __('My Gallery', 'domain'), null, array(
        'title' => array(
            'type' => 'text',
            'label' => __('Gallery Title', 'domain'),
            'default' => __('My Gallery', 'domain'),
            'description' => __('Title Description', 'domain')
        ),
        'elements' => array(
            'type' => 'group',
            'contains' => 'my_gallery_item', // nested shortcode name
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
                'rootSelector' => '.my-gallery-item', // css selector of the internal object
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

    $galleryItem = new MPCEObject('my_gallery_item', __('Gallery Item', 'domain'), null, array(
        'title' => array(
            'type' => 'text',
            'label' => __('Item Title', 'domain'),
            'default' => __('Item', 'domain'),
            'description' => __('Title Description', 'domain')
        ),
        'id' => array(
            'type' => 'image',
            'label' => __('Image Source', 'domain'),
            'default' => '',
            'description' => __('Image Source Description', 'domain')
        ),
    ), null, MPCEObject::ENCLOSED, MPCEObject::RESIZE_NONE, false);

    $motopressCELibrary->addObject($galleryObj);
    $motopressCELibrary->addObject($galleryItem);
}

add_shortcode('my_gallery_item', 'my_gallery_item_foo');
add_shortcode('my_gallery', 'my_gallery_foo');

function my_gallery_foo($atts, $content = null) {
    extract(shortcode_atts(array(
        'title' => ''
    ), $atts));

    return '<div class="my-gallery"><h3>' . $title . '</h3>' . do_shortcode($content) . '</div>';
}

function my_gallery_item_foo($atts, $content = null) {
    extract(shortcode_atts(array(
        'id' => 0,
        'title' => ''
    ), $atts));

    if ( $id != 0 ) {
        $imgObj = wp_get_attachment_image_src( $id, 'thumbnail' );
        $imgSrc =  $imgObj[0];
    } else {
        $imgSrc = '//lorempixel.com/400/200/sports/1/';
    }

    return '<div class="my-gallery-item"><a href="#"><img src="' . $imgSrc . '"><h4>' . $title . '</h4></a></div>';
}


add_action('wp_footer','mp_library_add_nested_shortcodes_wp_footer');

function mp_library_add_nested_shortcodes_wp_footer() {

    echo "<style>.my-gallery-item {float: left;width: 50%;text-align: center;}.my-gallery-item > a {display: block;margin: 5px;}" .
        ".my-gallery-item .active {outline: 1px solid red;}</style>";

    echo "<script> jQuery('.my-gallery-item > a').on( 'click', function() {console.log( $( this ) );}); </script>";
}