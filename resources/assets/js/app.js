
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('jquery-touch-events');

window.Inputmask = require("inputmask/dist/inputmask/inputmask.numeric.extensions");
let im = new Inputmask("+7(999)999-99-99");
im.mask($('[name="phone"]'));

window.AOS = require('aos');
AOS.init({
    duration: 800
});

require('tilt.js');
const tilt = $('.js-tilt').tilt();


require('./formvalidation.js');


require('./jquery.bsPhotoGallery.js');




function message(text, mode) {

    let color = (mode) ? 'success' : 'danger';
    let message  = '<div class="alert alert-fixed alert-'+color+'"><strong><i class="fa fa-check-circle"></i> '+text+'</strong></div>';
    $("body").append(message);
    setTimeout(function(){
        $('.alert').slideDown('slow');
        setTimeout(function(){
            $('.alert').slideUp('slow').remove();
        }, 4000);
    }, 500);
}

let response = function (event) {
    event.preventDefault();
    let $form = $(event.target);
    let fv = $form.data('formValidation');
    $('.modal').modal('hide');
    $.post($form.data('handler'), $form.serialize(), function(result) {

        if(result.status === 'ok') {
            fv.resetForm();
            $form.trigger('reset');
            message(result.message, true);
        }
        else {

            fv.resetForm();
            message(result.message, false);
        }

        //console.log(result);
    },'json');
};

$(document).ready(function(){
    //Валидация формы обратного звонка
    $('#callForm').formValidation({

        fields: {
            person: {
                validators: {
                    notEmpty: {
                        message: 'Введите ваше имя'
                    },
                    stringLength: {
                        message: 'Имя не должно превышать 50 символов',
                        max: 50
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Введите телефон'
                    },
                    regexp: {
                        regexp: /^(\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9})?$/i,
                        message: 'Введите номер телефона'
                    }
                }
            }
        }
    }).on('success.form.fv', function(e) {
        response(e);
    });

    //Валидация формы отзывов
    $('#feedbackForm').formValidation({

        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Введите ваше имя'
                    },
                    stringLength: {
                        message: 'Имя не должно превышать 50 символов',
                        max: 50
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Введите телефон'
                    },
                    regexp: {
                        regexp: /^(\+?\d{1,4}?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,9})?$/i,
                        message: 'Введите номер телефона'
                    }
                }
            },
            comment: {
                validators: {
                    notEmpty: {
                        message: 'Введите ваш отзыв'
                    },
                    stringLength: {
                        message: 'Отзыв не должен превышать 2000 символов',
                        max: 2000
                    }
                }
            },
        }
    }).on('success.form.fv', function(e) {
        response(e);
    });


    let opts = {
        "classes" : "col-lg-3 col-md-4 col-sm-6 col-xs-12"
    };
    $('ul.gallery').bsPhotoGallery(opts);

});

