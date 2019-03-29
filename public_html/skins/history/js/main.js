$(document).ready(function () {
    // Slider
    $('.bxslider').bxSlider({
        auto: true,
        autoControls: true,
        adaptiveHeight: true,
        mode: 'fade'
    });
    // Navigation show dropdown on mouseover
    $('.nav-item').mouseover(function () {
        $(this).find('.menu-list').slideDown(100);
        $(this).css('background-color', '#212529');
        //$(this).addClass('no-padd');
    });
    $('.nav-item ').mouseleave(function () {
        $(this).find('.menu-list').slideUp(100);
        $(this).css('background-color', '#343a40');
        //$(this).removeClass('no-padd');
        if($(this).hasClass('color-orange')){
            $(this).css('background-color', '#f0ad4e');
            //alert('gde si bre!');
        }
        //$(this).closest('li').find('a:first').css({'background':'#343a40','border': 'none'});
    });
    /*$('.color-orange').mouseleave(function () {
        $(this).css('background-color', '#f0ad4e;');
        //$(this).closest('li').find('a:first').css({'background':'#343a40','border': 'none'});
    });*/

    // Toggle calendar
    $('#b1').on('click', function () {
        $('#k2').hide();
        $('#k1').css('display', 'block');
    });
    $('#b2').on('click', function () {
        $('#k1').hide();
        $('#k2').css('display', 'block');
    });


    $('.button-reply').on('click', function (e) {
        e.stopPropagation();
        e.preventDefault();

        var commentReplyForm = $('.replyForm');

        // Ukoliko je vidljiva sakrivamo je u suprotnom prikazujemo
        if (commentReplyForm.is(':visible')) {
            $(this).closest('.showed-comment').children('.replyForm').slideUp();
        } else {
            $(this).closest('.showed-comment').find('.replyForm').slideDown();
        }

        // Ovde dohvatamo id komentara na koji korisnik zeli da odgovori
        // i ubacimo ga u hidden polje forme koju smo prikazali
        // da bi nam taj id bio dostupan u kontroleru nakom submit-a
        // pod kljucem parentId $request->request->get('parentId');
        var parentCommentId = $(this).parent().find('.hidden-id-comment').val();
        $(this).parent().find('.parentId').val(parentCommentId);
    });

    $('.show-answers').on('click', function (e) {
        e.stopPropagation();
        e.preventDefault();

        var commentReplies = $('.answers');

        // Ukoliko je vidljiva sakrivamo je u suprotnom prikazujemo
        if ($(this).parent().parent().children('.answers').is(':visible')) {
            $(this).closest('.comnnets-list').find('.answers').slideUp();
            $(this).closest('.showed-comment').find('.show-answers i').css('transform', 'rotate(0deg)');
        } else {
            $(this).parent().parent().children('.answers').slideDown();
            $(this).closest('.showed-comment').find('.show-answers i').css('transform', 'rotate(-180deg)');
        }
    });
});