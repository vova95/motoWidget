<?php 
/**
* 
*/
class StyleChanger {
	
	public function addContentToStyle($content, $postId, $style) {
        echo '<style>.image-font-' . $style . '-' . $postId . ':before {
                  content: "\\' . $content . '";
            }</style>';
    }

    public function addFrontsideAndBacksideBackgroundColor($colorFront, $colorBack, $postId, $style) {
        echo '<style>
                .front-side-' . $style . '-' . $postId . ': {
                    background: ' . $colorFront . ';
                }
                .back-side-' . $style . '-' . $postId . ': {
                    background: ' . $colorBack . ';
                }
             </style>';
    }

}
?>