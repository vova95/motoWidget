<?php
/**
* 
*/
class FlipBoxMenu
{

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
            'list' => array(
                'style1' => 'style1',
                'style2' => 'style2',
                'style3' => 'style3',
                'style4' => 'style4',
                'style5' => 'style5',
                'style6' => 'style6'
            )
        ),
        // 'icon_type' => array(
        //     'type' => 'radio-buttons',
        //     'label' => __('Icon Type', 'domain'),
        //     'list' => array(
        //         'image_icon' => 'Image Icon',
        //         'font_icon' => 'Font Icon'
        //     ),
        //     'default' => 'image_icon'
        // ),
        'id' => array(
            'type' => 'image',
            'label' => __('Image Icon', 'domain'),
            'default' => '',
            'dependency' => array(
                'parameter' => 'style',
                'value' => array('style1', 'style2', 'style3')
            )
        ),
        'content' => array(
            'type' => 'icon-picker',
            'label' => __('Font Icon', 'domain'),
            'default' => 'fa fa-glass',
            'list' => FlipBoxMenu::getIconClassList(),
            'dependency' => array(
                'parameter' => 'style',
                'value' => array('style4', 'style5', 'style6')
            )
        ),
        'font_color' => array(
            'type' => 'color-picker',
            'label' => __('Font Color', 'domain'),
            'default' => '#de5034',
            'dependency' => array(
                'parameter' => 'style',
                'value' => array('style4', 'style5', 'style6')
            )
        ),
        'effect' => array(
            'type' => 'select',
            'label' => __('Effect', 'domain'),
            'list' => $effects
        ),
        'title' => array(
            'type' => 'text',
            'label' => __('Front Title', 'domain'),
            'default' => __('Walley Wines', 'domain'),
            'description' => __('', 'domain')
        ),
        'front_content' => array(
            'type' => 'text',
            'label' => __('Front Content', 'domain'),
            'default' => __('$15.50', 'domain'),
        ),
        'back_title' => array(
            'type' => 'text',
            'label' => __('Back Title', 'domain'),
            'default' => __('More Info', 'domain'),
        ),
        'back_content' => array(
            'type' => 'text',
            'label' => __('Back Content', 'domain'),
            'default' => __('Sed porttitor lectus nibh. Praesent sapien massa.', 'domain'),
        ),
        'link_text' => array(
            'type' => 'text',
            'label' => __('Link Text', 'domain'),
            'default' => __('Buy Now!', 'domain'),
        ),
        'link' => array(
            'type' => 'text',
            'label' => __('Link', 'domain'),
            'default' => __('#', 'domain'),
        ),
        'color_front' => array(
            'type' => 'color-picker',
            'label' => __('Frontside Background Color', 'domain'),
            'default' => __('rgb(171, 30, 23)', 'domain')
        ),
        'color_back' => array(
            'type' => 'color-picker',
            'label' => __('Backside Background Color', 'domain'),
            'default' => __('rgb(171, 30, 23)', 'domain')
        ),
        'border_color_front' => array(
            'type' => 'color-picker',
            'label' => __('Frontside Border Color', 'domain'),
            'default' => __('rgb(171, 30, 23)', 'domain'),
            'dependency' => array(
                'parameter' => 'style',
                'value' => array('style2', 'style3', 'style4', 'style5', 'style6')
            )
        ),
        'border_color_back' => array(
            'type' => 'color-picker',
            'label' => __('Backside Border Color', 'domain'),
            'default' => __('rgb(171, 30, 23)', 'domain'),
            'dependency' => array(
                'parameter' => 'style',
                'value' => array('style4', 'style5', 'style6')
            )
        ),
        'front_text_color' => array(
            'type' => 'color-picker',
            'label' => __('Frontside Text Color', 'domain'),
            'default' => __('rgb(171, 30, 23)', 'domain')
        ),
        'back_text_color' => array(
            'type' => 'color-picker',
            'label' => __('Backside Text Color', 'domain'),
            'default' => __('rgb(171, 30, 23)', 'domain')
        ),
        'link_color' => array(
            'type' => 'color-picker',
            'label' => __('Link Color', 'domain'),
            'default' => __('rgb(171, 30, 23)', 'domain')
        )
        ), 0, MPCEObject::ENCLOSED);

    

    $motopressCELibrary->addObject($flipBoxObj);
    }

    public static function getIconClassList($useEmptyIcon = false) {
        $IconList = array(
            'fa fa-glass' => array(                
                'class' => 'fa fa-glass',
                'label' => 'Glass'
            ),
            'fa fa-music' => array(                
                'class' => 'fa fa-music',
                'label' => 'Music'
            ),
            'fa fa-search' => array(                
                'class' => 'fa fa-search',
                'label' => 'Search'
            ),
            'fa fa-heart' => array(                
                'class' => 'fa fa-heart',
                'label' => 'Heart'
            ),
            'fa fa-star' => array(                
                'class' => 'fa fa-star',
                'label' => 'Star'
            ),
            'fa fa-star-o' => array(                
                'class' => 'fa fa-star-o',
                'label' => 'Star O'
            ),
            'fa fa-user' => array(                
                'class' => 'fa fa-user',
                'label' => 'User'
            ),
            'fa fa-film' => array(                
                'class' => 'fa fa-film',
                'label' => 'Film'
            ),
            'fa fa-th-large' => array(                
                'class' => 'fa fa-th-large',
                'label' => 'Th-large'
            ),
            'fa fa-th' => array(                
                'class' => 'fa fa-th',
                'label' => 'Th'
            ),
            'fa fa-th-list' => array(                
                'class' => 'fa fa-th-list',
                'label' => 'Th-list'
            ),
            'fa fa-check' => array(                
                'class' => 'fa fa-check',
                'label' => 'Check'
            ),
            'fa fa-remove' => array(
                'class' => 'fa fa-remove',
                'label' => 'Remove Close Times'
            ),
            'fa fa-search-plus' => array(
                'class' => 'fa fa-search-plus',
                'label' => 'Search Plus'
            ),            
            'fa fa-search-minus' => array(
                'class' => 'fa fa-search-minus',
                'label' => 'Search Minus'
            ),
            'fa fa-power-off' => array(
                'class' => 'fa fa-power-off',
                'label' => 'Power Off'
            ),
            'fa fa-signal' => array(
                'class' => 'fa fa-signal',
                'label' => 'Signal'
            ),
            'fa fa-gear' => array(
                'class' => 'fa fa-gear',
                'label' => 'Gear Cog'
            ),
            'fa fa-trash-o' => array(
                'class' => 'fa fa-trash-o',
                'label' => 'Trash O'
            ),
            'fa fa-home' => array(
                'class' => 'fa fa-home',
                'label' => 'Home'
            ),
            'fa fa-file-o' => array(
                'class' => 'fa fa-file-o',
                'label' => 'File O'
            ),
            'fa fa-clock-o' => array(
                'class' => 'fa fa-clock-o',
                'label' => 'Clock O'
            ),
            'fa fa-road' => array(
                'class' => 'fa fa-road',
                'label' => 'Road'
            ),
            'fa fa-download' => array(
                'class' => 'fa fa-download',
                'label' => 'Download'
            ),
            'fa fa-arrow-circle-o-down' => array(
                'class' => 'fa fa-arrow-circle-o-down',
                'label' => 'Arrow Circle O Down'
            ),
            'fa fa-arrow-circle-o-up' => array(
                'class' => 'fa fa-arrow-circle-o-up',
                'label' => 'Arrow Circle O Up'
            ),
            'fa fa-inbox' => array(
                'class' => 'fa fa-inbox',
                'label' => 'Inbox'
            ),
            'fa fa-play-circle-o' => array(
                'class' => 'fa fa-circle-o',
                'label' => 'Circle O'
            ),
            'fa fa-rotate-right' => array(
                'class' => 'fa fa-rotate-right',
                'label' => 'Rotate Right, Repeat'
            ),
            'fa fa-refresh' => array(
                'class' => 'fa fa-refresh',
                'label' => 'Refresh'
            ),
            'fa fa-list-alt' => array(
                'class' => 'fa fa-list-alt',
                'label' => 'List Alt'
            ),
            'fa fa-lock' => array(
                'class' => 'fa fa-lock',
                'label' => 'Lock'
            ),
            'fa fa-flag' => array(
                'class' => 'fa fa-flag',
                'label' => 'Flag'
            ),
            'fa fa-headphones' => array(
                'class' => 'fa fa-headphones',
                'label' => 'Headphones'
            ),
            'fa fa-volume-off' => array(
                'class' => 'fa fa-volume-off',
                'label' => 'Volume Off'
            ),
            'fa fa-volume-down' => array(
                'class' => 'fa fa-volume-down',
                'label' => 'Volume Down'
            ),
            'fa fa-volume-up' => array(
                'class' => 'fa fa-volume-up',
                'label' => 'Volume Up'
            ),
            'fa fa-qrcode' => array(
                'class' => 'fa fa-qrcode',
                'label' => 'QR Code'
            ),
            'fa fa-barcode' => array(
                'class' => 'fa fa-barcode',
                'label' => 'Barcode'
            ),
            'fa fa-tag' => array(
                'class' => 'fa fa-tag',
                'label' => 'Tag'
            ),
            'fa fa-tags' => array(
                'class' => 'fa fa-tags',
                'label' => 'Tags'
            ),
            'fa fa-book' => array(
                'class' => 'fa fa-book',
                'label' => 'Book'
            ),
            'fa fa-bookmark' => array(
                'class' => 'fa fa-bookmark',
                'label' => 'Bookmark'
            ),
            'fa fa-print' => array(
                'class' => 'fa fa-print',
                'label' => 'Print'
            ),
            'fa fa-camera' => array(
                'class' => 'fa fa-camera',
                'label' => 'Camera'
            ),
            'fa fa-font' => array(
                'class' => 'fa fa-font',
                'label' => 'Font'
            ),
            'fa fa-bold' => array(
                'class' => 'fa fa-bold',
                'label' => 'Bold'
            ),
            'fa fa-italic' => array(
                'class' => 'fa fa-italic',
                'label' => 'Italic'
            ),
            'fa fa-text-height' => array(
                'class' => 'fa fa-text-height',
                'label' => 'Text Height'
            ),
            'fa fa-text-width' => array(
                'class' => 'fa fa-text-width',
                'label' => 'Width'
            ),
            'fa fa-align-left' => array(
                'class' => 'fa fa-align-left',
                'label' => 'Align Left'
            ),
            'fa fa-align-center' => array(
                'class' => 'fa fa-align-center',
                'label' => 'Align Center'
            ),
            'fa fa-align-right' => array(
                'class' => 'fa fa-align-right',
                'label' => 'Align Right'
            ),
            'fa fa-align-justify' => array(
                'class' => 'fa fa-align-justify',
                'label' => 'Align Justify'
            ),
            'fa fa-list' => array(
                'class' => 'fa fa-list',
                'label' => 'List'
            ),
            'fa fa-dedent' => array(
                'class' => 'fa fa-dedent',
                'label' => 'Dedent, Outdent'
            ),
            'fa fa-indent' => array(
                'class' => 'fa fa-indent',
                'label' => 'Indent'
            ),
            'fa fa-video-camera' => array(
                'class' => 'fa fa-video-camera',
                'label' => 'Video Camera'
            ),
            'fa fa-image' => array(
                'class' => 'fa fa-image',
                'label' => 'Photo, Image, Picture O'
            ),
            'fa fa-pencil' => array(
                'class' => 'fa fa-pencil',
                'label' => 'Pencil'
            ),
            'fa fa-map-marker' => array(
                'class' => 'fa fa-map-marker',
                'label' => 'Map Marker'
            ),
            'fa fa-adjust' => array(
                'class' => 'fa fa-adjust',
                'label' => 'Adjust'
            ),
            'fa fa-tint' => array(
                'class' => 'fa fa-tint',
                'label' => 'Tint'
            ),
            'fa fa-edit' => array(
                'class' => 'fa fa-edit',
                'label' => 'Edit, Pencil Square O'
            ),
            'fa fa-share-square-o' => array(
                'class' => 'fa fa-share-square-o',
                'label' => 'Share Square O'
            ),
            'fa fa-check-square-o' => array(
                'class' => 'fa fa-check-square-o',
                'label' => 'Check Square O'
            ),
            'fa fa-arrows' => array(
                'class' => 'fa fa-arrows',
                'label' => 'Arrows'
            ),
            'fa fa-step-backward' => array(
                'class' => 'fa fa-step-backward',
                'label' => 'Step Backward'
            ),
            'fa fa-fast-backward' => array(
                'class' => 'fa fa-fast-backward',
                'label' => 'Fast Backward'
            ),
            'fa fa-backward' => array(
                'class' => 'fa fa-backward',
                'label' => 'Backward'
            ),
            'fa fa-play' => array(
                'class' => 'fa fa-play',
                'label' => 'Play'
            ),
            'fa fa-pause' => array(
                'class' => 'fa fa-pause',
                'label' => 'Pause'
            ),
            'fa fa-stop' => array(
                'class' => 'fa fa-stop',
                'label' => 'Stop'
            ),
            'fa fa-forward' => array(
                'class' => 'fa fa-forward',
                'label' => 'Forward'
            ),
            'fa fa-fast-forward' => array(
                'class' => 'fa fa-fast-forward',
                'label' => 'Fast Forward'
            ),
            'fa fa-step-forward' => array(
                'class' => 'fa fa-step-forward',
                'label' => 'Step Forward'
            ),
            'fa fa-eject' => array(
                'class' => 'fa fa-eject',
                'label' => 'Eject'
            ),
            'fa fa-chevron-left' => array(
                'class' => 'fa fa-chevron-left',
                'label' => 'Chevron Left'
            ),
            'fa fa-chevron-right' => array(
                'class' => 'fa fa-chevron-right',
                'label' => 'Chevron Right'
            ),
            'fa fa-plus-circle' => array(
                'class' => 'fa fa-plus-circle',
                'label' => 'Plus Circle'
            ),
            'fa fa-minus-circle' => array(
                'class' => 'fa fa-minus-circle',
                'label' => 'Minus Circle'
            ),
            'fa fa-times-circle' => array(
                'class' => 'fa fa-times-circle',
                'label' => 'Times Circle'
            ),
            'fa fa-check-circle' => array(
                'class' => 'fa fa-check-circle',
                'label' => 'Check Circle'
            ),
            'fa fa-question-circle' => array(
                'class' => 'fa fa-question-circle',
                'label' => 'Question Circle'
            ),
            'fa fa-info-circle' => array(
                'class' => 'fa fa-info-circle',
                'label' => 'Info Circle'
            ),
            'fa fa-crosshairs' => array(
                'class' => 'fa fa-crosshairs',
                'label' => 'Crosshairs'
            ),
            'fa fa-times-circle-o' => array(
                'class' => 'fa fa-times-circle-o',
                'label' => 'Times Circle O'
            ),
            'fa fa-check-circle-o' => array(
                'class' => 'fa fa-check-circle-o',
                'label' => 'Check Circle O'
            ),
            'fa fa-ban' => array(
                'class' => 'fa fa-ban',
                'label' => 'Ban'
            ),
            'fa fa-arrow-left' => array(
                'class' => 'fa fa-arrow-left',
                'label' => 'Arrow Left'
            ),
            'fa fa-arrow-right' => array(
                'class' => 'fa fa-arrow-right',
                'label' => 'Arrow Right'
            ),
            'fa fa-arrow-up' => array(
                'class' => 'fa fa-arrow-up',
                'label' => 'Arrow Up'
            ),
            'fa fa-arrow-down' => array(
                'class' => 'fa fa-arrow-down',
                'label' => 'Arrow Down'
            ),
            'fa fa-share' => array(
                'class' => 'fa fa-share',
                'label' => 'Mail Forward, Share'
            ),
            'fa fa-expand' => array(
                'class' => 'fa fa-expand',
                'label' => 'Expand'
            ),
            'fa fa-compress' => array(
                'class' => 'fa fa-compress',
                'label' => 'Compress'
            ),
            'fa fa-plus' => array(
                'class' => 'fa fa-plus',
                'label' => 'Plus'
            ),
            'fa fa-minus' => array(
                'class' => 'fa fa-minus',
                'label' => 'Minus'
            ),
            'fa fa-asterisk' => array(
                'class' => 'fa fa-asterisk',
                'label' => 'Asterisk'
            ),
            'fa fa-exclamation-circle' => array(
                'class' => 'fa fa-exclamation-circle',
                'label' => 'Exclamation Circle'
            ),
            'fa fa-gift' => array(
                'class' => 'fa fa-gift',
                'label' => 'Gift'
            ),
            'fa fa-leaf' => array(
                'class' => 'fa fa-leaf',
                'label' => 'Leaf'
            ),
            'fa fa-fire' => array(
                'class' => 'fa fa-fire',
                'label' => 'Fire'
            ),
            'fa fa-eye' => array(
                'class' => 'fa fa-eye',
                'label' => 'Eye'
            ),
            'fa fa-eye-slash' => array(
                'class' => 'fa fa-eye-slash',
                'label' => 'Eye Slash'
            ),
            'fa fa-warning' => array(
                'class' => 'fa fa-warning',
                'label' => 'Warning, Exclamation, Triangle'
            ),
            'fa fa-plane' => array(
                'class' => 'fa fa-plane',
                'label' => 'Plane'
            ),
            'fa fa-calendar' => array(
                'class' => 'fa fa-calendar',
                'label' => 'Calendar'
            ),
            'fa fa-random' => array(
                'class' => 'fa fa-random',
                'label' => 'Random'
            ),
            'fa fa-comment' => array(
                'class' => 'fa fa-comment',
                'label' => 'Comment'
            ),
            'fa fa-magnet' => array(
                'class' => 'fa fa-magnet',
                'label' => 'Magnet'
            ),
            'fa fa-chevron-up' => array(
                'class' => 'fa fa-chevron-up',
                'label' => 'Chevron Up'
            ),
            'fa fa-chevron-down' => array(
                'class' => 'fa fa-chevron-down',
                'label' => 'Chevron Down'
            ),
            'fa fa-retweet' => array(
                'class' => 'fa fa-retweet',
                'label' => 'Retweet'
            ),
            'fa fa-shopping-cart' => array(
                'class' => 'fa fa-shopping-cart',
                'label' => 'Shopping Cart'
            ),
            'fa fa-folder' => array(
                'class' => 'fa fa-folder',
                'label' => 'Folder'
            ),
            'fa fa-folder-open' => array(
                'class' => 'fa fa-folder-open',
                'label' => 'Folder Open'
            ),
            'fa fa-arrows-v' => array(
                'class' => 'fa fa-arrows-v',
                'label' => 'Arrows Vertical'
            ),
            'fa fa-arrows-h' => array(
                'class' => 'fa fa-arrows-h',
                'label' => 'Arrows Horizontal'
            ),
            'fa fa-bar-chart' => array(
                'class' => 'fa fa-bar-chart',
                'label' => 'Chart O'
            ),
            'fa fa-twitter-square' => array(
                'class' => 'fa fa-twitter-square',
                'label' => 'Twitter Square'
            ),
            'fa fa-facebook-square' => array(
                'class' => 'fa fa-facebook-square',
                'label' => 'Facebook Square'
            ),
            'fa fa-camera-retro' => array(
                'class' => 'fa fa-camera-retro',
                'label' => 'Camera Retro'
            ),
            'fa fa-key' => array(
                'class' => 'fa fa-key',
                'label' => 'Key'
            ),
            'fa fa-gears' => array(
                'class' => 'fa fa-gears',
                'label' => 'Gears Cogs'
            ),
            'fa fa-comments' => array(
                'class' => 'fa fa-comments',
                'label' => 'Comments'
            ),
            'fa fa-thumbs-o-up' => array(
                'class' => 'fa fa-thumbs-o-up',
                'label' => 'Thumbs O Up'
            ),
            'fa fa-thumbs-o-down' => array(
                'class' => 'fa fa-thumbs-o-down',
                'label' => 'Thumbs O Down'
            ),
            'fa fa-star-half' => array(
                'class' => 'fa fa-star-half',
                'label' => 'Star Half'
            ),
            'fa fa-heart-o' => array(
                'class' => 'fa fa-heart-o',
                'label' => 'Heart O'
            ),
            'fa fa-sign-out' => array(
                'class' => 'fa fa-sign-out',
                'label' => 'Sign Out'
            ),
            'fa fa-linkedin-square' => array(
                'class' => 'fa fa-linkedin-square',
                'label' => 'Linkedin Square'
            ),
            'fa fa-thumb-tack' => array(
                'class' => 'fa fa-thumb-tack',
                'label' => 'Thumb Tack'
            ),
            'fa fa-external-link' => array(
                'class' => 'fa fa-external-link',
                'label' => 'External Link'
            ),
            'fa fa-sign-in' => array(
                'class' => 'fa fa-sign-in',
                'label' => 'Sign In'
            ),
            'fa fa-trophy' => array(
                'class' => 'fa fa-trophy',
                'label' => 'Trophy'
            ),
            'fa fa-github-square' => array(
                'class' => 'fa fa-github-square',
                'label' => 'Github Square'
            ),
            'fa fa-upload' => array(
                'class' => 'fa fa-upload',
                'label' => 'Upload'
            ),
            'fa fa-lemon-o' => array(
                'class' => 'fa fa-lemon-o',
                'label' => 'Lemon O'
            ),
            'fa fa-phone' => array(
                'class' => 'fa fa-phone',
                'label' => 'Phone'
            ),
            'fa fa-square-o' => array(
                'class' => 'fa fa-square-o',
                'label' => 'Square O'
            ),
            'fa fa-bookmark-o' => array(
                'class' => 'fa fa-bookmark-o',
                'label' => 'Bookmark O'
            ),
            'fa fa-phone-square' => array(
                'class' => 'fa fa-phone-square',
                'label' => 'Phone Square'
            ),
            'fa fa-twitter' => array(
                'class' => 'fa fa-twitter',
                'label' => 'Twitter'
            ),
            'fa fa-facebook' => array(
                'class' => 'fa fa-facebook',
                'label' => 'Facebook'
            ),
            'fa fa-github' => array(
                'class' => 'fa fa-github',
                'label' => 'Github'
            ),
            'fa fa-unlock' => array(
                'class' => 'fa fa-unlock',
                'label' => 'Unlock'
            ),
            'fa fa-credit-card' => array(
                'class' => 'fa fa-credit-card',
                'label' => 'Credit Card'
            ),
            'fa fa-rss' => array(
                'class' => 'fa fa-rss',
                'label' => 'RSS'
            ),
            'fa fa-hdd-o' => array(
                'class' => 'fa fa-hdd-o',
                'label' => 'HDD O'
            ),
            'fa fa-bullhorn' => array(
                'class' => 'fa fa-bullhorn',
                'label' => 'Bullhorn'
            ),
            'fa fa-bell' => array(
                'class' => 'fa fa-bell',
                'label' => 'Bell'
            ),
            'fa fa-certificate' => array(
                'class' => 'fa fa-certificate',
                'label' => 'Certificate'
            ),
            'fa fa-hand-o-right' => array(
                'class' => 'fa fa-hand-o-right',
                'label' => 'Hand O Right'
            ),
            'fa fa-hand-o-left' => array(
                'class' => 'fa fa-hand-o-left',
                'label' => 'Hand O Left'
            ),
            'fa fa-hand-o-up' => array(
                'class' => 'fa fa-hand-o-up',
                'label' => 'Hand O Up'
            ),
            'fa fa-hand-o-down' => array(
                'class' => 'fa fa-hand-o-down',
                'label' => 'Hand O Down'
            ),
            'fa fa-arrow-circle-left' => array(
                'class' => 'fa fa-arrow-circle-left',
                'label' => 'Arrow Circle Left'
            ),
            'fa fa-arrow-circle-right' => array(
                'class' => 'fa fa-arrow-circle-right',
                'label' => 'Arrow Circle Right'
            ),
            'fa fa-arrow-circle-up' => array(
                'class' => 'fa fa-arrow-circle-up',
                'label' => 'Arrow Circle Up'
            ),
            'fa fa-arrow-circle-down' => array(
                'class' => 'fa fa-arrow-circle-down',
                'label' => 'Arrow Circle Down'
            ),
            'fa fa-globe' => array(
                'class' => 'fa fa-globe',
                'label' => 'Globe'
            ),
            'fa fa-wrench' => array(
                'class' => 'fa fa-wrench',
                'label' => 'Wrench'
            ),
            'fa fa-tasks' => array(
                'class' => 'fa fa-tasks',
                'label' => 'Tasks'
            ),
            'fa fa-filter' => array(
                'class' => 'fa fa-filter',
                'label' => 'Filter'
            ),
            'fa fa-briefcase' => array(
                'class' => 'fa fa-briefcase',
                'label' => 'Briefcase'
            ),
            'fa fa-arrows-alt' => array(
                'class' => 'fa fa-arrows-alt',
                'label' => 'Arrows Alt'
            ),
            'fa fa-users' => array(
                'class' => 'fa fa-users',
                'label' => 'Group, Users'
            ),
            'fa fa-link' => array(
                'class' => 'fa fa-link',
                'label' => 'Link, Chain'
            ),
            'fa fa-cloud' => array(
                'class' => 'fa fa-cloud',
                'label' => 'Cloud'
            ),
            'fa fa-flask' => array(
                'class' => 'fa fa-flask',
                'label' => 'Flask'
            ),
            'fa fa-cut' => array(
                'class' => 'fa fa-cut',
                'label' => 'Scissors, Cut'
            ),
            'fa fa-copy' => array(
                'class' => 'fa fa-copy',
                'label' => 'Files, Copy'
            ),
            'fa fa-paperclip' => array(
                'class' => 'fa fa-paperclip',
                'label' => 'Paperclip'
            ),
            'fa fa-save' => array(
                'class' => 'fa fa-save',
                'label' => 'Floppy O, Save'
            ),
            'fa fa-square' => array(
                'class' => 'fa fa-square',
                'label' => 'Square'
            ),
            'fa fa-navicon' => array(
                'class' => 'fa fa-navicon',
                'label' => 'Navicon, Reorder, Bars'
            ),
            'fa fa-list-ul' => array(
                'class' => 'fa fa-list-ul',
                'label' => 'List Ul'
            ),
            'fa fa-list-ol' => array(
                'class' => 'fa fa-list-ol',
                'label' => 'List Ol'
            ),
            'fa fa-strikethrough' => array(
                'class' => 'fa fa-strikethrough',
                'label' => 'Strikethrough'
            ),
            'fa fa-underline' => array(
                'class' => 'fa fa-underline',
                'label' => 'Underline'
            ),
            'fa fa-table' => array(
                'class' => 'fa fa-table',
                'label' => 'Table'
            ),
            'fa fa-magic' => array(
                'class' => 'fa fa-magic',
                'label' => 'Magic'
            ),
            'fa fa-truck' => array(
                'class' => 'fa fa-truck',
                'label' => 'Truck'
            ),
            'fa fa-pinterest' => array(
                'class' => 'fa fa-pinterest',
                'label' => 'Pinterest'
            ),
            'fa fa-pinterest-square' => array(
                'class' => 'fa fa-pinterest-square',
                'label' => 'Pinterest Square'
            ),
            'fa fa-google-plus-square' => array(
                'class' => 'fa fa-google-plus-square',
                'label' => 'Google Plus Square'
            ),
            'fa fa-google-plus' => array(
                'class' => 'fa fa-google-plus',
                'label' => 'Google Plus'
            ),
            'fa fa-money' => array(
                'class' => 'fa fa-money',
                'label' => 'Money'
            ),
            'fa fa-caret-down' => array(
                'class' => 'fa fa-caret-down',
                'label' => 'Caret Down'
            ),
            'fa fa-caret-up' => array(
                'class' => 'fa fa-caret-up',
                'label' => 'Caret Up'
            ),
            'fa fa-caret-left' => array(
                'class' => 'fa fa-caret-left',
                'label' => 'Caret Left'
            ),
            'fa fa-caret-right' => array(
                'class' => 'fa fa-caret-right',
                'label' => 'Caret Right'
            ),
            'fa fa-columns' => array(
                'class' => 'fa fa-columns',
                'label' => 'Columns'
            ),
            'fa fa-sort' => array(
                'class' => 'fa fa-sort',
                'label' => 'Sort Unsorted'
            ),
            'fa fa-sort-down' => array(
                'class' => 'fa fa-sort-down',
                'label' => 'Sort Down, Sort Desc'
            ),
            'fa fa-sort-up' => array(
                'class' => 'fa fa-sort-up',
                'label' => 'Sort Up, Sort Asc'
            ),
            'fa fa-envelope' => array(
                'class' => 'fa fa-envelope',
                'label' => 'Envelope'
            ),
            'fa fa-linkedin' => array(
                'class' => 'fa fa-linkedin',
                'label' => 'Linkedin'
            ),
            'fa fa-undo' => array(
                'class' => 'fa fa-undo',
                'label' => 'Undo, Rotate Left'
            ),
            'fa fa-legal' => array(
                'class' => 'fa fa-legal',
                'label' => 'Legal Gavel'
            ),
            'fa fa-dashboard' => array(
                'class' => 'fa fa-dashboard',
                'label' => 'Dashboard, Tachometer'
            ),
            'fa fa-comment-o' => array(
                'class' => 'fa fa-comment-o',
                'label' => 'Comment O'
            ),
            'fa fa-comments-o' => array(
                'class' => 'fa fa-comments-o',
                'label' => 'Comments O'
            ),
            'fa fa-flash' => array(
                'class' => 'fa fa-flash',
                'label' => 'Flash, Bolt'
            ),
            'fa fa-sitemap' => array(
                'class' => 'fa fa-sitemap',
                'label' => 'Sitemap'
            ),
            'fa fa-umbrella' => array(
                'class' => 'fa fa-umbrella',
                'label' => 'Umbrella'
            ),
            'fa fa-paste' => array(
                'class' => 'fa fa-paste',
                'label' => 'Paste, Clipboard'
            ),
            'fa fa-lightbulb-o' => array(
                'class' => 'fa fa-lightbulb-o',
                'label' => 'Lightbulb O'
            ),
            'fa fa-exchange' => array(
                'class' => 'fa fa-exchange',
                'label' => 'Exchange'
            ),
            'fa fa-cloud-download' => array(
                'class' => 'fa fa-cloud-download',
                'label' => 'Cloud Download'
            ),
            'fa fa-cloud-upload' => array(
                'class' => 'fa fa-cloud-upload',
                'label' => 'Cloud Upload'
            ),
            'fa fa-user-md' => array(
                'class' => 'fa fa-user-md',
                'label' => 'User Md'
            ),
            'fa fa-stethoscope' => array(
                'class' => 'fa fa-stethoscope',
                'label' => 'Stethoscope'
            ),
            'fa fa-suitcase' => array(
                'class' => 'fa fa-suitcase',
                'label' => 'Suitcase'
            ),
            'fa fa-bell-o' => array(
                'class' => 'fa fa-bell-o',
                'label' => 'Bell O'
            ),
            'fa fa-coffee' => array(
                'class' => 'fa fa-coffee',
                'label' => 'Coffee'
            ),
            'fa fa-cutlery' => array(
                'class' => 'fa fa-cutlery',
                'label' => 'Cutlery'
            ),
            'fa fa-file-text-o' => array(
                'class' => 'fa fa-file-text-o',
                'label' => 'File Text O'
            ),
            'fa fa-building-o' => array(
                'class' => 'fa fa-building-o',
                'label' => 'Building O'
            ),
            'fa fa-hospital-o' => array(
                'class' => 'fa fa-hospital-o',
                'label' => 'Hospital O'
            ),
            'fa fa-ambulance' => array(
                'class' => 'fa fa-ambulance',
                'label' => 'Ambulance'
            ),
            'fa fa-medkit' => array(
                'class' => 'fa fa-medkit',
                'label' => 'Medkit'
            ),
            'fa fa-fighter-jet' => array(
                'class' => 'fa fa-fighter-jet',
                'label' => 'Fighter Jet'
            ),
            'fa fa-beer' => array(
                'class' => 'fa fa-beer',
                'label' => 'Beer'
            ),
            'fa fa-h-square' => array(
                'class' => 'fa fa-h-square',
                'label' => 'H Square'
            ),
            'fa fa-plus-square' => array(
                'class' => 'fa fa-plus-square',
                'label' => 'Plus Square'
            ),
            'fa fa-angle-double-left' => array(
                'class' => 'fa fa-angle-double-left',
                'label' => 'Angle Double Left'
            ),
            'fa fa-angle-double-right' => array(
                'class' => 'fa fa-angle-double-right',
                'label' => 'Angle Double Right'
            ),
            'fa fa-angle-double-up' => array(
                'class' => 'fa fa-angle-double-up',
                'label' => 'Angle Double Up'
            ),
            'fa fa-angle-double-down' => array(
                'class' => 'fa fa-angle-double-down',
                'label' => 'Angle Double Down'
            ),
            'fa fa-angle-left' => array(
                'class' => 'fa fa-angle-left',
                'label' => 'Angle Left'
            ),
            'fa fa-angle-right' => array(
                'class' => 'fa fa-angle-right',
                'label' => 'Angle Right'
            ),
            'fa fa-angle-up' => array(
                'class' => 'fa fa-angle-up',
                'label' => 'Angle Up'
            ),
            'fa fa-angle-down' => array(
                'class' => 'fa fa-angle-down',
                'label' => 'Angle Down'
            ),
            'fa fa-desktop' => array(
                'class' => 'fa fa-desktop',
                'label' => 'Desktop'
            ),
            'fa fa-laptop' => array(
                'class' => 'fa fa-laptop',
                'label' => 'Laptop'
            ),
            'fa fa-tablet' => array(
                'class' => 'fa fa-tablet',
                'label' => 'Tablet'
            ),
            'fa fa-mobile' => array(
                'class' => 'fa fa-mobile',
                'label' => 'Mobile Phone'
            ),
            'fa fa-circle-o' => array(
                'class' => 'fa fa-circle-o',
                'label' => 'Circle O'
            ),
            'fa fa-quote-left' => array(
                'class' => 'fa fa-quote-left',
                'label' => 'Quote Left'
            ),
            'fa fa-quote-right' => array(
                'class' => 'fa fa-quote-right',
                'label' => 'Quote Right'
            ),
            'fa fa-spinner' => array(
                'class' => 'fa fa-spinner',
                'label' => 'Spinner'
            ),
            'fa fa-circle' => array(
                'class' => 'fa fa-circle',
                'label' => 'Circle'
            ),
            'fa fa-reply' => array(
                'class' => 'fa fa-reply',
                'label' => 'Mail Reply'
            ),
            'fa fa-github-alt' => array(
                'class' => 'fa fa-github-alt',
                'label' => 'Github Alt'
            ),
            'fa fa-folder-o' => array(
                'class' => 'fa fa-folder-o',
                'label' => 'Folder O'
            ),
            'fa fa-folder-open-o' => array(
                'class' => 'fa fa-folder-open-o',
                'label' => 'Folder Open O'
            ),
            'fa fa-smile-o' => array(
                'class' => 'fa fa-smile-o',
                'label' => 'Smile O'
            ),
            'fa fa-frown-o' => array(
                'class' => 'fa fa-frown-o',
                'label' => 'Frown O'
            ),
            'fa fa-meh-o' => array(
                'class' => 'fa fa-meh-o',
                'label' => 'Meh O'
            ),
            'fa fa-gamepad' => array(
                'class' => 'fa fa-gamepad',
                'label' => 'Gamepad'
            ),
            'fa fa-keyboard-o' => array(
                'class' => 'fa fa-keyboard-o',
                'label' => 'Keyboard O'
            ),
            'fa fa-flag-o' => array(
                'class' => 'fa fa-flag-o',
                'label' => 'Flag O'
            ),
            'fa fa-flag-checkered' => array(
                'class' => 'fa fa-flag-checkered',
                'label' => 'Flag Checkered'
            ),
            'fa fa-terminal' => array(
                'class' => 'fa fa-terminal',
                'label' => 'Terminal'
            ),
            'fa fa-code' => array(
                'class' => 'fa fa-code',
                'label' => 'Code'
            ),
            'fa fa-reply-all' => array(
                'class' => 'fa fa-reply-all',
                'label' => 'Mail Reply All'
            ),
            'fa fa-star-half-full' => array(
                'class' => 'fa fa-star-half-full',
                'label' => 'Star Half O, Star Half Empty, Star Half Full'
            ),
            'fa fa-location-arrow' => array(
                'class' => 'fa fa-location-arrow',
                'label' => 'Location Arrow'
            ),
            'fa fa-crop' => array(
                'class' => 'fa fa-crop',
                'label' => 'Crop'
            ),
            'fa fa-code-fork' => array(
                'class' => 'fa fa-code-fork',
                'label' => 'Code Fork'
            ),
            'fa fa-unlink' => array(
                'class' => 'fa fa-unlink',
                'label' => 'Unlink, Chain Broken'
            ),
            'fa fa-question' => array(
                'class' => 'fa fa-question',
                'label' => 'Question'
            ),
            'fa fa-info' => array(
                'class' => 'fa fa-info',
                'label' => 'Info'
            ),
            'fa fa-exclamation' => array(
                'class' => 'fa fa-exclamation',
                'label' => 'Exclamation'
            ),
            'fa fa-superscript' => array(
                'class' => 'fa fa-superscript',
                'label' => 'Superscript'
            ),
            'fa fa-subscript' => array(
                'class' => 'fa fa-subscript',
                'label' => 'Subscript'
            ),
            'fa fa-eraser' => array(
                'class' => 'fa fa-eraser',
                'label' => 'Eraser'
            ),
            'fa fa-puzzle-piece' => array(
                'class' => 'fa fa-puzzle-piece',
                'label' => 'Puzzle Piece'
            ),
            'fa fa-microphone' => array(
                'class' => 'fa fa-microphone',
                'label' => 'Microphone'
            ),
            'fa fa-microphone-slash' => array(
                'class' => 'fa fa-microphone-slash',
                'label' => 'Microphone Slash'
            ),
            'fa fa-shield' => array(
                'class' => 'fa fa-shield',
                'label' => 'Shield'
            ),
            'fa fa-calendar-o' => array(
                'class' => 'fa fa-calendar-o',
                'label' => 'Calendar O'
            ),
            'fa fa-fire-extinguisher' => array(
                'class' => 'fa fa-fire-extinguisher',
                'label' => 'Fire Extinguisher'
            ),
            'fa fa-rocket' => array(
                'class' => 'fa fa-rocket',
                'label' => 'Rocket'
            ),
            'fa fa-maxcdn' => array(
                'class' => 'fa fa-maxcdn',
                'label' => 'MaxCDN'
            ),
            'fa fa-chevron-circle-left' => array(
                'class' => 'fa fa-chevron-circle-left',
                'label' => 'Chevron Circle Left'
            ),
            'fa fa-chevron-circle-right' => array(
                'class' => 'fa fa-chevron-circle-right',
                'label' => 'Chevron Circle Right'
            ),
            'fa fa-chevron-circle-up' => array(
                'class' => 'fa fa-chevron-circle-up',
                'label' => 'Chevron Circle Up'
            ),
            'fa fa-chevron-circle-down' => array(
                'class' => 'fa fa-chevron-circle-down',
                'label' => 'Chevron Circle Down'
            ),
            'fa fa-html5' => array(
                'class' => 'fa fa-html5',
                'label' => 'HTML5'
            ),
            'fa fa-css3' => array(
                'class' => 'fa fa-css3',
                'label' => 'CSS3'
            ),
            'fa fa-anchor' => array(
                'class' => 'fa fa-anchor',
                'label' => 'Anchor'
            ),
            'fa fa-unlock-alt' => array(
                'class' => 'fa fa-unlock-alt',
                'label' => 'Unlock Alt'
            ),
            'fa fa-bullseye' => array(
                'class' => 'fa fa-bullseye',
                'label' => 'Bullseye'
            ),
            'fa fa-ellipsis-h' => array(
                'class' => 'fa fa-ellipsis-h',
                'label' => 'Ellipsis Horizontal'
            ),
            'fa fa-ellipsis-v' => array(
                'class' => 'fa fa-ellipsis-v',
                'label' => 'Ellipsis Vertical'
            ),
            'fa fa-rss-square' => array(
                'class' => 'fa fa-rss-square',
                'label' => 'RSS Square'
            ),
            'fa fa-play-circle' => array(
                'class' => 'fa fa-play-circle',
                'label' => 'Play Circle'
            ),
            'fa fa-ticket' => array(
                'class' => 'fa fa-ticket',
                'label' => 'Ticket'
            ),
            'fa fa-minus-square' => array(
                'class' => 'fa fa-minus-square',
                'label' => 'Minus Square'
            ),
            'fa fa-minus-square-o' => array(
                'class' => 'fa fa-minus-square-o',
                'label' => 'Minus Square O'
            ),
            'fa fa-level-up' => array(
                'class' => 'fa fa-level-up',
                'label' => 'Level Up'
            ),
            'fa fa-level-down' => array(
                'class' => 'fa fa-level-down',
                'label' => 'Level Down'
            ),
            'fa fa-check-square' => array(
                'class' => 'fa fa-check-square',
                'label' => 'Check Square'
            ),
            'fa fa-pencil-square' => array(
                'class' => 'fa fa-pencil-square',
                'label' => 'Pencil Square'
            ),
            'fa fa-external-link-square' => array(
                'class' => 'fa fa-external-link-square',
                'label' => 'External Link Square'
            ),
            'fa fa-share-square' => array(
                'class' => 'fa fa-share-square',
                'label' => 'Share Square'
            ),
            'fa fa-compass' => array(
                'class' => 'fa fa-compass',
                'label' => 'Compass'
            ),
            'fa fa-toggle-down' => array(
                'class' => 'fa fa-toggle-down',
                'label' => 'Toggle Down, Caret Square O Down'
            ),
            'fa fa-toggle-up' => array(
                'class' => 'fa fa-toggle-up',
                'label' => 'Toggle Up, Caret Square O Up'
            ),
            'fa fa-toggle-right' => array(
                'class' => 'fa fa-toggle-right',
                'label' => 'Toggle Right, Caret Square O Right'
            ),
            'fa fa-euro' => array(
                'class' => 'fa fa-euro',
                'label' => 'Euro, Eur'
            ),
            'fa fa-gbp' => array(
                'class' => 'fa fa-gbp',
                'label' => 'GBP'
            ),
            'fa fa-usd' => array(
                'class' => 'fa fa-usd',
                'label' => 'USD, Dollar'
            ),
            'fa fa-rupee' => array(
                'class' => 'fa fa-rupee',
                'label' => 'Rupee, INR'
            ),
            'fa fa-yen' => array(
                'class' => 'fa fa-yen',
                'label' => 'CNY, RMB, Yen, JPY'
            ),
            'fa fa-ruble' => array(
                'class' => 'fa fa-ruble',
                'label' => 'Ruble, Rouble, Rub'
            ),
            'fa fa-won' => array(
                'class' => 'fa fa-won',
                'label' => 'Won, Krw'
            ),
            'fa fa-bitcoin' => array(
                'class' => 'fa fa-bitcoin',
                'label' => 'Bitcoin, BTC'
            ),
            'fa fa-file' => array(
                'class' => 'fa fa-file',
                'label' => 'File'
            ),
            'fa fa-file-text' => array(
                'class' => 'fa fa-file-text',
                'label' => 'File Text'
            ),
            'fa fa-sort-alpha-asc' => array(
                'class' => 'fa fa-sort-alpha-asc',
                'label' => 'Sort Alpha ASC'
            ),
            'fa fa-sort-alpha-desc' => array(
                'class' => 'fa fa-sort-alpha-desc',
                'label' => 'Sort Alpha DESC'
            ),
            'fa fa-sort-amount-asc' => array(
                'class' => 'fa fa-sort-amount-asc',
                'label' => 'Sort Amount ASC'
            ),
            'fa fa-sort-amount-desc' => array(
                'class' => 'fa fa-sort-amount-desc',
                'label' => 'Sort Amount Desc'
            ),
            'fa fa-sort-numeric-asc' => array(
                'class' => 'fa fa-sort-numeric-asc',
                'label' => 'Sort Numeric ASC'
            ),
            'fa fa-sort-numeric-desc' => array(
                'class' => 'fa fa-sort-numeric-desc',
                'label' => 'Sort Numeric DESC'
            ),
            'fa fa-thumbs-up' => array(
                'class' => 'fa fa-thumbs-up',
                'label' => 'Thumbs Up'
            ),
            'fa fa-thumbs-down' => array(
                'class' => 'fa fa-thumbs-down',
                'label' => 'Thumbs Down'
            ),
            'fa fa-youtube-square' => array(
                'class' => 'fa fa-youtube-square',
                'label' => 'Youtube Square'
            ),
            'fa fa-youtube' => array(
                'class' => 'fa fa-youtube',
                'label' => 'Youtube'
            ),
            'fa fa-xing' => array(
                'class' => 'fa fa-xing',
                'label' => 'Xing'
            ),
            'fa fa-xing-square' => array(
                'class' => 'fa fa-xing-square',
                'label' => 'Xing Square'
            ),
            'fa fa-youtube-play' => array(
                'class' => 'fa fa-youtube-play',
                'label' => 'Youtube Play'
            ),
            'fa fa-dropbox' => array(
                'class' => 'fa fa-dropbox',
                'label' => 'Dropbox'
            ),
            'fa fa-stack-overflow' => array(
                'class' => 'fa fa-stack-overflow',
                'label' => 'Stack Overflow'
            ),
            'fa fa-instagram' => array(
                'class' => 'fa fa-instagram',
                'label' => 'Instagram'
            ),
            'fa fa-flickr' => array(
                'class' => 'fa fa-flickr',
                'label' => 'Flickr'
            ),
            'fa fa-adn' => array(
                'class' => 'fa fa-adn',
                'label' => 'ADN'
            ),
            'fa fa-bitbucket' => array(
                'class' => 'fa fa-bitbucket',
                'label' => 'Bitbucket'
            ),
            'fa fa-bitbucket-square' => array(
                'class' => 'fa fa-bitbucket-square',
                'label' => 'Bitbucket Square'
            ),
            'fa fa-tumblr' => array(
                'class' => 'fa fa-tumblr',
                'label' => 'Tumblr'
            ),
            'fa fa-tumblr-square' => array(
                'class' => 'fa fa-tumblr-square',
                'label' => 'Tumblr Square'
            ),
            'fa fa-long-arrow-down' => array(
                'class' => 'fa fa-long-arrow-down',
                'label' => 'Long Arrow Down'
            ),
            'fa fa-long-arrow-up' => array(
                'class' => 'fa fa-long-arrow-up',
                'label' => 'Long Arrow Up'
            ),
            'fa fa-long-arrow-left' => array(
                'class' => 'fa fa-long-arrow-left',
                'label' => 'Long Arrow Left'
            ),
            'fa fa-long-arrow-right' => array(
                'class' => 'fa fa-long-arrow-right',
                'label' => 'Long Arrow Right'
            ),
            'fa fa-apple' => array(
                'class' => 'fa fa-apple',
                'label' => 'Apple'
            ),
            'fa fa-windows' => array(
                'class' => 'fa fa-windows',
                'label' => 'Windows'
            ),
            'fa fa-android' => array(
                'class' => 'fa fa-android',
                'label' => 'Android'
            ),
            'fa fa-linux' => array(
                'class' => 'fa fa-linux',
                'label' => 'Linux'
            ),
            'fa fa-dribbble' => array(
                'class' => 'fa fa-dribbble',
                'label' => 'Dribbble'
            ),
            'fa fa-skype' => array(
                'class' => 'fa fa-skype',
                'label' => 'Skype'
            ),
            'fa fa-foursquare' => array(
                'class' => 'fa fa-foursquare',
                'label' => 'Foursquare'
            ),
            'fa fa-trello' => array(
                'class' => 'fa fa-trello',
                'label' => 'Trello'
            ),
            'fa fa-female' => array(
                'class' => 'fa fa-female',
                'label' => 'Female'
            ),
            'fa fa-male' => array(
                'class' => 'fa fa-male',
                'label' => 'Male'
            ),
            'fa fa-gittip' => array(
                'class' => 'fa fa-gittip',
                'label' => 'Gittip, Gratipay'
            ),
            'fa fa-sun-o' => array(
                'class' => 'fa fa-sun-o',
                'label' => 'Sun O'
            ),
            'fa fa-moon-o' => array(
                'class' => 'fa fa-moon-o',
                'label' => 'Moon O'
            ),
            'fa fa-archive' => array(
                'class' => 'fa fa-archive',
                'label' => 'Archive'
            ),
            'fa fa-bug' => array(
                'class' => 'fa fa-bug',
                'label' => 'Bug'
            ),
            'fa fa-vk' => array(
                'class' => 'fa fa-vk',
                'label' => 'VK'
            ),
            'fa fa-weibo' => array(
                'class' => 'fa fa-weibo',
                'label' => 'Weibo'
            ),
            'fa fa-renren' => array(
                'class' => 'fa fa-renren',
                'label' => 'Renren'
            ),
            'fa fa-pagelines' => array(
                'class' => 'fa fa-pagelines',
                'label' => 'Pagelines'
            ),
            'fa fa-stack-exchange' => array(
                'class' => 'fa fa-stack-exchange',
                'label' => 'Stack Exchange'
            ),
            'fa fa-arrow-circle-o-right' => array(
                'class' => 'fa fa-arrow-circle-o-right',
                'label' => 'Arrow Circle O Right'
            ),
            'fa fa-arrow-circle-o-left' => array(
                'class' => 'fa fa-arrow-circle-o-left',
                'label' => 'Arrow Circle O Left'
            ),
            'fa fa-toggle-left' => array(
                'class' => 'fa fa-toggle-left',
                'label' => 'Toggle Left, Caret Square O Left'
            ),
            'fa fa-dot-circle-o' => array(
                'class' => 'fa fa-dot-circle-o',
                'label' => 'Dot Circle O'
            ),
            'fa fa-wheelchair' => array(
                'class' => 'fa fa-wheelchair',
                'label' => 'Wheelchair'
            ),
            'fa fa-vimeo-square' => array(
                'class' => 'fa fa-vimeo-square',
                'label' => 'Vimeo Square'
            ),
            'fa fa-try' => array(
                'class' => 'fa fa-try',
                'label' => 'Turkish Lira, TRY'
            ),
            'fa fa-plus-square-o' => array(
                'class' => 'fa fa-plus-square-o',
                'label' => 'Plus Square O'
            ),
            'fa fa-space-shuttle' => array(
                'class' => 'fa fa-space-shuttle',
                'label' => 'Space Shuttle'
            ),
            'fa fa-slack' => array(
                'class' => 'fa fa-slack',
                'label' => 'Slack'
            ),
            'fa fa-envelope-square' => array(
                'class' => 'fa fa-envelope-square',
                'label' => 'Envelope Square'
            ),
            'fa fa-wordpress' => array(
                'class' => 'fa fa-wordpress',
                'label' => 'Wordpress'
            ),
            'fa fa-openid' => array(
                'class' => 'fa fa-openid',
                'label' => 'Openid'
            ),
            'fa fa-bank' => array(
                'class' => 'fa fa-bank',
                'label' => 'Institution, Bank, Univerity'
            ),
            'fa fa-graduation-cap' => array(
                'class' => 'fa fa-graduation-cap',
                'label' => 'Mortar Board, Graduation Cap'
            ),
            'fa fa-yahoo' => array(
                'class' => 'fa fa-yahoo',
                'label' => 'Yahoo'
            ),
            'fa fa-google' => array(
                'class' => 'fa fa-google',
                'label' => 'Google'
            ),
            'fa fa-reddit' => array(
                'class' => 'fa fa-reddit',
                'label' => 'Reddit'
            ),
            'fa fa-reddit-square' => array(
                'class' => 'fa fa-reddit-square',
                'label' => 'Reddit Square'
            ),
            'fa fa-stumbleupon-circle' => array(
                'class' => 'fa fa-stumbleupon-circle',
                'label' => 'Stumbleupon Circle'
            ),
            'fa fa-stumbleupon' => array(
                'class' => 'fa fa-stumbleupon',
                'label' => 'Stumbleupon'
            ),
            'fa fa-delicious' => array(
                'class' => 'fa fa-delicious',
                'label' => 'Delicious'
            ),
            'fa fa-digg' => array(
                'class' => 'fa fa-digg',
                'label' => 'Digg'
            ),
            'fa fa-pied-piper' => array(
                'class' => 'fa fa-pied-piper',
                'label' => 'Pied Piper'
            ),
            'fa fa-pied-piper-alt' => array(
                'class' => 'fa fa-pied-piper-alt',
                'label' => 'Pied Piper Alt'
            ),
            'fa fa-drupal' => array(
                'class' => 'fa fa-drupal',
                'label' => 'Drupal'
            ),
            'fa fa-joomla' => array(
                'class' => 'fa fa-joomla',
                'label' => 'Joomla'
            ),
            'fa fa-language' => array(
                'class' => 'fa fa-language',
                'label' => 'Language'
            ),
            'fa fa-fax' => array(
                'class' => 'fa fa-fax',
                'label' => 'Fax'
            ),
            'fa fa-building' => array(
                'class' => 'fa fa-building',
                'label' => 'Building'
            ),
            'fa fa-child' => array(
                'class' => 'fa fa-child',
                'label' => 'Child'
            ),
            'fa fa-paw' => array(
                'class' => 'fa fa-paw',
                'label' => 'Paw'
            ),
            'fa fa-spoon' => array(
                'class' => 'fa fa-spoon',
                'label' => 'Spoon'
            ),
            'fa fa-cube' => array(
                'class' => 'fa fa-cube',
                'label' => 'Cube'
            ),
            'fa fa-cubes' => array(
                'class' => 'fa fa-cubes',
                'label' => 'Cubes'
            ),
            'fa fa-behance' => array(
                'class' => 'fa fa-behance',
                'label' => 'Behance'
            ),
            'fa fa-behance-square' => array(
                'class' => 'fa fa-behance-square',
                'label' => 'Behance Square'
            ),
            'fa fa-steam' => array(
                'class' => 'fa fa-steam',
                'label' => 'Steam'
            ),
            'fa fa-steam-square' => array(
                'class' => 'fa fa-steam-square',
                'label' => 'Steam Square'
            ),
            'fa fa-recycle' => array(
                'class' => 'fa fa-recycle',
                'label' => 'Recycle'
            ),
            'fa fa-car' => array(
                'class' => 'fa fa-car',
                'label' => 'Car, Automobile'
            ),
            'fa fa-taxi' => array(
                'class' => 'fa fa-taxi',
                'label' => 'Taxi, Cab'
            ),
            'fa fa-tree' => array(
                'class' => 'fa fa-tree',
                'label' => 'Tree'
            ),
            'fa fa-spotify' => array(
                'class' => 'fa fa-spotify',
                'label' => 'Spotify'
            ),
            'fa fa-deviantart' => array(
                'class' => 'fa fa-deviantart',
                'label' => 'Deviantart'
            ),
            'fa fa-soundcloud' => array(
                'class' => 'fa fa-soundcloud',
                'label' => 'Soundcloud'
            ),
            'fa fa-database' => array(
                'class' => 'fa fa-database',
                'label' => 'Database'
            ),
            'fa fa-file-pdf-o' => array(
                'class' => 'fa fa-file-pdf-o',
                'label' => 'File PDF O'
            ),
            'fa fa-file-word-o' => array(
                'class' => 'fa fa-file-word-o',
                'label' => 'File Word O'
            ),
            'fa fa-file-excel-o' => array(
                'class' => 'fa fa-file-excel-o',
                'label' => 'Fiel Excel O'
            ),
            'fa fa-file-powerpoint-o' => array(
                'class' => 'fa fa-file-powerpoint-o',
                'label' => 'File Powerpoint O'
            ),
            'fa fa-file-image-o' => array(
                'class' => 'fa fa-file-image-o',
                'label' => 'Photo O, Picture O, Image O'
            ),
            'fa fa-file-zip-o' => array(
                'class' => 'fa fa-file-zip-o',
                'label' => 'Archive O, Zip O'
            ),
            'fa fa-file-audio-o' => array(
                'class' => 'fa fa-file-audio-o',
                'label' => 'File Audio O, File Sound O'
            ),
            'fa fa-file-movie-o' => array(
                'class' => 'fa fa-file-movie-o',
                'label' => 'File Movie O, File Video O'
            ),
            'fa fa-file-code-o' => array(
                'class' => 'fa fa-file-code-o',
                'label' => 'File Code O'
            ),
            'fa fa-vine' => array(
                'class' => 'fa fa-vine',
                'label' => 'Vine'
            ),
            'fa fa-codepen' => array(
                'class' => 'fa fa-codepen',
                'label' => 'Codepen'
            ),
            'fa fa-jsfiddle' => array(
                'class' => 'fa fa-jsfiddle',
                'label' => 'JSFiddle'
            ),
            'fa fa-support' => array(
                'class' => 'fa fa-support',
                'label' => 'Life Bouy, Life Buoy, Life Saver, Support, Life Ring'
            ),
            'fa fa-circle-o-notch' => array(
                'class' => 'fa fa-circle-o-notch',
                'label' => 'Circle O Notch'
            ),
            'fa fa-rebel' => array(
                'class' => 'fa fa-rebel',
                'label' => 'RA, Rebel'
            ),
            'fa fa-empire' => array(
                'class' => 'fa fa-empire',
                'label' => 'GE, Empire'
            ),
            'fa fa-git-square' => array(
                'class' => 'fa fa-git-square',
                'label' => 'Git Square'
            ),
            'fa fa-git' => array(
                'class' => 'fa fa-git',
                'label' => 'Git'
            ),
            'fa fa-hacker-news' => array(
                'class' => 'fa fa-hacker-news',
                'label' => 'Hacker News'
            ),
            'fa fa-tencent-weibo' => array(
                'class' => 'fa fa-tencent-weibo',
                'label' => 'Tencent Weibo'
            ),
            'fa fa-qq' => array(
                'class' => 'fa fa-qq',
                'label' => 'QQ'
            ),
            'fa fa-wechat' => array(
                'class' => 'fa fa-wechat',
                'label' => 'Wechat, Weixin'
            ),
            'fa fa-send' => array(
                'class' => 'fa fa-send',
                'label' => 'Send, Paper Plane'
            ),
            'fa fa-send-o' => array(
                'class' => 'fa fa-send-o',
                'label' => 'Send O, Paper Plane O'
            ),
            'fa fa-history' => array(
                'class' => 'fa fa-history',
                'label' => 'History'
            ),
            'fa fa-genderless' => array(
                'class' => 'fa fa-genderless',
                'label' => 'Genderless, Circle Thin'
            ),
            'fa fa-header' => array(
                'class' => 'fa fa-header',
                'label' => 'Header'
            ),
            'fa fa-paragraph' => array(
                'class' => 'fa fa-paragraph',
                'label' => 'Paragraph'
            ),
            'fa fa-sliders' => array(
                'class' => 'fa fa-sliders',
                'label' => 'Sliders'
            ),
            'fa fa-share-alt' => array(
                'class' => 'fa fa-share-alt',
                'label' => 'Share Alt'
            ),
            'fa fa-share-alt-square' => array(
                'class' => 'fa fa-share-alt-square',
                'label' => 'Share Alt Square'
            ),
            'fa fa-bomb' => array(
                'class' => 'fa fa-bomb',
                'label' => 'Bomb'
            ),
            'fa fa-futbol-o' => array(
                'class' => 'fa fa-futbol-o',
                'label' => 'Soccer Ball O, Football O'
            ),
            'fa fa-tty' => array(
                'class' => 'fa fa-tty',
                'label' => 'TTY'
            ),
            'fa fa-binoculars' => array(
                'class' => 'fa fa-binoculars',
                'label' => 'Binoculars'
            ),
            'fa fa-plug' => array(
                'class' => 'fa fa-plug',
                'label' => 'Plug'
            ),
            'fa fa-slideshare' => array(
                'class' => 'fa fa-slideshare',
                'label' => 'Slideshare'
            ),
            'fa fa-twitch' => array(
                'class' => 'fa fa-twitch',
                'label' => 'Twitch'
            ),
            'fa fa-yelp' => array(
                'class' => 'fa fa-yelp',
                'label' => 'Yelp'
            ),
            'fa fa-newspaper-o' => array(
                'class' => 'fa fa-newspaper-o',
                'label' => 'Newspaper O'
            ),
            'fa fa-wifi' => array(
                'class' => 'fa fa-wifi',
                'label' => 'WiFi'
            ),
            'fa fa-calculator' => array(
                'class' => 'fa fa-calculator',
                'label' => 'Calculator'
            ),
            'fa fa-paypal' => array(
                'class' => 'fa fa-paypal',
                'label' => 'PayPal'
            ),
            'fa fa-google-wallet' => array(
                'class' => 'fa fa-google-wallet',
                'label' => 'Google Wallet'
            ),
            'fa fa-cc-visa' => array(
                'class' => 'fa fa-cc-visa',
                'label' => 'CC Visa'
            ),
            'fa fa-cc-mastercard' => array(
                'class' => 'fa fa-cc-mastercard',
                'label' => 'CC MasterCard'
            ),
            'fa fa-cc-discover' => array(
                'class' => 'fa fa-cc-discover',
                'label' => 'CC Discover'
            ),
            'fa fa-cc-amex' => array(
                'class' => 'fa fa-cc-amex',
                'label' => 'CC Amex'
            ),
            'fa fa-cc-paypal' => array(
                'class' => 'fa fa-cc-paypal',
                'label' => 'CC PayPal'
            ),
            'fa fa-cc-stripe' => array(
                'class' => 'fa fa-cc-stripe',
                'label' => 'CC Stripe'
            ),
            'fa fa-bell-slash' => array(
                'class' => 'fa fa-bell-slash',
                'label' => 'Bell Slash'
            ),
            'fa fa-bell-slash-o' => array(
                'class' => 'fa fa-bell-slash-o',
                'label' => 'Bell Slash O'
            ),
            'fa fa-trash' => array(
                'class' => 'fa fa-trash',
                'label' => 'Trash'
            ),
            'fa fa-copyright' => array(
                'class' => 'fa fa-copyright',
                'label' => 'Copyright'
            ),
            'fa fa-at' => array(
                'class' => 'fa fa-at',
                'label' => 'At'
            ),
            'fa fa-eyedropper' => array(
                'class' => 'fa fa-eyedropper',
                'label' => 'Eyedropper'
            ),
            'fa fa-paint-brush' => array(
                'class' => 'fa fa-paint-brush',
                'label' => 'Paint Brush'
            ),
            'fa fa-birthday-cake' => array(
                'class' => 'fa fa-birthday-cake',
                'label' => 'Birthday Cake'
            ),
            'fa fa-area-chart' => array(
                'class' => 'fa fa-area-chart',
                'label' => 'Area Chart'
            ),
            'fa fa-pie-chart' => array(
                'class' => 'fa fa-pie-chart',
                'label' => 'Pie Chart'
            ),
            'fa fa-line-chart' => array(
                'class' => 'fa fa-line-chart',
                'label' => 'Line Chart'
            ),
            'fa fa-lastfm' => array(
                'class' => 'fa fa-lastfm',
                'label' => 'LastFM'
            ),
            'fa fa-lastfm-square' => array(
                'class' => 'fa fa-lastfm-square',
                'label' => 'LastFM Square'
            ),
            'fa fa-toggle-off' => array(
                'class' => 'fa fa-toggle-off',
                'label' => 'Toggle Off'
            ),
            'fa fa-toggle-on' => array(
                'class' => 'fa fa-toggle-on',
                'label' => 'Toggle On'
            ),
            'fa fa-bicycle' => array(
                'class' => 'fa fa-bicycle',
                'label' => 'Bicycle'
            ),
            'fa fa-bus' => array(
                'class' => 'fa fa-bus',
                'label' => 'Bus'
            ),
            'fa fa-ioxhost' => array(
                'class' => 'fa fa-ioxhost',
                'label' => 'IoxHost'
            ),
            'fa fa-angellist' => array(
                'class' => 'fa fa-angellist',
                'label' => 'AngelList'
            ),
            'fa fa-cc' => array(
                'class' => 'fa fa-cc',
                'label' => 'CC'
            ),
            'fa fa-shekel' => array(
                'class' => 'fa fa-shekel',
                'label' => 'Sheckel, Sheqel, ILS'
            ),
            'fa fa-meanpath' => array(
                'class' => 'fa fa-meanpath',
                'label' => 'Meanpath'
            ),
            'fa fa-buysellads' => array(
                'class' => 'fa fa-buysellads',
                'label' => 'BuySellAds'
            ),
            'fa fa-connectdevelop' => array(
                'class' => 'fa fa-connectdevelop',
                'label' => 'ConnectDevelop'
            ),
            'fa fa-dashcube' => array(
                'class' => 'fa fa-dashcube',
                'label' => 'DashCube'
            ),
            'fa fa-forumbee' => array(
                'class' => 'fa fa-forumbee',
                'label' => 'ForumBee'
            ),
            'fa fa-leanpub' => array(
                'class' => 'fa fa-leanpub',
                'label' => 'LeanPub'
            ),
            'fa fa-sellsy' => array(
                'class' => 'fa fa-sellsy',
                'label' => 'SellSpy'
            ),
            'fa fa-shirtsinbulk' => array(
                'class' => 'fa fa-shirtsinbulk',
                'label' => 'ShirtsInBulk'
            ),
            'fa fa-simplybuilt' => array(
                'class' => 'fa fa-simplybuilt',
                'label' => 'SimplyBuilt'
            ),
            'fa fa-skyatlas' => array(
                'class' => 'fa fa-skyatlas',
                'label' => 'SkyAtlas'
            ),
            'fa fa-cart-plus' => array(
                'class' => 'fa fa-cart-plus',
                'label' => 'CartPlus'
            ),
            'fa fa-cart-arrow-down' => array(
                'class' => 'fa fa-cart-arrow-down',
                'label' => 'Cart Arrow Down'
            ),
            'fa fa-diamond' => array(
                'class' => 'fa fa-diamond',
                'label' => 'Diamond'
            ),
            'fa fa-ship' => array(
                'class' => 'fa fa-ship',
                'label' => 'Ship'
            ),
            'fa fa-user-secret' => array(
                'class' => 'fa fa-user-secret',
                'label' => 'User Secret'
            ),
            'fa fa-motorcycle' => array(
                'class' => 'fa fa-motorcycle',
                'label' => 'Motorcycle'
            ),
            'fa fa-street-view' => array(
                'class' => 'fa fa-street-view',
                'label' => 'Street View'
            ),
            'fa fa-heartbeat' => array(
                'class' => 'fa fa-heartbeat',
                'label' => 'Heartbeat'
            ),
            'fa fa-venus' => array(
                'class' => 'fa fa-venus',
                'label' => 'Venus'
            ),
            'fa fa-mars' => array(
                'class' => 'fa fa-mars',
                'label' => 'Mars'
            ),
            'fa fa-mercury' => array(
                'class' => 'fa fa-mercury',
                'label' => 'Mercury'
            ),
            'fa fa-transgender' => array(
                'class' => 'fa fa-transgender',
                'label' => 'Transgender'
            ),
            'fa fa-transgender-alt' => array(
                'class' => 'fa fa-transgender-alt',
                'label' => 'Transgender Alt'
            ),
            'fa fa-venus-double' => array(
                'class' => 'fa fa-venus-double',
                'label' => 'Venus Double'
            ),
            'fa fa-mars-double' => array(
                'class' => 'fa fa-mars-double',
                'label' => 'Mars Double'
            ),
            'fa fa-venus-mars' => array(
                'class' => 'fa fa-venus-mars',
                'label' => 'Venus Mars'
            ),
            'fa fa-mars-stroke' => array(
                'class' => 'fa fa-mars-stroke',
                'label' => 'Mars Stroke'
            ),
            'fa fa-mars-stroke-v' => array(
                'class' => 'fa fa-mars-stroke-v',
                'label' => 'Mars Stroke Vertical'
            ),
            'fa fa-mars-stroke-h' => array(
                'class' => 'fa fa-mars-stroke-h',
                'label' => 'Mars Stroke Horizontal'
            ),
            'fa fa-neuter' => array(
                'class' => 'fa fa-neuter',
                'label' => 'Neuter'
            ),
            'fa fa-facebook-official' => array(
                'class' => 'fa fa-facebook-official',
                'label' => 'Facebook Official'
            ),
            'fa fa-pinterest-p' => array(
                'class' => 'fa fa-pinterest-p',
                'label' => 'Pinterest P'
            ),
            'fa fa-whatsapp' => array(
                'class' => 'fa fa-whatsapp',
                'label' => 'Whatsapp'
            ),
            'fa fa-server' => array(
                'class' => 'fa fa-server',
                'label' => 'Server'
            ),
            'fa fa-user-plus' => array(
                'class' => 'fa fa-user-plus',
                'label' => 'User Plus'
            ),
            'fa fa-user-times' => array(
                'class' => 'fa fa-user-times',
                'label' => 'User Times'
            ),
            'fa fa-bed' => array(
                'class' => 'fa fa-bed',
                'label' => 'Bed, Hotel'
            ),
            'fa fa-viacoin' => array(
                'class' => 'fa fa-viacoin',
                'label' => 'Viacoin'
            ),
            'fa fa-train' => array(
                'class' => 'fa fa-train',
                'label' => 'Train'
            ),
            'fa fa-subway' => array(
                'class' => 'fa fa-subway',
                'label' => 'Subway'
            ),
            'fa fa-medium' => array(
                'class' => 'fa fa-medium',
                'label' => 'Medium'
            ),
        );

        return $IconList;
    }
}
?>