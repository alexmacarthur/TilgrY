$('body').removeClass('no-js');

$( document ).ready(function(){
    initMobileMenu();
    initMobileLinkResize();
});

window.onresize = function(){
    initMobileLinkResize();
}

function initMobileMenu(){
    $('#mobile-menu-toggle').click(function(){
        if($('.nav-links').hasClass('open-mobile-menu')){
            $('.nav-links').removeClass('open-mobile-menu');
            $('html').removeClass('overflow-hidden');
        }else{
            $('.nav-links').addClass('open-mobile-menu');
            $('html').addClass('overflow-hidden');
        }
    });
    
    $('#close-mobile-menu').click(function(){
        $('.nav-links').removeClass('open-mobile-menu');
        $('html').removeClass('overflow-hidden');
    });
} 

function initMobileLinkResize(){
    var windowHeight = $(window).height();
    var linksHeight = $('.mobile-nav-links ul').height();
    var newMargin = (windowHeight - linksHeight)/2;
    $('.mobile-nav-links ul').css("margin-top",newMargin);
}

/* ajax contact form */
$(function() {

    // Get the form.
    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
    $(form).submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
        .done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('error');
            $(formMessages).addClass('success');

            // Set the message text.
            $(formMessages).text("Your message was successfully sent.");

            // Clear the form.
            $('#name').val('');
            $('#email').val('');
            $('#message').val('');
            $('#phonenumber').val('');
            $('#citystate').val('');

        })
        .fail(function(data) {
            // Make sure that the formMessages div has the 'error' class.
            $(formMessages).removeClass('success');
            $(formMessages).addClass('error');
            $(formMessages).text("Oops! An error occured and your message could not be sent.");

            // Set the message text.
            if (data.responseText !== '') {
                $(formMessages).text(data.responseText);
            } else {
                $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
        });

    });

});

(function($) {

      /**
       * Copyright 2012, Digital Fusion
       * Licensed under the MIT license.
       * http://teamdf.com/jquery-plugins/license/
       *
       * @author Sam Sehnert
       * @desc A small plugin that checks whether elements are within
       *     the user visible viewport of a web browser.
       *     only accounts for vertical position, not horizontal.
       */

        $.fn.visible = function(partial) {
        
          var $t            = $(this),
              $w            = $(window),
              viewTop       = $w.scrollTop(),
              viewBottom    = viewTop + $w.height(),
              _top          = $t.offset().top,
              _bottom       = _top + $t.height(),
              compareTop    = partial === true ? _bottom : _top,
              compareBottom = partial === true ? _top : _bottom;
        
        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

      };

      $.fn.verticalCenter = function(){

      };
        
})(jQuery);

    var windowHeight = $(window).height();
        elementHeight = $('.nav-links li').height() * 5;
        newMargin = (windowHeight - elementHeight)/2;

    $('.nav-links li:first-of-type').css('margin-top', newMargin);

// when scrolling, checks if element is visible. if visibile, fade in.
// $(window).scroll(function(event) {

//     $(".aim-icon").each(function(i, element) {
//         var element = $(element);
//         if (element.visible(true)) {
//           element.addClass("bounce"); 
//         } 
//     });

// });
