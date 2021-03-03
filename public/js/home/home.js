$(function() {
    // $('[data-toggle="tooltip"]').tooltip()

    let iconeUser = $('.balao-user');
    let balao = $('.tooltip-login');

    iconeUser.hover(function() {
        $('.seta-balao').css('display', 'block');
        $('.tooltip-login').css('display', 'block');

    });

    balao.mousemove(function() {
        $('.seta-balao').css('display', 'block');
        $('.tooltip-login').css('display', 'block');

    });

    balao.mouseout(function() {
        $('.seta-balao').css('display', 'none');
        $('.tooltip-login').css('display', 'none');

    });









})
