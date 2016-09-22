$(function(){
	$('.Slider div:gt(0)').hide();
		setInterval(function(){
		$('.Slider div:first-child').fadeOut(1000)
			.next('div').fadeIn(1000)
			.end().appendTo('.Slider');
	},2000);
})
