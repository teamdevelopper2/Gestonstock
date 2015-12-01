/**
 * Created by Administrateur on 29/11/2015.
 */
$(document).ready(function(){
    $('.cp').keyup(function(){

        if($(this).val().length === 4){
            console.log('ok dddddd');
            $.ajax({
                type: 'GET',
                url: 'http://lannonce/app_dev.php/teamdev/default/villes/'+$(this).val(),
                beforeSend: function(){
                    if($('.loading').length == 0){
                        $('form .ville').parent().append('<div class="loading"></div>');
                    }
                    $('.ville option').remove();
                },
                success: function(data){
                    if(data[1]){
                        $.each(data[1], function(index, value){
                            $('.ville').append($('<option>', {value: value, text: value}));
                        });
                    }
                    else $('.ville').append('<option>aucune ville</option>');
                    $('.loading').remove();
                }
            });
        }
        else
            $('.ville').val('aucune ville');
    });


});