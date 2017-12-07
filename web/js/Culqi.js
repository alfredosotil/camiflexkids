/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Culqi.codigoComercio = 'sk_test_5dBvsJJspPxmwzMF';
function configurarCulqi(amount) {
    Culqi.codigoComercio = 'pk_test_O7LKYtalUAXdbvwo';
    Culqi.configurar({
        order_id: '---',
        nombre: 'CAMIFLEXKIDS',
        moneda: 'PEN',
        descripcion: 'Pago de orden Camiflexkids',
        monto: parseInt(amount),
//        numero_tarjeta: '5111111111111118',
//        fecha: '062020',
//        cvv: '039',        
////        nombre: 'Alfredo',        
//        apellido: 'Sotil',        
//        email: 'alfredosotil@gmail.com',        
    });
}

function culqi() {
    console.log('ingreso metodo culqi');
    console.log(Culqi);
    if (Culqi.error) {
        // Mostramos JSON de objeto error en consola
        console.log(Culqi.error);

        alert(Culqi.error.mensaje);
    } else {
        run_waitMe();
//        $.post("acceptcreditcard", // Ruta hacia donde enviaremos el token vía POST
//                {token: Culqi.token.id, installments: Culqi.token.metadata.installments},
//                function (data) {
//                    if (!data.hasError) {
//                        alert('¡Todo en orden! Token enviado.');
//                        console.log(data);
//                    } else {
//                        alert('Error');
//                    }
//                    $('body').waitMe('hide');
//                });
        $.ajax({
            type: 'POST',
            url: 'acceptcreditcard',
            data: {token: Culqi.token.id, installments: Culqi.token.metadata.installments},
            datatype: 'json',
            success: function (data) {
                var result = "";
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

//    if (Culqi.token) {
//        // Imprimir Token
//        $(document).ajaxStart(function () {
//            run_waitMe();
//        });
//        $.post("/acceptcreditcard", // Ruta hacia donde enviaremos el token vía POST
//                {token: Culqi.token.id, culqi: Culqi},
//                function (data, status) {
//                    if (data == 'ok') {
//                        alert('¡Todo en orden! Token enviado.');
//                    } else {
//                        alert('Error');
//                    }
//                });
//// Imprimir Token
//        $.ajax({
//            type: 'POST',
//            url: 'acceptcreditcard',
//            data: {token: Culqi.token.id, culqi: Culqi},
//            datatype: 'json',
//            success: function (data) {
//                var result = "";
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
//                console.log(data);
//            },
//            error: function (error) {
////                resultdiv(error)  
//                console.log(error);
//            }
//        });
//        console.log(Culqi.token.id);
//    } else {
//        // Hubo un problema...
//        // Mostramos JSON de objeto error en consola
//        $('body').waitMe('hide');
//        console.log(Culqi.error);
//        alert(Culqi.error.mensaje);
//    }

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