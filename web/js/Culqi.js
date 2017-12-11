/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Culqi.codigoComercio = 'sk_test_5dBvsJJspPxmwzMF';
function configurarCulqi(amount) {
    Culqi.publicKey = 'pk_test_O7LKYtalUAXdbvwo';
    Culqi.settings({
        title: 'CAMIFLEXKIDS',
        currency: 'PEN',
        description: 'Pago de orden Camiflexkids',
        amount: parseInt(amount),
    });
}

function culqi() {
    if (Culqi.error) {
        // Mostramos JSON de objeto error en consola
        console.log(Culqi.error);
        alert(Culqi.error.mensaje);
    } else {
        run_waitMe();
        $.ajax({
            type: 'POST',
            url: 'acceptcreditcard',
            data: {token: Culqi.token.id, installments: Culqi.token.metadata.installments, order: $("#order-form-checkout").serialize(), amount: $("#order-amount").val().replace(".",""), email: $("#order-email").val()},
            datatype: 'json',
            success: function (data) {
                $('body').waitMe('hide');
                Ladda.stopAll();
                var result = "";
                if (data.constructor == String) {
                    result = JSON.parse(data);
                }
                if (data.constructor == Object) {
                    result = JSON.parse(JSON.stringify(data));
                }
                if (result.object === 'charge') {
                    console.log(result.outcome.user_message);
                }
                if (result.object === 'error') {
                    console.log(result.user_message);
                }
                console.log(data);
            },
            error: function (error) {
                resultdiv(error)  
                console.log(error);
            }
        });
    }

}
function test() {
    run_waitMe();
    $.ajax({
        type: 'POST',
        url: 'acceptcreditcard',
//        data: {token: Culqi.token.id, installments: Culqi.token.metadata.installments},
        data: {token: '12345678', installments: '123456789', form_order: $("#order-form-checkout").serialize()},
        datatype: 'json',
        success: function (data) {
            $('body').waitMe('hide');
            var result = '';
//                if (data.constructor == String) {
//                    result = JSON.parse(data);
//                }
//                if (data.constructor == Object) {
//                    result = JSON.parse(JSON.stringify(data));
//                }
//                if (result.object === 'charge') {
//                    resultdiv(result.outcome.user_message);
//                }
//                if (result.object === 'error') {
//                    resultdiv(result.user_message);
//                }
            console.log(data);
        },
        error: function (error) {
//                resultdiv(error)  
            console.log(error);
        }
    });
}

function run_waitMe() {
    $('body').waitMe({
//        effect: 'orbit',
        effect: 'win8_linear',
        text: 'Procesando pago...',
        bg: 'rgba(255,255,255,0.7)',
        color: '#28d2c8'
    });
}

function resultdiv(message) {
    $('#response-panel').show();
    $('#response').html(message);
    $('body').waitMe('hide');
}