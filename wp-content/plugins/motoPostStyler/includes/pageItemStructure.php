<?php

class PageItemStructure {
	
	public function pageItem($img, $title, $backTitle, $frontContent, $backContent, $link) {
		$item = '<div class="my-page-item">
			    <figure class="front-side">
			    	<div class="box-section">
			    		<div class="box-icon">
			    			<img class="icon" src="' . $img . '">
			    		</div>
			    		<h3 class="box-section-title">' . $title . '</h3>
			    		<div class="box-section-content">
			    			<p>' . $frontContent . '</p>
			    		</div>
			    	</div>
			    </figure>
			    <figure class="back-side">
			    	<div class="box-section">
			    		<h3 class="box-section-title">' . $backTitle . '</h3>
			    		<div class="box-section-content">
			    			<p>' . $backContent . '</p>
			    		</div>
			    		<div class="box-section-link">
			    			<a href="#">' . $link . '</a>
			    		</div>
			    	</div>
			    </figure>
		</div>';
		return $item;
	}

}

?>