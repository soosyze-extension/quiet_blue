$(function () {
    /* SCROLL TOP */
    $('#btn_up').click(function () {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() < 300) {
            $('#btn_up').fadeOut();
        } else {
            $('#btn_up').fadeIn();
        }
    });
    /* MENU */
    $(window).resize(function () {
        if ($(this).innerWidth() > 768) {
            $('#menu').css('display', '');
        }
    });
    $('#toogle_menu').click(function () {
        $('#menu').slideToggle();
    });
    /* SCROLL TO */
    $('a').click(function () {
        var page = $(this).attr('href');
        var fragment = page.substring(page.lastIndexOf('#'));

        if (fragment !== undefined) {
            var speed = 750;
            $('html, body').animate({scrollTop: $(fragment).offset().top - 20}, speed); // Go
        }
        return false;
    });
    /* NUMBER TEXTAREA */
    var textarea = document.querySelectorAll('textarea');
    Array.prototype.forEach.call(textarea, function (el) {
        if (el.maxLength > 0) {
            $('<div class="maxlength_show">' + el.value.length + '/' + el.maxLength + '<div>').appendTo(el.parentNode);
        }
    });
    $('textarea').keyup(function () {
        $this = $(this);
        $this.parent()
                .find('.maxlength_show')
                .html('<div class="maxlength_show">' + $this.val().length + '/' + $this.attr('maxLength') + '<div>');
    });
    /* INPUT ICON RENDER */
    $('.text_icon').keyup(function () {
        $(this).parent().find('.render_icon i').attr('class', this.value);
    });
});
