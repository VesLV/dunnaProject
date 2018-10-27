/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
const $ = require('jquery');
require('jquery-validation');
// console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

// JS is equivalent to the normal "bootstrap" package
// no need to set this to a variable, just require it
require('bootstrap');
require('bootstrap-slider');

global.$ = global.jQuery = $;


$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than {0}');

jQuery(function ($) {
    "use strict";
    $('#update_profile').validate({
        rules: {
            "image[]": {
                required: true,
                extension: "jpg,jpeg,png",
                filesize: 9999999999,
            }
        },
    });
});
