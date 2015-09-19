<?php
class MotoPostStyler {

    public static $chosenStyle;

    public static $styles = array(
                                '0' => 'style1',
                                '1' => 'style2',
                                '2' => 'style3',
                                '3' => 'style4'
                            );

    public static function addContentToStyle($content) {
    echo '<style>.imageFont:before {
              content: "\\' . $content . '";
              color: #de5034;
              font-size: 110px;
              font-style: normal;
              line-height: 1;
              margin: 0;
        }</style>';
    }

    public static function mp_library_add_shortcodes($motopressCELibrary) {
        $effects = array(
            'right' => 'right',
            'left' => 'left',
            'up' => 'up',
            'down' => 'down',
        );
    // create new object
    $pageObj = new MPCEObject('motoWidget', __('PostStyler', 'domain'), null, array(
        'style' => array(
            'type' => 'select',
            'label' => __('Style', 'domain'),
            'list' => MotoPostStyler::$styles,
            'dependency' => array(
                'title' => 'style1',
                'front_content' => 'style2'
            )
        ),
        'elements' => array(
            'type' => 'group',
            'contains' => 'my_post_item',
            'items' => array(
                'label' => array(
                    'default' => __('Item Title', 'domain'),
                    'parameter' => 'title'
                ),
                'count' => 2
            ),
            'text' => __('Add new item', 'domain'),
            'disabled' => false,
            'rules' => array(
                'rootSelector' => '.my-page-item',
                'activeSelector' => '> a',
                'activeClass' => 'active'
            ),
            'events' => array(
                'onActive' => array(
                    'selector' => '> a',
                    'event' => 'click'
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
        'content' => array(
            'type' => 'text',
            'label' => __('Content Code', 'domain'),
            'default' => "\\e7bb"
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
        ),
        'front_content' => array(
            'type' => 'text',
            'label' => __('Front Content', 'domain'),
            'default' => __('$15.50', 'domain'),
        ),
        'back_content' => array(
            'type' => 'text',
            'label' => __('Back Content', 'domain'),
            'default' => __('Sed porttitor lectus nibh. Praesent sapien massa.', 'domain'),
        ),
        'link' => array(
            'type' => 'text',
            'label' => __('Link', 'domain'),
            'default' => __('Buy Now!', 'domain'),
        ),
        'effect' => array(
            'type' => 'select',
            'label' => __('Effect', 'domain'),
            'list' => $effects
        )
    ), null, MPCEObject::ENCLOSED, MPCEObject::RESIZE_NONE, false);

    $motopressCELibrary->addObject($pageObj);
    $motopressCELibrary->addObject($pageItem);
    }
}
?>