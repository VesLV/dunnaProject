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


$(function () {
    $('.submit').click(function (e) {
        e.preventDefault();
        var base_url = window.location.origin;

        city = $("#city").val();
        city_area = $("#city_area").val();
        street = $("#street").val();
        street_number = $("#street_number").val();
        google_coordinates = $("#google_coordinates").val();
        property_type = $("#property_type").val();
        price = $("#price").val();
        area = $("#area").val();
        rooms = $("#rooms").val();
        floor = $("#floor").val();
        deal_type = $("#deal_type").val();
        description = $("#description").val();
        images = $("#img").val();

        $.post(base_url + '/admin/save', {
            city: city,
            city_area: city_area,
            street: street,
            street_number: street_number,
            google_coordinates: google_coordinates,
            property_type: property_type,
            price: price,
            area: area,
            rooms: rooms,
            floor: floor,
            deal_type: deal_type,
            description: description,
            images: images,
        });
    });
});
