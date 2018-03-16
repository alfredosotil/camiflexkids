/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    App.init(); // init core 
    $('.scroll-top').on('click', function(){
        console.log('scroll-top')
        $('html, body').animate({scrollTop : 0},800);
    });
    
    $('.validation-signin-action').on('click', function(e){
        var exist = $('#login-form').length;
        if(exist){
            e.preventDefault();
            $('#signin-form-button').click();
        }
        
    });
});