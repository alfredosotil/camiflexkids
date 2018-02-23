/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var ORDER = null;
//Culqi.publicKey = 'pk_test_O7LKYtalUAXdbvwo';
//Culqi.init();
Culqi.publicKey = 'pk_test_O7LKYtalUAXdbvwo';
//Culqi.codigoComercio = 'sk_test_5dBvsJJspPxmwzMF';
function configurarCulqi(order, card) {
    Culqi.init();
    order.amount = parseInt($("#order-amount").val().replace(".", ""));
    ORDER = order;
    try {
        setProcessPayment(ORDER, card);
    } catch (ex) {
        console.log('ERROR \/');
        console.log(ex);
    }
}
//
//window.culqi = function () {
//    try {
//        if (Culqi.token) {
//            console.log('TOKEN \/');
//            console.log(Culqi.token);
//            let token = Culqi.token;
//            setProcessPayment(token, ORDER);
//        } else {
//            console.log(Culqi.error.user_message);
//        }
//    } catch (ex) {
//        console.log(ex);
//    }
//};

function setProcessPayment(orden, card) {
    if (Culqi.token) {
        $.ajax({
            type: 'POST',
            url: 'acceptcreditcard',
            data: {order: orden, card: card, token: Culqi.token},
//         data: {order: orden, card_number: card_number, expiration_month: expiration_month, expiration_year: expiration_year, cvv: cvv},
            datatype: 'json',
            beforeSend: function () {
                console.log('ORDER \/');
                console.log(orden);
                console.log('CARD \/');
                console.log(card);
            },
            success: function (data) {
//            $('body').waitMe('hide');
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
//                    console.log(result.outcome.user_message);
                    swal({
                        title: 'Bien!!',
                        text: result.outcome.user_message,
                        type: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Continua comprando',
                        allowOutsideClick: true,
                    }, (result) => {
                        if (result) {
                            window.location.href = data.redirect;
                        }
                    });
                }
                if (result.object === 'error') {
//                    console.log(result.user_message);
                    swal({
                        title: 'Error',
                        text: result.user_message,
                        type: 'error',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Continuar',
                        allowOutsideClick: true,
                    }, (result) => {
                        if (result) {
                            window.location.reload();
                        }
                    });
                }
//                console.log(data);
            },
            error: function (error) {
//                resultdiv(error)
//                console.log(error);
            }
        });
    }

}

//$("#modal-3").on("hidden.bs.modal", function () {
//    // put your default event here
//    Ladda.stopAll();
//});

//function culqi() {
//    if (Culqi.token) { // ¡Token creado exitosamente!
//        // Get the token ID:
//        var token = Culqi.token.id;
////        alert('Se ha creado un token:'.token);
////        console.log('Se ha creado un token:'.token);
//        run_waitMe();
//        $.ajax({
//            type: 'POST',
//            url: 'acceptcreditcard',
//            data: {token: token, order: ORDER, amount: $("#order-amount").val().replace(".", ""), email: $("#order-email").val()},
//            datatype: 'json',
//            beforeSend: function(){
////                console.log(ORDER);
//            },
//            success: function (data) {
//                $('body').waitMe('hide');
//                var charge = data.charge;
//                Ladda.stopAll();
//                var result = "";
//                if (charge.constructor == String) {
//                    result = JSON.parse(charge);
//                }
//                if (charge.constructor == Object) {
//                    result = JSON.parse(JSON.stringify(charge));
//                }
//                if (result.object === 'charge') {
////                    console.log(result.outcome.user_message);
//                    swal({
//                        title: 'Bien!!',
//                        text: result.outcome.user_message,
//                        type: 'success',
//                        confirmButtonColor: '#3085d6',
//                        cancelButtonColor: '#d33',
//                        confirmButtonText: 'Continua comprando',
//                        allowOutsideClick: true,
//                    }, (result) => {
//                        if (result) {
//                            window.location.href = data.redirect;
//                        }
//                    });
//                }
//                if (result.object === 'error') {
////                    console.log(result.user_message);
//                    swal({
//                        title: 'Error',
//                        text: result.user_message,
//                        type: 'error',
//                        confirmButtonColor: '#3085d6',
//                        cancelButtonColor: '#d33',
//                        confirmButtonText: 'Continuar',
//                        allowOutsideClick: true,
//                    }, (result) => {
//                        if (result) {
//                            window.location.reload();
//                        }
//                    });
//                }
////                console.log(data);
//            },
//            error: function (error) {
////                resultdiv(error)
////                console.log(error);
//            }
//        });
//
//    } else { // ¡Hubo algún problema!
//        // Mostramos JSON de objeto error en consola
////        console.log(Culqi.error);
//        alert(Culqi.error.mensaje);
//    }
//}
//function test() {
//    run_waitMe();
//    $.ajax({
//        type: 'POST',
//        url: 'acceptcreditcard',
////        data: {token: Culqi.token.id, installments: Culqi.token.metadata.installments},
//        data: {token: '12345678', installments: '123456789', form_order: $("#order-form-checkout").serialize()},
//        datatype: 'json',
//        success: function (data) {
//            $('body').waitMe('hide');
//            var result = '';
////                if (data.constructor == String) {
////                    result = JSON.parse(data);
////                }
////                if (data.constructor == Object) {
////                    result = JSON.parse(JSON.stringify(data));
////                }
////                if (result.object === 'charge') {
////                    resultdiv(result.outcome.user_message);
////                }
////                if (result.object === 'error') {
////                    resultdiv(result.user_message);
////                }
////            console.log(data);
//        },
//        error: function (error) {
////                resultdiv(error)  
////            console.log(error);
//        }
//    });
//}

//function run_waitMe() {
//    $('body').waitMe({
////        effect: 'orbit',
//        effect: 'win8_linear',
//        text: 'Procesando pago...',
//        bg: 'rgba(255,255,255,0.7)',
//        color: '#28d2c8'
//    });
//}

//function resultdiv(message) {
//    $('#response-panel').show();
//    $('#response').html(message);
//    $('body').waitMe('hide');
//}