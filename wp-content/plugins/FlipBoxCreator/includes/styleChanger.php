<?php 
class StyleChanger {
	
	public function addContentToStyle($content, $id, $style) {
        echo '<style>.image-font-' . $style . '-' . $id . ':before {
                  content: "\\' . $content . '";
            }</style>';
    }

    public function changeFontColor($style, $postId, $color) {
        echo '<style>.image-font-' . $style . '-' . $postId . ':before {
                  color: ' . $color . ';
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