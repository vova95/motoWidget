<?php

class PageItemStructure {
	
	public function pageItem($img) {
		$item = '<div class="my-page-item">
			    <figure class="front-side">
			    	<div class="box-section">
			    		<div class="box-icon">
			    			<img class="icon" src="'. $img .'">
			    		</div>
			    		<h3 class="box-section-title">Valley Wines</h3>
			    		<div class="box-section-content">
			    			<p>$15.50</p>
			    		</div>
			    	</div>
			    </figure>
			    <figure class="back-side">
			    	<div class="box-section">
			    		<h3 class="box-section-title">More info</h3>
			    		<div class="box-section-content">
			    			<p>Sed porttitor lectus nibh. Praesent sapien massa.</p>
			    		</div>
			    		<div class="box-section-link">
			    			<a href="#">Buy Now!</a>
			    		</div>
			    	</div>
			    </figure>
		</div>';
		return $item;
	}

}

?>