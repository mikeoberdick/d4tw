//bxSlider
jQuery(document).ready(function() {
	jQuery('.slider').bxSlider({
	  adaptiveHeight: true,
	  pager: true,
	  onSliderLoad: function(){
        jQuery("#sliderContainer").css("visibility", "visible");
      }
	});
});