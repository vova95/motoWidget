<?php

class PageItemStructure {
	
	public function pageItem($styles, $styleId, $img, $title, $backTitle, $frontContent, $backContent, $link, $effect, $postId) {
		switch ($styleId) {
			case 0:
			case 1:
			case 2:
				$item = '<div class="my-page-item-' . $styles[$styleId] . ' ' . $effect[0] . ' ' . $effect[0] . '-onclick post-onclick">
						    <figure class="front-side-' . $styles[$styleId] . ' front-side-' . $styles[$styleId] . '-' . $postId . '">
						    	<div class="box-section">
						    		<div class="box-icon-' . $styles[$styleId] . '">
						    			<img class="icon-' . $styles[$styleId] . '" src="' . $img . '">
						    		</div>
						    		<h3 class="box-section-title-' . $styles[$styleId] . '">' . $title . '</h3>
						    		<div class="box-section-content-' . $styles[$styleId] . '">
						    			<p>' . $frontContent . '</p>
						    		</div>
						    	</div>
						    </figure>
						    <figure class="back-side-' . $styles[$styleId] . ' ' . $effect[1] . ' back-side-' . $styles[$styleId] . '-' . $postId . '">
						    	<div class="box-section">
						    		<h3 class="box-section-title-' . $styles[$styleId] . '">' . $backTitle . '</h3>
						    		<div class="box-section-content-' . $styles[$styleId] . '">
						    			<p>' . $backContent . '</p>
						    		</div>
						    		<div class="box-section-link-' . $styles[$styleId] . ' link-onhover">
						    			<a href="#">' . $link . '</a>
						    		</div>
						    	</div>
						    </figure>
						</div>';
				break;
			case 3:
			case 4:
				$item = '<div class="my-page-item-' . $styles[$styleId] . ' ' . $effect[0] . ' ' . $effect[0] . '-onclick post-onclick">
						    <figure class="front-side-' . $styles[$styleId] . ' front-side-' . $styles[$styleId] . '-' . $postId . '">
						    	<div class="box-section">
						    		<div class="box-icon-' . $styles[$styleId] . '">
						    			<i class="image-font image-font-' . $styles[$styleId] . ' image-font-' . $styles[$styleId] . '-' . $postId . '"></i>
						    		</div>
						    		<h3 class="box-section-title-' . $styles[$styleId] . '">' . $title . '</h3>
						    		<div class="box-section-content-' . $styles[$styleId] . '">
						    			<p>' . $frontContent . '</p>
						    		</div>
						    	</div>
						    </figure>
						    <figure class="back-side-' . $styles[$styleId] . ' ' . $effect[1] . ' back-side-' . $styles[$styleId] . '-' . $postId . '">
						    	<div class="box-section">
						    		<h3 class="box-section-title-' . $styles[$styleId] . '">' . $backTitle . '</h3>
						    		<div class="box-section-content-' . $styles[$styleId] . '">
						    			<p>' . $backContent . '</p>
						    		</div>
						    		<div class="box-section-link-' . $styles[$styleId] . ' link-onhover">
						    			<a href="#" class="link-onhover">' . $link . '</a>
						    		</div>
						    	</div>
						    </figure>
						</div>';
				break;
			case 5:
				$item = '<div class="my-page-item-' . $styles[$styleId] . ' ' . $effect[0] . ' ' . $effect[0] . '-onclick post-onclick">
						    <figure class="front-side-' . $styles[$styleId] . '">
						    	<div class="box-section">
						    		<div class="box-icon-' . $styles[$styleId] . '">
						    			<div class="icon-circle">
						    				<i class="image-font image-font-' . $styles[$styleId] . ' image-font-' . $styles[$styleId] . '-' . $postId . '"></i>
						    			</div>
						    		</div>
						    		<h3 class="box-section-title-' . $styles[$styleId] . '">' . $title . '</h3>
						    		<div class="box-section-content-' . $styles[$styleId] . '">
						    			<p>' . $frontContent . '</p>
						    		</div>
						    	</div>
						    </figure>
						    <figure class="back-side-' . $styles[$styleId] . ' ' . $effect[1] . '">
						    	<div class="box-section">
						    		<h3 class="box-section-title-' . $styles[$styleId] . '">' . $backTitle . '</h3>
						    		<div class="box-section-content-' . $styles[$styleId] . '">
						    			<p>' . $backContent . '</p>
						    		</div>
						    		<div class="box-section-link-' . $styles[$styleId] . ' link-onhover">
						    			<a href="#" class="link-onhover">' . $link . '</a>
						    		</div>
						    	</div>
						    </figure>
						</div>';
				break;
		}

		
		return $item;
	}

}

?>