<script>
jQuery.noConflict();
(function( $ ) {
		jQuery(document).ready(function($){
	if($("#back-to-top").length > 0){
		$(window).scroll(function () {
			var e = $(window).scrollTop();
			var f = e;
			if (e > 100) {
				$("#back-to-top").show();
			} else {
				$("#back-to-top").hide()
			}
			if (e > 300) {
				
			}
		});
		$("#back-to-top").click(function () {
			$('body,html').animate({
				scrollTop: 0
			})
		})
	}
});
})( jQuery );
</script>
	<a href="#" id="back-to-top" title="Back to top" >&uarr;</a>