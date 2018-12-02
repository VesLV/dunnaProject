/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
// require('../css/app.css');
require('../scss/app.scss');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
const $ = require('jquery');
require('jquery-validation/dist/additional-methods');
require('jquery-validation/dist/additional-methods.min');
// console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

// JS is equivalent to the normal "bootstrap" package
// no need to set this to a variable, just require it
require('bootstrap');

//range slider
require('bootstrap-slider/dist/bootstrap-slider.min');
require('bootstrap-slider/dist/css/bootstrap-slider.min.css');

global.$ = global.jQuery = $;

$(function () {
    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'Tai bildei ir janomet svars tapat kā tev, ieliec mazāku par: {0}');

    $('#new_estate').validate({
        rules: {
            "images[]": {
                required: true,
                extension: 'jpeg|jpg',
                filesize: 24368,
            },

        },
        messages:{
            "images[]": {
                extension: "Samaini formātu aita! Pienemu tikai jpeg,jpg,png.",
            }
        },
    });
});
$(function () {
    $("#ex2").slider({
        formatter: function (value) {
            return 'Istabu skaits' + value;
        }
    });
});