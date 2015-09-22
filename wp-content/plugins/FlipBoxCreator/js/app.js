$(document).ready(function() {
	$(".post-onclick")
		.on('click', function() {
			$(this).toggleClass('test');
		})
		.on('mouseleave', function () {
			$(this).removeClass('test');
		});
});