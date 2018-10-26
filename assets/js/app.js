/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// var $ = require('jquery');

// console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

const $ = require('jquery');
// JS is equivalent to the normal "bootstrap" package
// no need to set this to a variable, just require it
require('bootstrap');
require('bootstrap-slider');

global.$ = global.jQuery = $;


function getExtension(filename) {
    var parts = filename.split('.');
    return parts[parts.length - 1];
}

function isImage(filename) {
    var ext = getExtension(filename);
    switch (ext.toLowerCase()) {
        case 'jpg':
        case 'jpeg':
        case 'png':
            return true;
    }
    return false;
}

$(function() {
    $('form').submit(function() {
        function failValidation(msg) {
            alert(msg); // just an alert for now but you can spice this up later
            return false;
        }

        var images = $('#images');
        if (!isImage(images.val())) {
            return failValidation('Lohs esi?! Davaj normalu formatu izvelies! (jpg, jpeg, png)');
        }

        // success at this point
        // indicate success with alert for now
        alert('Valid file! Here is where you would return true to allow the form to submit normally.');
        return false; // prevent form submitting anyway - remove this in your environment
    });
});
