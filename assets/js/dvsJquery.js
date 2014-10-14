jQuery(document).ready(function($){
	/*var secondaryNav = $('.cd-secondary-nav'),
		secondaryNavTopPosition = secondaryNav.offset().top,
		taglineOffesetTop = $('.ipf-header').offset().top + $('.ipf-header').height() + parseInt($('.ipf-header').css('paddingTop').replace('px', '')),
		contentSections = $('.cd-section');*/



    //The comment button


    $('.dvs-add-btn').on('click', function(event){

        event.preventDefault();
       // $(this).toggleClass('clicked');
        $('.dvs-form').toggleClass('is-visible');
        $('.dvs-form-content').toggleClass('is-visible');
    });
    $('.close-bt').on('click',function(event){
        event.preventDefault();
        $('.comment-box').removeClass('is-visible');
        $('.popup-button').toggleClass('is-vissible');

    });


});
