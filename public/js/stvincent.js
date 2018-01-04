$(document).ready(function () {

    var page = 1;

    $('.btnNext').click(function(){
        var energyCount = $('.energyCheck').length / 2;
        var energyChecked = $('.energyCheck').filter(':checked').length;

        var informationCount = $('.informationCheck').length / 2;
        var informationChecked = $('.informationCheck').filter(':checked').length;

        var decisionMakingCount = $('.decisionMakingCheck').length / 2;
        var decisionMakingChecked = $('.decisionMakingCheck').filter(':checked').length;




        if(page === 1) {
            if(energyChecked === energyCount) {
                $('.tab' + (++page)).trigger('click');
            } else {
                $('#warningModal').modal('show');
            }
        }

        else if(page === 2) {
            if(informationChecked === informationCount) {
                $('.tab' + (++page)).trigger('click');
            } else {
                $('#warningModal').modal('show');
            }
        }

        else if(page === 3) {
            if(decisionMakingChecked === decisionMakingCount) {
                $('.tab' + (++page)).trigger('click');
            } else {
                $('#warningModal').modal('show');
            }
        }

    });

    $('#generate').click(function (e) {
        e.preventDefault();

        var learningStyleCount = $('.learningStyleCheck').length / 2;
        var learningStyleChecked = $('.learningStyleCheck').filter(':checked').length;

        if(learningStyleChecked === learningStyleCount) {
            $('#examForm').submit();
        } else {
            $('#warningModal').modal('show');
        }
    });

    $('.btnPrevious').click(function(){
        $('.tab' + (--page)).trigger('click');
    });

});