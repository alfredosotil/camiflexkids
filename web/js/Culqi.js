/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//    console.log($("#card[number]").credit({ auto_select: false }));
validateCard($(".cardnumber"));
payform.cardNumberInput(document.getElementById('card[number]'));
//    payform.expiryInput(document.getElementById('expiry'));
payform.cvcInput(document.getElementById('card[cvv]'));
payform.numericInput(document.getElementById('card[exp_year]'));
payform.numericInput(document.getElementById('card[exp_month]'));


var ORDER = null;
var FORM = null;
Culqi.publicKey = 'pk_test_O7LKYtalUAXdbvwo';
Culqi.init();

function validateCard($creditCard) {
    console.log('ingreso');
    $creditCard.validateCreditCard(function (result)
    {
        console.log('result');
        console.log(result);
        if (result.card_type != null)
        {
            switch (result.card_type.name)
            {
                case "visa":
                    $creditCard.css('background-position', '3px -34px');
                    $creditCard.addClass('card_visa');
                    break;

                case "visa_electron":
                    $creditCard.css('background-position', '3px -72px');
                    $creditCard.addClass('card_visa_electron');
                    break;

                case "mastercard":
                    $creditCard.css('background-position', '3px -110px');
                    $creditCard.addClass('card_mastercard');
                    break;

                case "maestro":
                    $creditCard.css('background-position', '3px -148px');
                    $creditCard.addClass('card_maestro');
                    break;

                case "discover":
                    $creditCard.css('background-position', '3px -186px');
                    $creditCard.addClass('card_discover');
                    break;

                case "amex":
                    $creditCard.css('background-position', '3px -223px');
                    $creditCard.addClass('card_amex');
                    break;

                default:
                    $creditCard.css('background-position', '3px 3px');
                    break;
            }
        } else {
            $creditCard.css('background-position', '3px 3px');
        }

        // Check for valid card numbere - only show validation checks for invalid Luhn when length is correct so as not to confuse user as they type.
        if (result.length_valid || $creditCard.val().length > 16)
        {
            if (result.luhn_valid) {
                $creditCard.parent().removeClass('has-error').addClass('has-success');
            } else {
                $creditCard.parent().removeClass('has-success').addClass('has-error');
            }
        } else {
            $creditCard.parent().removeClass('has-success').removeClass('has-error');
        }
    });
}

function configurarCulqi(order, form) {
    order.amount = parseInt($("#order-amount").val().replace(".", ""));
    ORDER = order;
    FORM = form;
    Culqi.createToken();
}
function culqi() {

    if (Culqi.token) {
        // Get the token ID:
        var token = Culqi.token.id;
        $.ajax({
            type: 'POST',
            url: 'acceptcreditcard',
            data: {order: ORDER, form: FORM, token: token},
            datatype: 'json',
            beforeSend: function () {
                console.log('ORDER \/');
                console.log(ORDER);
                console.log('CARD \/');
                console.log(FORM);
            },
            success: function (data) {
                $('body').waitMe('hide');
                console.log(data);
                var charge = data.charge;
                Ladda.stopAll();
                var result = "";
                if (charge.constructor == String) {
                    result = JSON.parse(charge);
                }
                if (charge.constructor == Object) {
                    result = JSON.parse(JSON.stringify(charge));
                }
                if (result.object === 'charge') {
                    console.log(result.outcome.user_message);
                    hide_waitMe();
                    swal({
                        title: 'Bien!!',
                        text: result.outcome.user_message,
                        type: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Continua comprando',
                        allowOutsideClick: false,
                    }, (result) => {
                        if (result) {
                            window.location.href = data.redirect;
                        }
                    });
                }
            },
            error: function (error) {
                hide_waitMe();
                var data = JSON.parse(error.responseJSON.message)
                swal({
                    title: 'Error',
                    text: data.user_message,
                    type: 'error',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Continuar',
                    allowOutsideClick: false,
                }, (result) => {
                    if (result) {
                        Ladda.stopAll();
                    }
                });
            }
        });

    } else { // ¡Hubo algún problema!
        // Mostramos JSON de objeto error en consola
        hide_waitMe();
        swal({
            title: 'Error',
            text: Culqi.error.user_message,
            type: 'error',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Continuar',
            allowOutsideClick: false,
        }, (result) => {
            if (result) {
                Ladda.stopAll();
            }
        });
    }
}

