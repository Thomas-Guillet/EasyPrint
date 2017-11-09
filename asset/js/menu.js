$(document).ready(function() {
	var menuLeftWidth = $('#menuLeft').width();
	$('#burger').click(() => {
		$('#menuLeft').css('display','block');
		TweenMax.to($('#menuLeft'), 0, {x:-menuLeftWidth});
		TweenMax.to($('#menuLeft'), .5, {x:0});
	})
});