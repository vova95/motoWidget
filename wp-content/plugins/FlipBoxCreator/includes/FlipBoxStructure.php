<?php

class FlipBoxStructure {
	
	public function generateFlipBoxLayout($arguments, $postId) {

		if ($arguments['style'] == 'style4' || $arguments['style'] == 'style5' || $arguments['style'] == 'style6') {
			$iconHtml = '<div class="icon-circle-' . $arguments['style'] . '">
						<i class="image-font image-font-' . $arguments['style'] . ' image-font-' . $arguments['style'] . '-' . $postId . ' ' . $arguments['content'] . '"></i>
					</div>';
		} else {
			$iconHtml = '<img class="icon-' . $arguments['style'] . '" src="' . $arguments['imgSrc'] . '">';
		}

		$item = '<div class="my-page-item-' . $arguments['style'] . ' ' . $arguments['effect'][0] . ' ' . $arguments['effect'][0] . '-onclick post-onclick">
				    <figure class="front-side-' . $arguments['style'] . ' front-side-' . $arguments['style'] . '-' . $postId . '">
				    	<div class="box-section">
				    		<div class="box-icon-' . $arguments['style'] . '">
				    			' . $iconHtml . '
				    		</div>
				    		<h3 class="box-section-title-' . $arguments['style'] . '">' . $arguments['title'] . '</h3>
				    		<div class="box-section-content-' . $arguments['style'] . '">
				    			<p>' . $arguments['front_content'] . '</p>
				    		</div>
				    	</div>
				    </figure>
				    <figure class="back-side-' . $arguments['style'] . ' ' . $arguments['effect'][1] . ' back-side-' . $arguments['style'] . '-' . $postId . '">
				    	<div class="box-section">
				    		<h3 class="box-section-title-' . $arguments['style'] . '">' . $arguments['back_title'] . '</h3>
				    		<div class="box-section-content-' . $arguments['style'] . '">
				    			<p>' . $arguments['back_content'] . '</p>
				    		</div>
				    		<div class="box-section-link-' . $arguments['style'] . ' link-onhover">
				    			<a href="' . $arguments['link'] . '">' . $arguments['link_text'] . '</a>
				    		</div>
				    	</div>
				    </figure>
				</div>
				<style>
				.image-font-' . $arguments['style'] . '-' . $postId . ':before {
                  color: ' . $arguments['font_color'] . ';
            	}</style>';
		
		return $item;
	}

}

?>