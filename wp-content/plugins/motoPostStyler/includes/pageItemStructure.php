<?php

class PageItemStructure {
	
	public function pageItem($style, $img, $title, $backTitle, $frontContent, $backContent, $link) {
		$item = '<div class="my-page-item' . $style . '">
			    <figure class="front-side' . $style . '">
			    	<div class="box-section">
			    		<div class="box-icon">
			    			<img class="icon' . $style . '" src="' . $img . '">
			    		</div>
			    		<h3 class="box-section-title' . $style . '">' . $title . '</h3>
			    		<div class="box-section-content' . $style . '">
			    			<p>' . $frontContent . '</p>
			    		</div>
			    	</div>
			    </figure>
			    <figure class="back-side">
			    	<div class="box-section">
			    		<h3 class="box-section-title' . $style . '">' . $backTitle . '</h3>
			    		<div class="box-section-content' . $style . '">
			    			<p>' . $backContent . '</p>
			    		</div>
			    		<div class="box-section-link' . $style . '">
			    			<a href="#">' . $link . '</a>
			    		</div>
			    	</div>
			    </figure>
		</div>';
		return $item;
	}

}

?>