function run_waitMe() {
    $('body').waitMe({
        effect : 'bounce',
//        effect: 'orbit',
//        effect: 'win8_linear',
        text: 'Procesando pago...',
        bg: 'rgba(255,255,255,0.7)',
        color: '#28d2c8',
        maxSize: '50',
        waitTime: -1,
//        textPos: 'vertical',
        textPos: 'horizontal',
        fontSize: '50',
        source: '',
        onClose: function () {}
    });
}

function hide_waitMe() {
    $('body').waitMe('hide');
}



$('#culqi-card-form').validate({
    errorElement: 'div',
    errorClass: 'help-block',
    rules: {
        'card[email]': {
            required: true,
            email: true
        },
        'card[number]': {
            required: true,
//                creditcard: true,
//            pattern: /(^3[47][0-9]{13}$|^3(?:0[0-5]|[68][0-9])[0-9]{11}$|^6(?:011|5[0-9]{2})[0-9]{12}$|^5[1-5][0-9]{14}$|^3[47][0-9]{13}$|^5[1-5][0-9]{14}$|^(?:4\d([\- ])?\d{6}\1\d{5}|(?:4\d{3}|5[1-5]\d{2}|6011)([\- ])?\d{4}\2\d{4}\2\d{4})$)/g,
            maxlength: 50
        },

        'card[exp_month]': {
            required: true,
//            pattern: /^(0?[1-9]|1[012])$/g,
            maxlength: 2
        },
        'card[exp_year]': {
            required: true,
//            pattern: /^\d{4}$/g,
            maxlength: 4
        },
        'card[cvv]': {
            required: true,
            maxlength: 4,
//            pattern: /^\d{3}$/g
        }
    },
    messages: {
        'card[email]': {
            required: 'correo requerido',
            email: 'debe ser un correo valido'
        },
        'card[number]': {
            required: 'numero de tarjeta requerido',
//            pattern: 'debe ser un numero de tarjeta correcto',
            maxlength: 'maximo 50 caracteres'
        },
        'card[exp_month]': {
            required: 'mes requerido',
//            pattern: 'debe ser un numero de dos digitos del 1 al 12',
            maxlength: 'maximo 2 caracteres'
        },
        'card[exp_year]': {
            required: 'año requerido',
//            pattern: 'debe ser un numero de cuatro digitos empezando por 20',
            maxlength: 'maximo 4 caracteres'
        },
        'card[cvv]': {
            required: 'cvv requerido',
//            pattern: 'debe ser un numero de 4 digitos',
            maxlength: 'maximo 4 caracteres'
        }
    },
    errorPlacement: function (error, placement) {
        $(placement).parent().addClass('has-error');
        error.insertAfter($(placement));
    },
    submitHandler: function (form) {
        var $form = $(form);
        $("#order-form-checkout").data("yiiActiveForm").submitting = true;
        $("#order-form-checkout").yiiActiveForm("validate");
        $.ajax($form.attr('action'), {
            type: $form.attr('method'),
            data: $("#order-form-checkout").serialize(),
            beforeSend: function (xhr) {

                var l = Ladda.create(document.querySelector(".invoque-culqi"));
                l.start();
            },
            success: function (data) {
                if ($("#order-form-checkout").find(".has-error").length) {
                    Ladda.stopAll();
                    return false;
                } else {
                    run_waitMe();
                    configurarCulqi(data.order, $("#culqi-card-form").serializeJSON());
                }
            }
        });
    }
});

