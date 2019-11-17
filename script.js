



$(document).ready(function () {


    $('#menu').on('click', function () {

        $('ul').toggleClass(1000, 'active');
    });

    //if ($(window).width() <= 768) {



    /* $('#menu').on('click', function () {
 
 
         $('ul').slideDown(1000);
 
     });*/

    $('#menu').on('click', function () {
        $('ul').toggleClass('active');
        // $('ul').slideUp(1000);

    });

    //}

    $('#phone').click(function () {
        $('.phone').toggleClass('show');

    });

    $('#email').click(function () {
        $('.email').toggleClass('show');

    });
});



