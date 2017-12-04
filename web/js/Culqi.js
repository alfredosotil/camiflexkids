/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Culqi.codigoComercio = 'sk_test_5dBvsJJspPxmwzMF';
function configurarCulqi(order_id, amount) {
    Culqi.codigoComercio = 'pk_test_O7LKYtalUAXdbvwo';
    Culqi.configurar({
        nombre: 'Camiflexkids',
        orden: order_id,
        moneda: 'PEN',
        descripcion: 'Pago de orden Camiflexkids orden #' + order_id,
        monto: parseInt(amount)
    });
}

function culqi() {

    if (Culqi.token) {
        // Imprimir Token
        $(document).ajaxStart(function () {
            run_waitMe();
        });
        console.log(Culqi.token.id);
    } else {
        // Hubo un problema...
        // Mostramos JSON de objeto error en consola
        $('body').waitMe('hide');
        console.log(Culqi.error);
        alert(Culqi.error.mensaje);
    }

}

function run_waitMe() {
    $('body').waitMe({
        effect: 'orbit',
//        effect: 'win8_linear',
        text: 'Procesando pago...',
        bg: 'rgba(255,255,255,0.7)',
        color: '#28d2c8'
    });
}