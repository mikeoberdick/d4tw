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

// //Match button heights on about page
// jQuery(document).ready(function() {
// 	jQuery(function() {
// 		jQuery('.serviceBtn').matchHeight();
// 	});
// });

//Bootstrap Modals
jQuery('.modal').on('shown.bs.modal', function () {
    jQuery('.nf-form-cont input').first().focus();
})

//Stop the YouTube video on modal close
jQuery(".videoModal").on('hidden.bs.modal', function (e) {
    jQuery(".videoModal iframe").attr("src", jQuery(".videoModal iframe").attr("src"));
});

// Portfolio Page show the category that is being displayed after user clicks on the button or dropdown menu item on mobile

jQuery(function(){
	jQuery('.catButton').click(function(){
	jQuery( "span#currentCat" ).text( jQuery(this).text() );
		});
});

// Sticky Header

jQuery(function(){
  jQuery("nav").before(jQuery(".navbar").clone().addClass("fixed"));
  jQuery("#headerLogo").attr("src","/wp-content/uploads/2017/07/ct_website_design_designs-4-the-web.png");
  jQuery(window).scroll(function(){
    if(jQuery(window).scrollTop() >= 55){
      jQuery('.navbar.fixed').addClass('slideDown');
    }
  else{
    jQuery('.navbar.fixed').removeClass('slideDown');
  }
  
  });
});