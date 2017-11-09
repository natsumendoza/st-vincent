$(document).ready(function () {

    var page = 1;

    $('.btnNext').click(function(){
        $('.tab' + (++page)).trigger('click');
    });

    $('.btnPrevious').click(function(){
        $('.tab' + (--page)).trigger('click');
    });

});