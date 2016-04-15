$(function () {
	function resizeBannerBar() {
		var $containerWidth = $('.container').css("width").replace(/[^-\d\.]/g, '');
		var $documentWidth = $(document).width();
		var $titleMargin = ($documentWidth - $containerWidth) /  2;
		var $titleWidth = $('#site-title').css("width");
		var $total = parseFloat($titleMargin) + parseFloat ($titleWidth) + 45;
		$('#banner-bar').css("min-width", $total);
		$('#banner-bar').css("width", $total);
	}
	$(window).load(function() {
		resizeBannerBar();
	});
	$( window ).resize(function() {
		resizeBannerBar();
	});
});

