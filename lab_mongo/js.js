
$(document).ready(function() {

    $('#first').click(function() {
        let chief = $('#first');
        if(!chief.children().length) {
            chief.html(localStorage.getItem('first'));
        } else if(chief.hasClass('hiden')) {
            chief.removeClass('hiden');
            $(this).html('Hide');
        } else {
            chief.addClass('hiden');
            $(this).html('Show last');
        }
    });
});
