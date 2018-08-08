
(function ($) {
    "use strict";



  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        if(check){
            var form = $(this),
                data,
                message = $('.wp_message');

            $.ajax({
                url: "./admin/insert.php",
                type: 'POST',
                data: form.serialize()
            })
            .done(function(response) {
                data = $.parseJSON(response);
                console.log('data', data);
                switch(data.result){
                    case 1: // Registro agregado correctamente.
                        form[0].reset();
                       message.html(data.message);
                        break;
                    case 2: // Email no valido
                       message.html(data.message);
                        break;
                    case 3: //email ya se encuentra participando
                        form[0].reset();
                       message.html(data.message);
                        break;
                    default:
                       message.html("Ocurrió un error");
                }
            })
            .fail(function(response) {
                data = $.parseJSON(response);
                message.html("Ocurrió un error");
                // console.log('fail', data);
            });
        }

        return false;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    

})(jQuery);