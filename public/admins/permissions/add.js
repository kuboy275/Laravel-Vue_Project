$(document).ready(function() {

    $('.check_all').on('click', function() {
        $(this).parents().find('.check_child').prop('checked', $(this).prop('checked'));
    })

});