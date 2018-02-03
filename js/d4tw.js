//Automatically generate filler content height to ensure footer is on bottom of the page
jQuery(document).ready(function() {
	jQuery('#js-heightControl').css('height', jQuery(window).height() - jQuery('html').height() +'px');
});

//Dropdown on hover
jQuery('ul.navbar-nav li.dropdown').hover(function() {
	jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
	jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

//Animate on Scroll
jQuery(document).ready(function() {
	AOS.init();
});

//Match button heights on about page
jQuery(document).ready(function() {
	jQuery(function() {
		jQuery('.serviceBtn').matchHeight();
	});
});

//Bootstrap Modals
jQuery('.modal').on('shown.bs.modal', function () {
    jQuery('.nf-form-cont input').first().focus();
})

//Stop the YouTube video on modal close
jQuery("#wooVideo").on('hidden.bs.modal', function (e) {
    jQuery("#wooVideo iframe").attr("src", jQuery("#wooVideo iframe").attr("src"));
});