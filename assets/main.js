/**
 * Created by JPanda on 13/11/2017.
 */
$(function() {

    $('.modal').modal();

    var clicked = false;

    var confession_text = $('#confession_text');
    var date_posted = $('#date_posted');

    $.ajax({
        url: 'all_have_sinned_and_fall_short_of_the_glory_of_god',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            confession_text.text(data['confession']);
            date_posted.text(data['date_created']);

            $('.main-section').fadeIn(1500);

        }
    });

    $('#read_another').click(function(e) {
        if(!clicked) {
            clicked = true;
            $('.main-section').fadeOut(750, function() {
                $.ajax({
                    url: 'index.php/main/all_have_sinned_and_fall_short_of_the_glory_of_god',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        confession_text.text(data['confession']);
                        date_posted.text(data['date_created']);

                        $('.main-section').fadeIn(1500, function() {
                            clicked = false;
                        });
                    }
                });
            });
        }
    });
});