$(document).ready(function () {

    // $('.btnNext').click(function(){
    //     $('.nav-tabs > .active').next('li').find('a').trigger('click');
    // });
    //
    // $('.btnPrevious').click(function(){
    //     $('.nav-tabs > .active').prev('li').find('a').trigger('click');
    // });
    var page = 1;

    $('.btnNext').click(function(){
        $('.tab' + (++page)).trigger('click');
    });

    $('.btnPrevious').click(function(){
        $('.tab' + (--page)).trigger('click');
    });
});