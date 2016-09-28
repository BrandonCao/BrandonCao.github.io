$(document).ready(function() {


    $(".btn").on("click", function( e ) {
        e.preventDefault();
        var value = document.getElementById($(this).attr('href'));

        if($(this).attr('href') != '#nav')  {
            $("body, html").animate({ scrollTop: $(value).offset().top-80  }, 700);
        }
        else {
            $('body, html').animate({ scrollTop: 0 }, 700);
        }
    })


});