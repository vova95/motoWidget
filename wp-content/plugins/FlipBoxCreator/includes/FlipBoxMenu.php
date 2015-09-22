<?php
/**
* 
*/
class FlipBoxMenu
{

    public $styles = array(
                                '0' => 'style1',
                                '1' => 'style2',
                                '2' => 'style3',
                                '3' => 'style4',
                                '4' => 'style5',
                                '5' => 'style6'
                            );

	public static function mp_library_add_shortcodes($motopressCELibrary) {
        $effects = array(
            'right' => 'right',
            'left' => 'left',
            'up' => 'up',
            'down' => 'down',
        );
    // create new object
    $flipBoxObj = new MPCEObject('FlipBox', __('Flip Box', 'domain'), null, array(
        'style' => array(
            'type' => 'select',
            'label' => __('Style', 'domain'),
            'list' => MotoPostStyler::$styles,
            'class' => 'asd'
        ),
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
        ),
        'colorFront' => array(
            'type' => 'color-picker',
            'label' => __('Frontside Background Color', 'domain'),
            'default' => __('rgb(171, 30, 23)', 'domain')
        ),
        'colorBack' => array(
            'type' => 'color-picker',
            'label' => __('Backside Background Color', 'domain'),
            'default' => __('rgb(171, 30, 23)', 'domain')
        )
        ), 0, MPCEObject::ENCLOSED);

    

    $motopressCELibrary->addObject($flipBoxObj);
    }

}
?>